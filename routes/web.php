<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//show the register form
Route::get('/register', function () {
    return view('register');
})->name('register');

//save the register form to the database
Route::post('/saveRegister', 'App\Http\Controllers\RegisterController@saveRegister')->name('saveRegister');

//show the login form
Route::get('/login', function () {
    return view('login');
})->name('login');

// Authenticate and login the user
Route::post('/saveLogIn', 'App\Http\Controllers\LogInController@saveLogIn')->name('saveLogIn');

//show the dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//save the register form to the database
Route::post('/Dashboard', 'App\Http\Controllers\RegisterController@Dashboard')->name('Dashboard');

Route::middleware(['auth', 'role:patient'])->group(function () {
    Route::get('/patient/dashboard', [DashboardController::class, 'patientDashboard'])->name('patient.dashboard');
});

Route::middleware(['auth', 'role:doctor'])->group(function () {
    Route::get('/doctor/dashboard', [DashboardController::class, 'doctorDashboard'])->name('doctor.dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
});