<?php

namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Mk;
use App\Helpers\Qs;
use App\Models\Exam;
use App\Models\Setting;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Repositories\ExamRepo;
use App\Repositories\MarkRepo;
use App\Repositories\MyClassRepo;
use App\Repositories\StudentRepo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Mark\MarkSelector;

class MarkController extends Controller
{
    protected $my_class, $exam, $student, $year, $user, $mark;

    public function __construct(MyClassRepo $my_class, ExamRepo $exam, StudentRepo $student, MarkRepo $mark)
    {
        $this->exam =  $exam;
        $this->mark =  $mark;
        $this->student =  $student;
        $this->my_class =  $my_class;
        $this->year =  Qs::getSetting('current_session');

       // $this->middleware('teamSAT', ['except' => ['show', 'year_selected', 'year_selector', 'print_view'] ]);
    }

    public function index()
    {
        $d['exams'] = $this->exam->getExam(['year' => $this->year]);
        $d['my_classes'] = $this->my_class->all();
        $d['sections'] = $this->my_class->getAllSections();
        $d['subjects'] = $this->my_class->getAllSubjects();
        $d['selected'] = false;

        return view('pages.support_team.marks.index', $d);
    }

    public function year_selector($student_id)
    {
       return $this->verifyStudentExamYear($student_id);
    }

    public function year_selected(Request $req, $student_id)
    {
        if(!$this->verifyStudentExamYear($student_id, $req->year)){
            return $this->noStudentRecord();
        }

        $student_id = Qs::hash($student_id);
        return redirect()->route('marks.show', [$student_id, $req->year]);
    }
    public function getSubjectCoefficient($sub_id)
    {
        // Retrieve the subject coefficient for the specified subject ID
        $subject = Subject::find($sub_id);

        if ($subject) {
            return $subject->coefficient;
        }

        return null; // Handle the case when the subject or coefficient is not available
    }
    public function show($student_id, $year)
    {
        /* Prevent Other Students/Parents from viewing Result of others */
        if (Auth::user()->id != $student_id && !Qs::userIsTeamSAT() && !Qs::userIsMyChild($student_id, Auth::user()->id)) {
            return redirect(route('dashboard'))->with('pop_error', __('msg.denied'));
        }

        if (Mk::examIsLocked() && !Qs::userIsTeamSA()) {
            Session::put('marks_url', route('marks.show', [Qs::hash($student_id), $year]));

            if (!$this->checkPinVerified($student_id)) {
                return redirect()->route('pins.enter', Qs::hash($student_id));
            }
        }

        if (!$this->verifyStudentExamYear($student_id, $year)) {
            return $this->noStudentRecord();
        }

        $wh = ['student_id' => $student_id, 'year' => $year];
        $d['marks'] = $this->exam->getMark($wh);
        $d['exam_records'] = $exr = $this->exam->getRecord($wh);
        $d['exams'] = $this->exam->getExam(['year' => $year]);
        $d['sr'] = $this->student->getRecord(['user_id' => $student_id])->first();
        $d['my_class'] = $mc = $this->my_class->getMC(['id' => $exr->first()->my_class_id])->first();
        $d['class_type'] = $this->my_class->findTypeByClass($mc->id);
        $d['subjects'] = $this->my_class->findSubjectByClass($mc->id);
        $d['year'] = $year;
        $d['student_id'] = $student_id;
        $d['skills'] = $this->exam->getSkillByClassType() ?: NULL;
        $ex = Exam::where('year', $year)->first();

        if (!$ex) {
            // Handle the case where the exam record for the year is not found
            return $this->noStudentRecord();
        }

        // Calculate the overall weighted average based on subject coefficients
        $totalMoyCoeff = 0;
        $totalCoeff = 0;

        foreach ($d['subjects'] as $sub) {
            $subjectCoeff = $sub->coefficient;
            $totalCoeff += $subjectCoeff; // Add to the total coefficient

            // Calculate the subject's total Moyenne Coefficient
            $totalMoyCoeffSubject = 0;

            foreach ($d['marks']->where('subject_id', $sub->id)->where('exam_id', $ex->id) as $mk) {
                $t1 = $mk->t1;
                $exm = $mk->exm;

                // Calculate the average and Moyenne Coefficient for each subject
                $moy = ($t1 + $exm) / 2;
                $moyCoeff = $moy * $subjectCoeff;

                // Add the subject's Moyenne Coefficient to the total
                $totalMoyCoeff += $moyCoeff;
                $totalMoyCoeffSubject += $moyCoeff;
            }

            // Pass the total Moyenne Coefficient for the subject to the view
            $sub->totalMoyCoeff = $totalMoyCoeffSubject;
        }

        // Calculate the overall final Moyenne based on total Moyenne Coefficient and total coefficient
        $finalMoyenne = ($totalCoeff > 0) ? ($totalMoyCoeff / $totalCoeff) : '-';

        // Pass the overall final Moyenne to the view
        $d['finalMoyenne'] = $finalMoyenne;
        $d['totalMoyCoeff'] =  $totalMoyCoeff;
        $d['totalCoeff'] = $totalCoeff;


        if ($mc) {
            $d['class_type'] = $this->my_class->findTypeByClass($mc->id);
            $d['subjects'] = $this->my_class->findSubjectByClass($mc->id);
        } else {
            // Handle the case where $mc is null (class not found)
            // You might want to return an error message or redirect to an error page.
            return redirect(route('dashboard'))->with('pop_error', __('msg.class_not_found'));
        }

        $d['year'] = $year;
        $d['student_id'] = $student_id;
        $d['skills'] = $this->exam->getSkillByClassType() ?: NULL;

        return view('pages.support_team.marks.show.index', $d);
    }





