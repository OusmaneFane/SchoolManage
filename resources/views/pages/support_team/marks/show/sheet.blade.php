<table class="table table-bordered table-responsive text-center">
    <thead>
    <tr>
        <th rowspan="2">S/N</th>
        <th rowspan="2">MATIERES</th>
        <th rowspan="2">DEVOIR1<br>(20)</th>
        <th rowspan="2">DEVOIR2<br>(20)</th>
        <th rowspan="2">EXAMENS<br>(60)</th>
        <th rowspan="2">TOTAL<br>(100)</th>
        <th rowspan="2">GRADE</th>
        <th rowspan="2">RANG <br> /MATIERE</th>
        <th rowspan="2">APPRECIATIONS</th>
    </tr>
    </thead>

    <tbody>
    @foreach($subjects as $sub)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $sub->name }}</td>
            @foreach($marks->where('subject_id', $sub->id)->where('exam_id', $ex->id) as $mk)
                <td>{{ ($mk->t1) ?: '-' }}</td>
                <td>{{ ($mk->t2) ?: '-' }}</td>
                <td>{{ ($mk->exm) ?: '-' }}</td>

                {{-- Calculate the total based on coefficients --}}
                @php
                    $total = ($mk->t1 + $mk->t2 + ($mk->exm * $sub->coefficient)) ?: '-';
                @endphp

                <td>{{ $total }}</td>


                {{-- Grade, Subject Position & Remarks --}}
                <td>{{ ($mk->grade) ? $mk->grade->name : '-' }}</td>
                <td>{!! ($mk->grade) ? Mk::getSuffix($mk->sub_pos) : '-' !!}</td>
                <td>{{ ($mk->grade) ? $mk->grade->remark : '-' }}</td>
            @endforeach
        </tr>
    @endforeach
    <tr>
        <td colspan="4"><strong>TOTAL SCORES OBTENUS: </strong> {{ $total }}</td>
        <td colspan="3"><strong>MOYENNE FINALE: </strong> {{ $overallAverage }}</td>
        <td colspan="2"><strong>MOYENNE DE LA CLASSE: </strong> {{ $exr->class_ave }}</td>
    </tr>
    </tbody>
</table>
