<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NETLAB | Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('dist') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('dist') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('dist') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('dist') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('dist') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('dist') }}/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('dist') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('dist') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('dist') }}/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('dashboard.layouts.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('dashboard.layouts.sidebar')
  <!-- End Sidebar-->

   <!-- ======= #main ======= -->
  <main id="main" class="main">
    @yield('container')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Netlab</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">MeqPro</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('dist') }}/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('dist') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('dist') }}/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ asset('dist') }}/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('dist') }}/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('dist') }}/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('dist') }}/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('dist') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('dist') }}/js/main.js"></script>

</body>

</html>