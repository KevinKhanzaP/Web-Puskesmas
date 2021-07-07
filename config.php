<?php
  ob_start();
  $host="localhost"; //deklarasi variabel
  $user_db="root"; //deklarasi variabel
  $pass_db=""; //deklarasi variabel
  $db="puskesmas"; //deklarasi variabel database

  $conn=mysqli_connect ($host,$user_db,$pass_db) or die (mysqli_error());
  //membuat koneksi terhadap database
  mysqli_select_db ($conn,$db) or die (mysqli_error());
  //melakukan koneksi terhadap database
?>
