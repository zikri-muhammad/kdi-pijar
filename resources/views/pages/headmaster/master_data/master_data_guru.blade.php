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
                        <a href="{{ URL::to('headmaster/master-data/siswa') }}" >Data Siswa</a>
                        <a href="#" data-toggle="tab" role="tab" aria-selected="false" class="active">Data Guru</a>
                    </div>
                    <div class="card-body tab-content">
                        <div class="tab-pane fade active show" id="teachers">
                            <div class="text-right">
                                <a class="btn btn-info mb8"><i class="material-icons">file_download</i> Unduh Formulir Guru</a>
                                <a class="btn btn-primary mb8"><i class="material-icons">file_upload</i> Unggah Formulir</a>
                                <a class="btn btn-success mb8" href="{{ route('headmaster.create', ['role' => 'guru']) }}"><i class="material-icons">add</i> Tambah Data Guru</a>
                            </div>
                            <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>
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
                                        <select class="form-control filter-search" name="search[mst_subject_id]" id="filter_class_name">
                                            <option value="">Pilih Mata Pelajaran</option>
                                            @foreach($list_subect as $subject)
                                                <option value="{{ $subject['idx'] }}">{{ $subject['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <table class="table mb-0 thead-border-top-0" id="records" data-role="guru" data-url="{{ route('headmaster.records') }}/guru">
                                    <thead>
                                        <tr>
                                            <th>Nama Guru</th>
                                            <th style="width: 37px;">NIP</th>
                                            <th style="width: 200px;">Mata Pelajaran</th>
                                            <th style="width: 37px;">Email</th>
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
@stop

@section('add_js')
    <script src="{{ asset('assets/pages/headmaster/master-data/js/master-data.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#master-data').addClass('active');
        });
    </script>
@stop