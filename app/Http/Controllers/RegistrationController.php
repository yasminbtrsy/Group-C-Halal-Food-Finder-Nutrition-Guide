<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('signuppage'); // Ensure this matches your signup Blade view
    }

    public function store(Request $request)
    {
        // Log the incoming request for debugging
        Log::info('Incoming registration data: ', $request->all());

        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15|unique:users,mobile',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Log validation success
        Log::info('Validation passed');

        // Create user
        $user = User::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log user creation success
        Log::info('User created successfully: ', ['user_id' => $user->id]);

        // Redirect with success message
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}
