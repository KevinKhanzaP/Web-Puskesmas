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

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="member-img"><a href="https://www.mitrakeluarga.com/artikel/artikel-kesehatan/penyebab-hipertensi">
              <img src="assets/img/art/art-1.png" class="img-fluid"></i></div>
            <h4><a href="">4 Penyebab Hipertensi Serta Gejala, Pengobatan, dan Pencegahannya</a></h4>
            <p>Penyebab hipertensi ada berbagai macam. Jangan khawatir, karena ada berbagai cara mengobati hipertensi
               serta tindakan pencegahannya agar kondisi ini...</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="member-img"><a href="https://www.mitrakeluarga.com/artikel/artikel-kesehatan/diabetes-melitus-di-usia-muda-penyebab-dan-ciri-cirinya">
              <img src="assets/img/art/art-2.png" class="img-fluid"></i></div>
            <h4><a href="">Diabetes Melitus Di Usia Muda: Penyebab dan Ciri-Cirinya yang Perlu Anda Ketahui</a></h4>
            <p>Diabetes melitus dapat menyerang segala usia, termasuk anak muda. Maka dari itu, penting untuk mengetahui
               gejala, tindakan penanganan, serta cara...</p>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="member-img"><a href="https://www.mitrakeluarga.com/artikel/artikel-kesehatan/premarital-check-up"><img src="assets/img/art/art-3.png" class="img-fluid"></i></div>
            <h4><a href="">5 Jenis Premarital Check Up yang Perlu Dilakukan Calon Suami Istri</a></h4>
            <p>Premarital check up adalah serangkaian tes kesehatan yang dilakukan sebelum menikah. Apa saja jenis pemeriksaannya?</p>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="member-img"><a href="https://www.mitrakeluarga.com/artikel/artikel-kesehatan/tes-covid-19"><img src="assets/img/art/art-4.png" class="img-fluid"></i></div>
            <h4><a href="">Macam-macam Tes COVID-19, Mana yang Sahabat MIKA Butuhkan?</a></h4>
            <p>Ada beberapa tes yang sering digunakan untuk mendiagnosis COVID-19. Mana yang paling akurat dan kapan waktu terbaik untuk menjalaninya ?</p>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="member-img"><a href="https://www.mitrakeluarga.com/artikel/artikel-kesehatan/serologi-antibodi-kuantitatif"><img src="assets/img/art/art-5.png" class="img-fluid"></i></div>
            <h4><a href="">Fungsi dan Prosedur Tes Serologi Antibodi Kuantitatif COVID-19</a></h4>
            <p>Tes serologi antibodi kuantitatif adalah prosedur untuk mengukur respons kekebalan tubuh terhadap SARS-CoV-2. Ketahui manfaat dan caranya di sini!</p>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="member-img"><a href="https://www.mitrakeluarga.com/artikel/artikel-kesehatan/mamografi"><img src="assets/img/art/art-6.png" class="img-fluid"></i></div>
            <h4><a href="">Deteksi Risiko Kanker Payudara Sejak Dini dengan Mamografi</a></h4>
            <p>Mamografi adalah pemeriksaan yang berperan penting dalam pendeteksian dini kanker payudara. Pelajari tujuan dan prosedurnya di sini.</p>
          </div>
        </div>


      </div>

    </div>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak Kami</h2>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.185995814379!2d112.71335521486102!3d-7.444663294629191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e6cafd48678f%3A0xefe61eb9e0605028!2sPuskesmas%20Sidoarjo!5e0!3m2!1sid!2sid!4v1623490273825!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p>Jl. Dr. Soetomo No.14, Magersari, Kec. Sidoarjo, Kab. Sidoarjo 61212</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>puskesmassidoarjo@sidoarjokab.go.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>(031) 8921956; 08113322225</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Tunggu Sebentar</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Anda telah terkirim. Terima Kasih !</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- Akhir Contact Section -->

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
