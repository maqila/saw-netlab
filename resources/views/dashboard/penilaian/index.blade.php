@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Penilaian Alternatif</h5>
      <a href="/pdf-nilai" class="btn btn-info mb-3"><i class="bi bi-printer"> Cetak Data Penilaian Alternatif</i></a>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Alternatif</th>
            <th scope="col">Kriteria</th>
            <th scope="col">Nilai Kriteria</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($penilaians as $penilaian)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $penilaian->alternatif->nama }}</td>
                <td>{{ $penilaian->normalisasi->kriteria->nama }}</td>
                <td>{{ $penilaian->nilai }}</td>
                <td>
                  {{-- <a href="/dashboard/penilaian/{{ $penilaian->id }}/edit/" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a> --}}
                  <form action="/dashboard/penilaian/{{ $penilaian->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin?')"><i class="bi bi-x-circle"></i></button>
                  </form>
                </td>
            </tr>
          @empty
          <td colspan="5">Tidak ada data Penilaian.</td> 
          @endforelse
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>

@endsection