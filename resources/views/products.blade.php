@extends('layouts.layout')

@section('title', 'Certified Halal Products')

@section('content')
<div class="container my-5">
    <h1 class="text-center fw-bold mb-4">Certified Halal Products</h1>

    <!-- Filter Section -->
    <form method="GET" action="{{ url('/products') }}" class="mb-4 row g-3">
        <div class="col-md-3">
            <input type="text" name="product_name" class="form-control" placeholder="Search by Product Name">
        </div>
        <div class="col-md-3">
            <input type="text" name="company_name" class="form-control" placeholder="Search by Company">
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-success w-100">Search</button>
        </div>
        <div class="col-md-3">
            <a href="/products" class="btn btn-outline-secondary w-100">Clear Filters</a>
        </div>
    </form>

    <!-- Product Cards -->
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body bg-light">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p><strong>Company:</strong> {{ $product->company }}</p>
                        <span class="badge bg-success">{{ $product->status }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
</div>
@endsection
