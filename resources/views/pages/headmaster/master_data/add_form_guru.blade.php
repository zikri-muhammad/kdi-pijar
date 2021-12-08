@extends('layouts.headmaster')

@section('content')

<div class="mdk-drawer-layout__content page" style="transform: translate3d(0px, 0px, 0px);">
    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex align-items-center justify-content-between">
            <h3 class="m-0">Tambah Data Guru</h3>
        </div>
    </div>

    <div class="container-fluid page__container">
        <div class="row form-buttons">
                <div class="col-12 col-md-6">
                    <button class="btn btn-default" onclick="window.history.go(-1); return false;" type="submit"><i class="material-icons">arrow_back</i> Kembali</button>
                </div>
                <div class="col-12 col-md-6 text-right">
                    <button class="btn btn-primary" type="submit" id="save"><i class="material-icons">save</i> Simpan</button>
                </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <form id="form-save" action="{{ Request::url() }}" method="POST">
                    <div class="to-validated">
                        <div class="form-row">
                            <div class="col-12 col-md-12 mb-3">
                            <label for="class">Mata Pelajaran</label>
                                <select id="class"
                                    name="subject_id"
                                    data-toggle="select"
                                    class="form-control"
                                    data-parsley-required="true">
                                    <option value="">Pilih Mata Pelajaran</option>
                                    @foreach($list_mst_subject as $value)
                                        <option value="{{ $value['idx'] }}" {{ @$value['selected'] }}>{{ $value['name'] }}</option>
                                    @endforeach    
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-12 mb-3">
                                <label for="nama-guru">Nama Guru</label>
                                <input type="text"
                                    class="form-control"
                                    id="nama-guru"
                                    name="name"
                                    value="{{ @$name }}"
                                    placeholder="Masukkan nama guru .."
                                    data-parsley-required="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-12 mb-3">
                                <label for="nama-kelas">Tahun Mengajar</label>
                                <input  type="number"
                                        class="form-control"
                                        id="nama-kelas"
                                        name="year"
                                        value="{{ @$year }}"
                                        placeholder="Masukkan guru mulai mengajar .."
                                        data-parsley-required="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-12 mb-3">
                                <label for="dob">Tanggal Lahir</label>
                                <input id="dob" type="text" name="dob" class="form-control" placeholder="Pilih Tanggal Lahir" data-toggle="flatpickr"
                                    data-parsley-required="true" value="{{ @$dob }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="NIK">NIK</label>
                                <input type="text"
                                        class="form-control"
                                        id="NIK"
                                        name="nik"
                                        value="{{ @$nik }}"
                                        placeholder="Masukkan NIK guru .."
                                        data-parsley-required="true">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="NIP">NIP</label>
                                <input type="text"
                                        class="form-control"
                                        id="NIP"
                                        name="nip"
                                        value="{{ @$nip }}"
                                        placeholder="Masukkan NIP guru .."
                                        data-parsley-required="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="phone">Nomor Telepon</label>
                                <input type="text"
                                        class="form-control"
                                        id="phone"
                                        name="phone"
                                        value="{{ @$phone }}"
                                        placeholder="Masukkan nomor telepon guru .."
                                        data-parsley-required="true">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="email">Email</label>
                                <input type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        value="{{ @$email }}"
                                        placeholder="Masukkan email guru .."
                                        data-parsley-required="true">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop