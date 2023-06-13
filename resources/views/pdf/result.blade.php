<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        @font-face {
        font-family: nyala;
        font-style: normal;
        font-weight: 400;
        src: url('{{storage_path('fonts/nyala.ttf') }}') format('truetype');
        }
        body {
        font-family: nyala;
        font-size: 14px;
        }

        .table table-hover table-bordered w-100 pb-30 {
        border-collapse: collapse;
        width: 100%;
        padding-bottom: 30px;
        border-spacing: 0;
        }

        .table th, .table td {
        border: 1px solid black;
        padding: 8px;
        }
     </style>
</head>
<body>
    
<div class="modal fade" tabindex="-1"
role="dialog" aria-labelledby="exampleModalLongTitle"
aria-hidden="true">
<div class=" " role="document">
    <div class="modal-content">
        <div class="modal-header">
            <div id="element-to-print">

                <p style="font-size: 20px;">
                    የተወዳዳሪው 1ኛ ምርጫ ከደረጃ በታች አጠቃላይ ውጤት
                </p>
                <div >
                    <table
                        class="table table-hover table-bordered w-100  pb-30"
                        style="  border-collapse: collapse; !important"
                        >
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ሙሉ ስም</td>
                                <td>{{ $hr->form->full_name }}</td>
                            </tr>

                            <tr>
                                <td> ያለዎት የትምርት ዝግጅት</td>
                                <td>
                                    @foreach ($hr->form->education as $i => $fo)
                                        ({{ $fo->edu_level->education_level }}፣
                                        {{ $fo->education_type->education_type }})
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ያለዎት የስራ ልምድ
                                </td>

                                <td>
                                    @foreach ($hr->form->experiences as $i => $fo)
                                        <p> ከ{{ Carbon::parse($fo->startingDate)->day }}/{{ Carbon::parse($fo->startingDate)->month }}/{{ Carbon::parse($fo->startingDate)->year }}
                                            እስከ
                                            {{ Carbon::parse($fo->endingDate)->day }}/{{ Carbon::parse($fo->endingDate)->month }}/{{ Carbon::parse($fo->endingDate)->year }}
                                            በ
                                            {{ $fo->positionyouworked }},
                                        </p>

                                        {{-- <td>{{ $fo->positionyouworked }} --}}
                                    @endforeach
                                </td>
                            </tr>

                            <tr>
                                <td>የሚወዳደሩበት የሥራ መደብ</td>
                                <td>{{ $hr->form->position->position }}
                                </td>
                            </tr>

                            <tr>
                                <td>ለትምህርት ዝግጅት የሚሰጥ ነጥብ(40%)</td>
                                <td>{{ $hr->performance }}</td>
                            </tr>
                            <tr>
                                <td>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ(30%)
                                </td>
                                <td> {{ $hr->experience }}</td>
                            </tr>
                            <tr>
                                <td>ለውጤት ተኮር ምዘና(30%)</td>
                                <td>{{ $hr->resultbased }}</td>
                            </tr>
                            <tr>
                                <td>Remark</td>
                                <td>{{ $hr->remark }}</td>
                            </tr>

                        </tbody>
                        <tfoot style="font-size: 20px;">
                            <tr>
                                <td>አጠቃላይ ውጤት(100%)</td>
                                <td>{{ $hr->performance + $hr->experience + $hr->resultbased }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <p>ከኮሚቴ ውጤት ሰጪ:{{ $hr->user->name }} </p>


                </div>


                <div class="footerpdf">
                    <p>This pdf generated by
                        {{ Auth::user()->name }} ©
                        <?php
                        $mytime = Carbon\Carbon::now()->tz('EAT');
                        echo $mytime->toDateTimeString();
                        ?>

                </div>
                <p class="mt-5 text-center">@copyright <a
                        href="#" class="text-dark"
                        target="_blank">AASTU(YEE)</a> © 2023</p>
                </p>
            </div>


        </div>
    </div>

</div>

</div>
</body>
</html>
