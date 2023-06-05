@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit Data Alternatif</h5>
      <form action="{{ route('alternatif.update', $alternatif->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row mb-3">
          <label for="nim" class="form-label">NIM</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nim', $alternatif->nim) }}">
          </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="form-label">Nama</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $alternatif->nama) }}">
            </div>
          </div>
        <div class="row mb-3">
          <label for="email" class="form-label">Email</label>
          <div class="col-sm-12">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $alternatif->email) }}">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-12 d-flex justify-content-end gap-2">
            <button type="submit" class="btn btn-primary" name="edit">Submit</button>
            <a href="/dashboard/alternatif" class="btn btn-success">Kembali</a>
          </div>
        </div>

      </form><!-- End General Form Elements -->
    </div>
  </div>
    
@endsection