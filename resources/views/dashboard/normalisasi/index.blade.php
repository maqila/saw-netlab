@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Kriteria</h5>
      <a href="/dashboard/normalisasi/create" class="btn btn-success mb-3"><i class="bi bi-plus-circle"> Tambah Normalisasi</i></a>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Kode</th>
            <th scope="col">Kriteria</th>
            <th scope="col">Normalisasi</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($normalisasis as $normalisasi)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $normalisasi->kriteria->kode }}</td>
                <td>{{ $normalisasi->kriteria->nama }}</td>
                <td>{{ $normalisasi->pilihan }}</td>
                <td>
                  <a href="/dashboard/normalisasi/{{ $normalisasi->id }}/edit/" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                  <form action="/dashboard/normalisasi/{{ $normalisasi->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin?')"><i class="bi bi-x-circle"></i></button>
                  </form>
                </td>
            </tr>
            @empty
                <td colspan="5">Tidak ada data Normalisasi.</td>
            @endforelse
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->
    </div>
  </div>
@endsection