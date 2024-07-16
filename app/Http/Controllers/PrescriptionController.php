<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prescription;

class PrescriptionController extends Controller
{
    public function index()
    {
        // Example query to fetch all prescriptions
        $prescriptions = Prescription::where('patient_id', auth()->id())->get();

        return view('prescriptions.index', compact('prescriptions'));
    }

    // Example method to store a new prescription
    public function store(Request $request)
    {
        $data = $request->validate([
            'patient_id' => 'required|integer',
            'doctor_id' => 'required|integer',
            'details' => 'required|string',
            // Add other fields as needed
        ]);

        $prescription = Prescription::create($data);

        return redirect()->route('prescriptions.list')->with('success', 'Prescription created successfully!');
    }

    // Add other methods as needed for CRUD operations
}
