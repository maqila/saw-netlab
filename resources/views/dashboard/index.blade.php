@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1>Dashboard, {{ Auth()->user()->name }}</h1>
</div>
<div class="col-lg-12">
  <div class="row info-card sales-card">
    <!-- user Card -->
    <div class="col-xxl-4 col-md-6">
      <div class="card info-card">

        <div class="card-body">
          <h5 class="card-title">Data <span>| User</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              {{-- <h6>17</h6> --}}
            </div>
          </div>
        </div>

      </div>
    </div><!-- End user Card -->

    <!-- alternatif Card -->
    <div class="col-xxl-4 col-md-6">
      <div class="card info-card revenue-card">

        <div class="card-body">
          <h5 class="card-title">Data <span>| Alternatif</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              {{-- <h6>19</h6> --}}
            </div>
          </div>
        </div>

      </div>
    </div><!-- End alternatif Card -->

    <!-- kriteria Card -->
    <div class="col-xxl-4 col-md-6">
      <div class="card info-card customers-card">

        <div class="card-body">
          <h5 class="card-title">Data <span>| Kriteria</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              {{-- <h6>5</h6> --}}
            </div>
          </div>
        </div>

      </div>
    </div><!-- End user Card -->

  </div>
  <div class="row info-card sales-card">
    <!-- user Card -->
    <div class="col-xxl-4 col-md-6">
      <div class="card info-card">

        <div class="card-body">
          <h5 class="card-title">Data <span>| Asisten Laboratorium</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              {{-- <h6>17</h6> --}}
            </div>
          </div>
        </div>

      </div>
    </div><!-- End user Card -->

    <!-- alternatif Card -->
    <div class="col-xxl-4 col-md-6">
      <div class="card info-card revenue-card">

        <div class="card-body">
          <h5 class="card-title">Data <span>| Laboratorium</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              {{-- <h6>19</h6> --}}
            </div>
          </div>
        </div>

      </div>
    </div><!-- End alternatif Card -->

    <!-- kriteria Card -->
    <div class="col-xxl-4 col-md-6">
      <div class="card info-card customers-card">

        <div class="card-body">
          <h5 class="card-title">Data <span>| Penilaian Alternatif</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              {{-- <h6>5</h6> --}}
            </div>
          </div>
        </div>

      </div>
    </div><!-- End user Card -->

  </div>
</div>   
@endsection