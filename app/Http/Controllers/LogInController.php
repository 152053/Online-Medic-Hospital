<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LogInController extends Controller
{
    public function saveLogIn(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255', // Assuming 'username' field is used for login
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication passed
            return redirect()->intended(route('dashboard')); // Redirect to intended URL or dashboard
        } else {
            // Authentication failed
            return back()->withInput()->withErrors(['username' => 'Invalid credentials.']);
        }
    }

    public function showLoginForm()
    {
        return view('login');
    }
}
