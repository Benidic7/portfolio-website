
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Portfolio Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  {{-- <link href="template/vendor/aos/aos.css" rel="stylesheet"> --}}
  <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="template/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="template/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="template/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="template/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    li{
        list-style: none;
    }
  </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Benidic<span class="color-b"> Espinosa</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link mx-3 {{ Request::routeIs('home') ? 'active' : '' }}" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-3 {{ Request::routeIs('about') ? 'active' : '' }}" href="{{route('about')}}">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('resume') ? 'active' : '' }}" href="{{route('resume')}}">Resume</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-3 {{ Request::routeIs('contact') ? 'active' : '' }}" href="{{route('contact')}}">Contact</a>
          </li>

        </ul>
      </div>

      <a href="{{route('login')}}" class="btn btn-outline-success">
        Login
      </a>

    </div>
  </nav><!-- End Header/Navbar -->

  <main id="main">

    @yield('content')

  </main><!-- End #main -->


<footer>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <p class="copyright color-text-a">
                &copy; Copyright
                <span class="color-a">Benidic Espinosa</span> All Rights Reserved.
            </p>
            <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">Benidic Espinosa</a>
            </div>
        </div>
        </div>
    </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Vendor JS Files -->
    <script src="template/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="template/vendor/aos/aos.js"></script>
    <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="template/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="template/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="template/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="template/vendor/typed.js/typed.umd.js"></script>
    <script src="template/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="template/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="template/js/main.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
