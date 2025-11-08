<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$kode    = $_POST['kode'];
$nama    = $_POST['nama'];
$nim     = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat  = $_POST['alamat'];

//update data ke database
mysqli_query($koneksi,"update mhs set nama='$nama',nim='$nim',jurusan='$jurusan',alamat='$alamat' where kode='$kode'");

//mengendalikan halaman kembali ke index.php
header("location:index.php");

?>