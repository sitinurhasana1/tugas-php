<?php
    $alamatserver   = "localhost";
    $pengguna       = "root";
    $katakunci      = "";
    $namadatabase   = "sekolah";

    $varkoneksi = mysqli_connect($alamatserver, $pengguna, $katakunci, $namadatabase); 
    
    if($varkoneksi) 
    { 
        echo "Koneksi ke database berhasil"; 
    } 
    else 
    { 
        echo "Koneksi ke database gagal, mohon periksa lagi file koneksi ke database Anda"; 
    } 
?>
