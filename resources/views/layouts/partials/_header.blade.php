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
        /*--------------------------------------------------------------
        # Navbar
        --------------------------------------------------------------*/
        .navbar-default {
            transition: all 0.3s ease-in-out;
            background-color: #ffffff;
            padding-top: 28px;
            padding-bottom: 28px;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            box-shadow: 1px 2px 15px rgba(100, 100, 100, 0.3);
            height: 78px;
        }
        .navbar-default .nav-search {
            color: #000000;
            font-size: 1.5rem;
        }
        .navbar-default.navbar-reduce {
            box-shadow: 1px 2px 15px rgba(100, 100, 100, 0.3);
        }
        .navbar-default.navbar-trans, .navbar-default.navbar-reduce {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        .navbar-default.navbar-trans .nav-item, .navbar-default.navbar-reduce .nav-item {
            position: relative;
            padding-right: 10px;
            padding-bottom: 8px;
            margin-left: 0;
        }
        @media (min-width: 768px) {
            .navbar-default.navbar-trans .nav-item, .navbar-default.navbar-reduce .nav-item {
                margin-left: 15px;
            }
        }
        .navbar-default.navbar-trans .nav-link, .navbar-default.navbar-reduce .nav-link {
            font-size: 1.2rem;
            color: #000000;
            font-weight: 600;
            letter-spacing: 0.03em;
            transition: all 0.1s ease-in-out;
            position: relative;
            padding-left: 0;
            padding-right: 0;
        }
        .navbar-default.navbar-trans .nav-link:before, .navbar-default.navbar-reduce .nav-link:before {
            content: "";
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 2px;
            z-index: 0;
            background-color: #1e90ff;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.2s ease-out, opacity 0.2s ease-out 0.3s;
        }
        .navbar-default.navbar-trans .nav-link:hover, .navbar-default.navbar-reduce .nav-link:hover {
            color: #000000;
        }
        .navbar-default.navbar-trans .nav-link:hover:before, .navbar-default.navbar-reduce .nav-link:hover:before {
            transform: scaleX(1);
            transform-origin: left;
        }
        .navbar-default.navbar-trans .show > .nav-link:before,
        .navbar-default.navbar-trans .active > .nav-link:before,
        .navbar-default.navbar-trans .nav-link.show:before,
        .navbar-default.navbar-trans .nav-link.active:before, .navbar-default.navbar-reduce .show > .nav-link:before,
        .navbar-default.navbar-reduce .active > .nav-link:before,
        .navbar-default.navbar-reduce .nav-link.show:before,
        .navbar-default.navbar-reduce .nav-link.active:before {
            transform: scaleX(1);
        }
        .navbar-default.navbar-trans .nav-link:before {
            background-color: #1e90ff;
        }
        .navbar-default.navbar-trans .nav-link:hover {
            color: #000000;
        }
        .navbar-default.navbar-trans .show > .nav-link,
        .navbar-default.navbar-trans .active > .nav-link,
        .navbar-default.navbar-trans .nav-link.show,
        .navbar-default.navbar-trans .nav-link.active {
            color: #000000;
        }
        .navbar-default.navbar-reduce {
            transition: all 0.5s ease-in-out;
            padding-top: 19px;
            padding-bottom: 19px;
        }
        .navbar-default.navbar-reduce .nav-link {
            color: #000000;
        }
        .navbar-default.navbar-reduce .nav-link:before {
            background-color: #1e90ff;
        }
        .navbar-default.navbar-reduce .nav-link:hover {
            color: #000000;
        }
        .navbar-default.navbar-reduce .show > .nav-link,
        .navbar-default.navbar-reduce .active > .nav-link,
        .navbar-default.navbar-reduce .nav-link.show,
        .navbar-default.navbar-reduce .nav-link.active {
            color: #000000;
        }
        .navbar-default.navbar-reduce .navbar-brand {
            color: #000000;
        }
        .navbar-default .dropdown .dropdown-menu {
            border-top: 0;
            border-left: 4px solid #1e90ff;
            border-right: 0;
            border-bottom: 0;
            transform: translate3d(0px, 40px, 0px);
            opacity: 0;
            filter: alpha(opacity=0);
            visibility: hidden;
            transition: all 0.5s cubic-bezier(0.3, 0.65, 0.355, 1) 0s, opacity 0.31s ease 0s, height 0s linear 0.36s;
            margin: 0;
            border-radius: 0;
            padding: 12px 0;
        }
        @media (min-width: 768px) {
            .navbar-default .dropdown .dropdown-menu {
                border-top: 4px solid #1e90ff;
                border-left: 0;
                display: block;
                position: absolute;
                box-shadow: 0 2px rgba(17, 16, 15, 0.1), 0 2px 10px rgba(20, 19, 18, 0.1);
            }
        }
        .navbar-default .dropdown .dropdown-menu .dropdown-item {
            padding: 12px 18px;
            transition: all 500ms ease;
            font-weight: 600;
            min-width: 220px;
        }
        .navbar-default .dropdown .dropdown-menu .dropdown-item:hover {
            background-color: #ffffff;
            color: #1e90ff;
            transition: all 500ms ease;
        }
        .navbar-default .dropdown .dropdown-menu .dropdown-item.active {
            background-color: #ffffff;
            color: #1e90ff;
        }
        .navbar-default .dropdown:hover .dropdown-menu {
            transform: translate3d(0px, 0px, 0px);
            visibility: visible;
            opacity: 1;
            filter: alpha(opacity=1);
        }

        /*------/ Hamburger Navbar /------*/
        .navbar-toggler {
            position: relative;
        }

        .navbar-toggler:focus,
        .navbar-toggler:active {
            outline: 0;
        }

        .navbar-toggler span {
            display: block;
            background-color: #000000;
            height: 3px;
            width: 25px;
            margin-top: 4px;
            margin-bottom: 4px;
            transform: rotate(0deg);
            left: 0;
            opacity: 1;
        }

        .navbar-toggler span:nth-child(1),
        .navbar-toggler span:nth-child(3) {
            transition: transform 0.35s ease-in-out;
        }

        .navbar-toggler:not(.collapsed) span:nth-child(1) {
            position: absolute;
            left: 12px;
            top: 10px;
            transform: rotate(135deg);
            opacity: 0.9;
        }

        .navbar-toggler:not(.collapsed) span:nth-child(2) {
            height: 12px;
            visibility: hidden;
            background-color: transparent;
        }

        .navbar-toggler:not(.collapsed) span:nth-child(3) {
            position: absolute;
            left: 12px;
            top: 10px;
            transform: rotate(-135deg);
            opacity: 0.9;
        }
        .text-brand {
            color: #000000;
            font-size: 2rem;
            font-weight: 600;
        }
        @media (max-width: 767px) {
            .text-brand {
                font-size: 1.8rem;
            }
        }
        .color-b {
            color: #1e90ff;
        }
        a {
            transition: all 0.5s ease;
        }
    </style>
</head>
