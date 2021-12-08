@extends('layouts.teacher')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <!-- page title      -->
        <div class="container-fluid page__heading-container">
            <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <h1 class="m-lg-0">E-Rapor</h1>
            </div>
        </div>
        <!-- content              -->
        <div class="container-fluid page__container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-large bg-white d-flex align-items-center">
                            <h4 class="card-header__title flex m-0">Bambang Pamungkas</h4>
                            <p>Tahun Ajaran 2020/2021</p>
                        </div>
                        <div class="card-header card-header-tabs-basic nav" role="tablist">
                            <a href="#activitas_mengajar" class="active" data-toggle="tab" role="tab"
                                aria-selected="false">AKtifitas Mengajar</a>
                            <a href="#kehadiran" data-toggle="tab" role="tab" aria-selected="false">Kehadiran</a>
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane active show fade" id="activitas_mengajar">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Pencapaian Pengajaran</p>
                                    </div>
                                    <div class="col-md-3 text-left ml-auto mb-3">
                                        {{-- <div class="col-3"> --}}
                                        <select class="form-control">
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                        {{-- </div> --}}
                                    </div>
                                    <div class="col-md-3 text-left">
                                        {{-- <div class="col-3"> --}}
                                        <select class="form-control">
                                            <option value="1">Semua Kelas</option>
                                            <option value="2">Kelas X</option>
                                            <option value="2">Kelas XI</option>
                                        </select>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-3 offset-md-1">
                                        <div class="text-center">
                                            <div class="avatar avatar-xxl" style="width: 200px; height: 200px;">
                                                <span
                                                    class="avatar-title rounded-circle bg-soft-primary text-primary">87/100</span>

                                            </div>
                                        </div>
                                        <div class="text-center mt-5">
                                            <h3>Tatap Muka</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <div class="avatar avatar-xxl" style="width: 200px; height: 200px;">
                                                <span
                                                    class="avatar-title rounded-circle bg-warning text-primary">100/100</span>

                                            </div>
                                        </div>
                                        <div class="text-center mt-5">
                                            <h3>Tugas Individu</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <div class="avatar avatar-xxl" style="width: 200px; height: 200px;">
                                                <span class="avatar-title rounded-circle bg-info text-primary">87/100</span>
                                            </div>
                                        </div>
                                        <div class="text-center mt-5">
                                            <h3>Tugas Kelompok</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kehadiran">
                                {{-- <div class="row"> --}}
                                <div class="row">
                                    <div class="col-md-3 mb-2">
                                        <p>Total Kehadiran Tatap Muka Saya</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input id="flatpickrSample01" type="text" class="form-control" placeholder="Date"
                                            data-toggle="flatpickr" value="today">
                                    </div>
                                    <div class="col-md-3">
                                        <input id="flatpickrSample01" type="text" class="form-control" placeholder="Date"
                                            data-toggle="flatpickr" value="today">
                                    </div>
                                    <div class="col-md-3">
                                        {{-- <div class="col-3"> --}}
                                        <select class="form-control">
                                            <option value="01">Kelas X</option>
                                            <option value="02">Kelas XI</option>
                                            <option value="03">Kelas XII</option>
                                        </select>
                                        {{-- </div> --}}
                                    </div>
                                    <div class="col-md-3">
                                        {{-- <div class="col-3"> --}}
                                        <select class="form-control">
                                            <option value="1">X IPA I</option>
                                            <option value="2">X IPA II</option>
                                            <option value="2">X IPS I</option>
                                            <option value="2">X IPS II</option>
                                        </select>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                <div class="row mt-5 mb-5">
                                    <div class="col-md-4">
                                        <div
                                            class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                            <div class="flex">
                                                <div class="card-header__title text-muted mb-5">Tatap Muka Yang Telah
                                                    Dihadiri</div>
                                                <div class="text-amount">15</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div
                                            class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                            <div class="flex">
                                                <div class="card-header__title text-muted mb-5">Tatap Muka Yang Telah
                                                    Dihadiri</div>
                                                <div class="text-amount">2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
