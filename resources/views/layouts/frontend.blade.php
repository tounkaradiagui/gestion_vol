<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="KINGUI VOYAGE | Travel Agency & Tourism ">
    <meta name="keyword" content="travel, tourism, agency, tourist">
    <meta name="author" content="Diagui TOUNKARA">

    <!-- Title -->
    <title>Kingui Voyage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom/bootstrap.css')}}">
    <!--Font Awesome css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom/font-awesome.min.css')}}">
    <!--Flaticon css-->
    <link href="{{ asset('assets/flaticon/flaticon.css') }}" rel="stylesheet">
    <!--Animatedheadline css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom/jquery.animatedheadline.css')}}">
    <!--Magnific css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom/magnific-popup.css')}}">
    <!--Owl-Carousel css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom/owl.theme.default.min.css')}}">
    <!--Animate css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom/animate.min.css')}}">
    <!--Datepicker css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom/jquery.datepicker.css')}}">
    <!--Nice Select css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom/nice-select.css')}}">
    <!--Slicknav css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom/slicknav.min.css')}}">
    <!--Site Main Style css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom/custom.css')}}">
    <!--Responsive css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom/responsive.css')}}">
  </head>
  <body>

  
    <div class="preloader">
      <div class="loading-text">
        <span class="loading-text-words" data-preloader="C">C</span>
        <span class="loading-text-words" data-preloader="H">H</span>
        <span class="loading-text-words" data-preloader="A">A</span>
        <span class="loading-text-words" data-preloader="R">R</span>
        <span class="loading-text-words" data-preloader="G">G</span>
        <span class="loading-text-words" data-preloader="E">E</span>
        <span class="loading-text-words" data-preloader="M">M</span>
        <span class="loading-text-words" data-preloader="E">E</span>
        <span class="loading-text-words" data-preloader="N">N</span>
        <span class="loading-text-words" data-preloader="T">T</span>
      </div>
    </div>
    <!--Preloader End-->

    @include('frontend.common.header')

    @yield('content')
    

 
      <!--Jquery js-->
      <script src="{{asset('assets/js/custom/jquery.min.js')}}"></script>
      <!-- Popper JS -->
      <script src="{{asset('assets/js/custom/popper.min.js')}}"></script>
      <!--Bootstrap js-->
      <script src="{{asset('assets/js/custom/bootstrap.min.js')}}"></script>
      <!--Owl-Carousel js-->
      <script src="{{asset('assets/js/custom/owl.carousel.min.js')}}"></script>
      <!--Animatedheadline js-->
      <script src="{{asset('assets/js/custom/jquery.animatedheadline.min.js')}}"></script>
      <!--Slicknav js-->
      <script src="{{asset('assets/js/custom/jquery.slicknav.min.js')}}"></script>
      <!--Magnific js-->
      <script src="{{asset('assets/js/custom/jquery.magnific-popup.min.js')}}"></script>
      <!-- Datepicker -->
      <script src="{{asset('assets/js/custom/jquery.datepicker.min.js')}}"></script>
      <!--Nice Select js-->
      <script src="{{asset('assets/js/custom/jquery.nice-select.min.js')}}"></script>
      <!-- Way Points JS -->
      <script src="{{asset('assets/js/custom/waypoints-min.js')}}"></script>
      <!-- Init JS -->
      <script src="{{asset('assets/js/custom/init.js')}}"></script>
      <!--Main js-->
      <script src="{{asset('assets/js/custom/main.js')}}"></script>
    
  </body>
</html>