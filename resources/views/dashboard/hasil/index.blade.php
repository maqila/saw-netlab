@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Hasil Keputusan</h5>
      <a href="/pdf-hasil" class="btn btn-info mb-3"><i class="bi bi-printer"> Cetak Hasil Keputusan</i></a>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Rank</th>
            <th scope="col">Nama Alternatif</th>
            <th scope="col">Preferensi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Cornelia Luba Tara Boro</td>
            <td>1,4833</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Maqila Sulaiman Abu Zakaria</td>
            <td>1,3866</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Yohanes Yudha Saputra</td>
            <td>1,2533</td>
          </tr>
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>

@endsection