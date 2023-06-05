@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit Data User</h5>
      <form action="/dashboard/user/{{ $user->id }}" method="post">
        @method('put')
        @csrf
        <div class="row mb-3">
          <label for="name" class="form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" required autofocus value="{{ old('nama',$user->nama) }}">
          </div>
        </div>
        <div class="row mb-3">
            <label for="username" class="form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" name="username">
            </div>
          </div>
        <div class="row mb-3">
          <label for="email" class="form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

      </form><!-- End General Form Elements -->

      
      
    </div>
  </div>
    
@endsection