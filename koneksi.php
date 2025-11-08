<?php
$koneksi = mysqli_connect("localhost","root","mysql","mahasiswa");
//cek koneksi
echo ('koneksi database berhasil');
if(mysqli_connect_error()){
    echo "koneksi database gagal :". mysqli_connect_error();
}  //server apache
?>
