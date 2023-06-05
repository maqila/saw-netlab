@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Kriteria</h5>
      <a href="/dashboard/kriteria/create" class="btn btn-success mb-3"><i class="bi bi-plus-circle"> Tambah Kriteria</i></a>
      
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Kode</th>
            <th scope="col">Kriteria</th>
            <th scope="col">Bobot</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($kriterias as $kriteria)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $kriteria->kode }}</td>
                <td>{{ $kriteria->nama }}</td>
                <td>{{ $kriteria->bobot }}</td>
                <td>
                  <a href="/dashboard/kriteria/{{ $kriteria->id }}/edit/" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                  <form action="/dashboard/kriteria/{{ $kriteria->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin?')"><i class="bi bi-x-circle"></i></button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4">Tidak ada data alternatif.</td>
              </tr>
            @endforelse
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>

@endsection