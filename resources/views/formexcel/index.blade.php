@extends('layouts.admin')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="container">

        <section class="hk-sec-wrapper mt-100">
            <div class="pull-right hk-sec-title">


            </div>
            <h5 class="hk-sec-title">ከቡድን መሪ በታች አጠቃላይ ውጤት </h5>

            <div class="row">
                <div class="col-xl">
                    <div class="table-wrap">

                        <table id="datable_3" class="table table-hover table-bordered w-100  pb-30">
                            <thead>
                                <tr>
                                    <th>ተ.ቁ</th>
                                    <th>ሙሉ ስም</th>
                                    <th>የስራ ክፍል</th>

                                    <th>የስራ መደብ</th>
                                    <th>ምርጫ</th>
                                    <th>ለትምህርት ዝግጅት የሚሰጥ ነጥብ</th>
                                    <th>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</th>
                                    <th>ለውጤት ተኮር ምዘና</th>

                                    <th>አጠቃላይ ውጤት(100%)</th>
                                   
                                    <th>Remark</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 0;
                                ?>
                                @foreach ($hrs as $i => $hr)
                            
                                    @if ($hr->form->position->position_type_id == 2)
                                    
                                        {{-- @if ($hr->status_hr == 1) --}}
                                            <tr>
                                                <td>{{ ++$j }}</td>
                                                <td>{{ $hr->form->full_name }}
                                                </td>
                                                <td>{{ $hr->category }}</td>
                                                <td>{{ $hr->position_name }}</td>
                                                <td>{{ $hr->choice }}</td>

                                                <td>{{ $hr->performance }}</td>
                                                <td>{{ $hr->experience }}</td>
                                                <td>{{ $hr->resultbased }}</td>

                                                <td>{{ $hr->performance + $hr->experience + $hr->resultbased }}
                                                </td>
                                                <td>{{ $hr->remark }}</td>





                                            </tr>
                                        {{-- @endif --}}
                                    @endif
                                @endforeach

                        </table>
                        {{-- {!! $hrs->links() !!} --}}
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"
        integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(".requestStat").on("click", function() {
            // var element = document.getElementById("element-to-print")
            var element = $(this).closest("tr").find("#element-to-print")[0]
            html2pdf(element, {
                margin: 9,
                filename: 'Application form.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 3,
                    logging: true,
                    dpi: 192,
                    letterRendering: true
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }
                // headerfooter: {
                //     height: '28mm',
                //     contents: {
                //         default: '<div class="html2pdf__page__header"></div>',
                //         first: '<div class="html2pdf__page__header"></div>',
                //         last: '<div class="html2pdf__page__header"></div>',
                //         after: '<div class="html2pdf__page__footer">wii</div>',
                //     }
                // }
            });
        });
    </script>
@endsection
