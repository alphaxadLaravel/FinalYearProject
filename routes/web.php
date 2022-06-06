<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FieldController;

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


// Welcome Letter route
Route::get('/welcome_letter', function () {
    return view('student.welcome_letter');
});

// Route to create a commnt page
Route::get('/comment', function () {
    return view('student.comment');
});

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

// Logbook Preview 
Route::get('/logbook_preview', function () {
    return view('common.logbook_preview');
});