    public function print_view($student_id, $exam_id, $year)
    {
        /* Prevent Other Students/Parents from viewing Result of others */
        if(Auth::user()->id != $student_id && !Qs::userIsTeamSA() && !Qs::userIsMyChild($student_id, Auth::user()->id)){
            return redirect(route('dashboard'))->with('pop_error', __('msg.denied'));
        }

        if(Mk::examIsLocked() && !Qs::userIsTeamSA()){
            Session::put('marks_url', route('marks.show', [Qs::hash($student_id), $year]));

            if(!$this->checkPinVerified($student_id)){
                return redirect()->route('pins.enter', Qs::hash($student_id));
            }
        }

        if(!$this->verifyStudentExamYear($student_id, $year)){
            return $this->noStudentRecord();
        }

        $wh = ['student_id' => $student_id, 'exam_id' => $exam_id, 'year' => $year ];
        $d['marks'] = $mks = $this->exam->getMark($wh);
        $d['exr'] = $exr = $this->exam->getRecord($wh)->first();
        $d['my_class'] = $mc = $this->my_class->find($exr->my_class_id);
        $d['section_id'] = $exr->section_id;
        $d['ex'] = $exam = $this->exam->find($exam_id);
        $d['tex'] = 'tex'.$exam->term;
        $d['sr'] = $sr =$this->student->getRecord(['user_id' => $student_id])->first();
        $d['class_type'] = $this->my_class->findTypeByClass($mc->id);
        $d['subjects'] = $this->my_class->findSubjectByClass($mc->id);

        $d['ct'] = $ct = $d['class_type']->code;
        $d['year'] = $year;
        $d['student_id'] = $student_id;
        $d['exam_id'] = $exam_id;

        $d['skills'] = $this->exam->getSkillByClassType() ?: NULL;
        $d['s'] = Setting::all()->flatMap(function($s){
            return [$s->type => $s->description];
        });

        //$d['mark_type'] = Qs::getMarkType($ct);

            // Calculate the overall weighted average based on subject coefficients
            $totalMoyCoeff = 0;
            $totalCoeff = 0;

            foreach ($d['subjects'] as $sub) {
                foreach ($d['marks']->where('subject_id', $sub->id)->where('exam_id', $exam_id) as $mk) {
                    $subjectCoeff = $sub->coefficient;
                    $totalCoeff += $subjectCoeff;
                    $moy = ($mk->t1 + $mk->exm) / 2;
                    $moyCoeff = $moy * $subjectCoeff;
                    $totalMoyCoeff += $moyCoeff;
                }
            }

            $finalMoyenne = ($totalCoeff > 0) ? ($totalMoyCoeff / $totalCoeff) : '-';

            // Pass the calculated values to the view
            $d['finalMoyenne'] = $finalMoyenne;
            $d['totalMoyCoeff'] =  $totalMoyCoeff;
            $d['totalCoeff'] = $totalCoeff;


        return view('pages.support_team.marks.print.index', $d);
    }

