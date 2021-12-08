@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto pt-5 mt-5">
                <div class="d-block text-center mb-3">
                    <a href="index.html" class="text-center text-light-gray">
                        <!-- LOGO -->
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 40 40" width="60" height="60">
                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                <path
                                    d="M12.177,7.4c-0.23,0-0.416,0.186-0.417,0.416v1.17c-0.011,0.23,0.166,0.426,0.396,0.437s0.426-0.166,0.437-0.396 c0.001-0.014,0.001-0.027,0-0.041V7.819c0.001-0.23-0.185-0.418-0.415-0.419C12.178,7.4,12.177,7.4,12.177,7.4z M7.51,18.486 c-0.23,0-0.416,0.186-0.416,0.416l0,0v0.585c-0.011,0.23,0.166,0.426,0.396,0.437s0.426-0.166,0.437-0.396 c0.001-0.014,0.001-0.027,0-0.041V18.9C7.925,18.671,7.739,18.487,7.51,18.486z M20.15,4.04c-0.232-0.047-0.4-0.252-0.4-0.489V2 c0-1.105-0.895-2-2-2H5.25c-1.637,0-2.972,1.311-3,2.948c0,0.017,0,18.052,0,18.052c0,1.657,1.343,3,3,3h14.5c1.105,0,2-0.895,2-2 V6C21.75,5.049,21.081,4.23,20.15,4.04z M4.25,3c0-0.552,0.448-1,1-1h12c0.276,0,0.5,0.224,0.5,0.5v1c0,0.276-0.224,0.5-0.5,0.5 h-12C4.698,4,4.25,3.552,4.25,3z M9.427,16.569c0,0.423-0.141,0.833-0.4,1.167c0.259,0.334,0.4,0.744,0.4,1.167v0.583 c-0.003,1.057-0.86,1.912-1.917,1.914H6.344c-0.414,0-0.75-0.336-0.75-0.75v-5.831c0-0.414,0.336-0.75,0.75-0.75H7.51 c1.058,0.002,1.915,0.859,1.917,1.917V16.569z M14.093,12.486c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75v-1.167 c-0.011-0.23-0.207-0.407-0.437-0.396c-0.214,0.011-0.386,0.182-0.396,0.396v1.167c0,0.414-0.336,0.75-0.75,0.75 s-0.75-0.336-0.75-0.75V7.819c0.024-1.058,0.902-1.897,1.96-1.873c1.024,0.023,1.849,0.848,1.873,1.873V12.486z M18.01,19.9 c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75c-1.702-0.002-3.081-1.382-3.083-3.084v-1.163 c0.002-1.702,1.381-3.082,3.083-3.084c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75c-0.874,0.001-1.582,0.71-1.583,1.584 v1.166C16.429,19.192,17.137,19.899,18.01,19.9z M7.51,15.569c-0.23,0-0.416,0.186-0.416,0.416l0,0v0.585 C7.083,16.8,7.26,16.996,7.49,17.007s0.426-0.166,0.437-0.396c0.001-0.014,0.001-0.027,0-0.041v-0.583 C7.927,15.757,7.74,15.57,7.51,15.569z"
                                    stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </a>
                </div>
                <div>
                    {{-- @if (Session::has('status'))
						<div class="alert alert-danger text-center">
							{{ Session::get('status') }}
						</div>
					@endif --}}
                </div>
                <div class="alert alert-soft-success d-flex flex-column align-items-center" role="alert">
                    <i class="material-icons mb-3">check_circle</i>
                    <div class="text-body text-center">Lisensi valid, limit siswa:
                        {{ Session::get('users')['limit_users'] }}</strong><br>Lengkapi formulir dibawah untuk melanjutkan
                    </div>
                </div>
                <div class="card card-body">
                    </p>
                    <form class="mt-4" action="{{ route('registration.daftarsekolah') }}" novalidate method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="code" value="{{ Session::get('users')['code'] }}" class="form-control"
                            placeholder="Masukkan NPSN">
                        <div class="form-group">
                            <label>NPSN:</label>
                            <input type="text" name="npsm" class="form-control {{$errors->has('npsm') ? 'is-invalid' : ''}}" value="{{ old('npsm') }}" placeholder="Masukkan NPSN">
                            @if ($errors->has('npsm'))
								<span class="text-danger">{{ $errors->first('npsm') }}</span>
							@endif
                        </div>
                        <div class="form-group">
                            <label>Nama Sekolah:</label>
                            <input type="text" name="school_name" class="form-control {{$errors->has('school_name') ? 'is-invalid' : ''}}" value="{{ old('school_name') }}" placeholder="Masukkan Nama Sekolah">
                            @if ($errors->has('school_name'))
                            <span class="text-danger">{{ $errors->first('school_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Provinsi:</label>
                            <select name="province_id" id="province_id" class="form-control selectoption {{$errors->has('province_id') ? 'is-invalid' : ''}}" value="{{ old('province_id') }}">
                            @if ($errors->has('province_id'))
                            <span class="text-danger">{{ $errors->first('province_id') }}</span>
                            @endif 
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten / Kota:</label>
                            <select name="regency_id" id="regency_id" class="form-control selectoption {{$errors->has('regency_id') ? 'is-invalid' : ''}}" value="{{ old('regency_id') }}">
                                {{-- @foreach ($kabupaten as $key => $value)
						<option value="{{$value->idx}}">{{$value->name}}</option>
					@endforeach --}}
                        
                            </select>
                            @if ($errors->has('regency_id'))
                            <span class="text-danger">{{ $errors->first('regency_id') }}</span>
                            @endif 
                        </div>
                        <div class="form-group">
                            <label>Kecamatan:</label>
                            <select name="district_id" id="district_id" class="form-control selectoption {{$errors->has('district_id') ? 'is-invalid' : ''}}" value="{{ old('district_id') }}">
                                {{-- @foreach ($kecamatan as $key => $value)
						<option value="{{$value->idx}}">{{$value->name}}</option>
					@endforeach --}}
                            </select>
                            @if ($errors->has('district_id'))
                            <span class="text-danger">{{ $errors->first('district_id') }}</span>
                            @endif 
                        </div>
                        <div class="form-group">
                            <label>Kelurahan:</label>
                            <select name="village_id" id="village_id" class="form-control selectoption {{$errors->has('village_id') ? 'is-invalid' : ''}}" value="{{ old('village_id') }}">
                                {{-- @foreach ($kelurahan as $key => $value)
						<option value="{{$value->idx}}">{{$value->name}}</option>
					@endforeach --}}
                            </select>
                            @if ($errors->has('village_id'))
                            <span class="text-danger">{{ $errors->first('village_id') }}</span>
                            @endif 
                        </div>
                        <div class="form-group">
                            <label>Kode Pos:</label>
                            <input type="text" name="postal_code" class="form-control {{$errors->has('postal_code') ? 'is-invalid' : ''}}" value="{{ old('postal_code') }}" placeholder="Masukkan Kode Pos">
                            @if ($errors->has('postal_code'))
                            <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Alamat Sekolah</label>
                            <textarea class="form-control" name="address" cols="10" rows="5"></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>NIP Kepala Sekolah:</label>
                            <input type="text" name="headmaster_nip" class="form-control {{$errors->has('headmaster_nip') ? 'is-invalid' : ''}}" value="{{ old('headmaster_nip') }}" placeholder="Masukkan NIP">
                            @if ($errors->has('headmaster_nip'))
                            <span class="text-danger">{{ $errors->first('headmaster_nip') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nama Kepala Sekolah:</label>
                            <input type="text" name="headmaster_name" class="form-control {{$errors->has('headmaster_name') ? 'is-invalid' : ''}}" value="{{ old('headmaster_name') }}" placeholder="Masukkan Nama Kepala Sekolah">
                            @if ($errors->has('headmaster_name'))
                            <span class="text-danger">{{ $errors->first('headmaster_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="headmaster_email" class="form-control {{$errors->has('headmaster_email') ? 'is-invalid' : ''}}" value="{{ old('headmaster_email') }}" placeholder="Masukkan Email">
                            @if ($errors->has('headmaster_email'))
                            <span class="text-danger">{{ $errors->first('headmaster_email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password Akun PIJAR:</label>
                            <input type="password" name="headmaster_password" class="form-control {{$errors->has('headmaster_password') ? 'is-invalid' : ''}}" value="{{ old('headmaster_password') }}"
                                placeholder="Masukkan Password">
                                @if ($errors->has('headmaster_password'))
                            <span class="text-danger">{{ $errors->first('headmaster_password') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password:</label>
                            <input type="password" name="headmaster_password_confirmation" class="form-control {{$errors->has('headmaster_password_confirmation') ? 'is-invalid' : ''}}" value="{{ old('headmaster_password_confirmation') }}"
                                placeholder="Konfirmasi Password">
                                @if ($errors->has('headmaster_password_confirmation'))
                            <span class="text-danger">{{ $errors->first('headmaster_password_confirmation') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked="" id="remember">
                                <label class="custom-control-label" for="remember">
                                    <a href="#">Syarat dan Ketentuan</a>
                                </label>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary px-5">Daftarkan Sekolah</button>
                        </div>
                        {{-- {{env('APP_URL')}} --}}
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('scripts')
    <script>
        (() => {
            getProvinsi();
            const province_id = document.getElementById('province_id');
            const regency_id = document.getElementById('regency_id');
            const district_id = document.getElementById('district_id');
            province_id.onchange = (e) => {
                // console.log(e.target.value)
                getKabupaten()
                // alert('ok')
            }

            regency_id.onchange = (e) => {
                // alert('test')
                getKecamatan()
            }

            district_id.onchange = (e) => {
                // alert('test')
                getKelurahan()
            }

        })()
        async function getProvinsi() {
            try {
                const element   = document.getElementById('province_id');
                // const url       = '{{env('APP_URL')}}'
                const data      = await fetch(`{{env('APP_URL')}}/province`);
                const json      = await data.json();
                let tmp = '';
                json.forEach(data => {
                    tmp += `<option value="${data.idx}">${data.name}</option>`
                })
                element.innerHTML = tmp;
            } catch (error) {
                console.error(error)
            }
        }

        async function getKabupaten() {
            try {
                const province_id = document.getElementById('province_id');
                const element = document.getElementById('regency_id');
                const parent_id = province_id.value;
                const data = await fetch(`{{env('APP_URL')}}/getKabupaten/${parent_id}`)
                const json = await data.json();
                console.log(json);
                let tmp = '';
                json.forEach(data => {
                    tmp += `<option value="${data.idx}">${data.name}</option>`
                })
                element.innerHTML = tmp;
            } catch (error) {
                console.error(error)
            }
        }

        async function getKecamatan() {
            try {
                const regency_id = document.getElementById('regency_id');
                const element = document.getElementById('district_id');
                const parent_id = regency_id.value;
                const data = await fetch(`{{env('APP_URL')}}/getKecamatan/${parent_id}`)
                const json = await data.json();
                console.log(json);
                let tmp = '';
                json.forEach(data => {
                    tmp += `<option value="${data.idx}">${data.name}</option>`
                })
                element.innerHTML = tmp;
            } catch (error) {
                console.error(error)
            }
        }

        async function getKelurahan() {
            try {
                const district_id = document.getElementById('district_id');
                const element = document.getElementById('village_id');
                const parent_id = district_id.value;
                const data = await fetch(`{{env('APP_URL')}}/getKelurahan/${parent_id}`)
                const json = await data.json();
                console.log(json);
                let tmp = '';
                json.forEach(data => {
                    tmp += `<option value="${data.idx}">${data.name}</option>`
                })
                element.innerHTML = tmp;
            } catch (error) {
                console.error(error)
            }
        }

        // getKabupaten()
    </script>
@endpush
