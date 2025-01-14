@extends('layouts.layout')

@section('content')
<div class="containers " style="min-height: 75vh;">
    <div class="login-container mx-auto my-5 p-4" style="max-width: 400px; background-color: #e6f9e8; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h2 class="text-center mb-4" style="color: #4CAF50;">Login</h2>

        <!-- Display error message if login fails -->
        @if ($errors->has('login_error'))
            <div class="alert alert-danger">
                {{ $errors->first('login_error') }}
            </div>
        @endif

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="abc@gmail.com" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Log in</button>
        </form>
        <p class="text-center mt-3">
            Don't have an account?
            <a href="{{ route('signup') }}" style="color: #4CAF50;">Sign Up</a>
        </p>
    </div>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@endsection
