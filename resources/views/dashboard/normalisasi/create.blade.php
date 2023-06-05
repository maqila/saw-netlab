@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Data Normalisasi</h5>
      <form action="{{ route('normalisasi.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="kriteria" class="form-label">Kriteria</label>
            <div class="col-sm-12">
              <select name="kriteria_id" class="form-control">
                <option class="disable" value="">---Pilih Kriteria---</option>
                @foreach($kriterias as $kriteria)
                  <option value="{{ $kriteria->id }}">{{ $kriteria->nama }}</option>
                @endforeach
              </select>
            </div>
          </div>
        <div class="row mb-3">
            <label for="kriteria" class="form-label">Normalisasi</label>
            <div class="col-sm-12">
              <select name="pilihan" class="form-control">
                <option class="disable" value="">---Pilih Normalisasi---</option>
                <option value="benefit">Benefit</option>
                <option value="cost">Cost</option>
              </select>
            </div>
          </div>
        <div class="row mb-3">
          <div class="col-sm-12 d-flex justify-content-end gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/dashboard/normalisasi" class="btn btn-success">Kembali</a>
          </div>
        </div>

      </form><!-- End General Form Elements -->

      
      
    </div>
  </div>
    
@endsection