<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Job Pulse</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{ asset('assets/img/study.jpg') }}" rel="icon">
  <link href="{{ asset('assets/img/study.jpg') }}" rel="apple-touch-icon"> 

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ route('home') }}">Job Pulse</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('AboutPage') }}">About</a></li>
          <li><a href="{{ route('JobPage') }}">Jobs</a></li>
          <li><a href="{{ route('BlogPage') }}">Blogs</a></li>
          <li><a href="{{ route('ContactPage') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      
      <nav class="header-nav ms-auto" style="margin-left: 20px;">
        <ul class="d-flex align-items-center" style="margin-top: 0px; margin-bottom: 0px;">
        </ul>
      </nav>

      @if (Auth::check())
        @if (Auth::user()->roll === 'Admin' )
          <a href="{{ route('AdminDashboard') }}" class="get-started-btn-top" >DashBoard</a>
        @elseif (Auth::user()->roll === 'Company' )
          <a href="{{ route('CompanyDashboard') }}" class="get-started-btn-top" >DashBoard</a>
        @else
          <a href="{{ route('CandidateDashboard') }}" class="get-started-btn-top" >DashBoard</a>
        @endif
      @else
        <a href="{{ route('login') }}" class="get-started-btn-top" >Get Start</a>
      @endif

    </div>
  </header>
