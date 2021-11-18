<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\adminController;
use App\Http\controllers\authController;
use App\Models\user;
use App\Models\course;
use App\Models\specialitie;
use App\Models\timetable;
use App\Models\exam;



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

//group middleware to validate login
Route::group(['middleware'=>['isLoggedIn']],function(){
    Route::get('/index', function () {
        return view('index');
    });

//route for all courses page
    Route::get('/allCourses', [adminController::class,'allCourses']);
//route to view courses for each department
    Route::get('edit/{name}', [adminController::class,'showCourse']);

//route to create new course
    Route::view("/newCourse","newCourse");

//route to view all users
    Route::view("/allUser","allUser");
//to view each course in each department
    Route::view("/courses","courses");

//route to add new user
    Route::view("/newUser","newUser");

//route to add new lecturer
    Route::view("/newLecturer","newLecturer");

//route to view lecturers
    Route::view("/lecturer","lecturer");

//route to view all exams
    Route::view("/allExam","allExam");

//route to create new exams
    Route::view("/examAdd","examAdd");

//route to view all Enquiry
    Route::view("/viewInquiry","viewInquiry");

//route to view Enquiry
    Route::view("/enquiry","enquiry");

//route to view Time table
    Route::view("/timetable","timetable");

//route to submit new courses
    Route::Post('/addCourse',[adminController::class,'addCourse'])->name('addcourse');

//route to add new department
    Route::post('/depart',[adminController::class,'addDepart'])->name('depart');

//route to add Speciality to db
    Route::post('/addSpecial',[adminController::class,'addSpeciality'])->name('addSpecial');
//route for admin registration
    route::post('/signUp',[authController::class,'newUser'])->name('signUp');

    //route to create timetable
    route::post('/addTimetable',[adminController::class,'addTimeTable'])->name('addTimetable');

    //route to create exam timetable
    route::post('/exam',[adminController::class,'addExam'])->name('exam');
});

//route for header
Route::get('/header', function () {
    return view('header');
});
//route to view login
Route::get('/login',[authController::class,'login'])->middleware('alreadyLoggedIn');

//route for admin authentication
route::post('/login-user',[authController::class,'loginUser'])->name('login-user');

//route to logout
route::get('/logout',[authController::class,'logout']);

route::get('/', function (){
    return redirect('/login');
});

