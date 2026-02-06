<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Desa Cigugur</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">
        <img src="logo-desa.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
        SID Cigugur
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Beranda</a>
          </li>

          <!-- Profil Desa -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil Desa
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sejarah_desa.php">Sejarah Desa</a></li>
              <li><a class="dropdown-item" href="visi_misi.php">Visi & Misi</a></li>
              <li><a class="dropdown-item" href="letak_geografis.php">Letak Geografis</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="struktur_pemerintahan.php">Struktur Pemerintahan</a></li>
              <li><a class="dropdown-item" href="#">Perangkat Desa</a></li>
              <li><a class="dropdown-item" href="#">Lembaga Desa</a></li>
            </ul>
          </li>

          <!-- Data Kependudukan -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kependudukan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Data Penduduk</a></li>
              <li><a class="dropdown-item" href="#">Kartu Keluarga</a></li>
              <li><a class="dropdown-item" href="#">Statistik Penduduk</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Data Wilayah (RT/RW)</a></li>
              <li><a class="dropdown-item" href="#">Penerima Bantuan</a></li>
            </ul>
          </li>

          <!-- Layanan Publik -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Permohonan Surat</a></li>
              <li><a class="dropdown-item" href="#">Cek Status Permohonan</a></li>
              <li><a class="dropdown-item" href="#">Arsip Surat</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">E-Aduan</a></li>
              <li><a class="dropdown-item" href="#">Antrian Online</a></li>
            </ul>
          </li>

          <!-- Informasi & Transparansi -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Informasi
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Berita & Pengumuman</a></li>
              <li><a class="dropdown-item" href="#">Agenda Kegiatan</a></li>
              <li><a class="dropdown-item" href="#">Galeri</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">APBDes</a></li>
              <li><a class="dropdown-item" href="#">Laporan Keuangan</a></li>
              <li><a class="dropdown-item" href="#">Pembangunan Desa</a></li>
            </ul>
          </li>

          <!-- Potensi Desa -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Potensi Desa
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Wisata</a></li>
              <li><a class="dropdown-item" href="#">Produk Unggulan</a></li>
              <li><a class="dropdown-item" href="#">UMKM</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Peta Desa</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>

        <form class="d-flex me-2" role="search">
          <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Cari</button>
        </form>

        <a href="#" class="btn btn-primary">
          <i class="bi bi-box-arrow-in-right me-1"></i>Login
        </a>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Informasi Home page Seperti Hero image atau lainnya -->

  <!-- Hero Section -->
  <section class="hero-section position-relative overflow-hidden">
    <div class="bg-dark text-white" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('hero-desa-cigugur.jpg') center/cover no-repeat; min-height: 85vh;">
      <div class="container d-flex align-items-center" style="min-height: 85vh;">
        <div class="row w-100">
          <div class="col-lg-8">
            <p class="text-uppercase fw-semibold text-success mb-2">
              <i class="bi bi-geo-alt-fill me-1"></i>Kecamatan Pusakajaya, Kabupaten Subang, Jawa Barat
            </p>
            <h1 class="display-3 fw-bold mb-3">Selamat Datang di<br>Desa Cigugur</h1>
            <p class="lead mb-4">Sistem Informasi Desa yang menghadirkan pelayanan publik transparan, cepat, dan mudah diakses untuk seluruh masyarakat Desa Cigugur.</p>
            <div class="d-flex flex-wrap gap-2">
              <a href="#" class="btn btn-success btn-lg px-4">
                <i class="bi bi-file-earmark-text me-2"></i>Ajukan Surat
              </a>
              <a href="#" class="btn btn-outline-light btn-lg px-4">
                <i class="bi bi-info-circle me-2"></i>Profil Desa
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Quick Access / Layanan Cepat -->
  <section class="quick-access py-5 bg-light">
    <div class="container">
      <div class="row g-4 justify-content-center mt-n5" style="margin-top: -80px;">
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="text-decoration-none">
            <div class="card border-0 shadow-sm h-100 text-center p-3 hover-shadow">
              <div class="card-body">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                  <i class="bi bi-envelope-paper text-primary fs-4"></i>
                </div>
                <h6 class="card-title mb-0">Permohonan Surat</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="text-decoration-none">
            <div class="card border-0 shadow-sm h-100 text-center p-3">
              <div class="card-body">
                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                  <i class="bi bi-people text-success fs-4"></i>
                </div>
                <h6 class="card-title mb-0">Data Penduduk</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="text-decoration-none">
            <div class="card border-0 shadow-sm h-100 text-center p-3">
              <div class="card-body">
                <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                  <i class="bi bi-cash-stack text-info fs-4"></i>
                </div>
                <h6 class="card-title mb-0">APBDes</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="text-decoration-none">
            <div class="card border-0 shadow-sm h-100 text-center p-3">
              <div class="card-body">
                <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                  <i class="bi bi-megaphone text-warning fs-4"></i>
                </div>
                <h6 class="card-title mb-0">E-Aduan</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="text-decoration-none">
            <div class="card border-0 shadow-sm h-100 text-center p-3">
              <div class="card-body">
                <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                  <i class="bi bi-map text-danger fs-4"></i>
                </div>
                <h6 class="card-title mb-0">Peta Desa</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="text-decoration-none">
            <div class="card border-0 shadow-sm h-100 text-center p-3">
              <div class="card-body">
                <div class="bg-secondary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                  <i class="bi bi-shop text-secondary fs-4"></i>
                </div>
                <h6 class="card-title mb-0">UMKM</h6>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Statistik Desa -->
  <section class="statistik-desa py-5 bg-success text-white">
    <div class="container">
      <div class="row text-center g-4">
        <div class="col-6 col-md-3">
          <div class="d-flex flex-column align-items-center">
            <i class="bi bi-people-fill fs-1 mb-2"></i>
            <h2 class="fw-bold mb-0" id="totalPenduduk">8,542</h2>
            <p class="mb-0">Total Penduduk</p>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="d-flex flex-column align-items-center">
            <i class="bi bi-house-door-fill fs-1 mb-2"></i>
            <h2 class="fw-bold mb-0" id="totalKK">2,156</h2>
            <p class="mb-0">Kepala Keluarga</p>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="d-flex flex-column align-items-center">
            <i class="bi bi-buildings fs-1 mb-2"></i>
            <h2 class="fw-bold mb-0" id="totalRT">12</h2>
            <p class="mb-0">Rukun Tetangga</p>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="d-flex flex-column align-items-center">
            <i class="bi bi-rulers fs-1 mb-2"></i>
            <h2 class="fw-bold mb-0" id="luasWilayah">485</h2>
            <p class="mb-0">Luas Wilayah (Ha)</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sambutan Kepala Desa -->
  <section class="sambutan py-5">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-4 text-center">
          <img src="foto-kepala-desa.jpg" alt="Kepala Desa Cigugur" class="img-fluid rounded-4 shadow" style="max-width: 280px;">
          <h5 class="mt-3 mb-0 fw-bold">H. Ahmad Sudrajat, S.Sos</h5>
          <p class="text-muted">Kepala Desa Cigugur</p>
        </div>
        <div class="col-lg-8">
          <h6 class="text-success text-uppercase fw-semibold mb-2">Sambutan Kepala Desa</h6>
          <h2 class="fw-bold mb-4">Membangun Desa, Membangun Indonesia</h2>
          <p class="text-muted mb-3">Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
          <p class="text-muted mb-3">Puji syukur kita panjatkan kehadirat Allah SWT atas segala limpahan rahmat dan karunia-Nya. Selamat datang di Website Resmi Desa Cigugur, Kecamatan Pusakajaya, Kabupaten Subang.</p>
          <p class="text-muted mb-4">Website ini hadir sebagai wujud komitmen kami dalam meningkatkan transparansi, akuntabilitas, dan pelayanan publik yang lebih baik bagi seluruh masyarakat Desa Cigugur. Melalui sistem informasi ini, diharapkan masyarakat dapat mengakses informasi dan layanan desa dengan lebih mudah.</p>
          <a href="#" class="btn btn-outline-success">
            <i class="bi bi-arrow-right me-2"></i>Selengkapnya
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Berita & Pengumuman -->
  <section class="berita py-5 bg-light">
    <div class="container">
      <div class="row mb-4">
        <div class="col-lg-8">
          <h6 class="text-success text-uppercase fw-semibold mb-2">Update Terkini</h6>
          <h2 class="fw-bold">Berita & Pengumuman</h2>
        </div>
        <div class="col-lg-4 text-lg-end align-self-end">
          <a href="#" class="btn btn-outline-success">Lihat Semua Berita</a>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <img src="berita-1.jpg" class="card-img-top" alt="Berita 1" style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <span class="badge bg-success mb-2">Pengumuman</span>
              <h5 class="card-title">Jadwal Pelayanan Administrasi Bulan Februari 2026</h5>
              <p class="card-text text-muted small">Informasi mengenai jadwal pelayanan administrasi di Kantor Desa Cigugur selama bulan Februari 2026...</p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>05 Februari 2026</small>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <img src="berita-2.jpg" class="card-img-top" alt="Berita 2" style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <span class="badge bg-primary mb-2">Kegiatan</span>
              <h5 class="card-title">Musyawarah Desa Pembahasan RKPDes 2026</h5>
              <p class="card-text text-muted small">Pemerintah Desa Cigugur mengadakan musyawarah desa untuk membahas Rencana Kerja Pemerintah Desa tahun 2026...</p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>03 Februari 2026</small>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <img src="berita-3.jpg" class="card-img-top" alt="Berita 3" style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <span class="badge bg-info mb-2">Informasi</span>
              <h5 class="card-title">Penyaluran Bantuan Langsung Tunai Dana Desa</h5>
              <p class="card-text text-muted small">Pemerintah Desa Cigugur telah menyalurkan BLT Dana Desa kepada masyarakat yang berhak menerima...</p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>01 Februari 2026</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Infografis APBDes -->
  <section class="apbdes py-5">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <h6 class="text-success text-uppercase fw-semibold mb-2">Transparansi Anggaran</h6>
          <h2 class="fw-bold mb-4">APBDes Tahun 2026</h2>
          <p class="text-muted mb-4">Pemerintah Desa Cigugur berkomitmen untuk mengelola anggaran desa secara transparan dan akuntabel demi kesejahteraan masyarakat.</p>
          <div class="card border-0 bg-light mb-3">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <span>Pendapatan Desa</span>
                <span class="fw-bold text-success">Rp 1.850.000.000</span>
              </div>
              <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
              </div>
            </div>
          </div>
          <div class="card border-0 bg-light mb-3">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <span>Belanja Desa</span>
                <span class="fw-bold text-primary">Rp 1.780.000.000</span>
              </div>
              <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 96%"></div>
              </div>
            </div>
          </div>
          <div class="card border-0 bg-light mb-4">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <span>Pembiayaan</span>
                <span class="fw-bold text-info">Rp 70.000.000</span>
              </div>
              <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-info" role="progressbar" style="width: 4%"></div>
              </div>
            </div>
          </div>
          <a href="#" class="btn btn-success">
            <i class="bi bi-file-earmark-bar-graph me-2"></i>Lihat Detail APBDes
          </a>
        </div>
        <div class="col-lg-6">
          <div class="card border-0 shadow">
            <div class="card-header bg-success text-white">
              <h5 class="mb-0"><i class="bi bi-pie-chart me-2"></i>Alokasi Belanja Desa</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Bidang Penyelenggaraan Pemerintahan
                  <span class="badge bg-primary rounded-pill">32%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Bidang Pelaksanaan Pembangunan
                  <span class="badge bg-success rounded-pill">40%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Bidang Pembinaan Kemasyarakatan
                  <span class="badge bg-info rounded-pill">12%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Bidang Pemberdayaan Masyarakat
                  <span class="badge bg-warning rounded-pill">10%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Bidang Penanggulangan Bencana
                  <span class="badge bg-danger rounded-pill">6%</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Potensi Desa -->
  <section class="potensi-desa py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Jelajahi</h6>
        <h2 class="fw-bold">Potensi Desa Cigugur</h2>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                <i class="bi bi-tree text-success fs-2"></i>
              </div>
              <h5 class="card-title">Pertanian</h5>
              <p class="card-text text-muted small">Potensi pertanian padi, palawija, dan hortikultura yang menjadi mata pencaharian utama masyarakat.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                <i class="bi bi-shop-window text-primary fs-2"></i>
              </div>
              <h5 class="card-title">UMKM</h5>
              <p class="card-text text-muted small">Berbagai produk unggulan UMKM lokal yang siap dipasarkan secara lebih luas.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                <i class="bi bi-camera text-warning fs-2"></i>
              </div>
              <h5 class="card-title">Wisata</h5>
              <p class="card-text text-muted small">Destinasi wisata alam dan budaya yang dapat dikunjungi oleh wisatawan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                <i class="bi bi-palette text-danger fs-2"></i>
              </div>
              <h5 class="card-title">Budaya</h5>
              <p class="card-text text-muted small">Kekayaan seni dan budaya tradisional yang masih dilestarikan oleh masyarakat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Agenda Kegiatan -->
  <section class="agenda py-5">
    <div class="container">
      <div class="row mb-4">
        <div class="col-lg-8">
          <h6 class="text-success text-uppercase fw-semibold mb-2">Kalender</h6>
          <h2 class="fw-bold">Agenda Kegiatan Desa</h2>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card border-0 shadow-sm">
            <div class="card-body d-flex">
              <div class="bg-success text-white text-center rounded p-3 me-3" style="min-width: 70px;">
                <h3 class="mb-0 fw-bold">10</h3>
                <small>Feb</small>
              </div>
              <div>
                <h5 class="card-title mb-1">Posyandu Balita</h5>
                <p class="text-muted small mb-1"><i class="bi bi-clock me-1"></i>08:00 - 12:00 WIB</p>
                <p class="text-muted small mb-0"><i class="bi bi-geo-alt me-1"></i>Balai Desa Cigugur</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card border-0 shadow-sm">
            <div class="card-body d-flex">
              <div class="bg-primary text-white text-center rounded p-3 me-3" style="min-width: 70px;">
                <h3 class="mb-0 fw-bold">15</h3>
                <small>Feb</small>
              </div>
              <div>
                <h5 class="card-title mb-1">Kerja Bakti Lingkungan</h5>
                <p class="text-muted small mb-1"><i class="bi bi-clock me-1"></i>07:00 - 10:00 WIB</p>
                <p class="text-muted small mb-0"><i class="bi bi-geo-alt me-1"></i>Seluruh Wilayah Desa</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card border-0 shadow-sm">
            <div class="card-body d-flex">
              <div class="bg-info text-white text-center rounded p-3 me-3" style="min-width: 70px;">
                <h3 class="mb-0 fw-bold">20</h3>
                <small>Feb</small>
              </div>
              <div>
                <h5 class="card-title mb-1">Rapat Koordinasi RT/RW</h5>
                <p class="text-muted small mb-1"><i class="bi bi-clock me-1"></i>19:00 - 21:00 WIB</p>
                <p class="text-muted small mb-0"><i class="bi bi-geo-alt me-1"></i>Aula Kantor Desa</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card border-0 shadow-sm">
            <div class="card-body d-flex">
              <div class="bg-warning text-white text-center rounded p-3 me-3" style="min-width: 70px;">
                <h3 class="mb-0 fw-bold">25</h3>
                <small>Feb</small>
              </div>
              <div>
                <h5 class="card-title mb-1">Penyuluhan Pertanian</h5>
                <p class="text-muted small mb-1"><i class="bi bi-clock me-1"></i>09:00 - 12:00 WIB</p>
                <p class="text-muted small mb-0"><i class="bi bi-geo-alt me-1"></i>Balai Desa Cigugur</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Informasi Home page Seperti Hero image atau lainnya -->


  <!-- footer -->
  <footer class="footer bg-dark text-white pt-5">
    <!-- Main Footer -->
    <div class="container">
      <div class="row g-4 pb-4">
        <!-- Tentang Desa -->
        <div class="col-lg-4 col-md-6">
          <div class="d-flex align-items-center mb-3">
            <img src="logo-desa.png" alt="Logo Desa Cigugur" width="50" height="50" class="me-2">
            <div>
              <h5 class="mb-0 fw-bold">Desa Cigugur</h5>
              <small class="text-white-50">Kec. Pusakajaya, Kab. Subang</small>
            </div>
          </div>
          <p class="text-white-50 mb-3">Sistem Informasi Desa Cigugur hadir untuk memberikan pelayanan publik yang transparan, cepat, dan mudah diakses oleh seluruh masyarakat.</p>
          <div class="d-flex gap-2">
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle">
              <i class="bi bi-youtube"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle">
              <i class="bi bi-twitter-x"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle">
              <i class="bi bi-tiktok"></i>
            </a>
          </div>
        </div>

        <!-- Tautan Cepat -->
        <div class="col-lg-2 col-md-6">
          <h6 class="fw-bold text-uppercase mb-3">Tautan Cepat</h6>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#" class="text-white-50 text-decoration-none hover-white">
                <i class="bi bi-chevron-right me-1 small"></i>Beranda
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="text-white-50 text-decoration-none hover-white">
                <i class="bi bi-chevron-right me-1 small"></i>Profil Desa
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="text-white-50 text-decoration-none hover-white">
                <i class="bi bi-chevron-right me-1 small"></i>Berita
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="text-white-50 text-decoration-none hover-white">
                <i class="bi bi-chevron-right me-1 small"></i>APBDes
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="text-white-50 text-decoration-none hover-white">
                <i class="bi bi-chevron-right me-1 small"></i>Galeri
              </a>
            </li>
          </ul>
        </div>

        <!-- Layanan -->
        <div class="col-lg-2 col-md-6">
          <h6 class="fw-bold text-uppercase mb-3">Layanan</h6>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#" class="text-white-50 text-decoration-none hover-white">
                <i class="bi bi-chevron-right me-1 small"></i>Permohonan Surat
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="text-white-50 text-decoration-none hover-white">
                <i class="bi bi-chevron-right me-1 small"></i>Cek Status
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="text-white-50 text-decoration-none hover-white">
                <i class="bi bi-chevron-right me-1 small"></i>E-Aduan
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="text-white-50 text-decoration-none hover-white">
                <i class="bi bi-chevron-right me-1 small"></i>Antrian Online
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="text-white-50 text-decoration-none hover-white">
                <i class="bi bi-chevron-right me-1 small"></i>Peta Desa
              </a>
            </li>
          </ul>
        </div>

        <!-- Kontak -->
        <div class="col-lg-4 col-md-6">
          <h6 class="fw-bold text-uppercase mb-3">Hubungi Kami</h6>
          <ul class="list-unstyled">
            <li class="d-flex mb-3">
              <i class="bi bi-geo-alt-fill text-success me-3 fs-5"></i>
              <span class="text-white-50">Jl. Raya Cigugur No. 01, Desa Cigugur, Kec. Pusakajaya, Kab. Subang, Jawa Barat 41255</span>
            </li>
            <li class="d-flex mb-3">
              <i class="bi bi-telephone-fill text-success me-3 fs-5"></i>
              <span class="text-white-50">(0260) 123456</span>
            </li>
            <li class="d-flex mb-3">
              <i class="bi bi-envelope-fill text-success me-3 fs-5"></i>
              <span class="text-white-50">desa.cigugur@subangkab.go.id</span>
            </li>
            <li class="d-flex mb-3">
              <i class="bi bi-clock-fill text-success me-3 fs-5"></i>
              <span class="text-white-50">Senin - Jumat: 08.00 - 15.00 WIB</span>
            </li>
          </ul>
        </div>
      </div>

      <hr class="border-secondary">

      <!-- Peta Lokasi & Statistik Pengunjung -->
      <div class="row g-4 py-4">
        <div class="col-lg-8">
          <h6 class="fw-bold text-uppercase mb-3">Lokasi Kantor Desa</h6>
          <div class="ratio ratio-21x9 rounded overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15848.123456789!2d107.123456!3d-6.123456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMDcnMjQuMSJTIDEwN8KwMDcnMjQuMSJF!5e0!3m2!1sid!2sid!4v1234567890" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col-lg-4">
          <h6 class="fw-bold text-uppercase mb-3">Statistik Pengunjung</h6>
          <div class="card bg-secondary bg-opacity-25 border-0">
            <div class="card-body">
              <ul class="list-unstyled mb-0">
                <li class="d-flex justify-content-between py-2 border-bottom border-secondary">
                  <span><i class="bi bi-person-fill me-2 text-success"></i>Hari Ini</span>
                  <span class="fw-bold">125</span>
                </li>
                <li class="d-flex justify-content-between py-2 border-bottom border-secondary">
                  <span><i class="bi bi-calendar-day me-2 text-success"></i>Kemarin</span>
                  <span class="fw-bold">342</span>
                </li>
                <li class="d-flex justify-content-between py-2 border-bottom border-secondary">
                  <span><i class="bi bi-calendar-week me-2 text-success"></i>Minggu Ini</span>
                  <span class="fw-bold">1,856</span>
                </li>
                <li class="d-flex justify-content-between py-2 border-bottom border-secondary">
                  <span><i class="bi bi-calendar-month me-2 text-success"></i>Bulan Ini</span>
                  <span class="fw-bold">8,432</span>
                </li>
                <li class="d-flex justify-content-between py-2">
                  <span><i class="bi bi-globe me-2 text-success"></i>Total Pengunjung</span>
                  <span class="fw-bold">156,789</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="mt-3">
            <small class="text-white-50">
              <i class="bi bi-clock me-1"></i>Terakhir diperbarui: 06 Februari 2026
            </small>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Footer -->
    <div class="bg-black py-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-start">
            <small class="text-white-50">
              &copy; 2026 <strong>Desa Cigugur</strong>. Hak Cipta Dilindungi.
            </small>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <small class="text-white-50">
              Dikembangkan oleh <a href="#" class="text-success text-decoration-none">Tim Pengembang SID</a>
            </small>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>