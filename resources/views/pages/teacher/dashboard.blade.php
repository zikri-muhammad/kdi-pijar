@extends('layouts.teacher')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <!-- page title      -->
        <div class="container-fluid page__heading-container">
            <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <h1 class="m-lg-0">Teacher Dashboard</h1>
                <a href="/teacher/new-class" class="btn btn-success ml-lg-3">Buat Live <i class="material-icons">add</i></a>
            </div>
        </div>
        <!-- content              -->
        <div class="container-fluid page__container">
            <div class="alert alert-soft-warning d-flex align-items-center card-margin p-2" role="alert">
                <i class="material-icons mr-3">error_outline</i>
                <div class="text-body">Anda mempunyai <strong>3 tugas</strong> yang belum di Periksa</div>
                <a href="" class="btn btn-warning ml-auto">Lihat</a>
            </div>

            <div class="row">
                {{-- <div class="col-lg-12"> --}}
                <div class="col-6">
                    <div class="card">
                        <div class="card-header card-header-large bg-light d-flex align-items-center">
                            <div class="flex">
                                <h4 class="card-header__title">Live Session Saya</h4>
                                <div class="card-subtitle text-muted">Session yang akan berjalan hari ini</div>
                            </div>
                            <div class="ml-auto">
                                <a href="" class="btn btn-light">Browse All</a>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush mb-0" style="z-index: initial;">
                            @foreach ($live_session as $val )
                                
                            <li class="list-group-item" style="z-index: initial;">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="mr-3">
                                        <span class="avatar avatar-sm mr-2">
                                            <span
                                            class="avatar-title rounded-circle bg-soft-secondary text-muted">{{$val->mst_class_id->code}}</span>
                                        </span>
                                    </a>
                                    <div class="flex">
                                        <a href="#" class="text-body d-block"><strong>Kelas {{$val->mst_class_id->code}} IPA B</strong></a>
                                        <small class="text-muted">
                                            Sesi Kelas {{$val->mst_subject_id->code}} akan dimulai
                                            <span class="text-warning"> {{ date_format(date_create($val->tanggal_meeting),"d, M Y H : i");}}</span>
                                        </small>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="{{$val->link_meeting}}" class="btn btn-info" target="_blank">Mulai</a>
                                    </div>
                                </div>
                            </li>
                            
                            @endforeach
                            
                        </ul>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card">
                        <div class="card-header card-header-large bg-light d-flex align-items-center">
                            <div class="flex">
                                <h4 class="card-header__title">Tugas yang harus diperiksa</h4>
                                <div class="card-subtitle text-muted">Daftar tugas yang belum anda periksa</div>
                            </div>
                            <div class="ml-auto">
                                <a href="" class="btn btn-light">Browse All</a>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush mb-0" style="z-index: initial;">
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-left text-light-gray mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30"
                                            height="30">
                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                <path
                                                    d="M11.75,4.5C11.888,4.5,12,4.612,12,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75c0-0.138,0.112-0.25,0.25-0.25h1 c0.138,0,0.25,0.112,0.25,0.25v4.7c0,0.135,0.11,0.245,0.246,0.244c0.018,0,0.036-0.002,0.054-0.006 c0.48-0.108,0.969-0.171,1.46-0.188c0.133-0.002,0.239-0.11,0.24-0.243V4.5c0-1.105-0.895-2-2-2h-1.25C14.112,2.5,14,2.388,14,2.25 V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v1.25c0,0.138-0.112,0.25-0.25,0.25h-1.5C10.112,2.5,10,2.388,10,2.25V1c0-0.552-0.448-1-1-1 S8,0.448,8,1v1.25C8,2.388,7.888,2.5,7.75,2.5h-1.5C6.112,2.5,6,2.388,6,2.25V1c0-0.552-0.448-1-1-1S4,0.448,4,1v1.25 C4,2.388,3.888,2.5,3.75,2.5H2c-1.105,0-2,0.895-2,2v13c0,1.105,0.895,2,2,2h7.453c0.135,0,0.244-0.109,0.245-0.243 c0-0.019-0.002-0.038-0.007-0.057c-0.109-0.48-0.173-0.968-0.191-1.46c-0.002-0.133-0.11-0.239-0.243-0.24H2.25 C2.112,17.5,2,17.388,2,17.25V4.75C2,4.612,2.112,4.5,2.25,4.5h1.5C3.888,4.5,4,4.612,4,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1 V4.75C6,4.612,6.112,4.5,6.25,4.5h1.5C7.888,4.5,8,4.612,8,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75 c0-0.138,0.112-0.25,0.25-0.25H11.75z M17.5,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5 C23.996,13.912,21.088,11.004,17.5,11z M17.5,22.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S18.052,22.5,17.5,22.5z M18.439,18.327c-0.118,0.037-0.196,0.15-0.189,0.273v0.15c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V18.2 c0.003-0.588,0.413-1.096,0.988-1.222c0.607-0.131,0.993-0.73,0.862-1.338c-0.131-0.607-0.73-0.993-1.338-0.862 c-0.517,0.112-0.887,0.57-0.887,1.099c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75c0-1.45,1.176-2.625,2.626-2.624 c1.45,0,2.625,1.176,2.624,2.626c0,1.087-0.671,2.062-1.686,2.451V18.327z"
                                                    stroke="none" fill="currentColor" stroke-width="0"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <a class="text-body mb-1" href="#"><strong>Kelas XII IPA B</strong></a><br>
                                        <div class="d-flex align-items-center">
                                            <small class="text-blue mr-1">
                                                Mata Pelajaran : Biologi
                                            </small>
                                        </div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="" class="btn btn-info">Periksa</a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-left text-light-gray mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30"
                                            height="30">
                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                <path
                                                    d="M11.75,4.5C11.888,4.5,12,4.612,12,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75c0-0.138,0.112-0.25,0.25-0.25h1 c0.138,0,0.25,0.112,0.25,0.25v4.7c0,0.135,0.11,0.245,0.246,0.244c0.018,0,0.036-0.002,0.054-0.006 c0.48-0.108,0.969-0.171,1.46-0.188c0.133-0.002,0.239-0.11,0.24-0.243V4.5c0-1.105-0.895-2-2-2h-1.25C14.112,2.5,14,2.388,14,2.25 V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v1.25c0,0.138-0.112,0.25-0.25,0.25h-1.5C10.112,2.5,10,2.388,10,2.25V1c0-0.552-0.448-1-1-1 S8,0.448,8,1v1.25C8,2.388,7.888,2.5,7.75,2.5h-1.5C6.112,2.5,6,2.388,6,2.25V1c0-0.552-0.448-1-1-1S4,0.448,4,1v1.25 C4,2.388,3.888,2.5,3.75,2.5H2c-1.105,0-2,0.895-2,2v13c0,1.105,0.895,2,2,2h7.453c0.135,0,0.244-0.109,0.245-0.243 c0-0.019-0.002-0.038-0.007-0.057c-0.109-0.48-0.173-0.968-0.191-1.46c-0.002-0.133-0.11-0.239-0.243-0.24H2.25 C2.112,17.5,2,17.388,2,17.25V4.75C2,4.612,2.112,4.5,2.25,4.5h1.5C3.888,4.5,4,4.612,4,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1 V4.75C6,4.612,6.112,4.5,6.25,4.5h1.5C7.888,4.5,8,4.612,8,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75 c0-0.138,0.112-0.25,0.25-0.25H11.75z M17.5,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5 C23.996,13.912,21.088,11.004,17.5,11z M17.5,22.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S18.052,22.5,17.5,22.5z M18.439,18.327c-0.118,0.037-0.196,0.15-0.189,0.273v0.15c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V18.2 c0.003-0.588,0.413-1.096,0.988-1.222c0.607-0.131,0.993-0.73,0.862-1.338c-0.131-0.607-0.73-0.993-1.338-0.862 c-0.517,0.112-0.887,0.57-0.887,1.099c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75c0-1.45,1.176-2.625,2.626-2.624 c1.45,0,2.625,1.176,2.624,2.626c0,1.087-0.671,2.062-1.686,2.451V18.327z"
                                                    stroke="none" fill="currentColor" stroke-width="0"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <a class="text-body mb-1" href="#"><strong>Kelas XII IPA A</strong></a><br>
                                        <div class="d-flex align-items-center">
                                            <small class="text-blue mr-1">
                                                Mata Pelajaran : Bahasa Indonesia
                                            </small>
                                        </div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="" class="btn btn-info">Periksa</a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-left text-light-gray mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30"
                                            height="30">
                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                <path
                                                    d="M11.75,4.5C11.888,4.5,12,4.612,12,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75c0-0.138,0.112-0.25,0.25-0.25h1 c0.138,0,0.25,0.112,0.25,0.25v4.7c0,0.135,0.11,0.245,0.246,0.244c0.018,0,0.036-0.002,0.054-0.006 c0.48-0.108,0.969-0.171,1.46-0.188c0.133-0.002,0.239-0.11,0.24-0.243V4.5c0-1.105-0.895-2-2-2h-1.25C14.112,2.5,14,2.388,14,2.25 V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v1.25c0,0.138-0.112,0.25-0.25,0.25h-1.5C10.112,2.5,10,2.388,10,2.25V1c0-0.552-0.448-1-1-1 S8,0.448,8,1v1.25C8,2.388,7.888,2.5,7.75,2.5h-1.5C6.112,2.5,6,2.388,6,2.25V1c0-0.552-0.448-1-1-1S4,0.448,4,1v1.25 C4,2.388,3.888,2.5,3.75,2.5H2c-1.105,0-2,0.895-2,2v13c0,1.105,0.895,2,2,2h7.453c0.135,0,0.244-0.109,0.245-0.243 c0-0.019-0.002-0.038-0.007-0.057c-0.109-0.48-0.173-0.968-0.191-1.46c-0.002-0.133-0.11-0.239-0.243-0.24H2.25 C2.112,17.5,2,17.388,2,17.25V4.75C2,4.612,2.112,4.5,2.25,4.5h1.5C3.888,4.5,4,4.612,4,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1 V4.75C6,4.612,6.112,4.5,6.25,4.5h1.5C7.888,4.5,8,4.612,8,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75 c0-0.138,0.112-0.25,0.25-0.25H11.75z M17.5,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5 C23.996,13.912,21.088,11.004,17.5,11z M17.5,22.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S18.052,22.5,17.5,22.5z M18.439,18.327c-0.118,0.037-0.196,0.15-0.189,0.273v0.15c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V18.2 c0.003-0.588,0.413-1.096,0.988-1.222c0.607-0.131,0.993-0.73,0.862-1.338c-0.131-0.607-0.73-0.993-1.338-0.862 c-0.517,0.112-0.887,0.57-0.887,1.099c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75c0-1.45,1.176-2.625,2.626-2.624 c1.45,0,2.625,1.176,2.624,2.626c0,1.087-0.671,2.062-1.686,2.451V18.327z"
                                                    stroke="none" fill="currentColor" stroke-width="0"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <a class="text-body mb-1" href="#"><strong>Kelas XII IPA B</strong></a><br>
                                        <div class="d-flex align-items-center">
                                            <small class="text-blue mr-1">
                                                Mata Pelajaran : Biologi
                                            </small>
                                        </div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="" class="btn btn-info">Periksa</a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-left text-light-gray mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30"
                                            height="30">
                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                <path
                                                    d="M11.75,4.5C11.888,4.5,12,4.612,12,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75c0-0.138,0.112-0.25,0.25-0.25h1 c0.138,0,0.25,0.112,0.25,0.25v4.7c0,0.135,0.11,0.245,0.246,0.244c0.018,0,0.036-0.002,0.054-0.006 c0.48-0.108,0.969-0.171,1.46-0.188c0.133-0.002,0.239-0.11,0.24-0.243V4.5c0-1.105-0.895-2-2-2h-1.25C14.112,2.5,14,2.388,14,2.25 V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v1.25c0,0.138-0.112,0.25-0.25,0.25h-1.5C10.112,2.5,10,2.388,10,2.25V1c0-0.552-0.448-1-1-1 S8,0.448,8,1v1.25C8,2.388,7.888,2.5,7.75,2.5h-1.5C6.112,2.5,6,2.388,6,2.25V1c0-0.552-0.448-1-1-1S4,0.448,4,1v1.25 C4,2.388,3.888,2.5,3.75,2.5H2c-1.105,0-2,0.895-2,2v13c0,1.105,0.895,2,2,2h7.453c0.135,0,0.244-0.109,0.245-0.243 c0-0.019-0.002-0.038-0.007-0.057c-0.109-0.48-0.173-0.968-0.191-1.46c-0.002-0.133-0.11-0.239-0.243-0.24H2.25 C2.112,17.5,2,17.388,2,17.25V4.75C2,4.612,2.112,4.5,2.25,4.5h1.5C3.888,4.5,4,4.612,4,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1 V4.75C6,4.612,6.112,4.5,6.25,4.5h1.5C7.888,4.5,8,4.612,8,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75 c0-0.138,0.112-0.25,0.25-0.25H11.75z M17.5,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5 C23.996,13.912,21.088,11.004,17.5,11z M17.5,22.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S18.052,22.5,17.5,22.5z M18.439,18.327c-0.118,0.037-0.196,0.15-0.189,0.273v0.15c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V18.2 c0.003-0.588,0.413-1.096,0.988-1.222c0.607-0.131,0.993-0.73,0.862-1.338c-0.131-0.607-0.73-0.993-1.338-0.862 c-0.517,0.112-0.887,0.57-0.887,1.099c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75c0-1.45,1.176-2.625,2.626-2.624 c1.45,0,2.625,1.176,2.624,2.626c0,1.087-0.671,2.062-1.686,2.451V18.327z"
                                                    stroke="none" fill="currentColor" stroke-width="0"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <a class="text-body mb-1" href="#"><strong>Kelas XI IPA B</strong></a><br>
                                        <div class="d-flex align-items-center">
                                            <small class="text-blue mr-1">
                                                Mata Pelajaran : Bahasa Indonesia
                                            </small>
                                        </div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="" class="btn btn-info">Periksa</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
            <div class="row mt-3">
                {{-- <div class="col-lg-6"> --}}
                <div class="col-6">
                    <div class="card">
                        <div class="card-header card-header-large bg-light d-flex align-items-center">
                            <div class="flex">
                                <h4 class="card-header__title">Jadwal Hari ini</h4>
                            </div>
                            <div class="ml-auto">
                                <span class="btn btn-outline-info btn-rounded">Senin 04.04.20</span>
                                <a href="#" class="btn btn-success ml-3">
                                    <i class="material-icons">note_add</i> Add New
                                </a>
                            </div>
                        </div>

                        <ul class="list-group list-group-fit">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="text-muted">1.</div>
                                    </div>
                                    <div class="media-body d-flex justify-content-between">
                                        <span>Kelas XII IPA B</span>
                                        <span>00:30:00</span>
                                    </div>
                                    <div class="media-right">
                                        <small class="text-danger">Zoom Meeting</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="text-muted">2.</div>
                                    </div>
                                    <div class="media-body d-flex justify-content-between">
                                        <span href="#">Kelas XII IPS A</span>
                                        <span>01:00:00</span>
                                    </div>
                                    <div class="media-right">
                                        <small class="text-info">Belajar Mandiri</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="text-muted">3.</div>
                                    </div>
                                    <div class="media-body d-flex justify-content-between">
                                        <span href="#">Kelas XI IPS A</span>
                                        <span>02:00:00</span>
                                    </div>
                                    <div class="media-right">
                                        <small class="text-danger">Zoom Meeting</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="text-muted">4.</div>
                                    </div>
                                    <div class="media-body d-flex justify-content-between">
                                        <span href="#">Kelas IX IPS A</span>
                                        <span>01:00:00</span>
                                    </div>
                                    <div class="media-right">
                                        <small class="text-info">Belajar Mandiri</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- START ACTIVITY -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-header card-header-large bg-light d-flex align-items-center">
                            <div class="flex">
                                <h4 class="card-header__title">Aktivitas Terbaru</h4>
                                <div class="card-subtitle text-muted">Log aktivitas terbaru Anda</div>
                            </div>
                            <div class="ml-auto">
                                <a href="" class="btn btn-light">Browse All</a>
                            </div>
                        </div>

                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                            <div class="avatar avatar-xs mr-3">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="material-icons">thumb_up</i>
                                    <!-- <span class="material-icons-outlined">thumb_up</span> -->
                                </span>
                            </div>
                            <div class="flex">
                                <strong class="text-15pt mr-1 d-block">Anda Menyelesaikan Tugas BAB 1 Bahasa
                                    Indonesia</strong>
                                <small class="text-muted">Just Now</small>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                            <div class="avatar avatar-xs mr-3">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="material-icons">thumb_up</i>
                                    <!-- <span class="material-icons-outlined">thumb_up</span> -->
                                </span>
                            </div>
                            <div class="flex">
                                <strong class="text-15pt mr-1 d-block">Anda Masuk kelas PPKN</strong>
                                <small class="text-muted">30 Minutes Ago</small>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                            <div class="avatar avatar-xs mr-3">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="material-icons">lock</i>
                                    <!-- <span class="material-icons-outlined">thumb_up</span> -->
                                </span>
                            </div>
                            <div class="flex">
                                <strong class="text-15pt mr-1 d-block">Anda Melakukan Logout Aplikasi</strong>
                                <small class="text-muted">1 days ago</small>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                            <div class="avatar avatar-xs mr-3">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="material-icons">thumb_up</i>
                                    <!-- <span class="material-icons-outlined">thumb_up</span> -->
                                </span>
                            </div>
                            <div class="flex">
                                <strong class="text-15pt mr-1 d-block">Anda Masuk Kelas Biologi</strong>
                                <small class="text-muted">2 days ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ACTIVITY -->
                {{-- </div> --}}

            </div>
        </div>
    </div>
@stop
