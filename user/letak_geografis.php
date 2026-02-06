<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sejarah Desa Cigugur</title>
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


  <!-- Letak Geografis -->

  <!-- Breadcrumb -->
  <section class="breadcrumb-section py-4 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-2">Letak Geografis</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Beranda</a></li>
              <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Profil Desa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Letak Geografis</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-4 text-lg-end d-none d-lg-block">
          <i class="bi bi-geo-alt text-success" style="font-size: 4rem; opacity: 0.3;"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Hero Geografis -->
  <section class="hero-geografis position-relative">
    <div class="bg-dark" style="background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('peta-desa-hero.jpg') center/cover no-repeat; min-height: 400px;">
      <div class="container d-flex align-items-center justify-content-center text-center" style="min-height: 400px;">
        <div class="text-white">
          <i class="bi bi-globe-americas display-1 mb-3 text-success"></i>
          <h1 class="display-4 fw-bold mb-3">Letak Geografis Desa Cigugur</h1>
          <p class="lead">Kecamatan Pusakajaya, Kabupaten Subang, Provinsi Jawa Barat</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Info Geografis Utama -->
  <section class="info-geografis py-5">
    <div class="container">
      <div class="row g-4 mt-n5" style="margin-top: -60px;">
        <div class="col-sm-6 col-lg-3">
          <div class="card border-0 shadow text-center h-100">
            <div class="card-body p-4">
              <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 65px; height: 65px;">
                <i class="bi bi-rulers text-success fs-3"></i>
              </div>
              <h3 class="fw-bold text-success mb-1">6,37</h3>
              <p class="text-muted mb-0">Luas Wilayah (Km²)</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card border-0 shadow text-center h-100">
            <div class="card-body p-4">
              <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 65px; height: 65px;">
                <i class="bi bi-arrow-up-circle text-primary fs-3"></i>
              </div>
              <h3 class="fw-bold text-primary mb-1">6</h3>
              <p class="text-muted mb-0">Ketinggian (Mdpl)</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card border-0 shadow text-center h-100">
            <div class="card-body p-4">
              <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 65px; height: 65px;">
                <i class="bi bi-thermometer-half text-info fs-3"></i>
              </div>
              <h3 class="fw-bold text-info mb-1">27-34</h3>
              <p class="text-muted mb-0">Suhu Rata-rata (°C)</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card border-0 shadow text-center h-100">
            <div class="card-body p-4">
              <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 65px; height: 65px;">
                <i class="bi bi-droplet text-warning fs-3"></i>
              </div>
              <h3 class="fw-bold text-warning mb-1">1.500</h3>
              <p class="text-muted mb-0">Curah Hujan (mm/th)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Deskripsi & Peta -->
  <section class="deskripsi-peta py-5 bg-light">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <h6 class="text-success text-uppercase fw-semibold mb-2">Gambaran Umum</h6>
          <h2 class="fw-bold mb-4">Lokasi Desa Cigugur</h2>
          <p class="text-muted mb-3">Desa Cigugur terletak di wilayah Kecamatan Pusakajaya, Kabupaten Subang, Provinsi Jawa Barat, Indonesia. Desa ini merupakan salah satu dari 8 desa yang berada di Kecamatan Pusakajaya.</p>
          <p class="text-muted mb-3">Desa Cigugur merupakan desa terluas di antara desa-desa lain di kecamatan ini dengan luas wilayah mencapai 6,37 Km² dan berada pada ketinggian 6 meter di atas permukaan laut (mdpl).</p>
          <p class="text-muted mb-4">Secara topografis, Desa Cigugur termasuk dataran rendah dengan kemiringan 0–17 derajat yang sangat cocok untuk pertanian padi dan palawija. Desa ini dikenal sebagai salah satu lumbung padi Kabupaten Subang dan penyuplai beras ke pasar-pasar induk Jakarta.</p>

          <div class="d-flex gap-3">
            <div class="text-center">
              <span class="badge bg-success fs-6 px-3 py-2">41266</span>
              <p class="text-muted small mt-1 mb-0">Kode Pos</p>
            </div>
            <div class="text-center">
              <span class="badge bg-primary fs-6 px-3 py-2">32.13.30.2006</span>
              <p class="text-muted small mt-1 mb-0">Kode Kemendagri</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card border-0 shadow overflow-hidden">
            <div class="ratio ratio-4x3">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15848.0!2d107.78!3d-6.36!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zQ2lndWd1ciwgUHVzYWthamF5YSwgU3ViYW5n!5e0!3m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="card-footer bg-white p-3 text-center">
              <a href="https://maps.google.com" target="_blank" class="btn btn-sm btn-outline-success">
                <i class="bi bi-box-arrow-up-right me-1"></i>Buka di Google Maps
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Batas Wilayah -->
  <section class="batas-wilayah py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Perbatasan</h6>
        <h2 class="fw-bold">Batas Wilayah Desa</h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="position-relative">
            <!-- Tengah / Label Desa -->
            <div class="row justify-content-center mb-4">
              <div class="col-md-6 col-lg-4 text-center">
                <div class="card border-success shadow-sm">
                  <div class="card-body p-3">
                    <i class="bi bi-pin-map-fill text-success fs-2 mb-2"></i>
                    <h5 class="fw-bold text-success mb-0">Desa Cigugur</h5>
                    <small class="text-muted">Kec. Pusakajaya</small>
                  </div>
                </div>
              </div>
            </div>

            <!-- Batas Utara -->
            <div class="row justify-content-center mb-3">
              <div class="col-md-6 col-lg-5">
                <div class="card border-0 bg-primary bg-opacity-10 h-100">
                  <div class="card-body p-3 text-center">
                    <i class="bi bi-arrow-up-circle-fill text-primary fs-4 me-2"></i>
                    <strong class="text-primary">Utara</strong>
                    <p class="mb-0 mt-1 text-muted small">Desa Kebondanas (Karanginan & Kubangjaran)</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Batas Barat & Timur -->
            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <div class="card border-0 bg-warning bg-opacity-10 h-100">
                  <div class="card-body p-3 text-center">
                    <i class="bi bi-arrow-left-circle-fill text-warning fs-4 me-2"></i>
                    <strong class="text-warning">Barat</strong>
                    <p class="mb-0 mt-1 text-muted small">Desa Bojongjaya & Desa Sukaseneng</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-0 bg-info bg-opacity-10 h-100">
                  <div class="card-body p-3 text-center">
                    <i class="bi bi-arrow-right-circle-fill text-info fs-4 me-2"></i>
                    <strong class="text-info">Timur</strong>
                    <p class="mb-0 mt-1 text-muted small">Desa Rangdu (Derik) & Desa Bogor</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Batas Selatan -->
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-5">
                <div class="card border-0 bg-danger bg-opacity-10 h-100">
                  <div class="card-body p-3 text-center">
                    <i class="bi bi-arrow-down-circle-fill text-danger fs-4 me-2"></i>
                    <strong class="text-danger">Selatan</strong>
                    <p class="mb-0 mt-1 text-muted small">Desa Sukawera & Desa Sukasari (Pilang)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Wilayah Administratif -->
  <section class="wilayah-administratif py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Pembagian Wilayah</h6>
        <h2 class="fw-bold">Wilayah Administratif</h2>
      </div>

      <div class="row g-4">
        <!-- Dusun 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-success text-white text-center py-3">
              <h5 class="mb-0">Dusun I</h5>
            </div>
            <div class="card-body p-3">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-success"></i>RT 001 / RW 001</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-success"></i>RT 002 / RW 001</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-success"></i>RT 003 / RW 002</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0 border-0">
                  <span><i class="bi bi-geo me-2 text-success"></i>RT 004 / RW 002</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Dusun 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-primary text-white text-center py-3">
              <h5 class="mb-0">Dusun II</h5>
            </div>
            <div class="card-body p-3">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-primary"></i>RT 005 / RW 003</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-primary"></i>RT 006 / RW 003</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-primary"></i>RT 007 / RW 004</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0 border-0">
                  <span><i class="bi bi-geo me-2 text-primary"></i>RT 008 / RW 004</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Dusun 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-info text-white text-center py-3">
              <h5 class="mb-0">Dusun III</h5>
            </div>
            <div class="card-body p-3">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-info"></i>RT 009 / RW 005</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-info"></i>RT 010 / RW 005</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-info"></i>RT 011 / RW 006</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0 border-0">
                  <span><i class="bi bi-geo me-2 text-info"></i>RT 012 / RW 006</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Dusun 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-warning text-dark text-center py-3">
              <h5 class="mb-0">Dusun IV</h5>
            </div>
            <div class="card-body p-3">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-warning"></i>RT 013 / RW 007</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-warning"></i>RT 014 / RW 007</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  <span><i class="bi bi-geo me-2 text-warning"></i>RT 015 / RW 008</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0 border-0">
                  <span><i class="bi bi-geo me-2 text-warning"></i>RT 016 / RW 008</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tata Guna Lahan -->
  <section class="tata-guna-lahan py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Penggunaan Lahan</h6>
        <h2 class="fw-bold">Tata Guna Lahan</h2>
      </div>

      <div class="row g-4">
        <div class="col-lg-7">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                  <thead class="table-success">
                    <tr>
                      <th>No</th>
                      <th>Jenis Penggunaan Lahan</th>
                      <th class="text-end">Luas (Ha)</th>
                      <th class="text-end">Persentase</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><i class="bi bi-flower1 text-success me-2"></i>Sawah & Pertanian</td>
                      <td class="text-end">380</td>
                      <td class="text-end">59,65%</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><i class="bi bi-house text-primary me-2"></i>Permukiman & Pekarangan</td>
                      <td class="text-end">130</td>
                      <td class="text-end">20,41%</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><i class="bi bi-tree text-warning me-2"></i>Perkebunan</td>
                      <td class="text-end">70</td>
                      <td class="text-end">10,99%</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><i class="bi bi-building text-info me-2"></i>Fasilitas Umum</td>
                      <td class="text-end">30</td>
                      <td class="text-end">4,71%</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><i class="bi bi-water text-danger me-2"></i>Sungai & Saluran Irigasi</td>
                      <td class="text-end">17</td>
                      <td class="text-end">2,67%</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td><i class="bi bi-signpost text-secondary me-2"></i>Jalan & Lainnya</td>
                      <td class="text-end">10</td>
                      <td class="text-end">1,57%</td>
                    </tr>
                  </tbody>
                  <tfoot class="table-light">
                    <tr class="fw-bold">
                      <td colspan="2">Total</td>
                      <td class="text-end">637</td>
                      <td class="text-end">100%</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <h5 class="fw-bold mb-4">Visualisasi Penggunaan Lahan</h5>

              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1">
                  <small><i class="bi bi-circle-fill text-success me-1"></i>Sawah & Pertanian</small>
                  <small class="fw-bold">59,65%</small>
                </div>
                <div class="progress" style="height: 12px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 59.65%"></div>
                </div>
              </div>

              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1">
                  <small><i class="bi bi-circle-fill text-primary me-1"></i>Permukiman</small>
                  <small class="fw-bold">20,41%</small>
                </div>
                <div class="progress" style="height: 12px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 20.41%"></div>
                </div>
              </div>

              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1">
                  <small><i class="bi bi-circle-fill text-warning me-1"></i>Perkebunan</small>
                  <small class="fw-bold">10,99%</small>
                </div>
                <div class="progress" style="height: 12px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 10.99%"></div>
                </div>
              </div>

              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1">
                  <small><i class="bi bi-circle-fill text-info me-1"></i>Fasilitas Umum</small>
                  <small class="fw-bold">4,71%</small>
                </div>
                <div class="progress" style="height: 12px;">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 4.71%"></div>
                </div>
              </div>

              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1">
                  <small><i class="bi bi-circle-fill text-danger me-1"></i>Sungai & Irigasi</small>
                  <small class="fw-bold">2,67%</small>
                </div>
                <div class="progress" style="height: 12px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 2.67%"></div>
                </div>
              </div>

              <div>
                <div class="d-flex justify-content-between mb-1">
                  <small><i class="bi bi-circle-fill text-secondary me-1"></i>Jalan & Lainnya</small>
                  <small class="fw-bold">1,57%</small>
                </div>
                <div class="progress" style="height: 12px;">
                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 1.57%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Orbitasi / Jarak Tempuh -->
  <section class="orbitasi py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Aksesibilitas</h6>
        <h2 class="fw-bold">Orbitasi / Jarak Tempuh</h2>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <div class="bg-success bg-opacity-10 rounded-3 d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                <i class="bi bi-building text-success fs-3"></i>
              </div>
              <h6 class="text-muted mb-1">Ke Kantor Kecamatan</h6>
              <h3 class="fw-bold text-success mb-1">3 Km</h3>
              <small class="text-muted">± 10 menit</small>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <div class="bg-primary bg-opacity-10 rounded-3 d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                <i class="bi bi-bank text-primary fs-3"></i>
              </div>
              <h6 class="text-muted mb-1">Ke Ibu Kota Kabupaten</h6>
              <h3 class="fw-bold text-primary mb-1">45 Km</h3>
              <small class="text-muted">± 1 jam 15 menit</small>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <div class="bg-info bg-opacity-10 rounded-3 d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                <i class="bi bi-flag text-info fs-3"></i>
              </div>
              <h6 class="text-muted mb-1">Ke Ibu Kota Provinsi</h6>
              <h3 class="fw-bold text-info mb-1">180 Km</h3>
              <small class="text-muted">± 4 jam</small>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <div class="bg-warning bg-opacity-10 rounded-3 d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                <i class="bi bi-star text-warning fs-3"></i>
              </div>
              <h6 class="text-muted mb-1">Ke Ibu Kota Negara</h6>
              <h3 class="fw-bold text-warning mb-1">175 Km</h3>
              <small class="text-muted">± 3 jam 30 menit</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Kondisi Alam & Iklim -->
  <section class="kondisi-alam py-5">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <h6 class="text-success text-uppercase fw-semibold mb-2">Klimatologi</h6>
          <h2 class="fw-bold mb-4">Kondisi Alam & Iklim</h2>
          <p class="text-muted mb-4">Desa Cigugur memiliki iklim tropis yang khas dengan dua musim utama, yaitu musim hujan dan musim kemarau. Kondisi ini sangat mendukung kegiatan pertanian yang menjadi mata pencaharian utama masyarakat.</p>

          <div class="row g-3">
            <div class="col-6">
              <div class="card border-0 bg-light">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-cloud-rain text-primary fs-2 mb-2"></i>
                  <h6 class="fw-bold mb-0">Musim Hujan</h6>
                  <small class="text-muted">Oktober - Maret</small>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card border-0 bg-light">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-brightness-high text-warning fs-2 mb-2"></i>
                  <h6 class="fw-bold mb-0">Musim Kemarau</h6>
                  <small class="text-muted">April - September</small>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card border-0 bg-light">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-thermometer-sun text-danger fs-2 mb-2"></i>
                  <h6 class="fw-bold mb-0">Suhu Udara</h6>
                  <small class="text-muted">27°C - 34°C</small>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card border-0 bg-light">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-moisture text-info fs-2 mb-2"></i>
                  <h6 class="fw-bold mb-0">Kelembapan</h6>
                  <small class="text-muted">70% - 90%</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card border-0 shadow-sm">
            <div class="card-header bg-success text-white py-3">
              <h5 class="mb-0"><i class="bi bi-water me-2"></i>Sumber Daya Air</h5>
            </div>
            <div class="card-body p-4">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex px-0">
                  <i class="bi bi-droplet-fill text-primary me-3 mt-1"></i>
                  <div>
                    <strong>Sungai</strong>
                    <p class="text-muted small mb-0">Beberapa aliran sungai kecil yang melewati wilayah desa dan dimanfaatkan untuk irigasi pertanian.</p>
                  </div>
                </li>
                <li class="list-group-item d-flex px-0">
                  <i class="bi bi-droplet-fill text-info me-3 mt-1"></i>
                  <div>
                    <strong>Saluran Irigasi</strong>
                    <p class="text-muted small mb-0">Jaringan irigasi teknis yang menjadi penunjang utama produktivitas lahan pertanian padi.</p>
                  </div>
                </li>
                <li class="list-group-item d-flex px-0">
                  <i class="bi bi-droplet-fill text-success me-3 mt-1"></i>
                  <div>
                    <strong>Sumur & Air Tanah</strong>
                    <p class="text-muted small mb-0">Air tanah yang cukup melimpah digunakan untuk kebutuhan rumah tangga masyarakat.</p>
                  </div>
                </li>
                <li class="list-group-item d-flex px-0 border-0">
                  <i class="bi bi-droplet-fill text-warning me-3 mt-1"></i>
                  <div>
                    <strong>PDAM</strong>
                    <p class="text-muted small mb-0">Sebagian wilayah telah terjangkau layanan air bersih dari PDAM Tirta Jaya.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Peta Wilayah Kecamatan -->
  <section class="peta-kecamatan py-5 bg-success text-white">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-5">
          <h6 class="text-uppercase fw-semibold mb-2 opacity-75">Posisi di Kecamatan</h6>
          <h2 class="fw-bold mb-4">Kecamatan Pusakajaya</h2>
          <p class="opacity-75 mb-4">Kecamatan Pusakajaya memiliki luas wilayah sebesar 52,56 Km² dan terdiri dari 8 desa. Desa Cigugur merupakan salah satu desa dengan wilayah terluas di kecamatan ini.</p>

          <div class="table-responsive">
            <table class="table table-borderless text-white mb-0">
              <tbody>
                <tr>
                  <td class="ps-0"><i class="bi bi-geo-fill me-2"></i>Karanganyar</td>
                  <td class="text-end pe-0"><strong>9,48 Km²</strong></td>
                </tr>
                <tr>
                  <td class="ps-0"><i class="bi bi-geo-fill me-2"></i>Bojongtengah</td>
                  <td class="text-end pe-0"><strong>7,18 Km²</strong></td>
                </tr>
                <tr>
                  <td class="ps-0"><i class="bi bi-geo-fill me-2"></i>Kebondanas</td>
                  <td class="text-end pe-0"><strong>7,00 Km²</strong></td>
                </tr>
                <tr>
                  <td class="ps-0"><i class="bi bi-geo-fill me-2"></i>Pusakajaya</td>
                  <td class="text-end pe-0"><strong>6,93 Km²</strong></td>
                </tr>
                <tr class="bg-white bg-opacity-10 rounded">
                  <td class="ps-0"><i class="bi bi-geo-alt-fill me-2 text-warning"></i><strong>Cigugur</strong></td>
                  <td class="text-end pe-0"><strong>6,37 Km²</strong></td>
                </tr>
                <tr>
                  <td class="ps-0"><i class="bi bi-geo-fill me-2"></i>Cigugur Kaler</td>
                  <td class="text-end pe-0"><strong>5,84 Km²</strong></td>
                </tr>
                <tr>
                  <td class="ps-0"><i class="bi bi-geo-fill me-2"></i>Bojongjaya</td>
                  <td class="text-end pe-0"><strong>5,76 Km²</strong></td>
                </tr>
                <tr>
                  <td class="ps-0"><i class="bi bi-geo-fill me-2"></i>Rangdu</td>
                  <td class="text-end pe-0"><strong>4,00 Km²</strong></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="card border-0 shadow overflow-hidden">
            <img src="peta-kecamatan-pusakajaya.jpg" alt="Peta Kecamatan Pusakajaya" class="img-fluid">
            <div class="card-footer bg-dark text-center p-3">
              <small>Peta Administrasi Kecamatan Pusakajaya, Kabupaten Subang</small>
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
              <i class="bi bi-bullseye text-success display-4 mb-3"></i>
              <h5 class="fw-bold">Visi & Misi</h5>
              <p class="text-muted small mb-3">Arah dan pedoman pembangunan Desa Cigugur.</p>
              <a href="visi_misi.php" class="btn btn-outline-success btn-sm">Selengkapnya</a>
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

  <!-- End Letak Geografis -->




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