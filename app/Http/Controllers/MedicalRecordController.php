<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MedicalRecord;

class MedicalRecordController extends Controller
{
    public function index()
    {
        // Example query to fetch all medical records
        $medicalRecords = MedicalRecord::where('patient_username', auth()->id())->get();

        return view('medical_records.index', compact('medicalRecords'));
    }

    // Example method to store a new medical record
    public function store(Request $request)
    {
        $data = $request->validate([
            'patient_id' => 'required|integer',
            'description' => 'required|string',
            // Add other fields as needed
        ]);

        $medicalRecord = MedicalRecord::create($data);

        return redirect()->route('medical.records')->with('success', 'Medical record created successfully!');
    }

    // Add other methods as needed for CRUD operations
}
