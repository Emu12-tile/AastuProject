@extends('app')
@section('content')
<div class="hk-pg-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
       <section class="hk-sec-wrapper mt-100">

                    <h1 class="hk-sec-title text-primary text-center">የመወዳደርያ ቅጽ</h1>
                    <p class="mb-25"> </p>

                    <div class="row">
                        <div class="col-sm">
                            {{-- @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif --}}

                            <form action="{{ route('multiforms.create.step.three.post') }}" id='add_form' method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን</label>
                                        <input type="date" value="{{ $form->UniversityHiringEra ?? '' }}{{old('UniversityHiringEra')}}" class="form-control @error('UniversityHiringEra') is-invalid @enderror" id="UniversityHiringEra" placeholder="በዩኒቨርስቲዉ የቅጥር ዘመን"  name="UniversityHiringEra">
                                        @error('UniversityHiringEra')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="servicPeriodAtUniversity">በዩኒቨርስቲዉ አገልግሎት ዘመን</label>
                                        <input class="form-control
                                                @error('servicPeriodAtUniversity') is-invalid @enderror" id="servicPeriodAtUniversity" placeholder="በዩኒቨርስቲዉ አገልግሎት ዘመን" value="{{ $form->servicPeriodAtUniversity ?? '' }}{{old('servicPeriodAtUniversity')}}" type="text" name="servicPeriodAtUniversity">
                                        @error('servicPeriodAtUniversity')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="servicPeriodAtAnotherPlace">በሌላ መስርያ ቤት አገልግሎት ዘመን</label>
                                        <input class="form-control
                                                @error('servicPeriodAtAnotherPlace') is-invalid @enderror" id="servicPeriodAtAnotherPlace" placeholder="በሌላ መስርያ ቤት አገልግሎት ዘመን" value="{{ $form->servicPeriodAtAnotherPlace ?? '' }}{{old('servicPeriodAtAnotherPlace')}}" type="text" name="servicPeriodAtAnotherPlace">
                                        @error('servicPeriodAtAnotherPlace')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="serviceBeforeDiplo"> አገልግሎት ከዲፕሎማ በፊት</label>
                                        <input class="form-control @error('serviceBeforeDiplo') is-invalid @enderror" id="serviceBeforeDiplo" placeholder="አገልግሎት ከዲፕሎማ በፊት" value="{{ $form->serviceBeforeDiplo ?? '' }}{{old('serviceBeforeDiplo')}}" type="text" name="serviceBeforeDiplo">
                                        @error('serviceBeforeDiplo')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="serviceAfterDiplo"> አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ</label>
                                        <input class="form-control mt-25
                                                @error('serviceAfterDiplo') is-invalid @enderror" id="serviceAfterDiplo" placeholder=" አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ" value="{{ $form->serviceAfterDiplo ?? '' }}{{old('serviceAfterDiplo')}}" type="text" name="serviceAfterDiplo">
                                        @error('serviceAfterDiplo')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="resultOfrecentPerform" class=""> የሁለት ተከታታይ የቅርብ ጊዜ የሥራ
                                            አፈጻፀም
                                            ውጤት</label>
                                        <input class="form-control mt-25
                                                @error('resultOfrecentPerform') is-invalid @enderror" id="resultOfrecentPerform" placeholder=" የሁለት ተከታታይ የቅርብ ጊዜ የሥራ አፈጻፀም" 
                                                value="{{ $form->resultOfrecentPerform ?? '' }}{{old('resultOfrecentPerform')}}"
                                                 type="text" name="resultOfrecentPerform">
                                        @error('resultOfrecentPerform')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት</label>
                                        <input class="form-control @error('DisciplineFlaw') is-invalid @enderror" id="DisciplineFlaw" placeholder=" የዲስፕሊን ጉድለት" value="{{ $form->DisciplineFlaw ?? '' }}{{old('DisciplineFlaw')}}" type="text" name="DisciplineFlaw">
                                        @error('DisciplineFlaw')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="MoreRoles"> ተጨማሪ የሥራ ድርሻ</label>
                                        <input class="form-control @error('MoreRoles') is-invalid @enderror" id="MoreRoles" placeholder="ተጨማሪ የሥራ ድርሻ" value="{{ $form->MoreRoles ?? '' }}{{old('MoreRoles')}}" type="text" name="MoreRoles">
                                        @error('MoreRoles')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                </div>
                                <h5 class="text-secondary text-center mt-3 mb-4" id="dynamicAddRemove">የ ስራ ልምድ</h5>
                                <div class="row">
                                    <div class="col-sm">

                                        <div class=" formgr row">

                                            <div class="col-md-3">

                                                <label for="startingDate">የጀመሩበት ዐመት</label>
                                                <input type="date" name="addMoreInputFields[0][startingDate]" value="{{ $form->startingDate ?? '' }}{{old('startingDate')}}" class="form-control  @error('startingDate') is-invalid @enderror" id="startingDate" placeholder=" ">
                                                @error('startingDate')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                            <div class="col-md-3">
                                                <label for="endingDate">ያበቃበት ቀን </label>
                                                <input type="date" min="startingDate" name="addMoreInputFields[0][endingDate]" value="{{ $form->endingDate ?? '' }}{{old('endingDate')}}" class="form-control  @error('endingDate') is-invalid @enderror" id="endingDate" placeholder=" endingDate">
                                                @error('endingDate')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label for="positionyouworked">የ ስራ መደብ </label>
                                                <input type="text" name="addMoreInputFields[0][positionyouworked]" value="{{ $form->positionyouworked ?? '' }}{{old('positionyouworked')}}" class="form-control  @error('positionyouworked') is-invalid @enderror" id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                @error('positionyouworked')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div>
                                                <a href="javascript:void(0)" class="btn btn-primary  addRow mt-40 " style=" border-radius:50%">+</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-navigation mt-3">
                                    {{-- <button type="button" class="previous btn btn-primary  float-left">&lt;
                                            Previous</button> --}}

                                    <a href="{{ route('multiforms.create.step.two') }}" class="btn btn-danger float-left">&lt;Previous</a>

                                    <button type="submit" class="next btn btn-success float-right">Submit</a> </button>
                                    {{-- <button type="submit" class="btn btn-success  float-right">Submit</button> --}}
                                </div>

                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @endsection
    @section('javascript')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>



    <script>

            var i = 0
            $(".addRow").click(function(e) {
                ++i;
                e.preventDefault();
                $(".form-navigation").before(`
             <div class="row" >
                                    <div class="col-sm">

                                            <div class=" formgr row">

                                                <div class="col-md-3">
<label for="startingDate"></label>

                                                    <input type="date" name="addMoreInputFields[${i}][startingDate]" value="{{ $form->startingDate ?? '' }}{{old('startingDate')}}"
                                                        class="form-control  @error('startingDate') is-invalid @enderror"
                                                        id="startingDate" placeholder=" ">
                                                    @error('startingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="col-md-3">
  <label for="endingDate"></label>
                                                    <input type="date" name="addMoreInputFields[${i}][endingDate]" value="{{ $form->endingDate ?? '' }}{{old('endingDate')}}}"
                                                        class="form-control  @error('endingDate') is-invalid @enderror"
                                                        id="endingDate" placeholder=" endingDate">
                                                    @error('endingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="positionyouworked"></label>

                                                    <input type="text" name="addMoreInputFields[${i}][positionyouworked]" value="{{ $form->positionyouworked ?? '' }}{{old('positionyouworked')}}"
                                                        class="form-control  @error('positionyouworked') is-invalid @enderror"
                                                        id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                    @error('positionyouworked')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div>

                                                    <a href="javascript:void(0)" class="btn btn-danger  removeRow mt-20 "
                                                        style=" border-radius:50%">-</a>
                                                </div>
                                            </div>

                                        </div>
                                </div>





                    `);
            });

            $(document).on('click', '.removeRow', function(e) {

                e.preventDefault();
                // $this.parents('')
                let row_item = $(this).parents().eq(3);
                $(row_item).remove();
            });

            //             headers: {
            //                 "X-CSRF-TOKEN": "{{csrf_token()}}"
            //             },
            //             // try modal

            //             success: function(data) {
            //                 if (data.success) {
            //                     swal("Thank You ", "Successfully Submitted", "success")
            //                     // alert('thank you')
            //                     //    $('#exampleModalCenter').modal('show ');
            //                     // location.href="/export_pdf"
            //                     location.href = "/"
            //                 }
            //             }
            //         })
            //     }

            // })


        // swal("success ", "Successfully Submitted", "success");
    </script>
    @endsection
