<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Doctor;

class ReviewController extends Controller
{
    public function create()
    {
        // Fetch list of doctors to populate in the form
        $doctors = Doctor::all();
        return view('reviews.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'rating' => 'required|in:High&Fast quality,Average,Slow,Poor quality',
            'comment' => 'required|string',
        ]);

        // Create the review
        Review::create([
            'doctor_id' => $validatedData['doctor_id'],
            'patient_id' => auth()->id(), // Assuming you have authentication
            'rating' => $validatedData['rating'],
            'comment' => $validatedData['comment'],
        ]);

        return redirect()->route('home')->with('success', 'Review submitted successfully!');
    }
}
