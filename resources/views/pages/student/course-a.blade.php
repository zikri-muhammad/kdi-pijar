@extends('layouts.dashboard')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <!-- page title      -->
        <div class="container-fluid page__heading-container">
            <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <h1 class="m-lg-0">{{ $shows['name'] }}</h1>
            </div>
        </div>
        <!-- content              -->
        <div class="container-fluid page__container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-tabs-basic nav" role="tablist">
                            <a href="#course_video" class="active" data-toggle="tab" role="tab"
                                aria-controls="activity_video" aria-selected="true">Video Pembelajaran</a>
                            <a href="#course_latihan" data-toggle="tab" role="tab" aria-selected="false">Latihan Soal</a>
                            {{-- <a href="#course_quiz" data-toggle="tab" role="tab" aria-selected="false">Quiz</a> --}}
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane active show fade" id="course_video">
                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="embed-responsive embed-responsive-16by9 mb-4"
                                            style="max-height:420px; background: #000;">
                                            <video width="100%" height="450" controls>
                                                <source src="{{ url('assets/vidio/' . $items['vidio']) }}" type="video/mp4">
                                                {{-- <source src="movie.ogg" type="video/ogg"> --}}

                                            </video>
                                        </div>

                                        <div class="card mt-4">
                                            <div class="card-header card-header-tabs-basic nav border-top" role="tablist">
                                                <a href="#overview" class="active" data-toggle="tab" role="tab"
                                                    aria-controls="overview" aria-selected="true">Overview</a>
                                                {{-- <a href="#assets" data-toggle="tab" role="tab" aria-selected="false">Rating</a> --}}
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="overview">
                                                    <div class="card-body" id="course_content">
                                                        <div class="h-150" data-toggle="quill"
                                                            data-quill-placeholder="Quill WYSIWYG editor">
                                                            <p>{{ $items['descriptions'] }}</p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="assets">
                                                    //assets
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div data-perfect-scrollbar style="position: relative; height:400px;">
                                            <div class="card mb-0">
                                                <div class="card-body bg-primary text-white">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <strong>Pilih Materi Pembelajaran</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-group list-group-fit">
                                                @foreach ($show as $item)
                                                    <li class="list-group-item">
                                                        <a href="{{ $item['slug'] }}" class="media align-items-center">
                                                            <span class="media-left mr-2">
                                                                <span
                                                                    class="btn btn-light btn-sm">{{ $item['code'] }}</span>
                                                            </span>
                                                            <span class="media-body">
                                                                {{ $item['name'] }}
                                                            </span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="course_latihan">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <h4 class="m-0 text-primary mr-2"><strong id="qid"></strong></h4>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="card-title m-0">
                                                            <h5><span id="question"></span></h5>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body" id="question-options">
                                                
                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-light">Skip</a>
                                                <a href="#" class="btn btn-success float-right" id="next">Next <i
                                                        class="material-icons btn__icon--right">arrow_forward</i></a>
                                            </div>
                                        </div>
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <div class="media align-items-center justify-content-center">
                                                    <div class="media-left">
                                                        <h4 class="m-0 text-primary mr-2"><strong>Jawaban Benar adalah <span
                                                                    class="text-success">B</span></strong></h4>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <a href="#" class="list-group-item">
                                                <span class="media align-items-center">
                                                    <span class="media-left mr-2">
                                                        <span class="btn btn-light btn-sm">#8</span>
                                                    </span>
                                                    <span class="media-body">
                                                        What's the difference between private and public repos?
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="#" class="list-group-item active">
                                                <span class="media align-items-center">
                                                    <span class="media-left mr-2">
                                                        <span class="btn btn-light btn-sm">#9</span>
                                                    </span>
                                                    <span class="media-body">
                                                        Github command to deploy comits?
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="#" class="list-group-item">
                                                <span class="media align-items-center">
                                                    <span class="media-left mr-2">
                                                        <span class="btn btn-light btn-sm">#10</span>
                                                    </span>
                                                    <span class="media-body">
                                                        What's the difference between private and public repos?
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="#" class="list-group-item">
                                                <span class="media align-items-center">
                                                    <span class="media-left mr-2">
                                                        <span class="btn btn-light btn-sm">#11</span>
                                                    </span>
                                                    <span class="media-body">
                                                        What is the purpose of a branch?
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="#" class="list-group-item">
                                                <span class="media align-items-center">
                                                    <span class="media-left mr-2">
                                                        <span class="btn btn-light btn-sm">#12</span>
                                                    </span>
                                                    <span class="media-body">
                                                        Final Question?
                                                    </span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="course_quiz">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <h4 class="m-0 text-primary mr-2"><strong>#9</strong></h4>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="card-title m-0">
                                                            Github command to deploy comits?
                                                        </h4>
                                                    </div>
                                                    <div class="col-md-3 text-right pr-md-0">
                                                        <h4 class="card-title m-0 text-warning">
                                                            01:00:00
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body" id="question-options">
                                                <div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                        <input id="question1" type="radio" checked="" name="question"
                                                            class="custom-control-input">
                                                        <label for="question1" class="custom-control-label">A. Jawaban
                                                            1</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                        <input id="question2" type="radio" checked="" name="question"
                                                            class="custom-control-input">
                                                        <label for="question2" class="custom-control-label">B. Jawaban
                                                            2</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                        <input id="question3" type="radio" checked="" name="question"
                                                            class="custom-control-input">
                                                        <label for="question3" class="custom-control-label">C. Jawaban
                                                            3</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                        <input id="question4" type="radio" checked="" name="question"
                                                            class="custom-control-input">
                                                        <label for="question4" class="custom-control-label">D. Jawaban
                                                            4</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-light">Skip</a>
                                                <a href="#" class="btn btn-success float-right">Next <i
                                                        class="material-icons btn__icon--right">arrow_forward</i></a>
                                            </div>
                                        </div>
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <div class="media align-items-center justify-content-center">
                                                    <div class="media-left">
                                                        <h4 class="m-0 text-primary mr-2"><strong>Jawaban Benar adalah <span
                                                                    class="text-success">B</span></strong></h4>
                                                    </div>
                                                </div>
                                            </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection


