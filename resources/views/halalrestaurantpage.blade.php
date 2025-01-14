@extends('layouts.layout')

@section('content')
<div class="container my-4">
    <h1 class="text-center mb-4">Halal Restaurants</h1>

    <div class="search-bar text-center mb-4">
        <form action="{{ route('restaurants.index') }}" method="GET">
            <input type="text" name="query" class="form-control w-50 mx-auto" placeholder="Search by restaurant name" value="{{ request()->input('query') }}">
            <button type="submit" class="btn btn-primary mt-2" style="background-color: #043308;">Search</button>
        </form>
        </div>

    <div class="row">
        @foreach ($restaurants as $restaurant)
        <div class="col-md-4 mb-4 d-flex">
            <div class="card text-center flex-grow-1">
                <img src="{{ $restaurant['logo'] }}" alt="{{ $restaurant['name'] }}" class="card-img-top img-fluid">
                <div class="card-body" style="background-color: #84B288;">
                    <h5 class="card-title">{{ $restaurant['name'] }}</h5>
                    <p class="card-text">{{ $restaurant['description'] }}</p>
                    <a href="{{ $restaurant['url'] }}" class="btn btn-primary mt-auto" style="background-color: #043308;">Read more</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>
@endsection
