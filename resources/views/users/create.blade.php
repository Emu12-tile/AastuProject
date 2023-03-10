@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">በአስተዳዳሪው የሚሞላ መረጃ</h5>
                    {{-- <p class="mb-25">Create Schedule forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ url('add-user') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <label for="firstName"> ስም</label>
                                            <input type="text" value="{{ $user->name ?? '' }}"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                placeholder="name" name="firstName">
                                            @error('firstName')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <label for="firstName"> ስም</label>
                                            <input type="text" value="{{ $user->name ?? '' }}"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                placeholder="name" name="firstName">
                                            @error('firstName')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <label for="firstName"> ስም</label>
                                            <input type="text" value="{{ $user->name ?? '' }}"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                placeholder="name" name="firstName">
                                            @error('firstName')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>
                                </div>
                                <div class="form-group row mb-0 pull-right">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" id="add_btn">Create</button>
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