@push('scripts')
    <script>
        /* Created and coded by Abhilash Narayan */
        /* Quiz source: w3schools.com */

        var quiz = {
            "JS": [{
                    "id": 1,
                    "question": "Inside which HTML element do we put the JavaScript?",
                    "options": [{
                        "a": "&lt;script&gt;",
                        "b": "&lt;javascript&gt;",
                        "c": "&lt;scripting&gt;",
                        "d": "&lt;js&gt;"
                    }],
                    "answer": "&lt;script&gt;",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 2,
                    "question": "Where is the correct place to insert a JavaScript?",
                    "options": [{
                        "a": "The &lt;head&gt; section",
                        "b": "The &lt;body&gt; section",
                        "c": "Both the &lt;head&gt; section and the &lt;body&gt; section are correct"
                    }],
                    "answer": "Both the &lt;head&gt; section and the &lt;body&gt; section are correct",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 3,
                    "question": "What is the correct syntax for referring to an external script called 'xxx.js'?",
                    "options": [{
                        "a": "&ltscript href=&quot;xxx.js&quot;>",
                        "b": "&lt;script name=&quot;xxx.js&quot;&gt;",
                        "c": "&lt;script src=&quot;xxx.js&quot;&gt;"
                    }],
                    "answer": "&lt;script src=&quot;xxx.js&quot;&gt;",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 4,
                    "question": "The external JavaScript file must contain the &lt;script&gt; tag.",
                    "options": [{
                        "a": "True",
                        "b": "False"
                    }],
                    "answer": "False",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 5,
                    "question": "How do you write &quot;Hello World&quot; in an alert box?",
                    "options": [{
                        "a": "alertBox(&quot;Hello World&quot;);",
                        "b": "msg(&quot;Hello World&quot;);",
                        "c": "alert(&quot;Hello World&quot;);",
                        "d": "msgBox(&quot;Hello World&quot;);",
                    }],
                    "answer": "alert(&quot;Hello World&quot;);",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 6,
                    "question": "How do you create a function in JavaScript?",
                    "options": [{
                        "a": "function myFunction()",
                        "b": "function:myFunction()",
                        "c": "function = myFunction()",
                    }],
                    "answer": "function myFunction()",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 7,
                    "question": "How do you call a function named &quot;myFunction&quot;?",
                    "options": [{
                        "a": "call function myFunction()",
                        "b": "call myFunction()",
                        "c": "myFunction()",
                    }],
                    "answer": "myFunction()",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 8,
                    "question": "How to write an IF statement in JavaScript?",
                    "options": [{
                        "a": "if i = 5 then",
                        "b": "if i == 5 then",
                        "c": "if (i == 5)",
                        "d": " if i = 5",
                    }],
                    "answer": "if (i == 5)",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 9,
                    "question": "Which of the following is a disadvantage of using JavaScript?",
                    "options": [{
                        "a": "Client-side JavaScript does not allow the reading or writing of files.",
                        "b": "JavaScript can not be used for Networking applications because there is no such support available.",
                        "c": "JavaScript doesn't have any multithreading or multiprocess capabilities.",
                        "d": "All of the above."
                    }],
                    "answer": "All of the above.",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 10,
                    "question": "How to write an IF statement for executing some code if &quot;i&quot; is NOT equal to 5?",
                    "options": [{
                        "a": "if (i <> 5)",
                        "b": "if i <> 5",
                        "c": "if (i != 5)",
                        "d": "if i =! 5 then",
                    }],
                    "answer": "if (i != 5)",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 11,
                    "question": "How does a WHILE loop start?",
                    "options": [{
                        "a": "while i = 1 to 10",
                        "b": "while (i &lt;= 10; i++)",
                        "c": "while (i &lt;= 10)"
                    }],
                    "answer": "while (i &lt;= 10)",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 12,
                    "question": "How does a FOR loop start?",
                    "options": [{
                        "a": "for (i = 0; i &lt;= 5)",
                        "b": "for (i = 0; i &lt;= 5; i++)",
                        "c": "for i = 1 to 5",
                        "d": "for (i &lt;= 5; i++)"
                    }],
                    "answer": "for (i = 0; i &lt;= 5; i++)",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 13,
                    "question": "How can you add a comment in a JavaScript?",
                    "options": [{
                        "a": "//This is a comment",
                        "b": "&sbquo;This is a comment",
                        "c": "&lt;!--This is a comment--&gt;"
                    }],
                    "answer": "//This is a comment",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 14,
                    "question": "How to insert a comment that has more than one line?",
                    "options": [{
                        "a": "/*This comment has more than one line*/",
                        "b": "//This comment has more than one line//",
                        "c": "&lt;!--This comment has more than one line--&gt;"
                    }],
                    "answer": "/*This comment has more than one line*/",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 15,
                    "question": "What is the correct way to write a JavaScript array?",
                    "options": [{
                        "a": "var colors = (1:&quot;red&quot;, 2:&quot;green&quot;, 3:&quot;blue&quot;)",
                        "b": "var colors = [&quot;red&quot;, &quot;green&quot;, &quot;blue&quot;]",
                        "c": "var colors = 1 = (&quot;red&quot;), 2 = (&quot;green&quot;), 3 = (&quot;blue&quot;)",
                        "d": "var colors = &quot;red&quot;, &quot;green&quot;, &quot;blue&quot;"
                    }],
                    "answer": "var colors = [&quot;red&quot;, &quot;green&quot;, &quot;blue&quot;]",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 16,
                    "question": "How do you round the number 7.25, to the nearest integer?",
                    "options": [{
                        "a": "rnd(7.25)",
                        "b": "Math.round(7.25)",
                        "c": "Math.rnd(7.25)",
                        "d": "round(7.25)"
                    }],
                    "answer": "Math.round(7.25)",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 17,
                    "question": "How do you find the number with the highest value of x and y?",
                    "options": [{
                        "a": "Math.max(x, y)",
                        "b": "Math.ceil(x, y)",
                        "c": "top(x, y)",
                        "d": "ceil(x, y)"
                    }],
                    "answer": "Math.max(x, y)",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 18,
                    "question": "What is the correct JavaScript syntax for opening a new window called &quot;w2&quot;?",
                    "options": [{
                        "a": "w2 = window.new(&quot;http://www.w3schools.com&quot;);",
                        "b": "w2 = window.open(&quot;http://www.w3schools.com&quot;);"

                    }],
                    "answer": "w2 = window.open(&quot;http://www.w3schools.com&quot;);",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 19,
                    "question": "JavaScript is the same as Java.",
                    "options": [{
                        "a": "true",
                        "b": "false"

                    }],
                    "answer": "false",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 20,
                    "question": "How can you detect the client&rsquo;s browser name?",
                    "options": [{
                        "a": "navigator.appName",
                        "b": "browser.name",
                        "c": "client.navName"
                    }],
                    "answer": "navigator.appName",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 21,
                    "question": "Which event occurs when the user clicks on an HTML element?",
                    "options": [{
                        "a": "onchange",
                        "b": "onclick",
                        "c": "onmouseclick",
                        "d": "onmouseover"
                    }],
                    "answer": "onclick",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 22,
                    "question": "How do you declare a JavaScript variable?",
                    "options": [{
                        "a": "var carName;",
                        "b": "variable carName;",
                        "c": "v carName;"
                    }],
                    "answer": "var carName;",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 23,
                    "question": "Which operator is used to assign a value to a variable?",
                    "options": [{
                        "a": "*",
                        "b": "-",
                        "c": "=",
                        "d": "x"
                    }],
                    "answer": "=",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 24,
                    "question": "What will the following code return: Boolean(10 &gt; 9)",
                    "options": [{
                        "a": "NaN",
                        "b": "false",
                        "c": "true"
                    }],
                    "answer": "true",
                    "score": 0,
                    "status": ""
                },
                {
                    "id": 25,
                    "question": "Is JavaScript case-sensitive?",
                    "options": [{
                        "a": "No",
                        "b": "Yes"
                    }],
                    "answer": "Yes",
                    "score": 0,
                    "status": ""
                }
            ]
        }



        var quizApp = function() {

            this.score = 0;
            this.qno = 1;
            this.currentque = 0;
            var totalque = quiz.JS.length;


            this.displayQuiz = function(cque) {
                this.currentque = cque;
                if (this.currentque < totalque) {
                    $("#tque").html(totalque);
                    $("#previous").attr("disabled", false);
                    $("#next").attr("disabled", false);
                    $("#qid").html(quiz.JS[this.currentque].id + '.');


                    $("#question").html(quiz.JS[this.currentque].question);
                    $("#question-options").html("");
                    for (var key in quiz.JS[this.currentque].options[0]) {
                        if (quiz.JS[this.currentque].options[0].hasOwnProperty(key)) {

                            $("#question-options").append(
                                `<div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input id="question1" type="radio" checked="" name="question" value="${quiz.JS[this.currentque].options[0][key]}" class="custom-control-input">
                                        <label for="question1"
                                            class="custom-control-label">${ quiz.JS[this.currentque].options[0][key] }</label>
                                    </div>
                                </div>`
                            );
                        }
                    }
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
    </script>
@endpush
