<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class DashboardController extends Controller
{

    public function MainDashboard()
    
    {
        $user = User::auth();
        
        if ($user->type == 'patient_id') {
            return redirect()->route('patient.dashboard');
        } elseif ($user->role == 'doctor_id') {
            return redirect()->route('doctor.dashboard');
        } elseif ($user->role == 'admin_id') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('home'); 
        }
    }
    public function home()
    {
        // Example: Redirect based on user role
        $user = User::auth();
        if ($user->isAdmin()) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->isDoctor()) {
            return redirect()->route('doctor.dashboard');
        } elseif ($user->isPatient()) {
            return redirect()->route('patient.dashboard');
        }
    }

    public function profile()
    {
        //Logic to edit profile details
        return view('profile.edit');
    }

    public function logout()
    {
        //Logout logic
        User::logout();
        return redirect()->route('home');
    }
}