    public function selector(MarkSelector $req)
    {
        $data = $req->only(['exam_id', 'my_class_id', 'section_id', 'subject_id']);
        $d2 = $req->only(['exam_id', 'my_class_id', 'section_id']);
        $d = $req->only(['my_class_id', 'section_id']);
        $d['session'] = $data['year'] = $d2['year'] = $this->year;

        $students = $this->student->getRecord($d)->get();
        if($students->count() < 1){
            return back()->with('pop_error', __('msg.rnf'));
        }

        foreach ($students as $s){
            $data['student_id'] = $d2['student_id'] = $s->user_id;
            $this->exam->createMark($data);
            $this->exam->createRecord($d2);
        }

        return redirect()->route('marks.manage', [$req->exam_id, $req->my_class_id, $req->section_id, $req->subject_id]);
    }

    public function manage($exam_id, $class_id, $section_id, $subject_id)
    {
        $d = ['exam_id' => $exam_id, 'my_class_id' => $class_id, 'section_id' => $section_id, 'subject_id' => $subject_id, 'year' => $this->year];

        $d['marks'] = $this->exam->getMark($d);
        if($d['marks']->count() < 1){
            return $this->noStudentRecord();
        }

        $d['m'] =  $d['marks']->first();
        $d['exams'] = $this->exam->all();
        $d['my_classes'] = $this->my_class->all();
        $d['sections'] = $this->my_class->getAllSections();
        $d['subjects'] = $this->my_class->getAllSubjects();
        if(Qs::userIsTeacher()){
            $d['subjects'] = $this->my_class->findSubjectByTeacher(Auth::user()->id)->where('my_class_id', $class_id);
        }
        $d['selected'] = true;
        $d['class_type'] = $this->my_class->findTypeByClass($class_id);

        return view('pages.support_team.marks.manage', $d);
    }

    public function update(Request $req, $exam_id, $class_id, $section_id, $subject_id)
{
    $p = ['exam_id' => $exam_id, 'my_class_id' => $class_id, 'section_id' => $section_id, 'subject_id' => $subject_id, 'year' => $this->year];

    // Retrieve the coefficient for the subject
    $subjectCoefficient = $this->my_class->getSubjectCoefficient($subject_id);

    $d = $d3 = $all_st_ids = [];

    $exam = $this->exam->find($exam_id);
    $marks = $this->exam->getMark($p);
    $class_type = $this->my_class->findTypeByClass($class_id);

    $mks = $req->all();

    /** Test, Exam, Grade **/
    foreach ($marks->sortBy('user.name') as $mk) {
        $all_st_ids[] = $mk->student_id;

        $d['t1'] = $t1 = $mks['t1_' . $mk->id];
        // $d['t2'] = $t2 = $mks['t2_' . $mk->id];
        $d['exm'] = $exm = $mks['exm_' . $mk->id];

        /** Calculate the average using the formula **/
        $average = ($t1  + ($exm * $subjectCoefficient)) / (1 + $subjectCoefficient);

        /** Update the database with the calculated average **/
        $d['tex' . $exam->term] = $average;

        if ($average > 100) {
            $d['tex' . $exam->term] = $d['t1'] = $d['t2'] = $d['t3'] = $d['t4'] = $d['exm'] = NULL;
        }

        $grade = $this->mark->getGrade($average, $class_type->id);
        $d['grade_id'] = $grade ? $grade->id : NULL;

        $this->exam->updateMark($mk->id, $d);
    }

    /** Sub Position Begin **/
    foreach ($marks->sortBy('user.name') as $mk) {
        $d2['sub_pos'] = $this->mark->getSubPos($mk->student_id, $exam, $class_id, $subject_id, $this->year);
        $this->exam->updateMark($mk->id, $d2);
    }
    /*Sub Position End*/

    /* Exam Record Update */
    unset($p['subject_id']);
    foreach ($all_st_ids as $st_id) {
        $p['student_id'] = $st_id;
        $d3['total'] = $this->mark->getExamTotalTerm($exam, $st_id, $class_id, $this->year);
        $d3['ave'] = $this->mark->getExamAvgTerm($exam, $st_id, $class_id, $section_id, $this->year);
        $d3['class_ave'] = $this->mark->getClassAvg($exam, $class_id, $this->year);
        $d3['pos'] = $this->mark->getPos($st_id, $exam, $class_id, $section_id, $this->year);
        $this->exam->updateRecord($p, $d3);
    }
    /*Exam Record End*/

    return Qs::jsonUpdateOk();
}


