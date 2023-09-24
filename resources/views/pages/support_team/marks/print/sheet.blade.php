{{--<!--NAME , CLASS AND OTHER INFO -->--}}
<table style="width:100%; border-collapse:collapse; ">
    <tbody>
    <tr>
        <td><strong>Nom & Prénom(s):</strong> {{ strtoupper($sr->user->name) }}</td>
        <td><strong>MATRICULE:</strong> {{ $sr->adm_no }}</td>
        <td><strong>Adresse:</strong> {{ strtoupper($sr->house) }}</td>
        <td><strong>CLASSE:</strong> {{ strtoupper($my_class->name) }}</td>
    </tr>
    <tr>
        <td><strong>RELEVES DE NOTES DU </strong> {!! strtoupper(Mk::getSuffix($ex->term)) !!} TERM </td>
        <td><strong>ANNEE ACADEMIQUE:</strong> {{ $ex->year }}</td>
        <td><strong>AGE:</strong> {{ $sr->age ?: ($sr->user->dob ? date_diff(date_create($sr->user->dob), date_create('now'))->y : '-') }}</td>
    </tr>

    </tbody>
</table>


{{--Exam Table--}}
<table style="width:100%; border-collapse:collapse; border: 1px solid #000; margin: 10px auto;" border="1">
    <thead>
    <tr>
        <th rowspan="2">MATIERES</th>
        <th rowspan="2">DEVOIR</th>
        <th rowspan="2">EXAMEN<br></th>
        <th rowspan="2">MOYENNE<br></th>
        <th rowspan="2">Coeff<br></th>
        <th rowspan="2">NOTES FINALES <br> </th>
        <th rowspan="2">GRADES</th>
        <th rowspan="2">CLASSEMENT <br> /MATIERE</th>


      {{--  @if($ex->term == 3) --}}{{-- 3rd Term --}}{{--
        <th rowspan="2">FINAL MARKS <br>(100%) 3<sup>RD</sup> TERM</th>
        <th rowspan="2">1<sup>ST</sup> <br> TERM</th>
        <th rowspan="2">2<sup>ND</sup> <br> TERM</th>
        <th rowspan="2">CUM (300%) <br> 1<sup>ST</sup> + 2<sup>ND</sup> + 3<sup>RD</sup></th>
        <th rowspan="2">CUM AVE</th>
        <th rowspan="2">GRADE</th>
        @endif--}}

        <th rowspan="2">APPRECIATIONS</th>
    </tr>
    {{-- <tr> --}}
        {{-- <th>DEVOIR</th> --}}
        {{-- <th>DEV2</th>
        <th>MOY DEV</th> --}}
    {{-- </tr> --}}
    </thead>
    <tbody>


        @foreach($subjects as $sub)
            <tr>
                <td style="font-weight: bold">{{ $sub->name }}</td>
                @php
                $subjectCoeff = $sub->coefficient;

               @endphp
                @foreach($marks->where('subject_id', $sub->id)->where('exam_id', $ex->id) as $mk)
                    <td>{{ $mk->t1 ?: '-' }}</td>
                    <td>{{ $mk->exm ?: '-' }}</td>
                    @php
                    $moy = ($mk->t1 + $mk->exm) / 2;
                    $moyCoeff = $moy * $subjectCoeff;
                    // $totalMoyCoeff += $moyCoeff; // Add to the total Moyenne Coefficient

                    @endphp
                    <td>{{ $moy ?: '-' }}</td>
                    <td>{{ $subjectCoeff ?: '-' }}</td>
                    <td>{{ $moyCoeff ?: '-' }}</td>
                    <td>{{ $mk->grade ? $mk->grade->name : '-' }}</td>
                    <td>{!! ($mk->grade) ? Mk::getSuffix($mk->sub_pos) : '-' !!}</td>
                    <td>{{ $mk->grade ? $mk->grade->remark : '-' }}</td>
                @endforeach
            </tr>
            @endforeach
        <tr>
            <td colspan="4"><strong>TOTAL SCORES OBTENUS: </strong> {{ $totalMoyCoeff }}</td>
            <td colspan="1"><strong>TOTAL COEFF: </strong> {{ $totalCoeff }}</td>
            <td colspan="2"><strong>MOYENNE: </strong> {{ $finalMoyenne }}</td>
            <td colspan="1"><strong>RANG: </strong>{{ $exr->where('student_id', $sr->user_id)->first()->pos }}</td>
            <td colspan="3"><strong>MOYENNE DE LA CLASSE: </strong> {{ $exr->class_ave }}</td>
        </tr>
        </tbody>

</table>
