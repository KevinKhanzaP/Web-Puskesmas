<?php
  require 'config.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Puskesmas Sidoarjo - Beranda</title>

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

  <!-- ======= isi ======= -->

  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Selamat Datang</h1>
          <h2>di Website Puskesmas Sidoarjo</h2>
        </div>
      </div>

      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-phone-line"></i></div>
            <h4 class="title"><a href="buatjanji.php">Buat Janji Dokter</a></h4>
            <p class="description">Atur penjadwalan kunjungan Anda dengan dokter kami di puskesmas secara cepat</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-stethoscope-line"></i></div>
            <h4 class="title"><a href="konsul_online.php">Konsultasi Dokter Online</a></h4>
            <p class="description">Konsultasikan masalah kesehatan yang Anda alami dengan dokter ahli kami</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="ri-heart-pulse-line"></i></div>
            <h4 class="title"><a href="">Gawat Darurat</a></h4>
            <p class="description">Kami selalu siap memberikan pertolongan pertama hingga intensif selama 24 jam</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-syringe-line"></i></div>
            <h4 class="title"><a href="vaksin.php">Daftar Vaksin Covid-19</a></h4>
            <p class="description">Pastikan Anda mendapatkan perlindungan terbaik dari paparan virus Covid-19</p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- Akhir isi -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <img src="assets/img/spanduk.jpg" alt="" class="img-fluid">
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan. Virus baru dan
              penyakit yang disebabkannya ini tidak dikenal sebelum mulainya wabah di Wuhan, Tiongkok, bulan Desember 2019.
              COVID-19 ini sekarang menjadi sebuah pandemi yang terjadi di banyak negara di seluruh dunia termasuk Indonesia
              yang saat ini memiliki 1.87 juta total kasus.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ada dua tipe masker yang bisa Anda digunakan untuk mencegah penularan virus Corona, yaitu masker bedah dan masker
              N95. Masker bedah atau surgical mask merupakan masker sekali pakai yang umum digunakan.
            </p>
            <a href="https://covid19.go.id/tanya-jawab?page=4" class="btn-learn-more">Pelajari Lebih Lanjut</a>
          </div>
        </div>

      </div>
    </section><!-- Akhir About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="2" class="purecounter"></span>
              <p>Pengunjung Per Hari Ini</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="3" class="purecounter"></span>
              <p>Janji Dokter Yang Terbuat Per Hari Ini</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="82" data-purecounter-duration="2" class="purecounter"></span>
              <p>Total Pengunjung Bulan Ini</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="17" data-purecounter-duration="2" class="purecounter"></span>
              <p>Total Janji Dokter Terbuat Bulan Ini</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Akhir Counts Section -->

    <!-- ======= About Video Section ======= -->
    <section id="about-video" class="about-video">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about-video.png" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=e9_AkOOzOEg" class="glightbox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Inovasi "Hempas Covid-19" oleh Puskesmas Sidoarjo</h3>
            <p class="fst-italic">
              Puskesmas Sidoarjo segera membuat inovasi penyesuaian alur pelayanan guna mencegah penyebaran infeksi dari penderita Covid-19 ke pasien
              non-covid dan menurunkan kejadian kasus covid. Inovasi tersebut dinamakan "Hempas Covid-19". Tujuan umum dari inovasi ini adalah :
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Menurunkan kasus covid-19.</li>
              <li><i class="bx bx-check-double"></i> Mencegah penularan covid-19.</li>
              <li><i class="bx bx-check-double"></i> Mencegah morbiditas dan mortalitas akibat covid-19.</li>
            </ul>
            <p>
              Selain itu, tujuan khusus dari inovasi ini adalah mendeteksi pasien yang berpotensi tinggi tertular covid-19 dari pasien terkonfirmasi
              covid-19 untuk segera melakukan isolasi mandiri di rumah masing-masing. Saksikan Berita Selengkapnya !
            </p>
          </div>

        </div>

      </div>
    </section><!-- Akhir About Video Section -->

    <!-- ======= Dokter ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Dokter Ahli Kami</h2>
          <p>PUskesmas Sidoarjo memiliki berbagai macam dokter dengan keahlian masing-masing yang sangat unggul
            dibidangnya. Dilengkapi juga dengan banyak fasilitas yang mendukung, membuat pekerjaan dokter Kami sangat
            mumpuni.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Dr. Moh. Dwikoryanto, Sp.BS</h4>
                <span>Dokter Spesialis</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Dr. Aninda</h4>
                <span>Dokter Gigi</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Dr. Liza</h4>
                <span>Dokter Gigi</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Dr. Hidayatullah, Sp.S </h4>
                <span>Dokter Spesialis</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Akhir Dokter -->

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

  </main><!-- Akhir #main -->

  <!-- ======= Awalan Footer ======= -->
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
