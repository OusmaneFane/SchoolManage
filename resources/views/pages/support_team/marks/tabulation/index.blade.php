@extends('layouts.master')
@section('page_title', 'Tabulation Sheet')
@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title"><i class="icon-books mr-2"></i> Tabulation Sheet</h5>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <form method="post" action="{{ route('marks.tabulation_select') }}">
            @csrf
            <div class="row">
                <!-- Your form fields here -->
            </div>
        </form>
    </div>
</div>

{{-- If Selection Has Been Made --}}
@if($selected)
    <div class="card">
        <div class="card-header">
            <h6 class="card-title font-weight-bold">Feuille de Tabulation pour la {{ $my_class->name.' '.$section->name.' - '.$ex->name.' ('.$year.')' }}</h6>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>NOM_DES_ELEVES_DANS_LA_CLASSE</th>
                    @foreach($subjects as $sub)
                        <th title="{{ $sub->name }}" rowspan="2">{{ strtoupper($sub->slug ?: $sub->name) }}</th>
                    @endforeach
                    <th style="color: darkblue">MOYENNE</th>
                    <th style="color: darkgreen">RANG</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $s)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td style="text-align: center">{{ $s->user->name }}</td>
                        @php
                            $totalMarks = 0;
                            $totalCoefficient = 0;
                        @endphp
                        @foreach($subjects as $sub)
                            @php
                                $mark = $marks->where('student_id', $s->user_id)->where('subject_id', $sub->id)->first()->$tex ?? '-';
                                $coefficient = $sub->coefficient;
                                $weightedMark = is_numeric($mark) ? ($mark * $coefficient) : 0;
                                $totalMarks += $weightedMark;
                                $totalCoefficient += $coefficient;
                            @endphp
                            <td>{{ $mark ?: '-' }}</td>
                        @endforeach

                        @php
                            $finalMoyenne = ($totalCoefficient > 0) ? number_format($totalMarks / $totalCoefficient, 2) : '-';
                        @endphp

                        <td style="color: darkblue">{{ $finalMoyenne }}</td>
                        <td style="color: darkgreen">{!! Mk::getSuffix($exr->where('student_id', $s->user_id)->first()->pos) ?: '-' !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{-- Print Button --}}
            <div class="text-center mt-4">
                <a target="_blank" href="{{  route('marks.print_tabulation', [$exam_id, $my_class_id, $section_id]) }}" class="btn btn-danger btn-lg"><i class="icon-printer mr-2"></i> Print Tabulation Sheet</a>
            </div>
        </div>
    </div>
@endif
@endsection
