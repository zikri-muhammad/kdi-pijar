@extends('layouts.teacher')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <!-- page title      -->
        <div class="container-fluid page__heading-container">
            <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <h1 class="m-lg-0">Akun Saya</h1>
            </div>
        </div>
        <!-- content              -->
        <div class="container-fluid page__container">

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="border-bottom">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <img src="{{ asset('assets/images/256_luke-porter-261779-unsplash.jpg') }}"
                                        alt="About Adrian" width="150" class="rounded-circle">
                                </div>
                                <p> {{Session::get('users')['data']['name']}} | {{Session::get('users')['data']['email']}} </p>
                                <p> Short bio about this teacher is comming soon.</p>
                            </div>
                        </div>
                    </div>

                    <!-- <button type="button" class="btn btn-info btn-block mb-3">
                <i class="material-icons mr-1">cloud</i> E-Rapor
              </button> -->

                    <div class="card card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-lg mr-3">
                                <span class="bg-soft-success avatar-title rounded-circle text-center text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30"
                                        height="30">
                                        <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                            <path
                                                d="M11.979,17.125c4.052,0,6.875-5.1,6.875-9.67c-0.001-0.95-0.136-1.895-0.4-2.808l0,0c-0.828-2.841-3.522-4.723-6.475-4.522 C9.029-0.063,6.342,1.818,5.51,4.654v0.009c-0.26,0.911-0.395,1.853-0.4,2.8C5.105,12.035,7.929,17.125,11.979,17.125z M16.617,11.281c-0.048,0.125-0.185,0.19-0.312,0.148c-1.395-0.412-2.846-0.599-4.3-0.554c-1.469-0.045-2.936,0.144-4.346,0.559 c-0.127,0.043-0.265-0.022-0.312-0.147c-0.42-1.088-0.664-2.235-0.722-3.4C6.619,7.818,6.642,7.751,6.689,7.7 c0.047-0.049,0.112-0.077,0.18-0.077H17.09c0.138,0,0.25,0.112,0.25,0.25c0,0.004,0,0.008,0,0.012 C17.28,9.048,17.036,10.194,16.617,11.281z M21.632,18.127c0.123,0.065,0.274,0.018,0.339-0.105C21.99,17.986,22,17.946,22,17.906 v-1.531c0-0.138,0.112-0.25,0.25-0.25H23c0.414,0,0.75-0.336,0.75-0.75s-0.336-0.75-0.75-0.75h-0.75c-0.138,0-0.25-0.112-0.25-0.25 v-3c0-0.828-0.672-1.5-1.5-1.5s-1.5,0.672-1.5,1.5v3c0,0.138-0.112,0.25-0.25,0.25H18c-0.414,0-0.75,0.336-0.75,0.75 s0.336,0.75,0.75,0.75h0.75c0.138,0,0.25,0.112,0.25,0.25v0.2c0,0.092,0.051,0.177,0.132,0.22L21.632,18.127z M23.033,19.792 c-0.759-0.561-1.581-1.031-2.45-1.4c-0.119-0.052-0.258-0.005-0.32,0.109l-1.181,1.667l-2.367,3.338 c-0.066,0.121-0.022,0.273,0.099,0.339c0.037,0.02,0.078,0.031,0.12,0.031H23.5c0.276,0,0.5-0.224,0.5-0.5V21.77 C24.007,20.995,23.648,20.263,23.033,19.792z M11.079,21.4l-3.527-3.968c-0.117-0.132-0.294-0.193-0.467-0.16 c-2.206,0.358-4.3,1.221-6.118,2.52C0.351,20.262-0.007,20.995,0,21.77v1.605c0,0.276,0.224,0.5,0.5,0.5h7.326 c0.073,0,0.142-0.032,0.19-0.087l3.066-2.06C11.162,21.633,11.161,21.493,11.079,21.4z M18.31,17.837 c-0.029-0.07-0.088-0.123-0.161-0.145c-0.244-0.069-0.5-0.136-0.76-0.2c-0.091-0.022-0.187,0.009-0.249,0.08l-0.633,0.586 l-5.731,5.305c-0.09,0.105-0.078,0.263,0.027,0.353c0.045,0.039,0.103,0.06,0.162,0.06h3.191c0.092,0,0.176-0.05,0.22-0.13 l3.068-4.452l0.855-1.24C18.335,17.987,18.339,17.907,18.31,17.837z M8.489,8.826C8.185,9.108,8.168,9.583,8.45,9.887 c0.282,0.304,0.757,0.321,1.061,0.039l0,0c0.173-0.097,0.384-0.097,0.557,0c0.304,0.282,0.779,0.265,1.061-0.039 c0.282-0.304,0.265-0.779-0.039-1.061C10.339,8.192,9.24,8.192,8.489,8.826z M13.421,10.125c0.19,0.001,0.372-0.071,0.511-0.2 c0.173-0.097,0.384-0.097,0.557,0c0.304,0.282,0.779,0.265,1.061-0.039c0.282-0.304,0.265-0.779-0.039-1.061 c-0.751-0.633-1.849-0.633-2.6,0c-0.304,0.282-0.322,0.756-0.04,1.06C13.013,10.038,13.213,10.125,13.421,10.125L13.421,10.125z"
                                                stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div>
                                <a href="#" class="text-muted mb-2">NIP</a>
                                <h4 class="m-0 bold">{{Session::get('users')['data']['school_info']['npsn']}}</h4>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="card card-form">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-body">
                                <p><strong class="headings-color">Profile Settings</strong></p>
                                <p class="text-muted mb-0">Update your public profile with relevant and meaningful
                                    information.</p>
                            </div>
                            <div class="col-lg-8 card-form__body card-body">
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <div class="dz-clickable media align-items-center" data-toggle="dropzone"
                                        data-dropzone-url="http://" data-dropzone-clickable=".dz-clickable"
                                        data-dropzone-files="[&quot;assets/images/account-add-photo.svg&quot;]">
                                        <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                            <div class="avatar avatar-lg">
                                                <img src="{{ asset('assets/images/account-add-photo.svg') }}"
                                                    class="avatar-img rounded" alt="..." data-dz-thumbnail="">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <button class="btn btn-sm btn-primary dz-clickable">Choose photo</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="desc2">Alamat Email</label>
                                    <input type="email" class="form-control" placeholder="Alamat Email">
                                </div>
                                <div class="form-group">
                                    <label for="desc2">No. Handphone</label>
                                    <input type="text" class="form-control" placeholder="No. Handphone yang aktif">
                                </div>
                                <div class="form-group">
                                    <label for="desc2">Description</label>
                                    <textarea id="desc2" rows="4" class="form-control"
                                        placeholder="Description ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-form">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-body">
                                <p><strong class="headings-color">Update Your Password</strong></p>
                                <p class="text-muted mb-0">Change your password.</p>
                            </div>
                            <div class="col-lg-8 card-form__body card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="opass">Old Password</label>
                                            <input id="opass" type="password" class="form-control"
                                                placeholder="Old password">
                                        </div>
                                        <div class="form-group">
                                            <label for="npass">New Password</label>
                                            <input id="npass" type="password" class="form-control"
                                                placeholder="New password">
                                        </div>
                                        <div class="form-group">
                                            <label for="cpass">Confirm Password</label>
                                            <input id="cpass" type="password" class="form-control"
                                                placeholder="Confirm password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mb-5">
                        <a href="" class="btn btn-success">Save</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
