<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        // Example query to fetch all payments
        $payments = Payment::where('user_id', auth()->id())->get(); // Example query to fetch payments for the logged-in user
        return view('payments.index', compact('payments'));
    }

    // Example method to store a new payment
    public function store(Request $request)
    {
        $data = $request->validate([
            'patient_id' => 'required|integer',
            'amount' => 'required|numeric',
            'service offered(specified)' => 'nullable|string',
            // Add other fields as needed
        ]);

        $payment = Payment::create($data);

        return redirect()->route('payments.history')->with('success', 'Payment recorded successfully!');
    }

    // Add other methods as needed for CRUD operations
}
