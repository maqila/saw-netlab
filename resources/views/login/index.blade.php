@extends('layouts.admin')

@section('container')
    
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="/" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('dist') }}/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Netlab</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  @if (session()->has('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                  </div>
                  @endif
                  @if (session()->has('loginError'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session()->get('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                  </div>
                  @endif
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form action="/signin" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="/register">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">MeqPro</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection