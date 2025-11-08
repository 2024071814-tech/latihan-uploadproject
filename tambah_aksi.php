<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$kode = $_POST["kode"];
$nama   = $_POST["nama"];
$nim   = $_POST["nim"];
$jurusan = $_POST["jurusan"];
$alamat = $_POST["alamat"];

// menginput data ke database
mysqli_query($koneksi,"insert into mhs (kode, nama, nim, jurusan, alamat) values('$kode','$nama','$nim','$jurusan','$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>