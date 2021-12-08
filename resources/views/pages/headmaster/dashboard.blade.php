@extends('layouts.headmaster')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <!-- page title      -->
        <div class="container-fluid page__heading-container">
            <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <h1 class="m-lg-0">Dashboard {{ $data['school_info']['school_name'] }}</h1>
            </div>
        </div>
        <!-- content              -->
        <div class="container-fluid page__container">
            <div class="alert alert-soft-warning d-flex align-items-center card-margin p-2" role="alert">
                <i class="material-icons mr-3">error_outline</i>
                <div class="text-body">Selamat Datang di PIJAR! Mohon Daftar Siswa dan Guru Anda pada Menu Master Data</div>
                <a href="" class="btn btn-warning ml-auto">Lihat</a>
            </div>

            <h4>Siswa Terdaftar</h4>
            <div class="row card-group-row" style="margin-bottom: 20px;">
                <div class="col-lg-3 col-md-6 card-group-row__col">
                    <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                        <div class="flex">
                            <div class="card-header__title text-muted mb-2">Kelas X</div>
                            <div class="text-amount">&dollar;12,920</div>
                        </div>

                        <div class="avatar">
                            <span class="bg-soft-success avatar-title rounded-circle text-center text-success">
                                <i class="material-icons icon-40pt">gps_fixed</i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 card-group-row__col">
                    <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                        <div class="flex">
                            <div class="card-header__title text-muted mb-2">Kelas XI</div>
                            <div class="text-amount">&dollar;53,642</div>
                        </div>
                        <div class="avatar">
                            <span class="bg-soft-primary avatar-title rounded-circle text-center text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30" height="30">
                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                        <path
                                            d="M16,5.75c0.414,0,0.75-0.336,0.75-0.75V3.5c0-0.414-0.336-0.75-0.75-0.75s-0.75,0.336-0.75,0.75V5 C15.25,5.414,15.586,5.75,16,5.75z M21,3c0-1.657-1.343-3-3-3H6C4.343,0,3,1.343,3,3v18c0,1.657,1.343,3,3,3h12 c1.657,0,3-1.343,3-3V3z M12,14c0.552,0,1,0.448,1,1s-0.448,1-1,1s-1-0.448-1-1S11.448,14,12,14z M11,10.5c0-0.552,0.448-1,1-1 s1,0.448,1,1s-0.448,1-1,1S11,11.052,11,10.5z M16.5,18.75c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75H11 c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75H16.5z M16.5,16c-0.552,0-1-0.448-1-1s0.448-1,1-1c0.552,0,1,0.448,1,1 S17.052,16,16.5,16z M16.5,11.5c-0.552,0-1-0.448-1-1s0.448-1,1-1c0.552,0,1,0.448,1,1S17.052,11.5,16.5,11.5z M7.5,16 c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S8.052,16,7.5,16z M8.5,19.5c0,0.552-0.448,1-1,1s-1-0.448-1-1s0.448-1,1-1 S8.5,18.948,8.5,19.5z M7.5,11.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S8.052,11.5,7.5,11.5z M6,2h12c0.552,0,1,0.448,1,1 v3.25c0,0.138-0.112,0.25-0.25,0.25H5.25C5.112,6.5,5,6.388,5,6.25V3C5,2.448,5.448,2,6,2z"
                                            stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 card-group-row__col">
                    <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                        <div class="flex">
                            <div class="card-header__title text-muted mb-2">Kelas XII</div>
                            <div class="text-amount">182</div>
                        </div>
                        <div class="avatar">
                            <span class="bg-soft-warning avatar-title rounded-circle text-center text-warning">
                                <i class="material-icons text-warning icon-40pt">perm_identity</i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 card-group-row__col">
                    <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                        <div class="flex">
                            <div class="card-header__title text-muted mb-2">Tidak Aktif</div>
                            <div class="text-amount">182</div>
                        </div>
                        <div class="avatar">
                            <span class="bg-soft-warning avatar-title rounded-circle text-center text-warning">
                                <i class="material-icons text-warning icon-40pt">perm_identity</i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <h4>Guru Terdaftar</h4>
            <div class="row card-group-row">
                <div class="col-lg-3 col-md-6 card-group-row__col">
                    <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                        <div class="flex">
                            <div class="card-header__title text-muted mb-2">Aktif</div>
                            <div class="text-amount">&dollar;12,920</div>
                        </div>

                        <div class="avatar">
                            <span class="bg-soft-success avatar-title rounded-circle text-center text-success">
                                <i class="material-icons icon-40pt">gps_fixed</i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 card-group-row__col">
                    <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                        <div class="flex">
                            <div class="card-header__title text-muted mb-2">Tidak Aktif</div>
                            <div class="text-amount">&dollar;53,642</div>
                        </div>
                        <div class="avatar">
                            <span class="bg-soft-primary avatar-title rounded-circle text-center text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30" height="30">
                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                        <path
                                            d="M16,5.75c0.414,0,0.75-0.336,0.75-0.75V3.5c0-0.414-0.336-0.75-0.75-0.75s-0.75,0.336-0.75,0.75V5 C15.25,5.414,15.586,5.75,16,5.75z M21,3c0-1.657-1.343-3-3-3H6C4.343,0,3,1.343,3,3v18c0,1.657,1.343,3,3,3h12 c1.657,0,3-1.343,3-3V3z M12,14c0.552,0,1,0.448,1,1s-0.448,1-1,1s-1-0.448-1-1S11.448,14,12,14z M11,10.5c0-0.552,0.448-1,1-1 s1,0.448,1,1s-0.448,1-1,1S11,11.052,11,10.5z M16.5,18.75c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75H11 c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75H16.5z M16.5,16c-0.552,0-1-0.448-1-1s0.448-1,1-1c0.552,0,1,0.448,1,1 S17.052,16,16.5,16z M16.5,11.5c-0.552,0-1-0.448-1-1s0.448-1,1-1c0.552,0,1,0.448,1,1S17.052,11.5,16.5,11.5z M7.5,16 c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S8.052,16,7.5,16z M8.5,19.5c0,0.552-0.448,1-1,1s-1-0.448-1-1s0.448-1,1-1 S8.5,18.948,8.5,19.5z M7.5,11.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S8.052,11.5,7.5,11.5z M6,2h12c0.552,0,1,0.448,1,1 v3.25c0,0.138-0.112,0.25-0.25,0.25H5.25C5.112,6.5,5,6.388,5,6.25V3C5,2.448,5.448,2,6,2z"
                                            stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            </div>
        </div>
    </div>
@stop
