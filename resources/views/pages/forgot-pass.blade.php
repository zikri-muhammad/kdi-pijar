@extends('layouts.default')

@section('content')
	<div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto pt-5 mt-5">
				<div class="d-block text-center mb-3">
					<a href="index.html" class="text-center text-light-gray">
						<!-- LOGO -->
						<svg xmlns="http://www.w3.org/2000/svg"
							version="1.1"
							xmlns:xlink="http://www.w3.org/1999/xlink"
							viewBox="0 0 40 40"
							width="60"
							height="60">
							<g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
								<path d="M12.177,7.4c-0.23,0-0.416,0.186-0.417,0.416v1.17c-0.011,0.23,0.166,0.426,0.396,0.437s0.426-0.166,0.437-0.396 c0.001-0.014,0.001-0.027,0-0.041V7.819c0.001-0.23-0.185-0.418-0.415-0.419C12.178,7.4,12.177,7.4,12.177,7.4z M7.51,18.486 c-0.23,0-0.416,0.186-0.416,0.416l0,0v0.585c-0.011,0.23,0.166,0.426,0.396,0.437s0.426-0.166,0.437-0.396 c0.001-0.014,0.001-0.027,0-0.041V18.9C7.925,18.671,7.739,18.487,7.51,18.486z M20.15,4.04c-0.232-0.047-0.4-0.252-0.4-0.489V2 c0-1.105-0.895-2-2-2H5.25c-1.637,0-2.972,1.311-3,2.948c0,0.017,0,18.052,0,18.052c0,1.657,1.343,3,3,3h14.5c1.105,0,2-0.895,2-2 V6C21.75,5.049,21.081,4.23,20.15,4.04z M4.25,3c0-0.552,0.448-1,1-1h12c0.276,0,0.5,0.224,0.5,0.5v1c0,0.276-0.224,0.5-0.5,0.5 h-12C4.698,4,4.25,3.552,4.25,3z M9.427,16.569c0,0.423-0.141,0.833-0.4,1.167c0.259,0.334,0.4,0.744,0.4,1.167v0.583 c-0.003,1.057-0.86,1.912-1.917,1.914H6.344c-0.414,0-0.75-0.336-0.75-0.75v-5.831c0-0.414,0.336-0.75,0.75-0.75H7.51 c1.058,0.002,1.915,0.859,1.917,1.917V16.569z M14.093,12.486c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75v-1.167 c-0.011-0.23-0.207-0.407-0.437-0.396c-0.214,0.011-0.386,0.182-0.396,0.396v1.167c0,0.414-0.336,0.75-0.75,0.75 s-0.75-0.336-0.75-0.75V7.819c0.024-1.058,0.902-1.897,1.96-1.873c1.024,0.023,1.849,0.848,1.873,1.873V12.486z M18.01,19.9 c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75c-1.702-0.002-3.081-1.382-3.083-3.084v-1.163 c0.002-1.702,1.381-3.082,3.083-3.084c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75c-0.874,0.001-1.582,0.71-1.583,1.584 v1.166C16.429,19.192,17.137,19.899,18.01,19.9z M7.51,15.569c-0.23,0-0.416,0.186-0.416,0.416l0,0v0.585 C7.083,16.8,7.26,16.996,7.49,17.007s0.426-0.166,0.437-0.396c0.001-0.014,0.001-0.027,0-0.041v-0.583 C7.927,15.757,7.74,15.57,7.51,15.569z"
									stroke="none"
									fill="currentColor"
									stroke-width="0"
									stroke-linecap="round"
									stroke-linejoin="round">
								</path>
							</g>
						</svg>
					</a>
				</div>
				<h2 class="mb-4 text-center">SMK Negri 1 Cibinong</h2>
				<h5 class="mb-4 text-center">Masukkan Email Kamu<br> untuk mendapatkan password</h5>
				<div class="card card-body">
					<form class="mt-4" action="/registration/form" novalidate>
						<div class="form-group">
							<label>Email:</label>
							<input type="email" class="form-control" placeholder="Masukkan Email yang terdaftar">
						</div>
            <div class="form-group text-center">
							<button type="submit" class="btn btn-primary px-5">Masuk</button>
						</div>
						<div class="form-group text-center mb-0">
							<small>
								Sudah punya akun? <a class="text-underline" href="/signin">Login sekarang!</a>
							</small>
						</div>
					</form>		
				</div>
			</div>
		</div>
	</div>
  

@stop