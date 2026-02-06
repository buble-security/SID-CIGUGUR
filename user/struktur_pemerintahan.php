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

  <!-- Struktur Pemerintahan -->

  <!-- Breadcrumb -->
  <section class="breadcrumb-section py-4 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-2">Struktur Pemerintahan</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Beranda</a></li>
              <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Profil Desa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Struktur Pemerintahan</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-4 text-lg-end d-none d-lg-block">
          <i class="bi bi-diagram-3 text-success" style="font-size: 4rem; opacity: 0.3;"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Hero Struktur Pemerintahan -->
  <section class="hero-struktur position-relative">
    <div class="bg-success text-white py-5">
      <div class="container text-center">
        <i class="bi bi-bank display-1 mb-3 opacity-75"></i>
        <h1 class="display-5 fw-bold mb-3">Struktur Organisasi & Tata Kerja</h1>
        <p class="lead mb-1 opacity-75">Pemerintah Desa Cigugur</p>
        <p class="opacity-75">Kecamatan Pusakajaya, Kabupaten Subang, Provinsi Jawa Barat</p>
        <small class="opacity-50">Berdasarkan UU No. 6 Tahun 2014 & Permendagri No. 84 Tahun 2015</small>
      </div>
    </div>
  </section>

  <!-- Bagan Struktur Organisasi -->
  <section class="bagan-struktur py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Bagan Organisasi</h6>
        <h2 class="fw-bold">Struktur Pemerintah Desa Cigugur</h2>
      </div>

      <!-- Level 1: Kepala Desa -->
      <div class="row justify-content-center mb-2">
        <div class="col-md-5 col-lg-4">
          <div class="card border-success shadow text-center">
            <div class="card-body p-4">
              <img src="foto-kepala-desa.jpg" alt="Kepala Desa" class="rounded-circle mb-3 border border-3 border-success" style="width: 100px; height: 100px; object-fit: cover;">
              <h5 class="fw-bold mb-1">H. Ahmad Sudrajat, S.Sos</h5>
              <span class="badge bg-success fs-6 px-3 py-2">Kepala Desa</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Garis Vertikal -->
      <div class="row justify-content-center">
        <div class="col-auto">
          <div class="mx-auto" style="width: 3px; height: 40px; background-color: #198754;"></div>
        </div>
      </div>

      <!-- BPD (Sejajar di samping) -->
      <div class="row justify-content-center align-items-center mb-2 g-3">
        <!-- BPD -->
        <div class="col-md-4 col-lg-3">
          <div class="card border-0 shadow-sm bg-warning bg-opacity-10 text-center h-100">
            <div class="card-body p-3">
              <img src="foto-ketua-bpd.jpg" alt="Ketua BPD" class="rounded-circle mb-2 border border-2 border-warning" style="width: 70px; height: 70px; object-fit: cover;">
              <h6 class="fw-bold mb-1">H. Dedi Kusnadi</h6>
              <span class="badge bg-warning text-dark">Ketua BPD</span>
              <p class="text-muted small mt-2 mb-0">Badan Permusyawaratan Desa</p>
            </div>
          </div>
        </div>

        <!-- Garis Horizontal -->
        <div class="col-auto d-none d-md-block">
          <div style="width: 40px; height: 3px; background-color: #ffc107;"></div>
        </div>

        <!-- Level 2: Sekretaris Desa -->
        <div class="col-md-5 col-lg-4">
          <div class="card border-primary shadow-sm text-center">
            <div class="card-body p-4">
              <img src="foto-sekdes.jpg" alt="Sekretaris Desa" class="rounded-circle mb-3 border border-2 border-primary" style="width: 90px; height: 90px; object-fit: cover;">
              <h5 class="fw-bold mb-1">Ade Suryaman, S.IP</h5>
              <span class="badge bg-primary fs-6 px-3 py-2">Sekretaris Desa</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Garis Vertikal -->
      <div class="row justify-content-center">
        <div class="col-auto">
          <div class="mx-auto" style="width: 3px; height: 40px; background-color: #0d6efd;"></div>
        </div>
      </div>

      <!-- Level 3: Kepala Urusan (Sekretariat Desa) -->
      <div class="row justify-content-center mb-2">
        <div class="col-12">
          <div class="text-center mb-3">
            <span class="badge bg-info bg-opacity-25 text-info fw-semibold px-3 py-2">
              <i class="bi bi-folder me-1"></i>Sekretariat Desa — Kepala Urusan (Kaur)
            </span>
          </div>
        </div>
      </div>
      <div class="row g-3 justify-content-center mb-4">
        <div class="col-sm-6 col-lg-4">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-3">
              <img src="foto-kaur-tu.jpg" alt="Kaur TU & Umum" class="rounded-circle mb-2 border border-2 border-info" style="width: 70px; height: 70px; object-fit: cover;">
              <h6 class="fw-bold mb-1">Eneng Sukaesih</h6>
              <span class="badge bg-info text-white">Kaur Tata Usaha & Umum</span>
              <p class="text-muted small mt-2 mb-0">Tata naskah, arsip, administrasi surat menyurat, perlengkapan kantor</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-3">
              <img src="foto-kaur-keuangan.jpg" alt="Kaur Keuangan" class="rounded-circle mb-2 border border-2 border-info" style="width: 70px; height: 70px; object-fit: cover;">
              <h6 class="fw-bold mb-1">Irna Purnamasari, S.E</h6>
              <span class="badge bg-info text-white">Kaur Keuangan</span>
              <p class="text-muted small mt-2 mb-0">Pengelolaan keuangan desa, APBDes, pembukuan, pelaporan</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-3">
              <img src="foto-kaur-perencanaan.jpg" alt="Kaur Perencanaan" class="rounded-circle mb-2 border border-2 border-info" style="width: 70px; height: 70px; object-fit: cover;">
              <h6 class="fw-bold mb-1">Deni Rahmat, S.AP</h6>
              <span class="badge bg-info text-white">Kaur Perencanaan</span>
              <p class="text-muted small mt-2 mb-0">Perencanaan pembangunan, RPJMDes, RKPDes, musrenbang</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Garis Pemisah -->
      <div class="row justify-content-center my-2">
        <div class="col-lg-10">
          <hr class="border-success opacity-25">
        </div>
      </div>

      <!-- Level 3: Kepala Seksi (Pelaksana Teknis) -->
      <div class="row justify-content-center mb-2">
        <div class="col-12">
          <div class="text-center mb-3">
            <span class="badge bg-danger bg-opacity-25 text-danger fw-semibold px-3 py-2">
              <i class="bi bi-gear me-1"></i>Pelaksana Teknis — Kepala Seksi (Kasi)
            </span>
          </div>
        </div>
      </div>
      <div class="row g-3 justify-content-center mb-4">
        <div class="col-sm-6 col-lg-4">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-3">
              <img src="foto-kasi-pemerintahan.jpg" alt="Kasi Pemerintahan" class="rounded-circle mb-2 border border-2 border-danger" style="width: 70px; height: 70px; object-fit: cover;">
              <h6 class="fw-bold mb-1">Usep Saepudin</h6>
              <span class="badge bg-danger">Kasi Pemerintahan</span>
              <p class="text-muted small mt-2 mb-0">Administrasi kependudukan, pertanahan, ketertiban, ketentraman</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-3">
              <img src="foto-kasi-kesejahteraan.jpg" alt="Kasi Kesejahteraan" class="rounded-circle mb-2 border border-2 border-danger" style="width: 70px; height: 70px; object-fit: cover;">
              <h6 class="fw-bold mb-1">Wawan Hermawan</h6>
              <span class="badge bg-danger">Kasi Kesejahteraan</span>
              <p class="text-muted small mt-2 mb-0">Pembangunan, pemberdayaan masyarakat, kesehatan, pendidikan</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-3">
              <img src="foto-kasi-pelayanan.jpg" alt="Kasi Pelayanan" class="rounded-circle mb-2 border border-2 border-danger" style="width: 70px; height: 70px; object-fit: cover;">
              <h6 class="fw-bold mb-1">Yanti Nurhayati</h6>
              <span class="badge bg-danger">Kasi Pelayanan</span>
              <p class="text-muted small mt-2 mb-0">Pelayanan publik, persuratan, perizinan, informasi</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Garis Pemisah -->
      <div class="row justify-content-center my-2">
        <div class="col-lg-10">
          <hr class="border-success opacity-25">
        </div>
      </div>

      <!-- Level 4: Kepala Dusun (Pelaksana Kewilayahan) -->
      <div class="row justify-content-center mb-2">
        <div class="col-12">
          <div class="text-center mb-3">
            <span class="badge bg-success bg-opacity-25 text-success fw-semibold px-3 py-2">
              <i class="bi bi-pin-map me-1"></i>Pelaksana Kewilayahan — Kepala Dusun (Kadus)
            </span>
          </div>
        </div>
      </div>
      <div class="row g-3 justify-content-center">
        <div class="col-6 col-md-3">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-3">
              <img src="foto-kadus-1.jpg" alt="Kadus I" class="rounded-circle mb-2 border border-2 border-success" style="width: 70px; height: 70px; object-fit: cover;">
              <h6 class="fw-bold mb-1">Ajat Sudrajat</h6>
              <span class="badge bg-success">Kadus I</span>
              <p class="text-muted small mt-2 mb-0">RW 01 - RW 02</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-3">
              <img src="foto-kadus-2.jpg" alt="Kadus II" class="rounded-circle mb-2 border border-2 border-success" style="width: 70px; height: 70px; object-fit: cover;">
              <h6 class="fw-bold mb-1">Nana Suryana</h6>
              <span class="badge bg-success">Kadus II</span>
              <p class="text-muted small mt-2 mb-0">RW 03 - RW 04</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-3">
              <img src="foto-kadus-3.jpg" alt="Kadus III" class="rounded-circle mb-2 border border-2 border-success" style="width: 70px; height: 70px; object-fit: cover;">
              <h6 class="fw-bold mb-1">Oman Komarudin</h6>
              <span class="badge bg-success">Kadus III</span>
              <p class="text-muted small mt-2 mb-0">RW 05 - RW 06</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card border-0 shadow-sm text-center h-100">
            <div class="card-body p-3">
              <img src="foto-kadus-4.jpg" alt="Kadus IV" class="rounded-circle mb-2 border border-2 border-success" style="width: 70px; height: 70px; object-fit: cover;">
              <h6 class="fw-bold mb-1">Cecep Nurjaman</h6>
              <span class="badge bg-success">Kadus IV</span>
              <p class="text-muted small mt-2 mb-0">RW 07 - RW 08</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tugas Pokok & Fungsi -->
  <section class="tupoksi py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Tupoksi</h6>
        <h2 class="fw-bold">Tugas Pokok & Fungsi</h2>
      </div>

      <div class="accordion" id="accordionTupoksi">
        <!-- Kepala Desa -->
        <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
          <h2 class="accordion-header">
            <button class="accordion-button bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKades" aria-expanded="true" aria-controls="collapseKades">
              <span class="badge bg-success me-3">1</span> Kepala Desa
            </button>
          </h2>
          <div id="collapseKades" class="accordion-collapse collapse show" data-bs-parent="#accordionTupoksi">
            <div class="accordion-body">
              <p class="text-muted mb-3">Kepala Desa berkedudukan sebagai Kepala Pemerintah Desa yang memimpin penyelenggaraan Pemerintahan Desa.</p>
              <div class="row g-3">
                <div class="col-md-6">
                  <h6 class="fw-bold"><i class="bi bi-briefcase text-success me-2"></i>Tugas</h6>
                  <ul class="list-unstyled text-muted small">
                    <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Menyelenggarakan Pemerintahan Desa</li>
                    <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Melaksanakan pembangunan Desa</li>
                    <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Pembinaan kemasyarakatan Desa</li>
                    <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Pemberdayaan masyarakat Desa</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <h6 class="fw-bold"><i class="bi bi-shield-check text-primary me-2"></i>Wewenang</h6>
                  <ul class="list-unstyled text-muted small">
                    <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Memimpin penyelenggaraan Pemerintahan Desa</li>
                    <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Mengangkat dan memberhentikan Perangkat Desa</li>
                    <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Memegang kekuasaan pengelolaan Keuangan dan Aset Desa</li>
                    <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Menetapkan Peraturan Desa dan APBDes</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Sekretaris Desa -->
        <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSekdes" aria-expanded="false" aria-controls="collapseSekdes">
              <span class="badge bg-primary me-3">2</span> Sekretaris Desa
            </button>
          </h2>
          <div id="collapseSekdes" class="accordion-collapse collapse" data-bs-parent="#accordionTupoksi">
            <div class="accordion-body">
              <p class="text-muted mb-3">Sekretaris Desa berkedudukan sebagai unsur pimpinan Sekretariat Desa, membantu Kepala Desa dalam bidang administrasi pemerintahan.</p>
              <ul class="list-unstyled text-muted small">
                <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Melaksanakan urusan ketatausahaan dan administrasi umum</li>
                <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Mempersiapkan bahan penyusunan Laporan Penyelenggaraan Pemerintahan Desa</li>
                <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Melaksanakan tugas dan fungsi Kepala Desa apabila berhalangan</li>
                <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Mengkoordinasikan tugas Kepala Urusan, Kepala Seksi, dan Kepala Dusun</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Kaur TU & Umum -->
        <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKaurTU" aria-expanded="false" aria-controls="collapseKaurTU">
              <span class="badge bg-info me-3">3</span> Kaur Tata Usaha & Umum
            </button>
          </h2>
          <div id="collapseKaurTU" class="accordion-collapse collapse" data-bs-parent="#accordionTupoksi">
            <div class="accordion-body">
              <ul class="list-unstyled text-muted small">
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Melaksanakan urusan ketatausahaan seperti tata naskah dinas</li>
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Administrasi surat menyurat, arsip, dan ekspedisi</li>
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Penataan administrasi Perangkat Desa</li>
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Penyediaan prasarana Perangkat Desa dan kantor</li>
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Pencatatan inventarisasi kekayaan Desa</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Kaur Keuangan -->
        <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKaurKeu" aria-expanded="false" aria-controls="collapseKaurKeu">
              <span class="badge bg-info me-3">4</span> Kaur Keuangan
            </button>
          </h2>
          <div id="collapseKaurKeu" class="accordion-collapse collapse" data-bs-parent="#accordionTupoksi">
            <div class="accordion-body">
              <ul class="list-unstyled text-muted small">
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Pelaksanaan pengelolaan administrasi keuangan Desa</li>
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Persiapan bahan penyusunan APBDes</li>
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Pelaksanaan pembukuan, verifikasi, dan pelaporan keuangan</li>
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Pengurusan pajak dan retribusi Desa</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Kaur Perencanaan -->
        <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKaurPer" aria-expanded="false" aria-controls="collapseKaurPer">
              <span class="badge bg-info me-3">5</span> Kaur Perencanaan
            </button>
          </h2>
          <div id="collapseKaurPer" class="accordion-collapse collapse" data-bs-parent="#accordionTupoksi">
            <div class="accordion-body">
              <ul class="list-unstyled text-muted small">
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Koordinasi urusan perencanaan pembangunan Desa</li>
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Penyusunan RPJMDes, RKPDes, dan Daftar Usulan RKPDes</li>
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Inventarisasi data pembangunan dan profil Desa</li>
                <li class="mb-2"><i class="bi bi-check2 text-info me-2"></i>Monitoring dan evaluasi program pembangunan</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Kasi Pemerintahan -->
        <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKasiPem" aria-expanded="false" aria-controls="collapseKasiPem">
              <span class="badge bg-danger me-3">6</span> Kasi Pemerintahan
            </button>
          </h2>
          <div id="collapseKasiPem" class="accordion-collapse collapse" data-bs-parent="#accordionTupoksi">
            <div class="accordion-body">
              <ul class="list-unstyled text-muted small">
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Melaksanakan manajemen tata praja pemerintahan</li>
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Menyusun rancangan regulasi Desa</li>
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Pembinaan ketentraman dan ketertiban masyarakat</li>
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Administrasi kependudukan dan pertanahan</li>
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Pendataan dan pengelolaan profil Desa</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Kasi Kesejahteraan -->
        <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKasiKes" aria-expanded="false" aria-controls="collapseKasiKes">
              <span class="badge bg-danger me-3">7</span> Kasi Kesejahteraan
            </button>
          </h2>
          <div id="collapseKasiKes" class="accordion-collapse collapse" data-bs-parent="#accordionTupoksi">
            <div class="accordion-body">
              <ul class="list-unstyled text-muted small">
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Pelaksanaan pembangunan sarana dan prasarana Desa</li>
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Pemberdayaan masyarakat dan program sosial</li>
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Pembinaan kehidupan masyarakat dan keagamaan</li>
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Bantuan sosial, kesehatan, dan pendidikan</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Kasi Pelayanan -->
        <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKasiPel" aria-expanded="false" aria-controls="collapseKasiPel">
              <span class="badge bg-danger me-3">8</span> Kasi Pelayanan
            </button>
          </h2>
          <div id="collapseKasiPel" class="accordion-collapse collapse" data-bs-parent="#accordionTupoksi">
            <div class="accordion-body">
              <ul class="list-unstyled text-muted small">
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Melaksanakan pelayanan publik kepada masyarakat Desa</li>
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Penyiapan bahan dan penerbitan surat-surat keterangan</li>
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Pelaksanaan urusan perizinan dan rekomendasi</li>
                <li class="mb-2"><i class="bi bi-check2 text-danger me-2"></i>Pengelolaan informasi dan pengaduan masyarakat</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Kepala Dusun -->
        <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKadus" aria-expanded="false" aria-controls="collapseKadus">
              <span class="badge bg-success me-3">9</span> Kepala Dusun (Kadus)
            </button>
          </h2>
          <div id="collapseKadus" class="accordion-collapse collapse" data-bs-parent="#accordionTupoksi">
            <div class="accordion-body">
              <ul class="list-unstyled text-muted small">
                <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Membantu Kepala Desa dalam pelaksanaan tugasnya di wilayah dusun</li>
                <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Membina ketentraman dan ketertiban masyarakat di wilayah dusun</li>
                <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Membantu pelaksanaan pembangunan dan pemberdayaan masyarakat</li>
                <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Mengawasi pelaksanaan pembangunan di wilayah dusun</li>
                <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Melaksanakan koordinasi RT/RW di wilayahnya</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Lembaga Desa -->
  <section class="lembaga-desa py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Mitra Kerja</h6>
        <h2 class="fw-bold">Lembaga Kemasyarakatan Desa</h2>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 55px; height: 55px;">
                  <i class="bi bi-chat-square-text text-warning fs-4"></i>
                </div>
                <h5 class="fw-bold mb-0">BPD</h5>
              </div>
              <p class="text-muted small mb-2">Badan Permusyawaratan Desa bertugas menampung aspirasi masyarakat, membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, serta mengawasi kinerja Kepala Desa.</p>
              <span class="badge bg-warning bg-opacity-10 text-warning">Legislasi</span>
              <span class="badge bg-warning bg-opacity-10 text-warning">Aspirasi</span>
              <span class="badge bg-warning bg-opacity-10 text-warning">Pengawasan</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 55px; height: 55px;">
                  <i class="bi bi-people text-primary fs-4"></i>
                </div>
                <h5 class="fw-bold mb-0">LPMD</h5>
              </div>
              <p class="text-muted small mb-2">Lembaga Pemberdayaan Masyarakat Desa bertugas membantu Pemerintah Desa dalam menyusun rencana pembangunan secara partisipatif dan menggerakkan swadaya gotong royong.</p>
              <span class="badge bg-primary bg-opacity-10 text-primary">Pembangunan</span>
              <span class="badge bg-primary bg-opacity-10 text-primary">Gotong Royong</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 55px; height: 55px;">
                  <i class="bi bi-gender-female text-danger fs-4"></i>
                </div>
                <h5 class="fw-bold mb-0">PKK</h5>
              </div>
              <p class="text-muted small mb-2">Pemberdayaan Kesejahteraan Keluarga berperan dalam meningkatkan kesejahteraan keluarga melalui 10 program pokok PKK di bidang kesehatan, pendidikan, dan keterampilan.</p>
              <span class="badge bg-danger bg-opacity-10 text-danger">Keluarga</span>
              <span class="badge bg-danger bg-opacity-10 text-danger">Kesehatan</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 55px; height: 55px;">
                  <i class="bi bi-lightning text-info fs-4"></i>
                </div>
                <h5 class="fw-bold mb-0">Karang Taruna</h5>
              </div>
              <p class="text-muted small mb-2">Organisasi kepemudaan yang bergerak dalam bidang kesejahteraan sosial, pengembangan potensi pemuda, dan kegiatan pemberdayaan generasi muda.</p>
              <span class="badge bg-info bg-opacity-10 text-info">Pemuda</span>
              <span class="badge bg-info bg-opacity-10 text-info">Sosial</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 55px; height: 55px;">
                  <i class="bi bi-shield-check text-success fs-4"></i>
                </div>
                <h5 class="fw-bold mb-0">Linmas</h5>
              </div>
              <p class="text-muted small mb-2">Perlindungan Masyarakat bertugas menjaga keamanan dan ketertiban lingkungan serta membantu penanggulangan bencana di wilayah desa.</p>
              <span class="badge bg-success bg-opacity-10 text-success">Keamanan</span>
              <span class="badge bg-success bg-opacity-10 text-success">Ketertiban</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 55px; height: 55px;">
                  <i class="bi bi-heart-pulse text-secondary fs-4"></i>
                </div>
                <h5 class="fw-bold mb-0">Posyandu</h5>
              </div>
              <p class="text-muted small mb-2">Pos Pelayanan Terpadu memberikan layanan kesehatan dasar untuk ibu hamil, balita, dan lansia secara rutin setiap bulan di tingkat dusun.</p>
              <span class="badge bg-secondary bg-opacity-10 text-secondary">Kesehatan</span>
              <span class="badge bg-secondary bg-opacity-10 text-secondary">Balita</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Dasar Hukum -->
  <section class="dasar-hukum py-5 bg-success text-white">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-5">
          <h6 class="text-uppercase fw-semibold mb-2 opacity-75">Regulasi</h6>
          <h2 class="fw-bold mb-4">Dasar Hukum</h2>
          <p class="opacity-75">Struktur Organisasi dan Tata Kerja (SOTK) Pemerintah Desa Cigugur disusun berdasarkan peraturan perundang-undangan yang berlaku.</p>
        </div>
        <div class="col-lg-7">
          <div class="row g-3">
            <div class="col-md-6">
              <div class="card bg-white bg-opacity-10 border-0 h-100">
                <div class="card-body p-3">
                  <i class="bi bi-journal-bookmark-fill fs-3 mb-2"></i>
                  <h6 class="fw-bold">UU No. 6 Tahun 2014</h6>
                  <p class="small opacity-75 mb-0">Tentang Desa</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card bg-white bg-opacity-10 border-0 h-100">
                <div class="card-body p-3">
                  <i class="bi bi-journal-bookmark-fill fs-3 mb-2"></i>
                  <h6 class="fw-bold">PP No. 43 Tahun 2014</h6>
                  <p class="small opacity-75 mb-0">Peraturan Pelaksanaan UU Desa</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card bg-white bg-opacity-10 border-0 h-100">
                <div class="card-body p-3">
                  <i class="bi bi-journal-bookmark-fill fs-3 mb-2"></i>
                  <h6 class="fw-bold">Permendagri No. 84/2015</h6>
                  <p class="small opacity-75 mb-0">SOTK Pemerintah Desa</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card bg-white bg-opacity-10 border-0 h-100">
                <div class="card-body p-3">
                  <i class="bi bi-journal-bookmark-fill fs-3 mb-2"></i>
                  <h6 class="fw-bold">Perdes Cigugur</h6>
                  <p class="small opacity-75 mb-0">SOTK Pemerintah Desa Cigugur</p>
                </div>
              </div>
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
              <a href="#" class="btn btn-outline-success btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <i class="bi bi-bullseye text-success display-4 mb-3"></i>
              <h5 class="fw-bold">Visi & Misi</h5>
              <p class="text-muted small mb-3">Arah dan pedoman pembangunan Desa Cigugur.</p>
              <a href="#" class="btn btn-outline-success btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body p-4">
              <i class="bi bi-people text-success display-4 mb-3"></i>
              <h5 class="fw-bold">Perangkat Desa</h5>
              <p class="text-muted small mb-3">Kenali seluruh perangkat desa dan kontaknya.</p>
              <a href="#" class="btn btn-outline-success btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Struktur Pemerintahan -->




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