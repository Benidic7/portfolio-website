
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/website.png')}}" rel="icon">
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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
      <a class="text-brand" style="text-decoration: none;">Benidic<span class="color-b"> Espinosa</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#home" class="nav-link mx-3 scrollto active">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link mx-3 scrollto">About</a>
          </li>
          <li class="nav-item">
            <a href="#resume" class="nav-link mx-3 scrollto">Resume</a>
          </li>
          <li class="nav-item">
            <a href="#blog" class="nav-link mx-3 scrollto">Blogs</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link mx-3 scrollto">Contact</a>
          </li>
        </ul>
      </div>

      <a href="{{ route('login')}}" class="btn btn-outline-primary">
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
                <div class="col-md-6">
                    <p class="color-text-a">
                        &copy; Copyright
                        <span class="color-a">Benidic Espinosa</span> All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    Designed by <a href="https://bootstrapmade.com/">Benidic Espinosa</a>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        $(document).ready(function() {
        const navLinks = $('.nav-link');
        const sections = $('section[id]');

        function setActiveNavLink() {
            let fromTop = $(window).scrollTop() + 1;

            sections.each(function() {
                let section = $(this);
                if (
                    section.offset().top <= fromTop &&
                    section.offset().top + section.outerHeight() > fromTop
                ) {
                    navLinks.removeClass('active');
                    $('.nav-link[href="#' + section.attr('id') + '"]').addClass('active');
                }
            });

            if ($(window).scrollTop() + $(window).height() == $(document).height()) {
                navLinks.removeClass('active');
                $('.nav-link[href="#contact"]').addClass('active');
            }
        }

        setActiveNavLink();

        $(window).on('scroll', setActiveNavLink);
    });
    </script>
</body>

</html>
