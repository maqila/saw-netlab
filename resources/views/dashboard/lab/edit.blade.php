@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit Data Laboratorium</h5>
      <form action="{{ route('lab.update', $lab->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label for="nama" class="form-label">Nama Laboratorium</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $lab->nama) }}">
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