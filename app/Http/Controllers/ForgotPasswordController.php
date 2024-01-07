<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function showForm()
    {
        return view('auth.forgot');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $email = $request->input('email');

        $resetLink = 'http://127.0.0.1:8000/reset/' . base64_encode($email);

        Mail::send('auth.password_reset', ['url' => $resetLink], function ($message) use ($email) {
            $message->to($email)
                ->subject('Password Reset');
        });

        return back()->with('success', 'Email has been sent successfully');
    }

    public function reset(Request $request)
    {
        // 
    }
}
