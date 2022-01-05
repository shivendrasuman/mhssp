<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MHSSP - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icofont/icofont.min.css')}}">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    </head>
    <body>
        <!-- Include Top Bar -->
        @include('front.layouts.topbar')
        <!-- Include Top Bar End-->
         <!-- Include Nav Bar -->
        @include('front.layouts.navbar')
        <!-- Include Nav Bar End-->
         <!-- Include Main Content -->
        @yield('content')
        <!-- Include  Main Content End-->
           <!-- Include Footer -->
        @include('front.layouts.footer')
        <!-- Include Footer End-->    
    </body>

</html>