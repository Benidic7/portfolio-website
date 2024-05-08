
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
  <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
  <style>
    li{
        list-style: none;
    }

    /*--------------------------------------------------------------
    # Portfolio
    --------------------------------------------------------------*/
    .portfolio .portfolio-item {
        margin-bottom: 30px;
    }

    .portfolio #portfolio-flters {
        padding: 0;
        margin: 0 auto 35px auto;
        list-style: none;
        text-align: center;
        background: #fff;
        border-radius: 50px;
        padding: 2px 15px;
    }

    .portfolio #portfolio-flters li {
        cursor: pointer;
        display: inline-block;
        padding: 10px 15px 8px 15px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1;
        text-transform: uppercase;
        color: #272829;
        margin-bottom: 5px;
        transition: all 0.3s ease-in-out;
    }

    .portfolio #portfolio-flters li:hover,
    .portfolio #portfolio-flters li.filter-active {
        color: #149ddd;
    }

    .portfolio #portfolio-flters li:last-child {
        margin-right: 0;
    }

    .portfolio .portfolio-wrap {
        transition: 0.3s;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .portfolio .portfolio-wrap::before {
        content: "";
        background: rgba(255, 255, 255, 0.5);
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        transition: all ease-in-out 0.3s;
        z-index: 2;
        opacity: 0;
        border-radius: 6px;
        width: 400px;
    }

    .portfolio .portfolio-wrap .portfolio-links {
        opacity: 0;
        left: 0;
        right: 0;
        bottom: 0;
        transform: translateY(15%);
        z-index: 3;
        position: absolute;
        transition: all ease-in-out 0.3s;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .portfolio .portfolio-wrap .portfolio-links a {
        color: #000;
        font-size: 28px;
        text-align: center;
        transition: 0.3s;
        width: 100%;
    }

    .portfolio .portfolio-wrap .portfolio-links a:hover {
        /* background: rgba(20, 157, 221, 0.95); */
    }

    .portfolio .portfolio-wrap .portfolio-links a+a {
        /* border-left: 1px solid #37b3ed; */
    }

    .portfolio .portfolio-wrap:hover::before {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 1;
    }

    .portfolio .portfolio-wrap:hover .portfolio-links {
        opacity: 1;
        bottom: 150px;
        transition: 0.6s ease-in-out;
    }

    /*--------------------------------------------------------------
    # Portfolio Details
    --------------------------------------------------------------*/
    .portfolio-details {
        padding: 8rem 0 3rem;
    }

    .portfolio-details .portfolio-details-slider img {
        width: 100%;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination {
        margin-top: 20px;
        position: relative;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #fff;
        opacity: 1;
        border: 1px solid #149ddd;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
        background-color: #149ddd;
    }

    .portfolio-details .portfolio-info {
        padding: 30px;
        box-shadow: 0px 0 30px rgba(5, 13, 24, 0.08);
    }

    .portfolio-details .portfolio-info h3 {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .portfolio-details .portfolio-info ul {
        list-style: none;
        padding: 0;
        font-size: 15px;
    }

    .portfolio-details .portfolio-info ul li+li {
        margin-top: 10px;
    }

    .portfolio-details .portfolio-description {
        padding-top: 30px;
    }

    .portfolio-details .portfolio-description h2 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .portfolio-details .portfolio-description p {
        padding: 0;
    }

    .img-portfolio {
        width: 400px;
        height: 350px;
        border-radius: 6px;
    }

    .portfolio-img {
        height: 400px;
    }

    #title {
        font-family: 'DM Serif Text', Georgia, 'Times New Roman', serif;
    }

    .dark-mode .form-control {
        background: transparent;
        color: white;
    }

    .dark-mode .form-control::placeholder {
        color: white;
    }

    /* Blog Section Styles */
    .blog-section {
        padding: 50px 0;
    }

    .blog-post {
        margin-bottom: 30px;
    }

    .blog-post img {
        width: 100px;
        height: auto;
        margin-bottom: 15px;
    }

    .blog-post h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .blog-post p {
        font-size: 16px;
        margin-bottom: 15px;
    }

    .blog-post a.btn {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    /* Sidebar Styles */
    .sidebar {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
    }
    .bg_img {
        width: 260px;
        height: 260px;
        padding-block: 0;
    }

    .blog-card {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        margin-left: 2px;
    }


  </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
