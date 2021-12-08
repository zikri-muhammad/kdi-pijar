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
                                                    class="text-warning">00:45:00</span></p>
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
                                <div class="col-md-8">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <h4 class="m-0 text-primary mr-2"><strong>#1</strong></h4>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="card-title m-0">
                                                        Github command to deploy comits?
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input id="question1" type="radio" checked="" name="question"
                                                        class="custom-control-input">
                                                    <label for="question1" class="custom-control-label">A. Jawaban 1</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input id="question2" type="radio" checked="" name="question"
                                                        class="custom-control-input">
                                                    <label for="question2" class="custom-control-label">B. Jawaban 2</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input id="question3" type="radio" checked="" name="question"
                                                        class="custom-control-input">
                                                    <label for="question3" class="custom-control-label">C. Jawaban 3</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input id="question4" type="radio" checked="" name="question"
                                                        class="custom-control-input">
                                                    <label for="question4" class="custom-control-label">D. Jawaban 4</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" class="btn btn-light">Skip</a>
                                            <a href="#" class="btn btn-success float-right">Next <i
                                                    class="material-icons btn__icon--right">arrow_forward</i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <span class="media align-items-center">
                                                <span class="media-left mr-2">
                                                    <span class="btn btn-light btn-sm">#8</span>
                                                </span>
                                                <span class="media-body">
                                                    What's the difference between private and public repos?
                                                </span>
                                            </span>
                                        </a>

                                        <a href="#" class="list-group-item active">
                                            <span class="media align-items-center">
                                                <span class="media-left mr-2">
                                                    <span class="btn btn-light btn-sm">#9</span>
                                                </span>
                                                <span class="media-body">
                                                    Github command to deploy comits?
                                                </span>
                                            </span>
                                        </a>

                                        <a href="#" class="list-group-item">
                                            <span class="media align-items-center">
                                                <span class="media-left mr-2">
                                                    <span class="btn btn-light btn-sm">#10</span>
                                                </span>
                                                <span class="media-body">
                                                    What's the difference between private and public repos?
                                                </span>
                                            </span>
                                        </a>

                                        <a href="#" class="list-group-item">
                                            <span class="media align-items-center">
                                                <span class="media-left mr-2">
                                                    <span class="btn btn-light btn-sm">#11</span>
                                                </span>
                                                <span class="media-body">
                                                    What is the purpose of a branch?
                                                </span>
                                            </span>
                                        </a>

                                        <a href="#" class="list-group-item">
                                            <span class="media align-items-center">
                                                <span class="media-left mr-2">
                                                    <span class="btn btn-light btn-sm">#12</span>
                                                </span>
                                                <span class="media-body">
                                                    Final Question?
                                                </span>
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
