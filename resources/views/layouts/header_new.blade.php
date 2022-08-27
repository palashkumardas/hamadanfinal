<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hamadan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend_new/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend_new/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend_new/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend_new/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend_new/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend_new/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend_new/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center">&nbsp;&nbsp;{{ $contact->email_one }}</i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $contact->phone_one }}</span></i>
      </div>
      <!--<div class="social-links d-none d-md-flex align-items-center">-->
      <!--  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>-->
      <!--  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>-->
      <!--  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>-->
      <!--  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>-->
      <!--</div>-->
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{url('/')}}" class="logo"><img src="{{ asset('frontend_new/assets/img/hamadam_logo.png')}}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/about/')}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{url('/services/')}}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{url('/contact/')}}">Contact</a></li>
          <li class="d-md-none d-block"><a class="nav-link scrollto" href="http://worldwide.hamadaninternational.co.uk/">Login</a></li>
          <li class="d-md-none d-block"><a class="nav-link scrollto" href="http://worldwide.hamadaninternational.co.uk/">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="d-none d-md-block">
            <a href="http://worldwide.hamadaninternational.co.uk/" class="btn-get-started">Login / Register</a>
      </div>

    </div>
  </header><!-- End Header -->