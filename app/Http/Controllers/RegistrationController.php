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
        return view('signuppage');
    }

    public function store(Request $request)
    {

        // Create user
        $user= new User();
        $user->name= $request->name;
        $user->mobile= $request->mobile;
        $user->email= $request->email;
        $user->password = bcrypt($request->password);
        $user->created_at=today();
        $user->updated_at=today();
        $user->save();

        // Log user creation success
        Log::info('User created successfully: ', ['user_id' => $user->id]);

        // Redirect with success message
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}
