@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto pt-5 mt-5">
                <div class="d-block text-center mb-3">
                    <a href="{{ URL::to('/') }}" class="text-center text-light-gray">
                        <!-- LOGO -->
                        <img src="{{ asset('assets/images/logo-full.png') }}" alt="" style="width: 120px;">
                    </a>
                </div>
                {{-- <h2 class="mb-4 text-center">Pijar</h2> --}}
                <h5 class="mb-4 text-center">Pilih Sekolah</h5>
                <div>
                    {{-- @if (Session::has('status'))
                        @if (Session::has('status') == 'Registration success!')
                            <div class="alert alert-success text-center">
                                {{ Session::get('status') }}
                            </div>
                        @else
                            <div class="alert alert-danger text-center">
                                {{ Session::get('status') }}
                            </div>
                        @endif
                    @endif --}}
                </div>
                <div class="card card-body">
                    <form class="mt-4" action="{{ route('login') }}" novalidate method="POST">
                        @csrf

                        {{-- <div class="form-group"> --}}
                        {{-- <label>Email:</label> --}}
                        <input type="hidden" name="email" value="{{ $login['email'] }}"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                            placeholder="Masukkan Email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        {{-- </div> --}}
                        {{-- <div class="form-group"> --}}
                        {{-- <label>Password:</label> --}}
                        <input type="hidden" name="password" value="{{ $login['password'] }}"
                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                            placeholder="Masukkan Password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        {{-- </div> --}}
                        <div class="form-group">
                            <label>Pilih Sekolah:</label>
                            <select name="sekolah" id="sekolah"
                                class="form-control {{ $errors->has('sekolah') ? 'is-invalid' : '' }}"
                                value="{{ old('sekolah') }}" data-toggle="select">
                                @foreach ($sekolah as $key => $value)
                                    <option value="{{ $value['client']['domain'] }}">{{ $value['client']['school_name'] }}
                                    </option>
                                @endforeach
                                @if ($errors->has('sekolah'))
                                    <span class="text-danger">{{ $errors->first('sekolah') }}</span>
                                @endif
                            </select>
                        </div>




                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
