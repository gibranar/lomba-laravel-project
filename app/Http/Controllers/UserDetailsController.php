<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    public function index()
    {
        $users = UserDetails::all();

        return view('profile.profile', ['users' => $users]);
    }
}
