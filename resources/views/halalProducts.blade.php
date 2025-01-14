@extends('layouts.app')

@section('title', 'Explore Halal Certified Products')

@section('content')
<div class="container my-5">
    <h1 class="text-center fw-bold mb-4">Explore Halal Certified Products</h1>

    <!-- Explore Button -->
    <div class="text-center mb-5">
        <a href="/products" class="btn btn-success btn-lg rounded-pill px-4">Explore certified products</a>
    </div>

    <!-- Categories Section -->
    <div class="row text-center">
        <div class="col-md-2 offset-md-1">
            <a href="{{ route('products.category', ['category' => 'Beverages']) }}" class="text-decoration-none">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('assets/img/beverages.jpg') }}" class="card-img-top rounded" alt="Beverages">
                    <div class="card-body">
                        <h6 class="card-title">Beverages</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="{{ route('products.category', ['category' => 'Cosmetics & Personal Care']) }}" class="text-decoration-none">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('assets/img/cosmetics.jpg') }}" class="card-img-top rounded" alt="Cosmetics & Personal Care">
                    <div class="card-body">
                        <h6 class="card-title">Cosmetics & Personal Care</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="{{ route('products.category', ['category' => 'Food']) }}" class="text-decoration-none">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('assets/img/food.jpg') }}" class="card-img-top rounded" alt="Food">
                    <div class="card-body">
                        <h6 class="card-title">Food</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="{{ route('products.category', ['category' => 'Nutritional & Dietary Supplements']) }}" class="text-decoration-none">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('assets/img/supplements.jpg') }}" class="card-img-top rounded" alt="Nutritional & Dietary Supplements">
                    <div class="card-body">
                        <h6 class="card-title">Nutritional & Dietary Supplements</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="{{ route('products.category', ['category' => 'Pharmaceuticals']) }}" class="text-decoration-none">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('assets/img/pharmaceuticals.jpg') }}" class="card-img-top rounded" alt="Pharmaceuticals">
                    <div class="card-body">
                        <h6 class="card-title">Pharmaceuticals</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
