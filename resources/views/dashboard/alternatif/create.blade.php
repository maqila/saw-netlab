@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Data Alternatif</h5>
      <form action="/dashboard/alternatif" method="post">
        @csrf
        <div class="row mb-3">
          <label for="nim" class="form-label">NIM</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM">
          </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="form-label">Nama</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Alternatif">
            </div>
          </div>
        <div class="row mb-3">
          <label for="email" class="form-label">Email</label>
          <div class="col-sm-12">
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-12 d-flex justify-content-end gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/dashboard/alternatif" class="btn btn-success">Kembali</a>
          </div>
        </div>

      </form><!-- End General Form Elements -->
    </div>
  </div>
    
@endsection