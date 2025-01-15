<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Halal Life</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top" style="background-color: #84B288;">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <a href="mainpage"><img src="assets/img/logo4.png" alt="mainpage" style="width:200px; height:auto;"></a>
    </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        <li><a href="{{ route('halalrestaurants') }}">Halal Restaurant</a></li>
        <li><a href="{{ route('home') }}">Halal Product</a></li>
        <li><a href="{{ route('nutrition') }}">Nutritional Informationt</a></li>
        <li><a href="{{ route('meals.index') }}">Meal Planner</a></li>
        <li><a href="#gallery">Tips and Hadith</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Discover Halal food options effortlessly and stay on track with a complete nutrition guide tailored for your lifestyle!</h1>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="button-container">
                    <a class="btn-get-started" href="{{ route('login') }}">Log in</a>
                    <a class="btn-get-started" href="{{ route('signup') }}">Sign Up</a>
                </div>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/hlo.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

  <footer id="footer" class="footer dark-background" style="padding: 60px; text-align: center;">

  <!-- Links Section -->
  <div style="margin-bottom: 20px; font-size: 14px; color: #fff;">
    <a href="#" style="margin-right: 15px; color: #fff; text-decoration: none;">Terms & Conditions</a>
    <a href="#" style="margin-right: 15px; color: #fff; text-decoration: none;">Privacy Policy</a>
    <a href="#" style="margin-right: 15px; color: #fff; text-decoration: none;">Contact</a>
    <a href="#" style="margin-right: 15px; color: #fff; text-decoration: none;">Cookie Policy</a>
    <a href="#" style="color: #fff; text-decoration: none;">Support</a>
  </div>

  <!-- Social Icons Section -->
  <div class="social-links" style="display: flex; justify-content: center; gap: 15px;">
    <a href="#" class="twitter" style="color: #fff; font-size: 20px;"><i class="bi bi-twitter-x"></i></a>
    <a href="#" class="facebook" style="color: #fff; font-size: 20px;"><i class="bi bi-facebook"></i></a>
    <a href="#" class="instagram" style="color: #fff; font-size: 20px;"><i class="bi bi-instagram"></i></a>
    <a href="#" class="linkedin" style="color: #fff; font-size: 20px;"><i class="bi bi-linkedin"></i></a>
  </div>

</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
