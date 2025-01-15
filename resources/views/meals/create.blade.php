@extends('layouts.layout')

@section('content')

<section id="stats" class="stats section dark-background">
    <img src="assets/img/bgg.jpg" alt="" data-aos="fade-in" style="margin-bottom: 20px;"> <!-- Add margin-bottom here -->

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="overlay-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 92px; font-weight: bold;">
            Meal Planner
        </div>
    </div>
</section><!-- /Stats Section -->
<div class="container">
    <h1 style="font-size: 30px; font-weight: bold; text-align: center; margin-top: 20px;">Add New Meal</h1> <!-- Add margin-top here -->

    <!-- Display Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('meals.store') }}" method="POST" enctype="multipart/form-data">

        <!-- Meal Name -->
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="name">Meal Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter meal name" required>
        </div>

        <!-- Meal Description -->
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="description">Meal Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter meal description" required></textarea>
        </div>

        <!-- Meal Session (Breakfast, Lunch, Dinner) -->
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="session">Meal Session</label>
            <select class="form-control" id="session" name="session" required>
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
            </select>
        </div>

        <!-- Meal Image -->
        <div class="form-group" style="margin-bottom: 30px;">
            <label for="image">Meal Image</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
        </div>

        <div class="container d-flex justify-content-end" style="margin-top: 40px; margin-bottom: 100px;">
            <button type="submit" class="btn btn-primary text-white" style="background-color: #059652">POST MEAL</button>
        </div>
    </form>
</div>
@endsection
