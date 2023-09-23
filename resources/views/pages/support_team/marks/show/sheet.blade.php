<table class="table table-bordered table-responsive text-center">
    <thead>
    <tr>
        <th rowspan="2">S/N</th>
        <th rowspan="2">MATIERES</th>
        <th rowspan="2">DEVOIR<br></th>
        {{-- <th rowspan="2">DEVOIR2<br></th> --}}
        <th rowspan="2">EXAMENS<br></th>
        <th rowspan="2">MOYENNE<br></th>
        <th rowspan="2">Coeff<br></th>
        <th rowspan="2">MOY x COEFF<br></th>
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
                {{-- <td>{{ ($mk->t2) ?: '-' }}</td> --}}
                <td>{{ ($mk->exm) ?: '-' }}</td>

                {{-- Calculate the total based on coefficients --}}
                @php
                    $moy = ($mk->t1  + $mk->exm )/2

                @endphp
                <td>{{ $moy }}</td>
                <td>{{ $sub->coefficient }}</td>
                <td>{{  $moy * $sub->coefficient }}</td>


                {{-- Grade, Subject Position & Remarks --}}
                <td>{{ ($mk->grade) ? $mk->grade->name : '-' }}</td>
                <td>{!! ($mk->grade) ? Mk::getSuffix($mk->sub_pos) : '-' !!}</td>
                <td>{{ ($mk->grade) ? $mk->grade->remark : '-' }}</td>
            @endforeach
        </tr>
    @endforeach
    <tr>

        <td colspan="5"><strong>TOTAL SCORES OBTENUS: </strong> {{ $totalMoyCoeff }}</td>
        <td colspan="1"><strong>TOTAL COEFF: </strong> {{ $totalCoeff }}</td>

        <td colspan="3"><strong>MOYENNE FINALE: </strong> {{ $finalMoyenne }}</td>
        <td colspan="2"><strong>MOYENNE DE LA CLASSE: </strong> {{ $exr->class_ave }}</td>
    </tr>
    </tbody>
</table>
