<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('assets/img/website.png')}}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">

    <style>
        *{
            font-family: 'Poppins' !important;
        }
        .portfolio-img {
            height: 400px;
        }
    </style>
</head>
<body>
    <section id="portfolio-details" class="portfolio-details mt-4">
        <div class="container">
            <a href="#" onclick="goBack()" class="btn btn-primary">Back</a>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                        <div class="swiper-wrapper mt-5 align-items-center">
                            @foreach($portfolioImages as $image)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/uploads/'.$image->image) }}" class="portfolio-img" alt="">
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Title</strong>: {{ $portfolio->title }}</li>
                            <li><strong>Category</strong>: {{ $portfolio->category }}</li>
                            <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                            <li><strong>Project date</strong>: {{ Carbon\Carbon::parse($portfolio->project_date)->format('F d, Y') }}</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Project Description</h2>
                        <p>{{ $portfolio->project_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('template/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('template/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('template/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('template/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('template/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('template/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('template/js/main.js') }}"></script>

    <script>
        function goBack() {
            history.back();
        }
    </script>
</body>
</html>




