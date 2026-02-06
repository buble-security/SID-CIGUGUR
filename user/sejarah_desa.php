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


  <!-- Sejarah Desa -->

  <!-- Breadcrumb -->
  <section class="breadcrumb-section py-4 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-2">Sejarah Desa</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Beranda</a></li>
              <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Profil Desa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Sejarah Desa</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-4 text-lg-end d-none d-lg-block">
          <i class="bi bi-book text-success" style="font-size: 4rem; opacity: 0.3;"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Hero Sejarah -->
  <section class="hero-sejarah position-relative">
    <div class="bg-dark" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('sejarah-desa-hero.jpg') center/cover no-repeat fixed; min-height: 400px;">
      <div class="container d-flex align-items-center justify-content-center text-center" style="min-height: 400px;">
        <div class="text-white">
          <h1 class="display-4 fw-bold mb-3">Sejarah Desa Cigugur</h1>
          <p class="lead">Mengenal Perjalanan Panjang Desa Cigugur dari Masa ke Masa</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pengantar Sejarah -->
  <section class="pengantar-sejarah py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4 p-lg-5">
              <div class="row align-items-center g-4">
                <div class="col-lg-4 text-center">
                  <img src="lambang-desa.png" alt="Lambang Desa Cigugur" class="img-fluid" style="max-width: 200px;">
                </div>
                <div class="col-lg-8">
                  <h6 class="text-success text-uppercase fw-semibold mb-2">Pengantar</h6>
                  <h3 class="fw-bold mb-3">Asal Usul Nama Cigugur</h3>
                  <p class="text-muted mb-3">Nama <strong>"Cigugur"</strong> berasal dari bahasa Sunda yang terdiri dari dua kata, yaitu <em>"Ci"</em> yang berarti air atau sungai, dan <em>"Gugur"</em> yang berarti jatuh. Secara harfiah, Cigugur dapat diartikan sebagai "air yang jatuh" atau "air terjun".</p>
                  <p class="text-muted mb-0">Penamaan ini dikaitkan dengan kondisi geografis wilayah yang dahulu memiliki aliran air atau sungai kecil yang mengalir dari dataran tinggi, menciptakan suara gemericik air yang khas dan menjadi ciri dari daerah ini.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Timeline Sejarah -->
  <section class="timeline-sejarah py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Perjalanan Waktu</h6>
        <h2 class="fw-bold">Linimasa Sejarah Desa</h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-10">
          <!-- Timeline -->
          <div class="position-relative">
            <!-- Garis Vertikal -->
            <div class="position-absolute start-50 translate-middle-x h-100 d-none d-md-block" style="width: 4px; background: linear-gradient(to bottom, #198754, #0d6efd);"></div>

            <!-- Era Pra-Kemerdekaan -->
            <div class="row g-0 mb-4">
              <div class="col-md-6 pe-md-4 text-md-end">
                <div class="card border-0 shadow-sm">
                  <div class="card-body p-4">
                    <span class="badge bg-success mb-2">Era Pra-Kemerdekaan</span>
                    <h5 class="fw-bold">Masa Kerajaan & Kolonial</h5>
                    <p class="text-muted small mb-0">Wilayah Cigugur pada masa kerajaan merupakan bagian dari wilayah Kerajaan Sunda. Pada masa kolonial Belanda, daerah ini menjadi bagian dari Karesidenan Priangan dan dikenal sebagai daerah agraris yang subur dengan hasil pertanian padi dan palawija.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mx-md-0" style="width: 60px; height: 60px; margin-left: -30px;">
                  <i class="bi bi-flag fs-4"></i>
                </div>
              </div>
            </div>

            <!-- 1945 -->
            <div class="row g-0 mb-4 flex-md-row-reverse">
              <div class="col-md-6 ps-md-4">
                <div class="card border-0 shadow-sm">
                  <div class="card-body p-4">
                    <span class="badge bg-danger mb-2">1945</span>
                    <h5 class="fw-bold">Masa Kemerdekaan</h5>
                    <p class="text-muted small mb-0">Pasca kemerdekaan Indonesia, Desa Cigugur secara resmi menjadi bagian dari wilayah administratif Kabupaten Subang, Provinsi Jawa Barat. Masyarakat turut aktif dalam mempertahankan kemerdekaan dan membangun desa secara swadaya.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-md-end">
                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mx-md-0" style="width: 60px; height: 60px; margin-right: -30px;">
                  <span class="fw-bold">1945</span>
                </div>
              </div>
            </div>

            <!-- 1960-an -->
            <div class="row g-0 mb-4">
              <div class="col-md-6 pe-md-4 text-md-end">
                <div class="card border-0 shadow-sm">
                  <div class="card-body p-4">
                    <span class="badge bg-primary mb-2">1960-an</span>
                    <h5 class="fw-bold">Pembentukan Struktur Pemerintahan</h5>
                    <p class="text-muted small mb-0">Pada dekade ini, struktur pemerintahan desa mulai dibentuk secara lebih terorganisir. Desa Cigugur resmi memiliki pemerintahan desa dengan kepala desa pertama yang dipilih secara langsung oleh masyarakat.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mx-md-0" style="width: 60px; height: 60px; margin-left: -30px;">
                  <span class="fw-bold small">1960</span>
                </div>
              </div>
            </div>

            <!-- 1979 -->
            <div class="row g-0 mb-4 flex-md-row-reverse">
              <div class="col-md-6 ps-md-4">
                <div class="card border-0 shadow-sm">
                  <div class="card-body p-4">
                    <span class="badge bg-warning text-dark mb-2">1979</span>
                    <h5 class="fw-bold">UU Pemerintahan Desa</h5>
                    <p class="text-muted small mb-0">Dengan diberlakukannya UU No. 5 Tahun 1979 tentang Pemerintahan Desa, struktur dan tata kelola Desa Cigugur disesuaikan dengan peraturan nasional. Pembangunan infrastruktur desa mulai digalakkan secara sistematis.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-md-end">
                <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center mx-auto mx-md-0" style="width: 60px; height: 60px; margin-right: -30px;">
                  <span class="fw-bold small">1979</span>
                </div>
              </div>
            </div>

            <!-- 1999 -->
            <div class="row g-0 mb-4">
              <div class="col-md-6 pe-md-4 text-md-end">
                <div class="card border-0 shadow-sm">
                  <div class="card-body p-4">
                    <span class="badge bg-info mb-2">1999</span>
                    <h5 class="fw-bold">Era Reformasi & Otonomi Daerah</h5>
                    <p class="text-muted small mb-0">Memasuki era reformasi, Desa Cigugur mendapatkan kewenangan lebih besar dalam mengelola pemerintahan dan pembangunan desa. Partisipasi masyarakat dalam musyawarah desa semakin meningkat.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mx-md-0" style="width: 60px; height: 60px; margin-left: -30px;">
                  <span class="fw-bold small">1999</span>
                </div>
              </div>
            </div>

            <!-- 2014 -->
            <div class="row g-0 mb-4 flex-md-row-reverse">
              <div class="col-md-6 ps-md-4">
                <div class="card border-0 shadow-sm">
                  <div class="card-body p-4">
                    <span class="badge bg-secondary mb-2">2014</span>
                    <h5 class="fw-bold">UU Desa & Dana Desa</h5>
                    <p class="text-muted small mb-0">Dengan disahkannya UU No. 6 Tahun 2014 tentang Desa, Desa Cigugur mulai menerima Dana Desa dari pemerintah pusat. Hal ini membuka peluang pembangunan yang lebih besar dan terencana.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-md-end">
                <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mx-md-0" style="width: 60px; height: 60px; margin-right: -30px;">
                  <span class="fw-bold small">2014</span>
                </div>
              </div>
            </div>

            <!-- 2020-Sekarang -->
            <div class="row g-0">
              <div class="col-md-6 pe-md-4 text-md-end">
                <div class="card border-0 shadow-sm border-success" style="border-left: 4px solid #198754 !important;">
                  <div class="card-body p-4">
                    <span class="badge bg-success mb-2">2020 - Sekarang</span>
                    <h5 class="fw-bold">Era Digitalisasi Desa</h5>
                    <p class="text-muted small mb-0">Desa Cigugur memasuki era digital dengan mengimplementasikan Sistem Informasi Desa untuk meningkatkan pelayanan publik. Website desa resmi diluncurkan sebagai wujud transparansi dan keterbukaan informasi.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mx-md-0" style="width: 60px; height: 60px; margin-left: -30px;">
                  <i class="bi bi-stars fs-4"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Daftar Kepala Desa -->
  <section class="kepala-desa py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Kepemimpinan</h6>
        <h2 class="fw-bold">Kepala Desa dari Masa ke Masa</h2>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
              <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                <i class="bi bi-person text-secondary fs-1"></i>
              </div>
              <h5 class="fw-bold mb-1">H. Eman Sulaeman</h5>
              <span class="badge bg-secondary mb-2">Periode 1965 - 1978</span>
              <p class="text-muted small mb-0">Kepala Desa pertama yang memimpin pembangunan infrastruktur dasar desa.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
              <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                <i class="bi bi-person text-secondary fs-1"></i>
              </div>
              <h5 class="fw-bold mb-1">Endang Sutisna</h5>
              <span class="badge bg-secondary mb-2">Periode 1978 - 1990</span>
              <p class="text-muted small mb-0">Memimpin era pembangunan irigasi dan peningkatan hasil pertanian desa.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
              <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                <i class="bi bi-person text-secondary fs-1"></i>
              </div>
              <h5 class="fw-bold mb-1">H. Dadang Hermawan</h5>
              <span class="badge bg-secondary mb-2">Periode 1990 - 2002</span>
              <p class="text-muted small mb-0">Memimpin pembangunan fasilitas pendidikan dan kesehatan di desa.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
              <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                <i class="bi bi-person text-secondary fs-1"></i>
              </div>
              <h5 class="fw-bold mb-1">Asep Saepudin, S.Pd</h5>
              <span class="badge bg-secondary mb-2">Periode 2002 - 2014</span>
              <p class="text-muted small mb-0">Fokus pada peningkatan kualitas SDM dan pemberdayaan masyarakat.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
              <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                <i class="bi bi-person text-secondary fs-1"></i>
              </div>
              <h5 class="fw-bold mb-1">Ujang Rohman</h5>
              <span class="badge bg-secondary mb-2">Periode 2014 - 2020</span>
              <p class="text-muted small mb-0">Memimpin awal era Dana Desa dan pembangunan infrastruktur jalan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100 border-success" style="border: 2px solid #198754 !important;">
            <div class="card-body text-center p-4">
              <img src="foto-kepala-desa.jpg" alt="Kepala Desa Saat Ini" class="rounded-circle mb-3" style="width: 80px; height: 80px; object-fit: cover;">
              <h5 class="fw-bold mb-1">H. Ahmad Sudrajat, S.Sos</h5>
              <span class="badge bg-success mb-2">Periode 2020 - Sekarang</span>
              <p class="text-muted small mb-0">Memimpin era digitalisasi dan modernisasi pelayanan publik desa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Nilai Budaya & Kearifan Lokal -->
  <section class="nilai-budaya py-5 bg-success text-white">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <h6 class="text-uppercase fw-semibold mb-2 opacity-75">Warisan Leluhur</h6>
          <h2 class="fw-bold mb-4">Nilai Budaya & Kearifan Lokal</h2>
          <p class="mb-4 opacity-75">Desa Cigugur memiliki kekayaan nilai budaya dan kearifan lokal yang terus dijaga dan dilestarikan oleh masyarakat dari generasi ke generasi.</p>

          <div class="d-flex mb-3">
            <div class="bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
              <i class="bi bi-people fs-5"></i>
            </div>
            <div>
              <h5 class="fw-bold mb-1">Gotong Royong</h5>
              <p class="mb-0 opacity-75 small">Semangat kerja sama dan saling membantu antarwarga dalam berbagai kegiatan.</p>
            </div>
          </div>

          <div class="d-flex mb-3">
            <div class="bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
              <i class="bi bi-chat-heart fs-5"></i>
            </div>
            <div>
              <h5 class="fw-bold mb-1">Silih Asah, Silih Asih, Silih Asuh</h5>
              <p class="mb-0 opacity-75 small">Filosofi Sunda untuk saling mengajarkan, menyayangi, dan mengasuh.</p>
            </div>
          </div>

          <div class="d-flex">
            <div class="bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
              <i class="bi bi-tree fs-5"></i>
            </div>
            <div>
              <h5 class="fw-bold mb-1">Leuweung Larangan</h5>
              <p class="mb-0 opacity-75 small">Tradisi menjaga hutan adat sebagai sumber air dan keseimbangan alam.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row g-3">
            <div class="col-6">
              <img src="budaya-1.jpg" alt="Budaya Desa 1" class="img-fluid rounded shadow">
            </div>
            <div class="col-6 mt-4">
              <img src="budaya-2.jpg" alt="Budaya Desa 2" class="img-fluid rounded shadow">
            </div>
            <div class="col-6">
              <img src="budaya-3.jpg" alt="Budaya Desa 3" class="img-fluid rounded shadow">
            </div>
            <div class="col-6 mt-4">
              <img src="budaya-4.jpg" alt="Budaya Desa 4" class="img-fluid rounded shadow">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Galeri Sejarah -->
  <section class="galeri-sejarah py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-success text-uppercase fw-semibold mb-2">Dokumentasi</h6>
        <h2 class="fw-bold">Galeri Foto Sejarah</h2>
      </div>

      <div class="row g-3">
        <div class="col-md-4">
          <a href="sejarah-foto-1.jpg" data-bs-toggle="modal" data-bs-target="#galeriFoto1">
            <div class="position-relative overflow-hidden rounded">
              <img src="sejarah-foto-1.jpg" alt="Foto Sejarah 1" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
              <div class="position-absolute bottom-0 start-0 end-0 p-3 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.8));">
                <small>Kantor Desa Cigugur Tempo Dulu</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="sejarah-foto-2.jpg" data-bs-toggle="modal" data-bs-target="#galeriFoto2">
            <div class="position-relative overflow-hidden rounded">
              <img src="sejarah-foto-2.jpg" alt="Foto Sejarah 2" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
              <div class="position-absolute bottom-0 start-0 end-0 p-3 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.8));">
                <small>Pembangunan Jalan Desa 1985</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="sejarah-foto-3.jpg" data-bs-toggle="modal" data-bs-target="#galeriFoto3">
            <div class="position-relative overflow-hidden rounded">
              <img src="sejarah-foto-3.jpg" alt="Foto Sejarah 3" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
              <div class="position-absolute bottom-0 start-0 end-0 p-3 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.8));">
                <small>Gotong Royong Masyarakat 1990</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="sejarah-foto-4.jpg" data-bs-toggle="modal" data-bs-target="#galeriFoto4">
            <div class="position-relative overflow-hidden rounded">
              <img src="sejarah-foto-4.jpg" alt="Foto Sejarah 4" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
              <div class="position-absolute bottom-0 start-0 end-0 p-3 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.8));">
                <small>Peresmian Balai Desa 2005</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="sejarah-foto-5.jpg" data-bs-toggle="modal" data-bs-target="#galeriFoto5">
            <div class="position-relative overflow-hidden rounded">
              <img src="sejarah-foto-5.jpg" alt="Foto Sejarah 5" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
              <div class="position-absolute bottom-0 start-0 end-0 p-3 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.8));">
                <small>Musyawarah Desa 2015</small>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="text-center mt-4">
        <a href="#" class="btn btn-outline-success">
          <i class="bi bi-images me-2"></i>Lihat Semua Galeri
        </a>
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
              <i class="bi bi-bullseye text-success display-4 mb-3"></i>
              <h5 class="fw-bold">Visi & Misi</h5>
              <p class="text-muted small mb-3">Pelajari visi dan misi Desa Cigugur dalam membangun desa.</p>
              <a href="#" class="btn btn-outline-success btn-sm">Selengkapnya</a>
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

  <!-- End Sejarah Desa -->



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