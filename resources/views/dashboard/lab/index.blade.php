@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Laboratorium</h5>
      <a href="/dashboard/lab/create" class="btn btn-success mb-3"><i class="bi bi-plus-circle"> Tambah Laboratorium</i></a>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Laboratorium</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($labs as $lab)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $lab->nama }}</td>
                <td>
                  <a href="/dashboard/lab/{{ $lab->id }}/edit/" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                  <form action="/dashboard/lab/{{ $lab->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin?')"><i class="bi bi-x-circle"></i></button>
                  </form>
                </td>
            </tr>
            @empty
                <td colspan="5">Tidak ada data Laboratorium.</td>
            @endforelse
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->
    </div>
  </div>
@endsection