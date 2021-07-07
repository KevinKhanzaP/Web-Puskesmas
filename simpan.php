<?php

include("config.php");

    $email=$_POST["email"];
    $no_karpas=$_POST["no_karpas"];
    $nama=$_POST["nama"];
    $tgl_lahir=$_POST["tgl_lhr"];
    $alamat=$_POST["alamat"];
    $rt=$_POST["rt"];
    $rw=$_POST["rw"];
    $no_wa=$_POST["no_wa"];
    $no_ktp=$_POST["no_ktp"];
    $nik=$_POST["nik"];
    $no_kk=$_POST["no_kk"];

    // menyiapkan query
    $query = "INSERT INTO pasien (email, no_karpas, nama, tgl_lahir, alamat, rt, rw,
              no_wa, no_ktp, nik, no_kk)
            VALUES ('$email', '$no_karpas', '$nama', '$tgl_lahir', '$alamat', '$rt', '$rw', '$no_wa',
              '$no_ktp', '$nik', '$no_kk')";

    $hasil=mysqli_query($conn,$query);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($hasil) header("Location: login.php");

?>
