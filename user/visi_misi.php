<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Visi Desa Cigugur</title>
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

  <!-- Visi Misi -->

  <!-- Breadcrumb -->
  <section class="breadcrumb-section py-4 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-2">Visi & Misi</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Beranda</a></li>
              <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Profil Desa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Visi & Misi</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-4 text-lg-end d-none d-lg-block">
          <i class="bi bi-bullseye text-success" style="font-size: 4rem; opacity: 0.3;"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Hero Visi Misi -->
  <section class="hero-visi-misi position-relative">
    <div class="bg-success text-white py-5">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-7">
            <h6 class="text-uppercase fw-semibold mb-2 opacity-75">Arah Pembangunan Desa</h6>
            <h1 class="display-5 fw-bold mb-3">Visi & Misi Desa Cigugur</h1>
            <p class="lead opacity-75">Visi dan Misi merupakan arah dan pedoman dalam penyelenggaraan pemerintahan dan pembangunan Desa Cigugur periode 2020-2026.</p>
          </div>
          <div class="col-lg-5 text-center">
            <img src="ilustrasi-visi-misi.png" alt="Ilustrasi Visi Misi" class="img-fluid" style="max-height: 300px;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Visi -->
  <section class="visi py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="card border-0 shadow-lg overflow-hidden">
            <div class="row g-0">
              <div class="col-md-4 bg-success d-flex align-items-center justify-content-center p-4">
                <div class="text-center text-white">
                  <i class="bi bi-eye display-1 mb-3"></i>
                  <h2 class="fw-bold">VISI</h2>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4 p-lg-5">
                  <blockquote class="blockquote mb-4">
                    <p class="fs-4 fw-bold text-success fst-italic">
                      "Terwujudnya Desa Cigugur yang Maju, Mandiri, Sejahtera, dan Berbudaya Berdasarkan Gotong Royong"
                    </p>
                  </blockquote>
                  <hr>
                  <h6 class="fw-bold text-uppercase mb-3">Makna Visi:</h6>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <div class="d-flex">
                        <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                        <div>
                          <strong>Maju</strong>
                          <p class="text-muted small mb-0">Berkembang dalam segala aspek kehidupan masyarakat desa.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="d-flex">
                        <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                        <div>
                          <strong>Mandiri</strong>
                          <p class="text-muted small mb-0">Mampu memenuhi kebutuhan sendiri secara swadaya.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="d-flex">
                        <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                        <div>
                          <strong>Sejahtera</strong>
                          <p class="text-muted small mb-0">Tercukupinya kebutuhan lahir dan batin masyarakat.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="d-flex">
                        <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                        <div>
                          <strong>Berbudaya</strong>
                          <p class="text-muted small mb-0">Melestarikan nilai-nilai luhur dan kearifan lokal.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Misi -->
  <section class="misi py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
          <i class="bi bi-flag display-5"></i>
        </div>
        <h2 class="fw-bold">MISI</h2>
        <p class="text-muted">Langkah strategis untuk mewujudkan visi Desa Cigugur</p>
      </div>

      <div class="row g-4">
        <!-- Misi 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 50px; height: 50px;">
                  <span class="fw-bold fs-5">1</span>
                </div>
                <h5 class="fw-bold mb-0">Pemerintahan yang Baik</h5>
              </div>
              <p class="text-muted mb-0">Meningkatkan kualitas penyelenggaraan pemerintahan desa yang transparan, akuntabel, dan partisipatif dalam melayani masyarakat.</p>
            </div>
            <div class="card-footer bg-transparent border-0 p-4 pt-0">
              <div class="d-flex flex-wrap gap-1">
                <span class="badge bg-success bg-opacity-10 text-success">Transparansi</span>
                <span class="badge bg-success bg-opacity-10 text-success">Akuntabilitas</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Misi 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 50px; height: 50px;">
                  <span class="fw-bold fs-5">2</span>
                </div>
                <h5 class="fw-bold mb-0">Infrastruktur Berkualitas</h5>
              </div>
              <p class="text-muted mb-0">Membangun dan meningkatkan infrastruktur desa yang berkualitas untuk mendukung aktivitas ekonomi dan sosial masyarakat.</p>
            </div>
            <div class="card-footer bg-transparent border-0 p-4 pt-0">
              <div class="d-flex flex-wrap gap-1">
                <span class="badge bg-primary bg-opacity-10 text-primary">Jalan</span>
                <span class="badge bg-primary bg-opacity-10 text-primary">Irigasi</span>
                <span class="badge bg-primary bg-opacity-10 text-primary">Fasilitas Umum</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Misi 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 50px; height: 50px;">
                  <span class="fw-bold fs-5">3</span>
                </div>
                <h5 class="fw-bold mb-0">Ekonomi Kerakyatan</h5>
              </div>
              <p class="text-muted mb-0">Mengembangkan ekonomi kerakyatan melalui pemberdayaan UMKM, BUMDes, dan optimalisasi potensi pertanian serta sumber daya lokal.</p>
            </div>
            <div class="card-footer bg-transparent border-0 p-4 pt-0">
              <div class="d-flex flex-wrap gap-1">
                <span class="badge bg-info bg-opacity-10 text-info">UMKM</span>
                <span class="badge bg-info bg-opacity-10 text-info">BUMDes</span>
                <span class="badge bg-info bg-opacity-10 text-info">Pertanian</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Misi 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 50px; height: 50px;">
                  <span class="fw-bold fs-5">4</span>
                </div>
                <h5 class="fw-bold mb-0">SDM Berkualitas</h5>
              </div>
              <p class="text-muted mb-0">Meningkatkan kualitas sumber daya manusia melalui peningkatan akses pendidikan, kesehatan, dan pelatihan keterampilan masyarakat.</p>
            </div>
            <div class="card-footer bg-transparent border-0 p-4 pt-0">
              <div class="d-flex flex-wrap gap-1">
                <span class="badge bg-warning bg-opacity-10 text-warning">Pendidikan</span>
                <span class="badge bg-warning bg-opacity-10 text-warning">Kesehatan</span>
                <span class="badge bg-warning bg-opacity-10 text-warning">Pelatihan</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Misi 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 50px; height: 50px;">
                  <span class="fw-bold fs-5">5</span>
                </div>
                <h5 class="fw-bold mb-0">Pelestarian Budaya</h5>
              </div>
              <p class="text-muted mb-0">Melestarikan dan mengembangkan nilai-nilai budaya, adat istiadat, serta kearifan lokal sebagai jati diri masyarakat Desa Cigugur.</p>
            </div>
            <div class="card-footer bg-transparent border-0 p-4 pt-0">
              <div class="d-flex flex-wrap gap-1">
                <span class="badge bg-danger bg-opacity-10 text-danger">Adat</span>
                <span class="badge bg-danger bg-opacity-10 text-danger">Seni</span>
                <span class="badge bg-danger bg-opacity-10 text-danger">Tradisi</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Misi 6 -->
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 50px; height: 50px;">
                  <span class="fw-bold fs-5">6</span>
                </div>
                <h5 class="fw-bold mb-0">Lingkungan Lestari</h5>
              </div>
              <p class="text-muted mb-0">Menjaga kelestarian lingkungan hidup dan sumber daya alam desa untuk keberlanjutan pembangunan dan kesejahteraan generasi mendatang.</p>
            </div>
            <div class="card-footer bg-transparent border-0 p-4 pt-0">
              <div class="d-flex flex-wrap gap-1">
                <span class="badge bg-secondary bg-opacity-10 text-secondary">Konservasi</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary">Kebersihan</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary">Penghijauan</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tujuan & Sasaran -->
  <section class="tujuan-sasaran py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Implementasi Visi Misi</h6>
        <h2 class="fw-bold">Tujuan & Sasaran</h2>
      </div>

      <div class="row g-4">
        <div class="col-lg-6">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-success text-white py-3">
              <h5 class="mb-0"><i class="bi bi-crosshair me-2"></i>Tujuan</h5>
            </div>
            <div class="card-body p-4">
              <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 d-flex">
                  <i class="bi bi-arrow-right-circle text-success me-3 mt-1"></i>
                  <span>Meningkatkan kesejahteraan dan taraf hidup masyarakat Desa Cigugur</span>
                </li>
                <li class="list-group-item px-0 d-flex">
                  <i class="bi bi-arrow-right-circle text-success me-3 mt-1"></i>
                  <span>Mewujudkan pemerintahan desa yang bersih dan melayani</span>
                </li>
                <li class="list-group-item px-0 d-flex">
                  <i class="bi bi-arrow-right-circle text-success me-3 mt-1"></i>
                  <span>Meningkatkan kualitas infrastruktur dan fasilitas publik</span>
                </li>
                <li class="list-group-item px-0 d-flex">
                  <i class="bi bi-arrow-right-circle text-success me-3 mt-1"></i>
                  <span>Mengembangkan potensi ekonomi lokal berbasis masyarakat</span>
                </li>
                <li class="list-group-item px-0 d-flex border-0">
                  <i class="bi bi-arrow-right-circle text-success me-3 mt-1"></i>
                  <span>Melestarikan lingkungan dan budaya desa</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-primary text-white py-3">
              <h5 class="mb-0"><i class="bi bi-bullseye me-2"></i>Sasaran</h5>
            </div>
            <div class="card-body p-4">
              <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 d-flex">
                  <i class="bi bi-check2-circle text-primary me-3 mt-1"></i>
                  <span>Menurunkan angka kemiskinan dan pengangguran di desa</span>
                </li>
                <li class="list-group-item px-0 d-flex">
                  <i class="bi bi-check2-circle text-primary me-3 mt-1"></i>
                  <span>Terciptanya pelayanan administrasi yang cepat dan mudah</span>
                </li>
                <li class="list-group-item px-0 d-flex">
                  <i class="bi bi-check2-circle text-primary me-3 mt-1"></i>
                  <span>Terbangunnya infrastruktur jalan, irigasi, dan sanitasi yang memadai</span>
                </li>
                <li class="list-group-item px-0 d-flex">
                  <i class="bi bi-check2-circle text-primary me-3 mt-1"></i>
                  <span>Berkembangnya UMKM dan BUMDes yang produktif</span>
                </li>
                <li class="list-group-item px-0 d-flex border-0">
                  <i class="bi bi-check2-circle text-primary me-3 mt-1"></i>
                  <span>Terjaganya kelestarian alam dan budaya lokal</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Indikator Keberhasilan -->
  <section class="indikator py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Capaian Target</h6>
        <h2 class="fw-bold">Indikator Keberhasilan</h2>
      </div>

      <div class="row g-4">
        <div class="col-sm-6 col-lg-3">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-4">
              <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                <i class="bi bi-graph-up-arrow text-success fs-3"></i>
              </div>
              <h3 class="fw-bold text-success mb-1">
                < 5%</h3>
                  <p class="text-muted small mb-0">Target Angka Kemiskinan</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-4">
              <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                <i class="bi bi-mortarboard text-primary fs-3"></i>
              </div>
              <h3 class="fw-bold text-primary mb-1">100%</h3>
              <p class="text-muted small mb-0">Akses Pendidikan Dasar</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-4">
              <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                <i class="bi bi-road text-info fs-3"></i>
              </div>
              <h3 class="fw-bold text-info mb-1">95%</h3>
              <p class="text-muted small mb-0">Jalan Desa Beraspal</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-4">
              <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                <i class="bi bi-shop text-warning fs-3"></i>
              </div>
              <h3 class="fw-bold text-warning mb-1">50+</h3>
              <p class="text-muted small mb-0">UMKM Aktif & Produktif</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Nilai-Nilai Dasar -->
  <section class="nilai-dasar py-5">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-5">
          <h6 class="text-success text-uppercase fw-semibold mb-2">Prinsip Utama</h6>
          <h2 class="fw-bold mb-4">Nilai-Nilai Dasar Pembangunan Desa</h2>
          <p class="text-muted mb-4">Dalam mewujudkan visi dan misi, Pemerintah Desa Cigugur berpedoman pada nilai-nilai dasar yang menjadi landasan setiap program dan kebijakan.</p>
          <a href="#" class="btn btn-success">
            <i class="bi bi-file-earmark-text me-2"></i>Unduh Dokumen RPJMDes
          </a>
        </div>
        <div class="col-lg-7">
          <div class="row g-3">
            <div class="col-sm-6">
              <div class="card border-0 bg-light h-100">
                <div class="card-body p-4">
                  <i class="bi bi-hand-thumbs-up text-success fs-2 mb-2"></i>
                  <h5 class="fw-bold">Integritas</h5>
                  <p class="text-muted small mb-0">Menjunjung tinggi kejujuran dan kebenaran dalam setiap tindakan.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card border-0 bg-light h-100">
                <div class="card-body p-4">
                  <i class="bi bi-people text-primary fs-2 mb-2"></i>
                  <h5 class="fw-bold">Gotong Royong</h5>
                  <p class="text-muted small mb-0">Bekerja sama dan saling membantu untuk kepentingan bersama.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card border-0 bg-light h-100">
                <div class="card-body p-4">
                  <i class="bi bi-lightbulb text-warning fs-2 mb-2"></i>
                  <h5 class="fw-bold">Inovatif</h5>
                  <p class="text-muted small mb-0">Mengembangkan ide dan cara baru dalam pembangunan desa.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card border-0 bg-light h-100">
                <div class="card-body p-4">
                  <i class="bi bi-recycle text-info fs-2 mb-2"></i>
                  <h5 class="fw-bold">Berkelanjutan</h5>
                  <p class="text-muted small mb-0">Membangun dengan memperhatikan generasi mendatang.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Komitmen Kepala Desa -->
  <section class="komitmen py-5 bg-success text-white">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-3 text-center">
          <img src="foto-kepala-desa.jpg" alt="Kepala Desa Cigugur" class="img-fluid rounded-circle shadow" style="width: 200px; height: 200px; object-fit: cover; border: 5px solid rgba(255,255,255,0.3);">
        </div>
        <div class="col-lg-9">
          <i class="bi bi-quote display-4 opacity-50"></i>
          <blockquote class="blockquote mb-4">
            <p class="fs-4 fst-italic">"Visi dan Misi ini bukan hanya sekadar tulisan, melainkan komitmen nyata kami untuk membangun Desa Cigugur menjadi desa yang maju, mandiri, dan sejahtera. Kami mengajak seluruh warga untuk bersama-sama mewujudkan cita-cita mulia ini."</p>
          </blockquote>
          <div class="d-flex align-items-center">
            <div>
              <h5 class="fw-bold mb-0">H. Ahmad Sudrajat, S.Sos</h5>
              <p class="mb-0 opacity-75">Kepala Desa Cigugur</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Profil Lainnya -->
  <section class="cta-profil py-5 bg-light">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <i class="bi bi-book text-success display-4 mb-3"></i>
              <h5 class="fw-bold">Sejarah Desa</h5>
              <p class="text-muted small mb-3">Pelajari perjalanan sejarah Desa Cigugur dari masa ke masa.</p>
              <a href="sejarah_desa.php" class="btn btn-outline-success btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <i class="bi bi-geo-alt text-success display-4 mb-3"></i>
              <h5 class="fw-bold">Letak Geografis</h5>
              <p class="text-muted small mb-3">Informasi lokasi dan batas wilayah Desa Cigugur.</p>
              <a href="#" class="btn btn-outline-success btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <i class="bi bi-diagram-3 text-success display-4 mb-3"></i>
              <h5 class="fw-bold">Struktur Pemerintahan</h5>
              <p class="text-muted small mb-3">Kenali struktur organisasi pemerintahan Desa Cigugur.</p>
              <a href="#" class="btn btn-outline-success btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Visi Misi -->




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