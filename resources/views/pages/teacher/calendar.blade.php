@extends('layouts.teacher')

@section('content')

    <div class="mdk-drawer-layout__content page">
        <!-- page title      -->
        <div class="container-fluid page__heading-container">
            <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <h1 class="m-lg-0">Kalender</h1>
            </div>
        </div>
        <!-- content              -->
        <div class="container-fluid page__container">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <button class="btn btn-primary float-right mb-3" data-toggle="modal"
                                data-target="#modal-signup">Buat Jadwal <i class="material-icons">add</i></button>
                            <div id="calendar23"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




@endsection

<!-- Sign Up Modal -->
<div id="modal-signup" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="px-3">
                    <div class="d-flex justify-content-center mt-2 mb-4 navbar-light">
                        <a href="index.html" class="navbar-brand" style="min-width: 0">
                            <span class="ml-2">Jadwal Baru</span>
                        </a>
                    </div>
                    <form action="#">
                        <div class="form-group">
                            <label for="eventname">Nama Aktifitas:</label>
                            <input class="form-control" type="text" id="eventname" placeholder="Tugas MTK" />
                        </div>
                        <div class="form-group">
                            <label for="description">Pilih Kategori:</label>
                            <select class="form-control">
                                <option value="01">Belajar Mandiri</option>
                                <option value="02">Tugas Individu</option>
                                <option value="03">Live Session</option>
                                <option value="04">Tugas Kelompok</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi:</label>
                            <select class="form-control">
                                <option value="01">BAB I</option>
                                <option value="02">BAB II</option>
                                <option value="03">BAB III</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="eventdate">Atur Tanggal dan Waktu</label>
                            <input class="form-control" type="text" id="eventdate" name="datetimes" />
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" id="button" type="submit">Simpan Jadwal</button>
                        </div>
                    </form>
                </div>
            </div> <!-- // END .modal-body -->
        </div> <!-- // END .modal-content -->
    </div> <!-- // END .modal-dialog -->
</div> <!-- // END .modal -->


@push('scripts')
    <script>
        $(document).ready(function() {
            // alert("ready!");
            $("#calendar23").evoCalendar();
        });

        // let cale = [
        //     {
        //         id : "e4da3b7fbbce2345d7772b0674a318d5",
        //         mst_course_id : {
        //             "id": 11,
        //             "code": "BAB II"
        //         },
        //         name : "Bahasa Indonesia",
        //         date : "2021-8-13 15:00:00",
        //         type: "event", // Event type (required)
        //         teacher_id : null,
        //         color: "#63d867"
        //     }
        // ];

        let calenderArray = [{
                id: 'bHay67s', // Event's ID (required)
                name: "Bahasa Indonesia", // Event name (required)
                date: "August/8/2021", // Event date (required)
                type: "event", // Event type (required)
                description: "Pukul 15:00 wib", // Event description (optional)
                color: "#63d867"
            },
            {
                id: 'bHay66s', // Event's ID (required)
                name: "Matematika", // Event name (required)
                date: "August/8/2021", // Event date (required)
                type: "event", // Event type (required)
                description: "Pukul 16:30 wib", // Event description (optional)
                color: "#ff0000"
            },
            {
                id: 'bHay65s', // Event's ID (required)
                name: "Fisika", // Event name (required)
                date: "August/9/2021", // Event date (required)
                type: "event", // Event type (required)
                description: "Pukul 17:00 wib", // Event description (optional)
                color: "#0040ff"
            },
            {
                id: 'bHay65s', // Event's ID (required)
                name: "Ppkm", // Event name (required)
                date: "August/9/2021", // Event date (required)
                type: "event", // Event type (required)
                description: "Pukul 17:00 wib", // Event description (optional)
                color: "#ffbf00"
            }, {
                id: 'bHay67s', // Event's ID (required)
                name: "Bahasa Indonesia", // Event name (required)
                date: "August/29/2021", // Event date (required)
                type: "event", // Event type (required)
                description: "Pukul 15:00 wib", // Event description (optional)
                color: "#63d867"
            },
            {
                id: 'bHay66s', // Event's ID (required)
                name: "Matematika", // Event name (required)
                date: "August/29/2021", // Event date (required)
                type: "event", // Event type (required)
                description: "Pukul 16:30 wib", // Event description (optional)
                color: "#ff0000"
            },
            {
                id: 'bHay65s', // Event's ID (required)
                name: "Fisika", // Event name (required)
                date: "August/29/2021", // Event date (required)
                type: "individu", // Event type (required)
                description: "Pukul 17:00 wib", // Event description (optional)
                color: "#0040ff"
            },
            {
                id: 'bHay65s', // Event's ID (required)
                name: "Ppkm", // Event name (required)
                date: "August/29/2021", // Event date (required)
                type: "event", // Event type (required)
                description: "Pukul 17:00 wib", // Event description (optional)
                color: "#ffbf00"
            }
        ]

        console.log(calenderArray);

        $("#calendar23").evoCalendar({
            calendarEvents: calenderArray
        });

        $("#button").click(function() {
            alert()
            $('#calendar23').evoCalendar('addCalendarEvent', calenderArray.push({
                id: 'kNybja6',
                name: 'Mom\'s Birthday',
                description: 'Lorem ipsum dolor sit..',
                date: 'August 27, 2021',
                type: 'birthday'
            }));
        });
    </script>
@endpush
