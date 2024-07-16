<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Validator;

class ConsultationController extends Controller
{
    public function dashboard()
    {
        $doctor = auth()->user();
        $consultation = Consultation::where('doctor_id', $doctor->id)
            ->with('patient', 'payments', 'reviews', 'appointments')
            ->first();

        return view('doctor-dashboard', compact('consultation'));
    }

    public function approveConsultation(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'consultation_id' => 'required|exists:consultations,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the consultation
        $consultation = Consultation::find($request->consultation_id);

        if ($consultation) {
            // Approve the consultation
            $consultation->status = 'approved';
            $consultation->save();

            return redirect()->route('doctor.dashboard')->with('success', 'Consultation approved successfully.');
        } else {
            // Consultation not found
            return back()->withInput()->withErrors(['consultation_id' => 'Consultation not found.']);
        }
    }
}
