<html>
<head>
    <title>Rélévés de Notes - {{ $my_class->name.' '.$section->name.' - '.$ex->name.' ('.$year.')' }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/print_tabulation.css') }}" />
</head>
<body>
<div class="container">
    <div id="print" xmlns:margin-top="http://www.w3.org/1999/xhtml">
        {{--    Logo N School Details--}}
        <table width="100%">
            <tr>
                {{--<td><img src="{{ $s['logo'] }}" style="max-height : 100px;"></td>--}}

                <td >
                    <strong><span style="color: #1b0c80; font-size: 25px;">{{ strtoupper(Qs::getSetting('system_name')) }}</span></strong><br/>
                    {{-- <strong><span style="color: #1b0c80; font-size: 20px;">MINNA, NIGER STATE</span></strong><br/>--}}
                    <strong><span
                                style="color: #000; font-size: 15px;"><i>{{ ucwords($s['address']) }}</i></span></strong><br/>
                    <strong><span style="color: #000; font-size: 15px;"> RELEVES DE NOTES DE LA {{ strtoupper($my_class->name.' '.$section->name.' - '.$ex->name.' ('.$year.')' ) }}
                    </span></strong>
                </td>
            </tr>
        </table>
        <br/>

        {{--Background Logo--}}
        <div style="position: relative;  text-align: center; ">
            <img src="{{ $s['logo'] }}"
                 style="max-width: 500px; max-height:600px; margin-top: 60px; position:absolute ; opacity: 0.2; margin-left: auto;margin-right: auto; left: 0; right: 0;" />
        </div>

        {{-- Tabulation Begins --}}
        <table style="width:100%; border-collapse:collapse; border: 1px solid #000; margin: 10px auto;" border="1">
            <thead>
            <tr>
                <th>#</th>
                <th>NOM & PRENOMS DES ELEVES DE LA CLASSE</th>
                @foreach($subjects as $sub)
                    <th rowspan="2">{{ strtoupper($sub->slug ?: $sub->name) }}</th>
                @endforeach
                {{-- <th style="color: darkred">Total</th> --}}
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
                        $finalTotal = $exr->where('student_id', $s->user_id)->first()->total ?: '-';
                        $finalAverage = ($totalCoefficient > 0) ? number_format($totalMarks / $totalCoefficient, 2) : '-';
                    @endphp

                    {{-- <td style="color: darkred">{{ $finalTotal }}</td> --}}
                    <td style="color: darkblue">{{ $finalAverage }}</td>
                    <td style="color: darkgreen">{!! Mk::getSuffix($exr->where('student_id', $s->user_id)->first()->pos) ?: '-' !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    window.print();
</script>
</body>
</html>
