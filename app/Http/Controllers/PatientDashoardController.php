<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Consultation;
use App\Models\Prescription;
use App\Models\Review;
use App\Models\Payment;
use App\Models\MedicalRecord;
use App\Models\Vital;

class PatientDashboardController extends Controller
{
    public function index()
    {
        return view('patientdashboard');
    }

    public function viewDoctors()
    {
        $doctors = Doctor::all();
        return view('patient.doctors', compact('doctors'));
    }

    public function viewAppointments()
    {
        $patientId = Auth::id();
        $appointments = Appointment::where('patient_id', $patientId)->get();
        return view('patient.appointments', compact('appointments'));
    }

    public function viewConsultations()
    {
        $patientId = Auth::id();
        $consultations = Consultation::where('patient_id', $patientId)->get();
        return view('patient.consultations', compact('consultations'));
    }

    public function viewPrescriptions()
    {
        $patientId = Auth::id();
        $prescriptions = Prescription::where('patient_id', $patientId)->get();
        return view('patient.prescriptions', compact('prescriptions'));
    }

    public function viewReviews()
    {
        $patientId = Auth::id();
        $reviews = Review::where('patient_id', $patientId)->get();
        return view('patient.reviews', compact('reviews'));
    }

    public function viewPayments()
    {
        $patientId = Auth::id();
        $payments = Payment::where('patient_id', $patientId)->get();
        return view('patient.payments', compact('payments'));
    }

    public function viewMedicalRecords()
    {
        $patientId = Auth::id();
        $medicalRecords = MedicalRecord::where('patient_id', $patientId)->get();
        return view('patient.medical_records', compact('medicalRecords'));
    }
    public function storeVitals(Request $request)
    {
        // Validation rules
        $request->validate([
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'temperature' => 'required|numeric',
            'blood_pressure' => 'required|string',
        ]);

        // Create a new Vital record
        Vital::create([
            'patient_id' => Auth::id(), // Assuming patient_id is stored in your vitals table
            'height' => $request->height,
            'weight' => $request->weight,
            'temperature' => $request->temperature,
            'blood_pressure' => $request->blood_pressure,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Vitals recorded successfully!');
    }
}

