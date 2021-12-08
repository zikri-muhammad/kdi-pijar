@extends('layouts.teacher')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <!-- page title      -->
        <div class="container-fluid page__heading-container">
            <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <h1 class="m-lg-0">Tugas Baru</h1>
            </div>
        </div>
        <!-- content              -->
        <div class="container-fluid page__container">
            <form class="mt-4" action="{{ route('teacher.new-task') }}" novalidate method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body">
                                    <p><strong class="headings-color">Buat Tugas Baru</strong></p>
                                    <p class="text-muted mb-0">Please fill required field to create a new task.</p>
                                </div>
                                <div class="col-lg-8 card-form__body card-body">
                                    <div class="form-group">
                                        <label>Pilih Kelas:</label>
                                        <select name="mst_class_id" class="form-control selectoption"
                                            data-placeholder="Pilih Kelas">
                                            @foreach ($mst_class_id as $mst)
                                                <option value="{{ $mst['idx'] }}">{{ $mst['code'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Jenis Tugas:</label>
                                        <select name="jenis_tugas" class="form-control selectoption"
                                            data-placeholder="Pilih Tipe Soal">
                                            <option value="1">Individu</option>
                                            <option value="2">Kelompok</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih BAB:</label>
                                        <select name="mst_course_id" class="form-control selectoption"
                                            data-placeholder="Pilih Kelas">
                                            @foreach ($mst_course_id as $mst)
                                                <option value="{{ $mst['idx'] }}">{{ $mst['code'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Soal:</label>
                                        <select name="mst_soal_id" class="form-control selectoption"
                                            data-placeholder="Pilih Kelas">
                                            @foreach ($mst_soal_id as $mst)
                                                <option value="{{ $mst['idx'] }}">{{ $mst['paket_soal'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc2">Batas Waktu Pengerjaan</label>
                                        <input name="waktu_pengerjaan" type="time" class="form-control" placeholder="Waktu Pengerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="desc2">Batas Waktu Pengumpulan</label>
                                        <input name="rangetime" type="text" class="form-control" placeholder="Waktu Live">
                                    </div>
                                    <div class="form-group">
                                        <label for="desc2">Description</label>
                                        <textarea id="desc2" name="description" rows="4" class="form-control"
                                            placeholder="Description ..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mb-5">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
