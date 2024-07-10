<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Username;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LogInController extends Controller
{
    public function saveLogIn(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // LogIn new/existing user
        $username = UserName::create([
            'User_name' => $request->first_name,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in
        auth()->login($username);

        // Redirect to a specific route (e.g., home)
        return redirect()->route('login')->with('success', 'LogIn successful!');
    }
}
