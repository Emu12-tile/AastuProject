@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('position.index') }}"> ወደ ኋላ</a>
                    </div>
                    <h5 class="hk-sec-title"> በአስተዳዳሪው የሚሞላ መረጃ </h5>
                    {{-- <p class="mb-25">Edit staff forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('position.update', $admin->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->position }}"
                                            name="position"class="form-control @error('position') is-invalid @enderror"
                                            id="inputname" placeholder=" የስራ መደብ">
                                        @error('position')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="job_category_id" class="col-sm-2 col-form-label">የስራ ክፍል</label>
                                    <div class="col-sm-10">
                                        <select class="form-control custom-select  mt-15" name="job_category_id">

                                            @foreach ($job_category as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ $col->id == $admin->job_category_id ? 'selected' : '' }}>
                                                    {{ $col->job_category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> የስራ ልምድ </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->experience }}"
                                            name="experience"class="form-control @error('experience') is-invalid @enderror"
                                            id="inputname" placeholder=" ">
                                        @error('experience')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="position_type_id" class="col-sm-2 col-form-label">የስራ መደብ ዓይነት</label>
                                    <div class="col-sm-10">
                                        <select class="form-control custom-select  mt-15" name="position_type_id">

                                            @foreach ($level as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ $col->id == $admin->position_type_id ? 'selected' : '' }}>
                                                    {{ $col->position_type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="edu_level" class="col-sm-2 col-form-label">የትምህርት ደረጃ</label>
                                    <div class="col-sm-10">
                                        <select class="form-control custom-select  mt-15" name="education_level_id">

                                            @foreach ($edu_level as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ $col->id == $admin->education_level_id ? 'selected' : '' }}>
                                                    {{ $col->education_level }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row mb-0 pull-right">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
