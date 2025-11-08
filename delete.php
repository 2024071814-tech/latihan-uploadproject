<?php
//koneksi database
include 'koneksi.php';

//menangkap data id yang dikirim dari url
$kode = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi,"delete from mhs where kode='$kode'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>