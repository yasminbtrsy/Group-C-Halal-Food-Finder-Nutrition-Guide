@extends('master.layout')

@section('content')

<!-- Stats Section -->
<section id="stats" class="stats section dark-background">
    <img src="assets/img/bgg.jpg" alt="" data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="overlay-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 92px; font-weight: bold;">
            Meal Planner
        </div>
    </div>
</section><!-- /Stats Section -->

<!-- Meals Section -->
<div class="container" style="margin-top: 50px;">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th> <!-- Added Image column header -->
                <th>Session</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($meals as $meal)
            <tr>
                <td>
                    @if($meal->image)
                        <img src="{{ asset('storage/' . $meal->image) }}" alt="{{ $meal->name }}" style="width: 100px; height: auto;">
                    @else
                        No image available
                    @endif
                </td>
                <td>{{ $meal->session }}</td>
                <td>{{ $meal->name }}</td>
                <td>{{ $meal->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Add New Meal Button -->
<div class="container d-flex justify-content-end" style="margin-top: 30px; margin-bottom: 100px;">
    <a href="{{ url('add-meal') }}" class="btn text-white" style="background-color: #059652">Add New Meal</a>
</div>

@endsection
