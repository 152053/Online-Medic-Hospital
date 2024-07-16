<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LogoutController extends Controller
{
    public function logout()
    {
        // Logic to logout user
        auth()->logout();

        // Update user status to inactive if applicable
        $user = Auth::user();
        if ($user) {
            $user->status = 'inactive'; // Assuming this field exists in your user model
            $user->save();
        }

        // Redirect to login page or homepage
        return redirect()->route('login');
    }
}
