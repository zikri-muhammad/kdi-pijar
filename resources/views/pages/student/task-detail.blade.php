@extends('layouts.dashboard')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <!-- page title      -->
        <div class="container-fluid page__heading-container">
            <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <h1 class="m-lg-0">Tugas</h1>
            </div>
        </div>
        <!-- content              -->
        <div class="container-fluid page__container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="d-flex flex-column flex-sm-row">
                                        <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                            <img src="{{ asset('assets/images/logos/vuejs.svg') }}" alt="Card image cap"
                                                class="avatar-course-img">
                                        </a>
                                        <div class="col">
                                            <h4 class="card-title mb-1"><a href="instructor-course-edit.html">Biologi BAB 2
                                                    - Fotosintesis</a></h4>
                                            <p class="text-muted">Batas waktu pengerjaan PR tersisa <span
                                                    class="text-warning">00:45:00</span>
                                                
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-right ml-auto mb-3">
                                    <select class="form-control">
                                        <option value="1">Semua</option>
                                        <option value="2">Belum Dikerjakan</option>
                                        <option value="2">Sudah Dikerjakan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-soft-primary card-body my-4 p-5 text-center rounded">
                                        <h4 class="text-center text-primary bold mb-3">Soal</h4>
                                        <a href="#" class="btn btn-primary btn-lg">Download Soal Disini <i
                                                class="material-icons">file_download</i></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-soft-success card-body my-4 p-5 text-center rounded">
                                        <h4 class="text-center text-success bold mb-3">Jawaban</h4>
                                        <a href="#" class="btn btn-success btn-lg">Upload Jawaban Disini <i
                                                class="material-icons">file_upload</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

