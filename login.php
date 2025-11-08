<?php
//area php - backend
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        //header("Location: home.php");
    } else {
        echo "<script>alert('Username atau password salah.');</script>";
    }
}
?>
<!DOCTYPE html>
<!-- area interface/front end -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- link ke css -->
     <link rel = "stylesheet" href="style.css?v=<?= time()?>">
</head>
<body>
    <!-- pengelompokan dengan nama class=container -->
    <div class="container">
        <h2>Login</h2>
        <!-- pembuatan form dan mengirimkan data pada bagian backend -->
        <form method="post">
            <table>
                <!-- area username -->
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="Username" required></td>
                </tr>
                <!-- area password -->
                <tr> 
                    <td><label for="password">Masukkan password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="Password" required></td>
                </tr>
                <!-- area button -->
            </table>
            <button type="submit" name="login">Login</button>
        </form>
        
        <p>
            Belum punya akun?
            <a href="register.php">daftar di sini</a>
        </p>
    </div>
</body>
</html>