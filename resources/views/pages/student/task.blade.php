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
                        <div class="card-header card-header-large bg-white d-flex align-items-center">
                            <h4 class="card-header__title flex m-0">Tugas dan Project</h4>
                        </div>
                        <div class="card-header card-header-tabs-basic nav" role="tablist">
                            <a href="#activity_purchases" class="active" data-toggle="tab" role="tab"
                                aria-selected="false">Individu</a>
                            <a href="#activity_emails" data-toggle="tab" role="tab" aria-selected="false">Kelompok</a>
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane active show fade" id="activity_purchases">
                                <div class="row">
                                    <div class="col-md-3 text-right ml-auto mb-3">
                                        <select class="form-control">
                                            <option value="1">Semua</option>
                                            <option value="2">Belum Dikerjakan</option>
                                            <option value="2">Sudah Dikerjakan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive border-bottom" data-toggle="lists"
                                            data-lists-values='["js-lists-values-employee-name"]'>

                                            <table class="table mb-0 thead-border-top-0">
                                                <thead>
                                                    <tr>
                                                        <th>Mata Pelajaran</th>
                                                        <th>Materi</th>
                                                        <th>Jumlah Soal</th>
                                                        <th>Waktu Kumpul</th>
                                                        <th>status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="staff">
                                                    @foreach ($task as $val)
                                                        
                                                    <tr class="selected">
                                                        
                                                        <td>
                                                            
                                                            <div class="media align-items-center">
                                                                
                                                                <div class="media-body">
                                                                    
                                                                    <span
                                                                    class="js-lists-values-employee-name">{{$val->mst_soal_id->paket_soal}}</span>
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                        </td>
                                                        
                                                        <td><small class="text-muted">{{$val->mst_course_id->code}}</small></td>
                                                        <td>20 Soal</td>
                                                        <td>01:00:00</td>
                                                        <td><span class="badge badge-primary">Dikerjakan</span></td>
                                                        <td><a href="/student/task/task-detail"
                                                            class="btn btn-primary btn-rounded btn-sm">Lihat Tugas</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="activity_emails">
                                <div class="row">
                                    <div class="col-md-3 text-right ml-auto mb-3">
                                        <select class="form-control">
                                            <option value="1">Semua</option>
                                            <option value="2">Belum Dikerjakan</option>
                                            <option value="2">Sudah Dikerjakan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive border-bottom" data-toggle="lists"
                                            data-lists-values='["js-lists-values-employee-name"]'>

                                            <table class="table mb-0 thead-border-top-0">
                                                <thead>
                                                    <tr>

                                                        <th style="width: 18px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input js-toggle-check-all"
                                                                    data-target="#staff" id="customCheckAll">
                                                                <label class="custom-control-label"
                                                                    for="customCheckAll"><span class="text-hide">Toggle
                                                                        all</span></label>
                                                            </div>
                                                        </th>

                                                        <th>Mata Pelajaran</th>

                                                        <th>Materi</th>
                                                        <th>Jumlah Soal</th>
                                                        <th>Waktu Kumpul</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="staff">

                                                    <tr class="selected">

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input js-check-selected-row"
                                                                    checked="" id="customCheck1_1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck1_1"><span
                                                                        class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">

                                                                <div class="media-body">

                                                                    <span
                                                                        class="js-lists-values-employee-name">Biologi</span>

                                                                </div>
                                                            </div>

                                                        </td>

                                                        <td><small class="text-muted">BAB I</small></td>
                                                        <td>20 Soal</td>
                                                        <td>01:00:00</td>
                                                        <td><span class="badge badge-primary">Dikerjakan</span></td>
                                                    </tr>
                                                    <tr class="selected">

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input js-check-selected-row"
                                                                    checked="" id="customCheck1_1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck1_1"><span
                                                                        class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">

                                                                <div class="media-body">

                                                                    <span
                                                                        class="js-lists-values-employee-name">Biologi</span>

                                                                </div>
                                                            </div>

                                                        </td>

                                                        <td><small class="text-muted">BAB I</small></td>
                                                        <td>20 Soal</td>
                                                        <td>01:00:00</td>
                                                        <td><span class="badge badge-primary">Dikerjakan</span></td>
                                                    </tr>
                                                    <tr class="selected">

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input js-check-selected-row"
                                                                    checked="" id="customCheck1_1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck1_1"><span
                                                                        class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">

                                                                <div class="media-body">

                                                                    <span
                                                                        class="js-lists-values-employee-name">Biologi</span>

                                                                </div>
                                                            </div>

                                                        </td>

                                                        <td><small class="text-muted">BAB I</small></td>
                                                        <td>20 Soal</td>
                                                        <td>01:00:00</td>
                                                        <td><span class="badge"
                                                                style="background-color: #8a9b9bbd;">Selesai</span></td>
                                                    </tr>



                                                </tbody>
                                            </table>
                                        </div>
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
