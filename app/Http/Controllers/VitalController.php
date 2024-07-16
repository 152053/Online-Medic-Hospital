<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vital;

class VitalController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'temperature' => 'required|numeric',
            'blood_pressure' => 'required|string|max:255',
        ]);

        // Create a new Vital record using mass assignment
        $vital = Vital::create([
            'patient_id' => auth()->user()->id, // Assuming authenticated user's ID
            'height' => $validated['height'],
            'weight' => $validated['weight'],
            'temperature' => $validated['temperature'],
            'blood_pressure' => $validated['blood_pressure'],
        ]);

        // Optionally, you can redirect the user after successful submission
        return redirect()->back()->with('success', 'Vitals recorded successfully.');
    }
}
