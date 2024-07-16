<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    public function edit()
    {
        // Logic to show profile edit form
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'speciality' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'gender' => 'required|string|in:male,female,other',
            'experience_years' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update profile details
        $user = auth()->user();
        $user->speciality = $request->input('speciality');
        $user->age = $request->input('age');
        $user->gender = $request->input('gender');
        $user->experience_years = $request->input('experience_years');
        $user->save(); // This now saves the updated profile details

        // Redirect back with success message
        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }
}
