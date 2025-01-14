@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="signup-container mx-auto my-5 p-4" style="max-width: 400px; background-color: #e6f9e8; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h2 class="text-center mb-4" style="color: #4CAF50;">Sign up</h2>
        <form method="POST" action="{{ route('signup.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile no.</label>
                <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="+60111111111" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="abc@gmail.com" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <p class="text-center" style="font-size: 12px;">
                By signing up you agree with the
                <a href="#" class="text-decoration-none" style="color: #4CAF50;">Privacy policy</a>
                and
                <a href="#" class="text-decoration-none" style="color: #4CAF50;">Terms of Halal Food</a>.
            </p>
            <button type="submit" class="btn btn-success w-100">Sign up</button>
        </form>
        <p class="text-center mt-3">
            Already have an account?
            <a href="{{ route('login') }}" style="color: #4CAF50;">Sign in</a>
        </p>
    </div>
</div>
@endsection
