<?php

// Public & Student
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Client\LicensesController;
use App\Http\Controllers\Master\CourseController;
use App\Http\Controllers\Master\SubjectsController;

// Teacher
use App\Http\Controllers\Teacher\DashboardController;
use App\Http\Controllers\Teacher\InboxController;
use App\Http\Controllers\Teacher\CalendarController;
use App\Http\Controllers\Teacher\TaskController;
use App\Http\Controllers\Teacher\ClassController;
use App\Http\Controllers\Teacher\SettingController;
use App\Http\Controllers\Teacher\CourseController as Course;

// student
use App\Http\Controllers\Student\TaskController as StudentTask;

// Headmaster 
use App\Http\Controllers\Headmaster\DashboardController as HeadmasterDashboard;
use App\Http\Controllers\HomeController;
// Config
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
    | Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test', [HomeController::class, 'test'])->name('test');
// route auth 
// Route::get('/', [AuthController::class, 'index']);
Route::post('/checkdomain',     [AuthController::class, 'checkdomain'])->name('checkdomain');
Route::get('/activation',       [AuthController::class, 'checkActivationAccountView'])->name('activation');
Route::post('/activation',      [AuthController::class, 'checkActivationAccount'])->name('activation');
Route::get('/activation/form',  [AuthController::class, 'activationAccountView'])->name('activation.form');
Route::post('/activation/form', [AuthController::class, 'activationAccountForm'])->name('activation.form');
// Route::post('/login', [AuthController::class, 'store']);
// Route::get('', 'AuthController@index');
Route::get('/login',            [AuthController::class, 'login'])->name('login');
Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/callbacklogin',    [AuthController::class, 'callbackLogin'])->name('callbacklogin');
Route::get('/logout',           [AuthController::class, 'logout'])->name('logout');
Route::post('/login',           [AuthController::class, 'auth'])->name('login');
// Route::post('signin', 'AuthController@store');
Route::post('/authcallback',    [AuthController::class, 'authCallback'])->name('authcallback');
Route::resource('signin', AuthController::class);


// Route::post('signin', [AuthTest::class, 'store']);
// licennses 
Route::get('/', [LicensesController::class, 'index'])->name('registration');
Route::get('/registration', [LicensesController::class, 'index'])->name('registration');
Route::get('/registration/store', [LicensesController::class, 'store'])->name('registration.store');
Route::get('/registration/daftarsekolah', [LicensesController::class, 'create'])->name('registration.daftarsekolah');
Route::post('/registration/daftarsekolah', [LicensesController::class, 'daftarSekolah'])->name('registration.daftarsekolah');

// route wilaya
Route::get('/province', [LicensesController::class, 'province'])->name('province');


Route::get('/loginas', function () {
    return view('pages.student');
});


Route::get('/forgot-password', function () {
    return view('pages.forgot-pass');
});

// 
Route::middleware(['permission'])->group(function () {

    Route::get('/student/profile', [StudentController::class, 'profile']);
    Route::get('/student/course',  [SubjectsController::class, 'index'])->name('student.course');

    // route task 
    Route::get('/student/task', [StudentTask::class, 'index'])->name('index');
    Route::get('/student/task/task-detail', [StudentTask::class, 'taskDetail'])->name('student.task.task-detail');
    Route::get('/student/task/{id}', [StudentTask::class, 'taskId'])->name('student.task');

    Route::get('/student/inbox', [StudentController::class, 'inbox'])->name('student.inbox');
    Route::get('/student/setting', [StudentController::class, 'setting'])->name('student.setting');
    Route::get('/student/file', [StudentController::class, 'file'])->name('student.file');
    Route::get('/student/calendar', [StudentController::class, 'calendar'])->name('student.calendar');
    Route::resource('student', StudentController::class);
    // coure route
    Route::get('/student/course/{id}/{slug}', [CourseController::class, 'index'])->name('student.course');
    Route::get('/student/course/{id}', [CourseController::class, 'index'])->name('student.course');
});


Route::get('/student/calendar', function () {
    return view('pages.student.calendar');
});

Route::get('/student/task/do', function () {
    return view('pages.student.task-detail');
});
Route::get('/student/task/multiple', function () {
    return view('pages.student.task-multiple');
});

// route dasboard
// Route::get('/teacher', [DashboardController::class, 'index'])->name('index');
// Route::get('/teacher/dashboard', [DashboardController::class, 'index'])->name('index');

