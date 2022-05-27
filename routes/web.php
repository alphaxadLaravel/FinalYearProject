<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
