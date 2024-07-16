<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use App\Models\Consultation;
use App\Models\Review;


class DoctorDashboardController extends Controller
{
    public function index()
    {
        // Example: Fetch appointments for the logged-in doctor
        $appointments = Appointment::where('doctor_id', Auth::id())->get();
        return view('doctor.dashboard', compact('appointments'));
    }

    public function viewConsultations()
    {
        // Example: Fetch consultations for the logged-in doctor
        $consultations = Consultation::where('doctor_id', Auth::id())->get();
        return view('doctor.consultations', compact('consultations'));
    }

    public function viewReviews()
    {
        // Example: Fetch reviews for the logged-in doctor
        $reviews = Review::where('doctor_id', Auth::id())->get();
        return view('doctor.reviews', compact('reviews'));
    }
}
