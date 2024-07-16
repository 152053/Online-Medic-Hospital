<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PatientDashboardController;
use App\Http\Controllers\VitalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PatientController;

Route::get("/", function () {
    return view('welcome');
})->name('home');

// Show the register form
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Save the register form to the database
Route::post('register', [RegisterController::class, 'register']);

// Show the login form
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

// Authenticate and login the user
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


// About Us page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route for displaying the contact form
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route for submitting the contact form
Route::post('/contact-submit', function () {
    // Handle form submission logic here
})->name('contact.submit');
//Route for getting and Submitting Review form
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');

// Dashboard routes based on roles
Route::get('/home', [DashboardController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/doctor/dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');
Route::get('/patient/dashboard', [PatientController::class, 'dashboard'])->name('patient.dashboard');

// Routes for appointments
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

// Routes for Vitals storage
Route::post('/patient/store-vitals', [VitalController::class, 'store'])->name('vitals.store');

// Routes for patient dashboard functionalities
Route::prefix('patient')->middleware('auth')->group(function () {
    Route::get('dashboard', [PatientDashboardController::class, 'index'])->name('patient.dashboard');
    Route::get('doctors', [PatientDashboardController::class, 'viewDoctors'])->name('patient.doctors');
    Route::get('appointments', [PatientDashboardController::class, 'viewAppointments'])->name('patient.appointments');
    Route::get('consultations', [PatientDashboardController::class, 'viewConsultations'])->name('patient.consultations');
    Route::get('prescriptions', [PatientDashboardController::class, 'viewPrescriptions'])->name('patient.prescriptions');
    Route::get('reviews', [PatientDashboardController::class, 'viewReviews'])->name('patient.reviews');
    Route::get('payments', [PatientDashboardController::class, 'viewPayments'])->name('patient.payments');
    Route::get('medical-records', [PatientDashboardController::class, 'viewMedicalRecords'])->name('patient.medical_records');
    Route::get('vitals', function () {
        return view('vitals');
    })->name('patient.vitals');
    Route::post('submit-consultation-request', [ConsultationController::class, 'submitConsultationRequest'])->name('submitConsultationRequest');
});

// Routes for doctor dashboard functionalities
Route::prefix('doctor')->middleware('auth')->group(function () {
    Route::get('dashboard', [ConsultationController::class, 'dashboard'])->name('doctor.dashboard');
    Route::post('consultation/approve', [ConsultationController::class, 'approveConsultation'])->name('consultation.approve');
    Route::get('appointments', 'DoctorController@listAppointments')->name('doctor.appointments');
    Route::get('reviews', 'DoctorController@listReviews')->name('doctor.reviews');
    Route::get('consultation/{id}/vitals', [ConsultationController::class, 'viewVitals'])->name('consultation.viewVitals');Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});

// Routes for admin dashboard functionalities
Route::get('/admin/doctors', [DoctorController::class, 'index'])->name('doctors.list');
Route::get('/admin/appointments', [AppointmentController::class, 'index'])->name('appointments.manage');
Route::get('/admin/payments', [PaymentController::class, 'index'])->name('payments.manage');
Route::get('/admin/database', [AdminController::class, 'manageDatabase'])->name('database.manage');