    public function batch_fix()
    {
        $d['exams'] = $this->exam->getExam(['year' => $this->year]);
        $d['my_classes'] = $this->my_class->all();
        $d['sections'] = $this->my_class->getAllSections();
        $d['selected'] = false;

        return view('pages.support_team.marks.batch_fix', $d);
    }

    public function batch_update(Request $req): \Illuminate\Http\JsonResponse
    {
        $exam_id = $req->exam_id;
        $class_id = $req->my_class_id;
        $section_id = $req->section_id;

        $w = ['exam_id' => $exam_id, 'my_class_id' => $class_id, 'section_id' => $section_id, 'year' => $this->year];

        $exam = $this->exam->find($exam_id);
        $exrs = $this->exam->getRecord($w);
        $marks = $this->exam->getMark($w);

        /** Marks Fix Begin **/

        $class_type = $this->my_class->findTypeByClass($class_id);
        $tex = 'tex'.$exam->term;

        foreach($marks as $mk){

            $total = $mk->$tex;
            $d['grade_id'] = $this->mark->getGrade($total, $class_type->id);

            /*      if($exam->term == 3){
                      $d['cum'] = $this->mark->getSubCumTotal($total, $mk->student_id, $mk->subject_id, $class_id, $this->year);
                      $d['cum_ave'] = $cav = $this->mark->getSubCumAvg($total, $mk->student_id, $mk->subject_id, $class_id, $this->year);
                      $grade = $this->mark->getGrade(round($mk->cum_ave), $class_type->id);
                  }*/

            $this->exam->updateMark($mk->id, $d);
        }

        /* Marks Fix End*/

        /** Exam Record Update  **/
        foreach($exrs as $exr){

            $st_id = $exr->student_id;

            $d3['total'] = $this->mark->getExamTotalTerm($exam, $st_id, $class_id, $this->year);
            $d3['ave'] = $this->mark->getExamAvgTerm($exam, $st_id, $class_id, $section_id, $this->year);
            $d3['class_ave'] = $this->mark->getClassAvg($exam, $class_id, $this->year);
            $d3['pos'] = $this->mark->getPos($st_id, $exam, $class_id, $section_id, $this->year);

            $this->exam->updateRecord(['id' => $exr->id], $d3);
        }

        /** END Exam Record Update END **/

        return Qs::jsonUpdateOk();
    }

    public function comment_update(Request $req, $exr_id)
    {
        $d = Qs::userIsTeamSA() ? $req->only(['t_comment', 'p_comment']) : $req->only(['t_comment']);

        $this->exam->updateRecord(['id' => $exr_id], $d);
        return Qs::jsonUpdateOk();
    }

    public function skills_update(Request $req, $skill, $exr_id)
    {
        $d = [];
        if($skill == 'AF' || $skill == 'PS'){
            $sk = strtolower($skill);
            $d[$skill] = implode(',', $req->$sk);
        }

        $this->exam->updateRecord(['id' => $exr_id], $d);
        return Qs::jsonUpdateOk();
    }

    public function bulk($class_id = NULL, $section_id = NULL)
    {
        $d['my_classes'] = $this->my_class->all();
        $d['selected'] = false;

        if($class_id && $section_id){
            $d['sections'] = $this->my_class->getAllSections()->where('my_class_id', $class_id);
            $d['students'] = $st = $this->student->getRecord(['my_class_id' => $class_id, 'section_id' => $section_id])->get()->sortBy('user.name');
            if($st->count() < 1){
                return redirect()->route('marks.bulk')->with('flash_danger', __('msg.srnf'));
            }
            $d['selected'] = true;
            $d['my_class_id'] = $class_id;
            $d['section_id'] = $section_id;
        }

        return view('pages.support_team.marks.bulk', $d);
    }

    public function bulk_select(Request $req)
    {
        return redirect()->route('marks.bulk', [$req->my_class_id, $req->section_id]);
    }

