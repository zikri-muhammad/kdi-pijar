@extends('layouts.dashboard')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <!-- page title      -->
        <div class="container-fluid page__heading-container">
            <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <h1 class="m-lg-0">Algoritma Pemograman</h1>
            </div>
        </div>
        <!-- content              -->
        <div class="container-fluid page__container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-tabs-basic nav" role="tablist">
                            <h5>{{ $soal->paket_soal }}</h5>

                        </div>
                        <div class="card-body tab-content">
                            {{-- <div class="tab-pane fade" id="course_latihan"> --}}

                            <div class="row">
                                <div class="col-md-8">
                                    {{-- @foreach ($detail_task as $val) --}}
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <h4 class="m-0 text-primary mr-2">
                                                        <strong id="qid"></strong>
                                                    </h4>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="card-title m-0">
                                                        {{-- {{ $val->soal }} --}}
                                                        <h5><span id="question"></span></h5>
                                                    </h5>
                                                </div>
                                                <div class="col-md-3 text-right pr-md-0">
                                                    <h4 class="card-title m-0 text-danger">
                                                        <span id="hours"></span>:<span id="minutes"></span>:<span
                                                            id="seconds"></span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" id="question-options">
                                            {{-- list jawaban --}}
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <a href="#" class="btn btn-light">Skip</a>
                                                </div>
                                                <div class="col-md-4 text-blue">
                                                    <h5>Sudah Dikerjakan : 5</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="#" class="btn btn-success float-right" id="next">Next <i
                                                            class="material-icons btn__icon--right">arrow_forward</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>

                                    <div class="card mb-4">
                                        {{-- <div class="card-header">
                                        <div class="media align-items-center justify-content-center">
                                            <div class="media-left">
                                                <h4 class="m-0 text-primary mr-2"><strong>Jawaban Benar adalah <span
                                                            class="text-success">B</span></strong></h4>
                                            </div>
                                        </div>
                                    </div> --}}
                                        <div class="card-body">
                                            <h5>Penjelasan</h5>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio dolor
                                                error iusto cum similique ipsa adipisci rem sit! Repellendus architecto
                                                corporis consectetur laborum, perspiciatis illo quae. Et ab natus eos.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ducimus,
                                                quis adipisci quasi nihil praesentium? Deleniti debitis modi, aut
                                                tempore rerum eligendi non nostrum voluptas, accusantium aliquam saepe,
                                                eos quae.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum consequuntur
                                                rerum sit modi hic ipsam, alias explicabo facere voluptates dolore
                                                tempore, consequatur reiciendis corrupti aut distinctio, tempora at
                                                temporibus ipsum.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="list-group">
                                        <h4>Instruksi</h4>
                                        <span class="media align-items-center">
                                            <div class="avatar avatar-xl">
                                                <span
                                                    class="avatar-title rounded-circle text-center bg-soft-primary text-primary"><span
                                                        style="font-size: 17px">12 Soal</span> </span>
                                            </div>
                                            <span class="media-body ml-3">
                                                Jumlah soal dalam bentuk pilihan ganda
                                            </span>
                                        </span>
                                        <span class="media align-items-center mt-1">
                                            <div class="avatar avatar-xl">
                                                <span
                                                    class="avatar-title rounded-circle text-center bg-soft-primary text-primary"><span
                                                        style="font-size: 17px">45 Menit</span> </span>
                                            </div>
                                            <span class="media-body ml-3">
                                                Waktu yang disediakan untuk mengerjakan soal
                                            </span>
                                        </span>
                                        <span class="media align-items-center mt-1">
                                            <div class="avatar avatar-xl">
                                                <span
                                                    class="avatar-title rounded-circle text-center bg-soft-primary text-primary"><span
                                                        style="font-size: 17px">skip</span> </span>
                                            </div>
                                            <span class="media-body ml-3">
                                                Kerjakan soal yang dianggap mudah terlebih dahulu
                                            </span>
                                        </span>
                                        <span class="media align-items-center mt-1">
                                            <div class="avatar avatar-xl">
                                                <span
                                                    class="avatar-title rounded-circle text-center bg-soft-primary text-primary"><span
                                                        style="font-size: 17px">100</span> </span>
                                            </div>
                                            <span class="media-body ml-3">
                                                Total skor akan muncul setelah soal siap dikerjakan
                                            </span>
                                        </span>


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
@endsection


