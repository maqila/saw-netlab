<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>NetLab | Home</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('dist') }}/img/favicon.png" rel="icon" />
    <link href="{{ asset('dist') }}/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landpages') }}/vendor/aos/aos.css" rel="stylesheet" />
    <link href="{{ asset('landpages') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('landpages') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('landpages') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="{{ asset('landpages') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('landpages') }}/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NewBiz
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex justify-content-between">
        <div class="logo">
          <!-- Uncomment below if you prefer to use an text logo -->
          <h1><a href="/">Netlab</a></h1>
          {{-- <a href="/">
            <img src="{{ asset('landpages') }}\img\logo.png" alt="" class="img-fluid" />
          </a> --}}
        </div>

        <nav id="navbar" class="navbar">
          
            @auth
            <ul>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="/dashboard">
                  <span>My Dashboard</span>
                  <i class="bi bi-person"></i>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="/logout">
                  <span>Sign Out</span>
                  <i class="bi bi-box-arrow-right"></i>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
            @else
            <ul>
              <li class="nav-item"><a class="nav-link scrollto active" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="/signin"><i class="bi bi-box-arrow-in-right"></i>Login</a></li>
            </ul>
            @endauth
          
          
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- #header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="clearfix">
      <div class="container" data-aos="fade-up">
        <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('landpages') }}/img/hero-img.svg" alt="" class="img-fluid" />
        </div>

        <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
          <h2>LABORATORY<br /><span>NETLAB</span><br />ITN MALANG</h2>
          @guest
          <div>
            <a href="/signin" class="btn-get-started">Login</a>
            <a href="/register" class="btn-services">Register</a>
          </div>
          @endguest
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>NetLab</strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
      -->
          Designed by <a href="https://bootstrapmade.com/">MeqPro</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landpages') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('landpages') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('landpages') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landpages') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('landpages') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('landpages') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('landpages') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('landpages') }}/js/main.js"></script>
  </body>
</html>