    public function tabulation($exam_id = NULL, $class_id = NULL, $section_id = NULL)
    {
        $d['my_classes'] = $this->my_class->all();
        $d['exams'] = $this->exam->getExam(['year' => $this->year]);
        $d['selected'] = FALSE;

        if ($class_id && $exam_id && $section_id) {
            $wh = ['my_class_id' => $class_id, 'section_id' => $section_id, 'exam_id' => $exam_id, 'year' => $this->year];

            $sub_ids = $this->mark->getSubjectIDs($wh);
            $st_ids = $this->mark->getStudentIDs($wh);

            if (count($sub_ids) < 1 || count($st_ids) < 1) {
                return Qs::goWithDanger('marks.tabulation', __('msg.srnf'));
            }

            $d['subjects'] = $this->my_class->getSubjectsByIDs($sub_ids);
            $d['students'] = $this->student->getRecordByUserIDs($st_ids)->get()->sortBy('user.name');
            $d['sections'] = $this->my_class->getAllSections();

            $d['selected'] = TRUE;
            $d['my_class_id'] = $class_id;
            $d['section_id'] = $section_id;
            $d['exam_id'] = $exam_id;
            $d['year'] = $this->year;
            $d['marks'] = $mks = $this->exam->getMark($wh);
            $d['exr'] = $exr = $this->exam->getRecord($wh);

            $d['my_class'] = $mc = $this->my_class->find($class_id);
            $d['section'] = $this->my_class->findSection($section_id);
            $d['ex'] = $exam = $this->exam->find($exam_id);
            $d['tex'] = 'tex' . $exam->term;

            // Calculate the overall weighted average based on subject coefficients
            $totalMoyCoeff = 0;
            $totalCoeff = 0;
            $moy = 0;

            foreach ($d['subjects'] as $sub) {
                foreach ($d['marks']->where('subject_id', $sub->id)->where('exam_id', $exam_id) as $mk) {
                    $subjectCoeff = $sub->coefficient;
                    $totalCoeff += $subjectCoeff;
                    $moy = ($mk->t1 + $mk->exm) / 2;
                    $moyCoeff = $moy * $subjectCoeff;
                    $totalMoyCoeff += $moyCoeff;
                }
            }

            $finalMoyenne = ($totalCoeff > 0) ? ($totalMoyCoeff / $totalCoeff) : '-';

            // Pass the calculated values to the view
            $d['finalMoyenne'] = $finalMoyenne;
            $d['moy'] = $moy;
        }

        return view('pages.support_team.marks.tabulation.index', $d);
    }


    public function print_tabulation($exam_id, $class_id, $section_id)
    {
        $wh = ['my_class_id' => $class_id, 'section_id' => $section_id, 'exam_id' => $exam_id, 'year' => $this->year];

        $sub_ids = $this->mark->getSubjectIDs($wh);
        $st_ids = $this->mark->getStudentIDs($wh);

        if(count($sub_ids) < 1 OR count($st_ids) < 1) {
            return Qs::goWithDanger('marks.tabulation', __('msg.srnf'));
        }

        $d['subjects'] = $this->my_class->getSubjectsByIDs($sub_ids);
        $d['students'] = $this->student->getRecordByUserIDs($st_ids)->get()->sortBy('user.name');

        $d['my_class_id'] = $class_id;
        $d['exam_id'] = $exam_id;
        $d['year'] = $this->year;
        $wh = ['exam_id' => $exam_id, 'my_class_id' => $class_id];
        $d['marks'] = $mks = $this->exam->getMark($wh);
        $d['exr'] = $exr = $this->exam->getRecord($wh);

        $d['my_class'] = $mc = $this->my_class->find($class_id);
        $d['section']  = $this->my_class->findSection($section_id);
        $d['ex'] = $exam = $this->exam->find($exam_id);
        $d['tex'] = 'tex'.$exam->term;
        $d['s'] = Setting::all()->flatMap(function($s){
            return [$s->type => $s->description];
        });
        //$d['class_type'] = $this->my_class->findTypeByClass($mc->id);
        //$d['ct'] = $ct = $d['class_type']->code;

        return view('pages.support_team.marks.tabulation.print', $d);
    }

    public function tabulation_select(Request $req)
    {
        return redirect()->route('marks.tabulation', [$req->exam_id, $req->my_class_id, $req->section_id]);
    }

    protected function verifyStudentExamYear($student_id, $year = null)
    {
        $years = $this->exam->getExamYears($student_id);
        $student_exists = $this->student->exists($student_id);

        if(!$year){
            if($student_exists && $years->count() > 0)
            {
                $d =['years' => $years, 'student_id' => Qs::hash($student_id)];

                return view('pages.support_team.marks.select_year', $d);
            }

            return $this->noStudentRecord();
        }

        return ($student_exists && $years->contains('year', $year)) ? true  : false;
    }

    protected function noStudentRecord()
    {
        return redirect()->route('dashboard')->with('flash_danger', __('msg.srnf'));
    }

    protected function checkPinVerified($st_id)
    {
        return Session::has('pin_verified') && Session::get('pin_verified') == $st_id;
    }

}
