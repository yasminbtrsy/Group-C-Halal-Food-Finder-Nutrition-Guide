<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Halal Life')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header class="bg-light py-3 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a href="/" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Halal Life Logo" class="me-2" style="height: 50px;">
                <span class="fw-bold fs-4">Halal Life</span>
            </a>
            <!-- Navigation -->
            <nav>
                <a href="/" class="mx-3 text-dark text-decoration-none fw-bold">Halal Restaurant</a>
                <a href="/products" class="mx-3 text-dark text-decoration-none fw-bold">Halal Product</a>
                <a href="/nutritional-info" class="mx-3 text-dark text-decoration-none fw-bold">Nutritional Information</a>
                <a href="/meal-planner" class="mx-3 text-dark text-decoration-none fw-bold">Meal Planner</a>
                <a href="/tips-and-hadith" class="mx-3 text-dark text-decoration-none fw-bold">Tips and Hadith</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="my-4">
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer class="bg-success text-white py-4">
        <div class="container text-center">
            <div class="row mb-3">
                <div class="col-md-2 offset-md-1"><a href="#" class="text-white">Terms & Conditions</a></div>
                <div class="col-md-2"><a href="#" class="text-white">Privacy Policy</a></div>
                <div class="col-md-2"><a href="#" class="text-white">Contact</a></div>
                <div class="col-md-2"><a href="#" class="text-white">Cookie Policy</a></div>
                <div class="col-md-2"><a href="#" class="text-white">Support</a></div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#" class="mx-2 text-white"><i class="fab fa-facebook"></i></a>
                <a href="#" class="mx-2 text-white"><i class="fab fa-twitter"></i></a>
                <a href="#" class="mx-2 text-white"><i class="fab fa-instagram"></i></a>
                <a href="#" class="mx-2 text-white"><i class="fab fa-youtube"></i></a>
                <a href="#" class="mx-2 text-white"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