//============ router teacher  =================//
Route::middleware(['permission'])->group(function () {

    // // route dasboard
    Route::get('/teacher', [DashboardController::class, 'index'])->name('index');
    Route::get('/teacher/dashboard', [DashboardController::class, 'index'])->name('index');
    Route::get('/teacher/livesession', [DashboardController::class, 'livesession'])->name('livesession');

    // route inbox
    Route::get('/teacher/inbox', [InboxController::class, 'index'])->name('index');

    // route calendar
    Route::get('/teacher/calendar', [CalendarController::class, 'index'])->name('index');

    // route task 
    Route::get('/teacher/task', [TaskController::class, 'index'])->name('index');
    Route::get('/teacher/new-task', [TaskController::class, 'newTask'])->name('teacher.new-task');

    // Records list
    Route::get('/teacher/records', [TaskController::class, 'records'])->name('teacher.records');

    Route::post('/teacher/new-task', [TaskController::class, 'addTask'])->name('teacher.new-task');
    // Route::post('/add-task', [TaskController::class, 'addTask'])->name('add-task');
    Route::get('/teacher/new-project', [TaskController::class, 'newProject'])->name('teacher.new-project');

    // route class
    Route::get('/teacher/new-class', [ClassController::class, 'index'])->name('index');
    Route::post('/teacher/add_livesession', [ClassController::class, 'store'])->name('store');

    // route setting
    Route::get('/teacher/setting', [SettingController::class, 'index'])->name('index');

    // route course
    Route::get('/teacher/course', [Course::class, 'index'])->name('index');

    // roiute class id

    Route::get('/teacher/file', function () {
        return view('pages.teacher.file');
    });
});
Route::get('/mst_class_id', [TaskController::class, 'mstClassId'])->name('mstClassId');
Route::get('/mst_course_id', [TaskController::class, 'mstCourseId'])->name('mstCourseId');
Route::get('/mst_soal_id', [TaskController::class, 'mstSoalId'])->name('mstSoalId');

/*
|--------------------------------------------------------------------------
| Routes for Headmaster Role.
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for headmaster role.
| Simply tell URIs it should respond to and give it the Closure 
| to call when that URI is requested.
|
*/

Route::middleware(['permission'])->group(function () {
    // Dashboard
    Route::get('/headmaster', [HeadmasterDashboard::class, 'index'])->name('headmaster.dashboard');

    Route::get('/headmaster/dashboard', [HeadmasterDashboard::class, 'index'])->name('headmaster.dashboard');

    // Inbox
    Route::get('/headmaster/inbox', [InboxController::class, 'index'])->name('headmaster.inbox');

    // Calendar
    Route::get('/headmaster/calendar', [CalendarController::class, 'index'])->name('headmaster.inbox');

    // Master Data
    Route::get('/headmaster/master-data/{role?}', [\App\Http\Controllers\Headmaster\MasterDatasController::class, 'index'])->name('headmaster.masterdata');

    // Create new data 
    Route::get('/headmaster/master-data/add/{role?}', [\App\Http\Controllers\Headmaster\MasterDatasController::class, 'create'])->name('headmaster.create');
    Route::post('/headmaster/master-data/add/{role?}', [\App\Http\Controllers\Headmaster\MasterDatasController::class, 'store'])->name('headmaster.store');

    // Update data
    Route::post('/headmaster/master-data/{role?}/edit/{id}', [\App\Http\Controllers\Headmaster\MasterDatasController::class, 'store'])->name('headmaster.store');

    // Records list
    Route::get('/headmaster/master-data/records/{role?}', [\App\Http\Controllers\Headmaster\MasterDatasController::class, 'records'])->name('headmaster.records');

    // Delete data
    Route::delete('/headmaster/master-data/records/{role?}/delete/{id}', [\App\Http\Controllers\Headmaster\MasterDatasController::class, 'delete'])->name('headmaster.records.delete');

    // Edit
    Route::get('/headmaster/master-data/{role?}/edit/{id}', [\App\Http\Controllers\Headmaster\MasterDatasController::class, 'create'])->name('headmaster.edit');
});

// Calendar
Route::get('/headmaster/calendar', [CalendarController::class, 'index'])->name('index');


// alamat

Route::get('/province', [LicensesController::class, 'province'])->name('province');
Route::get('/getKabupaten/{parent_id}', [LicensesController::class, 'getKabupaten'])->name('getKabupaten');
Route::get('/getKecamatan/{parent_id}', [LicensesController::class, 'getKecamatan'])->name('getKecamatan');
Route::get('/getKelurahan/{parent_id}', [LicensesController::class, 'getKelurahan'])->name('getKelurahan');
