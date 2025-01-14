<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('loginpage');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
{
    // Validate the login form inputs
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to authenticate the user
    if (Auth::attempt($request->only('email', 'password'))) {
        // Regenerate the session to prevent session fixation attacks
        $request->session()->regenerate();

        // Redirect to the main page on successful login
        return redirect()->route('mainpage1')->with('success', 'Logged in successfully!');
    }

    // If authentication fails, redirect back with an error message
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records, please try again or if you don\'t have an account sign up!',
    ])->withInput();
}

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
