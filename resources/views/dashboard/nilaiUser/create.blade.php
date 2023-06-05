@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Penilaian Alternatif</h5>
      <form action="{{ route('nilai.store') }}" method="post">
        @csrf
        <div class="row mb-3">
          <label for="alternatif" class="form-label">Alternatif</label>
          <div class="col-sm-12">
            <select name="alternatif_id" class="form-control">
              <option class="disable" value="">---Pilih Alternatif---</option>
              @foreach($alternatifs as $alternatif)
                <option value="{{ $alternatif->id }}">{{ $alternatif->nama }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row">
            <label for="kriteria" class="form-label">Penilaian Kriteria</label>
        </div>

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Kriteria</th>
              <th scope="col">Nilai Kriteria</th>
            </tr>
          </thead>
          <tbody>
            @foreach($normalisasis as $normalisasi)
            <tr>
              <td><input type="hidden" value="{{ $normalisasi->id }}" name="normalisasi_id[]" id="normalisasi_id">{{ $normalisasi->kriteria->nama }}</td>
            <td>
              <div class="col-sm-12">
                  <select class="form-select" aria-label="Default select example" id="nilai" name="nilai[]">
                    <option selected>---Pilih---</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <div class="row mb-3">
          <div class="col-sm-12 d-flex justify-content-end gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/dashboard/nilai" class="btn btn-success">Kembali</a>
          </div>
        </div>
      </form><!-- End General Form Elements -->
    </div>
  </div>
    
@endsection