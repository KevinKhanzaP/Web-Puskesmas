<?php
  require 'config.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Puskesmas Sidoarjo - Tentang Kami</title>

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

      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

          <form action="simpan.php" method="POST" role="form" >

          <div class="row">

            <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100"><br><br><br>
              <div class="box">
                <h3>Email :</h3>
                <input type="email" class="form-control" name="email" placeholder="Masukkan email Anda" required><br>

                <h3>No. Kartu Pasien :</h3>
                <input type="text" class="form-control" name="no_karpas" placeholder="Masukkan nomor kartu pasien Anda" required><br>

                <h3>Nama :</h3>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama Anda" required><br>

                <h3>Tanggal Lahir :</h3>
                <input type="date" class="form-control" name="tgl_lhr" placeholder="Masukkan tanggal lahir Anda" required><br>

              </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100"><br><br><br>
              <div class="box">
                <h3>Alamat :</h3>
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat Anda" required><br>

                <h3>RT :</h3>
                <input type="text" class="form-control" name="rt" placeholder="Masukkan nomor RT Anda" required><br>

                <h3>RW :</h3>
                <input type="text" class="form-control" name="rw" placeholder="Masukkan nomor RW Anda" required><br>

                <div class="btn-wrap">
                  <input type="submit" class="btn-buy" name="daftar" value="Daftar" />
                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100"><br><br><br>
              <div class="box">
                <h3>No. Whatsapp :</h3>
                <input type="text" class="form-control" name="no_wa" placeholder="Masukkan nomor whatsapp Anda" required><br>

                <h3>No. KTP :</h3>
                <input type="text" class="form-control" name="no_ktp" placeholder="Masukkan nomor KTP Anda" required><br>

                <h3>NIK :</h3>
                <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK Anda" required><br>

                <h3>No. Kartu Keluarga :</h3>
                <input type="text" class="form-control" name="no_kk" placeholder="Masukkan nomor kartu keluarga Anda" required><br>

              </div>
            </div>

          </div>

          </form>

        </div>
      </section><!-- Akhir Pricing Section -->

      <!-- <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

          <div class="row">

            <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100"></div>

            <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
              <br><br><br><br><br><br><div class="box featured">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                  <div class="row">
                    <div class="form-group mt-3">
                      <h6>Email :</h6>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email Anda" required>
                    </div>
                  </div><br>

                  <div class="form-group mt-3">
                    <h6>No. Kartu Pasien :</h6>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan nomor kartu pasien Anda" required>
                  </div><br>

                  <div class="form-group mt-3">
                    <h6>Nama :</h6>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan nama Anda" required>
                  </div><br>

                  <div class="form-group mt-3">
                    <h6>Tanggal Lahir :</h6>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan tanggal lahir Anda" required>
                  </div><br>

                  <div class="form-group mt-3">
                    <h6>Alamat :</h6>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan alamat Anda" required>
                  </div><br>

                  <div class="form-group mt-3">
                    <h6>RT :</h6>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan nomor RT Anda" required>
                  </div><br>

                  <div class="form-group mt-3">
                    <h6>RW :</h6>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan nomor RW Anda" required>
                  </div><br>

                  <div class="form-group mt-3">
                    <h6>No. Whatsapp :</h6>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan nomor whatsapp Anda" required>
                  </div><br>

                  <div class="form-group mt-3">
                    <h6>No. KTP :</h6>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan nomor KTP Anda" required>
                  </div><br>

                  <div class="form-group mt-3">
                    <h6>No. NIK :</h6>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan nomor NIK Anda" required>
                  </div><br>
                  <div class="form-group mt-3">
                    <h6>No. Kartu Keluarga :</h6>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan nomor kartu keluarga Anda" required>
                  </div><br>

                  <div class="btn-wrap">
                    <a href="#" class="btn-buy">Daftar</a>
                  </div>

                </form>


              </div><br><br><br><br><br>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100"></div>

          </div>

        </div>
      </section>-->

  </main><!-- Akhir #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

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
