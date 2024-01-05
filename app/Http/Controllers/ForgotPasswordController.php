<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function showForm()
    {
        return view('auth.forgot');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

        Mail::send('auth.password_reset', ['url' => 'http://127.0.0.1:8000/reset'], function ($message) use ($email) {
            $message->to($email)
                ->subject('Password Reset');
        });

        return redirect()->route('forgot.password')->with('success', 'Email has been sent successfully');
    }
}
