@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Alternatif</h5>
      <a href="/dashboard/alternatif/create" class="btn btn-success mb-3"><i class="bi bi-plus-circle"> Tambah Data</i></a>
      <a href="/pdf-alternatif" class="btn btn-info mb-3"><i class="bi bi-printer"> Cetak Data alternatif</i></a>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($alternatifs as $alternatif)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $alternatif->nim }}</td>
              <td>{{ $alternatif->nama }}</td>
              <td>{{ $alternatif->email }}</td>
            <td>
              <a href="/dashboard/alternatif/{{ $alternatif->id }}/edit/" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
              <form action="/dashboard/alternatif/{{ $alternatif->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin?')"><i class="bi bi-x-circle"></i></button>
              </form>
            </td>
            </tr>
            @empty
            <tr>
              <td colspan="5">Tidak ada data alternatif.</td>
            </tr>
            @endforelse
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->
    </div>
  </div>
@endsection