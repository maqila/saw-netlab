<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard') ? '' : 'collapsed' }}" href="/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">Data</li>

    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/user*') ? '' : 'collapsed' }}" href="/dashboard/user">
        <i class="bi bi-person"></i>
        <span>Data User</span>
      </a>
    </li><!-- End User Page Nav -->
    
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/lab*') ? '' : 'collapsed' }}" href="/dashboard/lab">
        <i class="bi bi-person"></i>
        <span>Data Laboratorium</span>
      </a>
    </li><!-- End User Page Nav -->
    
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/aslab*') ? '' : 'collapsed' }}" href="/dashboard/aslab">
        <i class="bi bi-person"></i>
        <span>Data Asisten Laboratorium</span>
      </a>
    </li><!-- End User Page Nav -->

    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/alternatif*') ? '' : 'collapsed' }}" href="/dashboard/alternatif">
        <i class="bi bi-file-earmark-text"></i>
        <span>Data Alternatif</span>
      </a>
    </li><!-- End Alternatif Page Nav -->

    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/kriteria*') ? '' : 'collapsed' }}" href="/dashboard/kriteria">
        <i class="bi bi-file-earmark-text"></i>
        <span>Data Kriteria</span>
      </a>
    </li><!-- End kriteria Page Nav -->
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/normalisasi*') ? '' : 'collapsed' }}" href="/dashboard/normalisasi">
        <i class="bi bi-file-earmark-text"></i>
        <span>Data Normalisasi</span>
      </a>
    </li><!-- End kriteria Page Nav -->

    <li class="nav-heading">Penilaian</li>

    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/penilaian*') ? '' : 'collapsed' }}" href="/dashboard/penilaian">
        <i class="bi bi-card-list"></i>
        <span>Penilaian Alternatif</span>
      </a>
    </li><!-- End Penilaian Page Nav -->
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/nilai*') ? '' : 'collapsed' }}" href="/dashboard/nilai">
        <i class="bi bi-card-list"></i>
        <span>Penilaian Alternatif User</span>
      </a>
    </li><!-- End Penilaian Page Nav -->

    <li class="nav-heading">Proses</li>

    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/proses*') ? '' : 'collapsed' }}" href="/dashboard/proses">
        <i class="bi bi-globe"></i>
        <span>Proses Perhitungan</span>
      </a>
    </li><!-- End Hasil Page Nav -->

    <li class="nav-heading">Rank</li>

    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/hasil*') ? '' : 'collapsed' }}" href="/dashboard/hasil">
        <i class="bi bi-printer"></i>
        <span>Hasil Keputusan</span>
      </a>
    </li><!-- End Hasil Page Nav -->

  </ul>

</aside><!-- End Sidebar-->