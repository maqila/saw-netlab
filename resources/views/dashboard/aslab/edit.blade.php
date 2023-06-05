@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit Data Asisten Laboratorium</h5>
      <form action="{{ route('aslab.update', $aslab->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row mb-3">
          <label for="nim" class="form-label">NIM</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nama', $aslab->nim) }}">
          </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="form-label">Nama</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $aslab->nama) }}">
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="tempat" class="form-label">Tempat Lahir</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="tempat" name="tempat" value="{{ old('tempat', $aslab->tempat) }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="tanggal" class="form-label">Tanggal Lahir</label>
            <div class="col-sm-12">
              <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $aslab->tanggal) }}">
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $aslab->alamat) }}">
            </div>
        </div>

        <div class="row mb-3">
          <label for="email" class="form-label">Email</label>
          <div class="col-sm-12">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $aslab->email) }}">
          </div>
        </div>
        
        <div class="row mb-3">
          <label for="no_hp" class="form-label">Nomor Handphone</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp', $aslab->no_hp) }}">
          </div>
        </div>

        <div class="row mb-3">
          <label for="lab_id" class="form-label">Laboratorium</label>
          <div class="col-sm-12">
            <select name="lab_id" class="form-control">
              <option class="disable" value="">---Pilih Kriteria---</option>
                @foreach($labs as $lab)
                <option value="{{ $lab->id }}" {{ $aslab->lab_id == $lab->id ? 'selected' : '' }}>
                  {{ $lab->nama }}
                </option>
                @endforeach
            </select>
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