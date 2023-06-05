@extends('dashboard.layouts.main')

@section('container')
<div class="card">
    <h5 class="card-header">Proses Perhitungan</h5>
    <div class="card-body">
      <a href="/pdf-proses" class="btn btn-info mb-3"><i class="bi bi-printer"> Cetak Proses Perhitungan</i></a>
    </div>
</div>
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Bobot Preferensi (W)</h5>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr class="table-primary">
            @foreach ($normalisasis as $normalisasi)
                <td align="center">{{ $normalisasi->kriteria->nama }} ({{ $normalisasi->pilihan }})</td>   
            @endforeach
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($normalisasis as $normalisasi)
                <td align="center">{{ $normalisasi->kriteria->bobot }}</td>
            @endforeach
          </tr>
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Matrix Keputusan (X)</h5>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Alternatif</th>
            @foreach ($kriterias as $kriteria)
                <td>{{ $kriteria->kode }}</td>
            @endforeach
          </tr>
        </thead>
        <tbody>
    @foreach ($alternatifs as $alternatif)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $alternatif->nama }}</td>
            @foreach ($kriterias as $kriteria)
                @php
                    $penilaian = $penilaians->first(function ($penilaian) use ($alternatif, $kriteria) {
                        return $penilaian->normalisasi_id === $kriteria->id && $penilaian->alternatif_id === $alternatif->id;
                    });
                @endphp
                <td>
                    @if ($penilaian)
                        {{ $penilaian->nilai }}
                    @endif
                </td>
            @endforeach
        </tr>
    @endforeach
    <tfoot>
    <tr>
        <td class="table-active" colspan="2">Nilai Paling Rendah</td>
        @foreach ($kriterias as $kriteria)
            @php
                $minNilai = $penilaians->where('normalisasi_id', $kriteria->id)->min('nilai');
            @endphp
            <td class="table-active">{{ $minNilai }}</td>
        @endforeach
    </tr>
    <tr>
        <td class="table-active" colspan="2">Nilai Paling Tinggi</td>
        @foreach ($kriterias as $kriteria)
            @php
                $maxNilai = $penilaians->where('normalisasi_id', $kriteria->id)->max('nilai');
            @endphp
            <td class="table-active">{{ $maxNilai }}</td>
        @endforeach
    </tr>
</tfoot>
</tbody>

      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Matriks Ternormalisasi (R)</h5>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Alternatif</th>
            @foreach ($kriterias as $kriteria)
                <td>{{ $kriteria->kode }}</td>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach ($alternatifs as $alternatif)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $alternatif->nama }}</td>
            @foreach ($kriterias as $kriteria)
                @php
                    $penilaian = $penilaians->first(function ($penilaian) use ($alternatif, $kriteria) {
                        return $penilaian->normalisasi_id === $kriteria->id && $penilaian->alternatif_id === $alternatif->id;
                    });

                    $nilai = ($penilaian) ? $penilaian->nilai : null;

                    if ($normalisasi->pilihan === 'benefit') {
                        $maxNilai = $penilaians->where('normalisasi_id', $kriteria->id)->max('nilai');
                        $nor = ($maxNilai != 0) ? $nilai / $maxNilai : null;
                    } else {
                        $minNilai = $penilaians->where('normalisasi_id', $kriteria->id)->min('nilai');
                        $nor = ($minNilai != 0) ? $minNilai / $nilai : null;
                    }
                @endphp
                <td>{{ $nor }}</td>
            @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Perhitungan (V)</h5>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Alternatif</th>
            @foreach ($kriterias as $kriteria)
                <td>{{ $kriteria->kode }}</td>
            @endforeach
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Maqila Sulaiman Abu Zakaria</td>
            <td>0,99</td>
            <td>2,50</td>
            <td>0,67</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Cornelia Luba Tara Boro</td>
            <td>1,50</td>
            <td>2,50</td>
            <td>0,45</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Yohanes Yudha Saputra</td>
            <td>0,99</td>
            <td>1,87</td>
            <td>0,9</td>
          </tr>
          
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Preferensi</h5>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Alternatif</th>
            <th>Preferensi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Maqila Sulaiman Abu Zakaria</td>
            <td>1,3866</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Cornelia Luba Tara Boro</td>
            <td>1,4833</td>
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
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Ranking</h5>
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
  