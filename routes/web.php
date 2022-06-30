<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\WelcomeLetter;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;



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

// login page route
Route::get('/', function () {
    return view('outside.login');
});

// forgot password Route
Route::get('/forgot', function () {
    return view('outside.forgot_password');
});

// Route to the Dashboard

Route::get('/dashboard',[DashboardController::class,'dashboard']);

// The Login Route here
Route::post('/login',[LoginController::class,'login']);

// route to all students
Route::get('/all_students', function () {
    return view('hod.all_students');
});

// route to supervision here
Route::get('/supervision', function () {
    return view('hod.supervision');
});

// field Arrival
Route::get('/field_arrival', function () {
    return view('hod.field_arrival');
});

// Route to all supervisors
Route::get('/all_supervisors', function () {
    return view('hod.all_supervisors');
});

// add new company here
Route::get('/add_company', function () {
    return view('hod.add_company');
});

// 

// Browse companies route
Route::get('/browse_companies', function () {
    return view('common.browse_company');
});

// Self Allocate field session
Route::get('/self_allocate', function () {
    return view('student.self_allocate');
});
Route::post('/igot_field',[FieldController::class,'selfAllocate']);



// Route to create a commnt page
Route::get('/comment', function () {
    return view('student.comment');
});

// route to create a comment
Route::post('/commenting', [CommentsController::class,'commenting']);

// All comments list here
Route::get('/comments_list', function () {
    return view('common.comments');
});

// Students Allocations
Route::get('/allocations', function () {
    return view('common.allocations');
});

// Fill Logbook
Route::get('/fill_logbook', function () {
    return view('student.fill_logbook');
});

// Route to fill the logbook
Route::post('/fillLogbook', [LogbookController::class,'fillLogbook']);

// Uploading the Letters route here
Route::post('/upload',[WelcomeLetter::class,'upload']);

// show welcome letter
Route::get('/welcome_letter',[WelcomeLetter::class,'showLetter']);

// doenload welcome letter
Route::get('/download_welcome_letter',[WelcomeLetter::class,'downloadWelcome']);

// Download the application letter
Route::get('/download_application_letter',[WelcomeLetter::class,'downloadApplication']);

// Profile Controller
Route::get('/profile/{id}',[ProfileController::class,'gotoProfile']);

// Company adding route here
Route::post('/register_company',[CompanyController::class,'addCompany']);

// Supervisor Profile here
Route::get('/super_profile/{id}',[ProfileController::class,'supervisorProfile']);

// Preview Logbook here
Route::get('/logbook_preview',[LogbookController::class,'previewLogbook']);

// Logbook Preview 
Route::get('/', function () {
    return view('common.');
});
