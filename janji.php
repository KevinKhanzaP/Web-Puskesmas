<?php
  require 'config.php';
  session_start();
?>
<?php
  require 'config.php';
  $klinik = $_POST['klinik'];
  $penjaminan = $_POST['penjaminan'];
  $date = $_POST['date'];
  if (mysqli_query($conn, "INSERT INTO `janji`(`tgl_janji`, `penjaminan`, `klinik`) VALUES ('$date','$penjaminan','$klinik')")) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Puskesmas Sidoarjo - Janji</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- File CSS tambahan -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- File CSS -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Beranda</a></li>
          <li><a class="nav-link scrollto" href="ttgkm.php">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="artkl.php">Artikel Kesehatan</a></li>
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="buatjanji.php">Buat Janji Dokter</a></li>
              <li><a href="konsul_online.php">Konsultasi Dokter Online</a></li>
              <li><a href="gawat.php">Gawat Darurat</a></li>
              <li><a href="vaksin.php">Vaksin Covid-19</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php#contact">Kontak</a></li>
          <?php if (isset($_SESSION['status'])): ?>
            <li><a class="getstarted scrollto" href="logout.php">Keluar</a></li>
          <?php else: ?>
            <li><a class="getstarted scrollto" href="login.php">Masuk</a></li>
          <?php endif; ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- Akhir Header -->

  <main id="main">
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <br><br><h2>Jadwal Janji Dokter</h2><br>
          <p>Silahkan datang ke puskermas <b>klinik <?= $_POST['klinik'] ?></b> pada tanggal <?= $_POST['date'] ?>.</p><br>
          <a href="index.php" class="btn-submit">Beranda</a>
        </div>
      </section>


    </main><!-- Akhir #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Puskesmas Sidoarjo</h3>
              <p>
                Jl. Dr. Soetomo No.14, Magersari<br>
                Kec. Sidoarjo, Kab. Sidoarjo 61212<br>
                Jawa Timur, Indonesia <br><br>
                <strong>Telepon:</strong> (031) 8921956; 08113322225<br>
                <strong>Email:</strong> puskesmassidoarjo@sidoarjokab.go.id<br>
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Link Tujuan</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Artikel Kesehatan</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Layanan Kami</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Buat Janji Dokter</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Konsultasi Dokter Online</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Gawat Darurat</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Daftar Vaksin Covid-19</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>

      <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
          2021 <strong><span>Puskesmas Sidoarjo</span></strong>.
          </div>
          <div class="credits">
            Designed by Kevin Khanza Pangestu</a>
          </div>
        </div>
      </div>
    </footer><!-- Akhiran Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- File CSS tambahan -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- File CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

  </body>

  </html>
<?php
  }
?>
