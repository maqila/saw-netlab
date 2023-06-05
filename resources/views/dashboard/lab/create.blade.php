@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Data Laboratorium</h5>
      <form action="{{ route('lab.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="nama" class="form-label">Nama Laboratorium</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Laboratorium">
            </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-12 d-flex justify-content-end gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/dashboard/lab" class="btn btn-success">Kembali</a>
          </div>
        </div>
      </form><!-- End General Form Elements -->
    </div>
  </div>
    
@endsection