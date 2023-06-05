@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data User</h5>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    {{-- <a href="/dashboard/user/{{ $user->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a> --}}
                    {{-- <button type="button" class="btn btn-warning" href="/dashboard/user/{{ $user->id }}/edit"><i class="bi bi-pencil-square"></i></button> --}}
                    <form action="/dashboard/user/{{ $user->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin?')"><i class="bi bi-x-circle"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>
@endsection