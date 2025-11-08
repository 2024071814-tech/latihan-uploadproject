<?php
//area backend php
include 'koneksi.php';
// Mengecek apakah form telah disubmit
if (isset($_POST['register'])) {
    //ambil data dari form

    $nama = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);//enkripsi password
    //simpan data ke database
    $query = "INSERT INTO users (username, password, nama_lengkap) VALUES ('$username', '$password', '$nama')";
    $result = mysqli_query($koneksi, $query);
    //cek apakah query berhasil
    if ($result) {
        //redirect ke halaman login setelah registrasi berhasil
        echo "<script>alert('Registrasi berhasil. Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "gagal mendaftar!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel = "stylesheet" href="style.css?v=<?= time()?>">
</head>
<body>
    <h2>Form Registrasi</h2>
    <form method="post">
        <table>
            <tr>
                <td><label for="name">Masukkan Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required></td>
            </tr>
            <tr>
                <td><label for="username">Masukkan Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username" required></td>
            </tr>
            <tr>
                <td><label for="password">Masukkan Password</label></td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password" required></td>
            </tr>
        </table>
        <button type="submit" name="register">Daftar</button>
    </form>
    <p>
        Create account | <a href="login.php">Login di sini</a> 
    </p>
</body>
</html>