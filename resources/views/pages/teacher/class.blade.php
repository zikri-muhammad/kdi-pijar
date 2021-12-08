@extends('layouts.teacher')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <!-- page title      -->
        <div class="container-fluid page__heading-container">
            <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <h1 class="m-lg-0">New Live Session</h1>
            </div>
        </div>
        <!-- content              -->
        <div class="container-fluid page__container">

            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('store') }}" novalidate method="POST">
                        @csrf
                        <div class="card card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body">
                                    <p><strong class="headings-color">New Live Session</strong></p>
                                    <p class="text-muted mb-0">Please fill required field to create a new live session.</p>
                                </div>

                                <div class="col-lg-8 card-form__body card-body">
                                    <div class="form-group">
                                        <label>Pilih Kelas:</label>
                                        <select name="mst_class_id" class="form-control selectoption"
                                            data-placeholder="Pilih Kelas">
                                            <option value=""></option>
                                            @foreach ($mst_class_id as $val)
                                                <option value="{{ $val['idx'] }}">{{ $val['code'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Mata Pelajaran:</label>
                                        <select name="mst_subject_id" class="form-control selectoption"
                                            data-placeholder="Pilih Mata Pelajaran">
                                            <option value=""></option>
                                            @foreach ($mst_subject_id as $val)
                                                <option value="{{ $val['idx'] }}">{{ $val['name'] }}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc2">Masukan Link Meeting</label>
                                        <input name="link" type="text" class="form-control"
                                            placeholder="Masukan Link Meeting">
                                    </div>
                                    <div class="form-group">
                                        <label for="desc2">Tanggal &amp; Waktu</label>
                                        <input name="datetimes" type="text" class="form-control" placeholder="Waktu Live">
                                    </div>
                                    <div class="form-group">
                                        <label for="desc2">Description</label>
                                        <textarea id="desc2" name="descriptions" rows="4" class="form-control"
                                            placeholder="Description ..."></textarea>
                                    </div>
                                    <div class="text-right mb-5">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                        {{-- <a href="" class="btn btn-success">Simpan</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@stop
