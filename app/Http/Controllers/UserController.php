<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{

    // app/Http/Controllers/AuthController.php

    public function login(Request $request)
    {
        $role = $request->path(); // Get the route path (admin, employer, job-seeker)
        return view('login', compact('role')); // Pass the role to the view
    }

    public function showSignupform()
    {
        return view('signup');
    }

    public function signup(Request $request) {
        $incomingFields = $request->validate([
            'role' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $incomingFields['password'] = Hash::make($incomingFields['password']);
        User::create($incomingFields);


        return redirect()->route('login')->with('success', 'Registration successful. You are now logged in.');
    }
}
