<?php
session_start();
include 'config.php';

$id_admin = $_POST['id_admin'];
$pass = $_POST['pass'];

$hasil = mysqli_query($conn,"SELECT * FROM admin WHERE id_admin='$id_admin' AND pass='$pass'");
"SELECT * FROM pasien WHERE id_admin='$id_admin' AND pass='$pass'";
$cek = mysqli_num_rows($hasil);
if ($cek > 0) {
  $data = mysqli_fetch_assoc($hasil);
  $_SESSION['admin'] = "sudah_login";
  echo "<script>location.replace('admin/index.php')</script>";
}else {
  echo "<script>alert('id_admin atau password salah!'); location.replace('loginadmin.php')</script>";
}
?>
