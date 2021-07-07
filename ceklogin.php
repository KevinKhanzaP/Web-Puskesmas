<?php
session_start();
include 'config.php';

$email = $_POST['email'];
$no_karpas = $_POST['no_karpas'];

$hasil = mysqli_query($conn,"SELECT * FROM pasien WHERE email='$email' AND no_karpas='$no_karpas'");
$cek = mysqli_num_rows($hasil);
if ($cek > 0) {
  $data = mysqli_fetch_assoc($hasil);
  $_SESSION['status'] = "sudah_login";
  $_SESSION['nama'] = $data['nama'];
  echo "<script>location.replace('index.php')</script>";
}else {
  echo "<script>alert('email atau no karpas salah!'); location.replace('login.php')</script>";
}
?>
