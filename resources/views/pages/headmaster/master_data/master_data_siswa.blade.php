@extends('layouts.headmaster')

@section('content')

<div class="mdk-drawer-layout__content page" style="transform: translate3d(0px, 0px, 0px);">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center justify-content-between">
                <h1 class="m-0">Master Data</h1>
            </div>
        </div>

        <div class="container-fluid page__container">
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-header card-header-large bg-white align-items-center">
                            <p>Jumlah Siswa {{ $user['data']['school_info']['school_name'] }} : 1500</p>
                            <p>Jumlah Guru {{ $user['data']['school_info']['school_name'] }} : 30</p>
                        </div>
                        <div class="card-header card-header-tabs-basic nav" role="tablist">
                            <a href="#" data-toggle="tab" role="tab" aria-selected="true" class="active">Data Siswa</a>
                            <a href="{{ URL::to('headmaster/master-data/guru') }}" class="">Data Guru</a>
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane fade active show" id="students">
                                <div class="text-right">
                                    <a class="btn btn-info mb8"><i class="material-icons">file_download</i> Contoh Formulir</a>
                                    <a class="btn btn-primary mb8"><i class="material-icons">file_upload</i> Unggah Data Siswa</a>
                                    <a class="btn btn-success mb8" href="{{ route('headmaster.create', ['role' => 'siswa']) }}"><i class="material-icons">add</i> Tambah Siswa</a>
                                </div>
                                <div class="table-responsive border-bottom">
                                    <div class="row pd25 align-center">
                                        <div class="search-form search-form--light col-xs-12 col-md-7">
                                            <input type="text"
                                                id="search"
                                                name="search[all]"
                                                class="form-control search-all filter-search"
                                                placeholder="Search">
                                            <button class="btn"
                                                type="button"
                                                role="button"><i class="material-icons">search</i></button>
                                        </div>
                                        <div class="col-xs-12 col-md-1"></div>
                                        <div class="search-form search-form--light col-xs-12 col-md-4">
                                            <select class="form-control filter-search" name="search[class_name]" id="filter_class_name">
                                                <option value="">Pilih Kelas</option>
                                                @foreach ($list_class as $class)
                                                    <option value="{{ $class['class_name'] }}">{{ $class['class_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <table class="table mb-0 thead-border-top-0" id="records" data-url="{{ route('headmaster.records') }}/siswa">
                                        <thead>
                                            <tr>
                                                <th>Nama Siswa</th>
                                                <th style="width: 37px;">NIS</th>
                                                <th style="width: 37px;">NISN</th>
                                                <th style="width: 37px;">Email</th>
                                                <th style="width: 135px;">Kelas</th>
                                                <th style="width: 37px;">Status</th>
                                                <th style="width: 150px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                        </tbody>
                                    </table>
                                    <div class="card-body text-center">
                                        <ul class="pagination loader"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- // END drawer-layout__content -->
@stop

@section('add_js')
    <script src="{{ asset('assets/pages/headmaster/master-data/js/master-data.js') }}"></script>
@stop