<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::where('user_id', auth()->id())->get();
        return view('appointments.index', compact('appointments'));
    }
    // Display the appointment request form
    public function create()
    {
        return view('appointments.create');
    }

    // Store a new appointment
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email_address' => 'required|string|email|max:255',
            'preferred_date' => 'required|date',
            'preferred_time' => 'required',
            'alternative_datetime' => 'nullable|date_format:Y-m-d H:i',
            'services_interested' => 'nullable|string',
        ]);

        Appointment::create($data);

        return redirect()->route('home')->with('success', 'Appointment requested successfully!');
    }
}
