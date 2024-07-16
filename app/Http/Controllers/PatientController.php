<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Consultation;
use App\Models\Review;
use App\Models\Prescription;

class PatientController extends Controller
{
    // Display the patient dashboard
    public function dashboard(Request $request)
    {
        $user = $request->user(); // Get the authenticated user from the request
        return view('patient.dashboard', compact('user'));
    }

    // Display the list of available doctors 
    public function listDoctors()
    {
        $doctors = User::where('role', 'doctor')->get(); 
        return view('patient.doctors', compact('doctors'));
    }

    // Display the list of appointments
    public function listAppointments(Request $request)
    {
        $appointments = Appointment::where('patient_username', $request->user()->id)->get(); // Get the authenticated user's ID from the request
        return view('patient.appointments', compact('appointments'));
    }

    // Request a consultation
    public function requestConsultation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'doctor_id' => 'required|integer',
            'details' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Consultation::create([
            'patient_username' => $request->user()->id,
            'doctor_id' => $request->doctor_id,
            'details' => $request->details,
        ]);

        return redirect()->route('patient.consultations')->with('success', 'Consultation request submitted successfully!');
    }

    // Display the list of consultation requests
    public function listConsultations(Request $request)
    {
        $consultations = Consultation::where('patient_username', $request->user()->id)->get();
        return view('patient.consultations', compact('consultations'));
    }

    // Display the list of prescriptions
    public function listPrescriptions(Request $request)
    {
        $prescriptions = Prescription::where('patient_username', $request->user()->id)->get();
        return view('patient.prescriptions', compact('prescriptions'));
    }

    // Display the list of reviews
    public function listReviews(Request $request)
    {
        $reviews = Review::where('patient_username', $request->user()->id)->get();
        return view('patient.reviews', compact('reviews'));
    }

    // Submit a new review
    public function submitReview(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'doctor_id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Review::create([
            'patient_username' => $request->user()->id,
            'doctor_id' => $request->doctor_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->route('patient.reviews')->with('success', 'Review submitted successfully!');
    }

    // Display the list of payments (assuming you have a payments view and model)
    public function listPayments(Request $request)
    {
        // Logic to fetch and display payment information
        return view('patient.payments');
    }

    // Display the list of medical records (assuming you have a medical records view and model)
    public function listMedicalRecords(Request $request)
    {
        // Logic to fetch and display medical records
        return view('patient.medical_records');
    }

    // Add more methods as needed for patient-specific actions
}
