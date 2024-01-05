<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credential = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $userExisted = User::where('email', $credential['email'])->first();

        if ($userExisted) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email is already taken.']);
        }

        $user = User::create([
            'name' => $credential['name'],
            'email' => $credential['email'],
            'password' => Hash::make($credential['password']),
        ]);

        $userDetails = UserDetails::create([
            'name' => $user->name,
            'email' => $user->email,
        ]);

        $user->userDetails()->save($userDetails);

        return redirect()->route('login')->with('success', 'User created successfully');

        if (Auth::attempt(!$credential)) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