@push('scripts')
    <script>
        (function() {
            // alert('ok')
            const second = 1000;
            const minute = second * 60;
            const hour = minute * 60;
            const day = hour * 24;

            let endTime = "Jul 27, 2021 16:00:00";
            let timeNow = new Date().getTime();
            let countDown = new Date(endTime).getTime();

            console.log(countDown, timeNow);
            let x = setInterval(function() {

                let now = new Date().getTime();
                let distance = countDown - now;

                // document.getElementById("days").innerText = Math.floor(distance / (day)),
                document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                //do something later when date is reached
                // if (distance < 0) {
                // alert('waktu habis');
                //     clearInterval(x);
                // }
                //seconds
            }, 0)
        }());

        /* Created and coded by Abhilash Narayan */
        /* Quiz source: w3schools.com */

        var quiz = {
            "results": [{
                    "id": 1,
                    "mst_soal_id": 1,
                    "nomor": 1,
                    "soal": "dibawah ini manakan yang merupakn bahasa pemograman, kecuali?",
                    "jawaban_a": "html",
                    "jawaban_b": "php",
                    "jawaban_c": "golang",
                    "jawaban_d": "javascript",
                    "created_at": "2021-07-21T08:18:22.000000Z",
                    "updated_at": "2021-07-21T08:18:22.000000Z",
                    "deleted_at": null
                },
                {
                    "id": 2,
                    "mst_soal_id": 1,
                    "nomor": 2,
                    "soal": "siapa penumu bahasa javascript?",
                    "jawaban_a": "Brendan Eich",
                    "jawaban_b": "jack ma",
                    "jawaban_c": "mark zuckerberg",
                    "jawaban_d": "minato",
                    "created_at": "2021-07-23T04:46:59.000000Z",
                    "updated_at": "2021-07-23T04:46:59.000000Z",
                    "deleted_at": null
                }
            ]
        }



        var quizApp = function() {

            this.score = 0;
            this.qno = 1;
            this.currentque = 0;
            var totalque = quiz.results.length;


            this.displayQuiz = function(cque) {
                this.currentque = cque;
                if (this.currentque < totalque) {
                    $("#tque").html(totalque);
                    $("#previous").attr("disabled", false);
                    $("#next").attr("disabled", false);
                    $("#qid").html(quiz.results[this.currentque].id + '.');


                    $("#question").html(quiz.results[this.currentque].soal);
                    $("#question-options").html("");

                    $("#question-options").append(
                        `<div class="form-group">
                            <div class="custom-control custom-radio">
                                <input id="question1" type="radio" name="question" value="${quiz.results[this.currentque].jawaban_a}" class="custom-control-input">
                                <label for="question1"
                                    class="custom-control-label">${ quiz.results[this.currentque].jawaban_a }</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input id="question2" type="radio" name="question" value="${quiz.results[this.currentque].jawaban_b}" class="custom-control-input">
                                <label for="question2"
                                    class="custom-control-label">${ quiz.results[this.currentque].jawaban_b }</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input id="question3" type="radio" name="question" value="${quiz.results[this.currentque].jawaban_c}" class="custom-control-input">
                                <label for="question3"
                                    class="custom-control-label">${ quiz.results[this.currentque].jawaban_c }</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input id="question4" type="radio" name="question" value="${quiz.results[this.currentque].jawaban_c}" class="custom-control-input">
                                <label for="question4"
                                    class="custom-control-label">${ quiz.results[this.currentque].jawaban_c }</label>
                            </div>
                        </div>`
                    );
                }
                if (this.currentque <= 0) {
                    $("#previous").attr("disabled", true);
                }
                if (this.currentque >= totalque) {
                    $('#next').attr('disabled', true);
                    for (var i = 0; i < totalque; i++) {
                        this.score = this.score + quiz.JS[i].score;
                    }
                    return this.showResult(this.score);
                }
            }

            this.checkAnswer = function(option) {
                var answer = quiz.JS[this.currentque].answer;
                option = option.replace(/\</g, "&lt;") //for <
                option = option.replace(/\>/g, "&gt;") //for >
                option = option.replace(/"/g, "&quot;")

                if (option == quiz.JS[this.currentque].answer) {
                    if (quiz.JS[this.currentque].score == "") {
                        quiz.JS[this.currentque].score = 1;
                        quiz.JS[this.currentque].status = "correct";
                    }
                } else {
                    quiz.JS[this.currentque].status = "wrong";
                }

            }

            this.changeQuestion = function(cque) {
                this.currentque = this.currentque + cque;
                this.displayQuiz(this.currentque);

            }

        }

        var jsq = new quizApp();

        var selectedopt;
        $(document).ready(function() {
            // alert('ok')
            jsq.displayQuiz(0);

            $('#question-options').on('change', 'input[type=radio][name=option]', function(e) {

                //var radio = $(this).find('input:radio');
                $(this).prop("checked", true);
                selectedopt = $(this).val();
            });



        });

        $('#next').click(function(e) {
            e.preventDefault();
            if (selectedopt) {
                jsq.checkAnswer(selectedopt);
            }
            jsq.changeQuestion(1);
        });

        $('#previous').click(function(e) {
            e.preventDefault();
            if (selectedopt) {
                jsq.checkAnswer(selectedopt);
            }
            jsq.changeQuestion(-1);
        });

        $(document).ready(function() {
            // alert('ok')
            $("input[name='question']").change(function() {
                var radio = $("input[type='radio'][name='question']:checked");
                var next  = $('#next');
                if (radio == undefined) {
                    next.removeAttr = disabled
                }
            });

        });
    </script>
@endpush
