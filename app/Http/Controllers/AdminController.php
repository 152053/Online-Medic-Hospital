<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Payment;

class AdminController extends Controller
{
    /**
     * Show the list of doctors.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctors', compact('doctors'));
    }

    /**
     * Show the list of appointments for management.
     *
     * @return \Illuminate\View\View
     */
    public function manageAppointments()
    {
        $appointments = Appointment::all();
        return view('admin.appointments', compact('appointments'));
    }

    /**
     * Show the list of payments for management.
     *
     * @return \Illuminate\View\View
     */
    public function managePayments()
    {
        $payments = Payment::all();
        return view('admin.payments', compact('payments'));
    }

    /**
     * Manage database operations.
     *
     * @return \Illuminate\View\View
     */
    public function manageDatabase()
    {
        // Your database management logic here
        return view('admin.database');
    }
}
