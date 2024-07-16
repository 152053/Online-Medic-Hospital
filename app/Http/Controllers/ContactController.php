<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send the email (assuming you have set up mail configuration)
        Mail::send([], [], function ($message) use ($request) {
            $message->to('admin@example.com')
                    ->subject('New Contact Us Message')
                    ->setBody('Name: ' . $request->name . '<br>Email: ' . $request->email . '<br>Message: ' . $request->message, 'text/html');
        });

        // Redirect back with a success message
        return back()->with('success', 'Thank you for your message. We will get back to you soon.');
    }
}
