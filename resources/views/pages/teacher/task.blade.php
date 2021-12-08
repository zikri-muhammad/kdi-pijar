@extends('layouts.teacher')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <!-- page title      -->
        <div class="container-fluid page__heading-container">
            <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <h1 class="m-lg-0">Daftar Tugas</h1>
            </div>
        </div>
        <!-- content              -->
        <div class="container-fluid page__container">
            <div class="text-right ml-5">
                <a href="/teacher/new-task" class="btn btn-success"><i class="material-icons">add</i> Tambah Tugas</a>
            </div>
            <div class="row mt-5">
                <table class="table mb-0 thead-border-top-0" id="records" data-role="records"
                    data-url="{{ route('teacher.records') }}">
                    <thead>
                        <tr>

                            <th>No</th>
                            <th>Kelas</th>

                            <th>Materi Soal</th>
                            <th>Jumlah Soal</th>
                            <th>Total Dikerjakan</th>
                            <th>Sisa Waktu Pengumpulan</th>
                            <th>Jenis</th>
                            <th>Action</th>
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


@endsection
<div id="modal-large" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-large-title">BAB II POTOSINTESIS</h5>
                <h4 style="color: red">00:08:00</h4>
            </div>
            <div>
                <h4 class="text-center">10 IPA I</h4>
            </div>
            <div class="modal-body">
                <div class="px-3 mb-5">
                    <table class="table mb-0 thead-border-top-0" id="">
                        <thead>
                            <tr>
                                <th>NIS</th>

                                <th>NAMA</th>
                                <th>Status</th>
                                <th>Nilai</th>
                                <th>Himbau</th>
                            </tr>
                        </thead>
                        <tbody class="" id="staff">
                            @foreach ($pengerjaan as $val)
                                <tr class="selected">

                                    <td>{{ $val->mst_student->nis }}</td>
                                    <td>{{ $val->mst_student->name }}</td>
                                    <td><span class="btn btn-light btn-sm">selesai</span></td>
                                    <td>{{ $val->nilai }}</td>
                                    <td><span class="btn btn-light btn-sm">Ingatkan</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- // END .modal-body -->
        </div> <!-- // END .modal-content -->
    </div> <!-- // END .modal-dialog -->
</div> <!-- // END .modal -->



@push('scripts')
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                table($('#records').attr('data-url'), function(result) {
                    // console.log(result)
                    displayTableRows(result, $('#records').attr('data-role'));
                });
            }, 200);
        });

        function displayTableRows(result) {
            console.log(result);
            var html = '';
            $.each(result.data, function(key, val) {
                var isActive = val.is_activated ? 'ACTIVE' : 'INACTIVE';
                var badge = val.is_activated ? 'success' : 'warning';
                var now = new Date();
                var dateStringWithTime = moment(now).format('YYYY-MM-DD HH:mm:ss');
                var sisaWaktu = now - dateStringWithTime;
                let end_at = val.end_at > dateStringWithTime ? moment(val.end_at).format('HH:mm:ss') :
                    'Waktu Habis';
                console.log(sisaWaktu)


                html +=
                    `
                    <tr class="selected text-left">
                        <td>${key+1}</td>
                        <td>
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="js-lists-values-employee-name">kelas
                                        ${val.mst_clas_id.code}</span>
                                </div>
                            </div>
                        </td>
                        <td>${ val.mst_soal_id.paket_soal }</td>
                        <td><small class="text-muted">30</small></td>
                        <td>15/30</td>
                        <td> ${end_at} </td>
                        <td>Individu</td>
                        <td>
                            <button type="button" class="btn btn-light" data-toggle="modal"
                                data-target="#modal-large">
                                <i class="material-icons">visibility</i>
                            </button>
                            <button type="button" class="btn btn-info">
                                <i class="material-icons">edit</i>
                            </button>
                        </td>
                    </tr>
                    `;
            });

            $('.list').html(html);
            console.log(result.pagination)
            generatePagination(result.pagination);

            $('.pagination').removeClass('loader');

        }
    </script>
@endpush
