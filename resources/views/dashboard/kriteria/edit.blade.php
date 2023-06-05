@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit Data Kriteria</h5>
      <form action="{{ route('kriteria.update', $kriteria->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row mb-3">
          <label for="kode" class="form-label">Kode</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" id="kode" name="kode" value="{{ old('nama', $kriteria->kode) }}" >
          </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="form-label">Kriteria</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $kriteria->nama) }}">
            </div>
          </div>
        <div class="row mb-3">
          <label for="bobot" class="form-label">Bobot</label>
          <div class="col-sm-12">
            <input type="number" class="form-control" step="0.01" id="bobot" name="bobot" value="{{ old('nama', $kriteria->bobot) }}">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-12 d-flex justify-content-end gap-2">
            <button type="submit" class="btn btn-primary" name="edit">Submit</button>
            <a href="/dashboard/kriteria" class="btn btn-success">Kembali</a>
          </div>
        </div>

      </form><!-- End General Form Elements -->

      
      
    </div>
  </div>
    
@endsection