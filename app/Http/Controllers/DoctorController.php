<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Review;
use App\Models\Consultation;

class DoctorController extends Controller
{
    /**
     * Display a listing of doctors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the doctor dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function listAppointments()
    {
        // List appointments logic
        $appointments = Appointment::where('doctor_id', auth()->id())->get(); // Example query to fetch appointments for the logged-in doctor
        return view('appointments.index', compact('appointments'));
    }

    /**
     * List reviews for the doctor.
     *
     * @return \Illuminate\Http\Response
     */
    public function listReviews()
    {
        // List reviews logic
        $reviews = Review::where('doctor_id', auth()->id())->get(); // Example query to fetch reviews for the logged-in doctor
        return view('reviews.index', compact('reviews'));
    }

    public function dashboard()
{
    $consultation = Consultation::where('doctor_id', auth()->id())->where('status', 'Pending')->first();
    return view('doctor-dashboard', compact('consultation'));
}


    public function approveConsultation(Request $request)
    {
        $consultation = Consultation::find($request->consultation_id);
        $consultation->status = 'approved';
        $consultation->save();

        return redirect()->route('doctor.dashboard')->with('success', 'Consultation approved successfully.');
    }
}