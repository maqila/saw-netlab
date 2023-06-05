@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Assiten Laboratorium </h5>
      <a href="/dashboard/aslab/create" class="btn btn-success mb-3"><i class="bi bi-plus-circle"> Tambah Data</i></a>
      <a href="/pdf-aslab" class="btn btn-info mb-3"><i class="bi bi-printer"> Cetak Data Asisten Laboratorium</i></a>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No. Handphone</th>
            <th>Laboratorium</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($aslabs as $aslab)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $aslab->nim }}</td>
              <td>{{ $aslab->nama }}</td>
              <td>{{ $aslab->tempat }}</td>
              <td>{{ $aslab->tanggal }}</td>
              <td>{{ $aslab->alamat }}</td>
              <td>{{ $aslab->email }}</td>
              <td>{{ $aslab->no_hp }}</td>
              <td>{{ $aslab->lab->nama }}</td>
            <td>
              <a href="/dashboard/aslab/{{ $aslab->id }}/edit/" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
              <form action="/dashboard/aslab/{{ $aslab->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin?')"><i class="bi bi-x-circle"></i></button>
              </form>
            </td>
            </tr>
            @empty
            <tr>
              <td colspan="5">Tidak ada data Asisten Laboratorium.</td>
            </tr>
            @endforelse
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->
    </div>
  </div>
@endsection