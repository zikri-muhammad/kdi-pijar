@extends('layouts.dashboard')

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
                            <a href="#activity_purchases" class="active" data-toggle="tab" role="tab"
                                aria-selected="false">Belajar Mandiri</a>
                            <a href="#activity_emails" data-toggle="tab" role="tab" aria-selected="false">Tugas Online</a>
                            <a href="#kehadiran" data-toggle="tab" role="tab" aria-selected="false">Kehadiran</a>
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane active show fade" id="activity_purchases">
                                <div class="col-md-3 text-left ml-auto mb-3">
                                    <p>Materi Yang Sudah Dipelajari</p>
                                    <select class="form-control">
                                        <option value="1">Semua</option>
                                        <option value="2">Bahasa Pemograman I</option>
                                        <option value="2">Bahasa Pemograman II</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div style="width: 300px;">
                                            <canvas id="myChart"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="width: 300px;">
                                            <canvas id="chart"></canvas>
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

                                            <table class="table mb-0 thead-border-top-0 mt-3">

                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Mata Pelajaran</th>
                                                        <th>KKM</th>
                                                        <th>Nilai</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>Algoritma Pemograman</td>
                                                        <td>70</td>
                                                        <td>89</td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>Bahasa Indonesia</td>
                                                        <td>90</td>
                                                        <td>89</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td>Bahasa Arab</td>
                                                        <td>80</td>
                                                        <td>78</td>
                                                    </tr>
                                                </tbody>

                                            </table>
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
                                            <option value="01">Semua Mata Pelajaran</option>
                                            <option value="02">Algoritma Pemograman</option>
                                            <option value="03">algoritma Pemograman II</option>
                                        </select>
                                        {{-- </div> --}}
                                    </div>

                                </div>
                                <div class="row mt-5 mb-5">
                                    <table class="table mb-0 thead-border-top-0 ml-auto">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>

                                                <th>Jam Pelajaran</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list" id="staff">
                                            <div>
                                                <tr class="selected">
                                                    <td rowspan="3">
                                                        14 july 2021
                                                    </td>
                                                    <td>I</td>
                                                    <td>Telat</td>
                                                </tr>
                                                <tr class="selected">
                                                    <td>II</td>
                                                    <td>Hadir</td>
                                                </tr>
                                                <tr class="selected">
                                                    <td>III</td>
                                                    <td>Absen</td>
                                                </tr>
                                            </div>
                                            <div>
                                                <tr class="selected">
                                                    <td rowspan="3">
                                                        14 july 2021
                                                    </td>
                                                    <td>I</td>
                                                    <td>Telat</td>
                                                </tr>
                                                <tr class="selected">
                                                    <td>II</td>
                                                    <td>Hadir</td>
                                                </tr>
                                                <tr class="selected">
                                                    <td>III</td>
                                                    <td>Absen</td>
                                                </tr>
                                            </div>
                                        </tbody>
                                    </table>
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


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var ctx = document.getElementById('chart').getContext('2d');
        var xValues = ["Dikerjakan", "Belum Dikerjakan"];
        var yValues = [70, 30, ];
        var barColors = [
            "#b91d47",
            "#00aba9"
        ];

        new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "World Wide Wine Production 2018"
                }
            }
        });

        new Chart("chart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "World Wide Wine Production 2018"
                }
            }
        });
    </script>
@endpush
