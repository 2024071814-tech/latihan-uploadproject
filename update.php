<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP KELAS XII-5</title>
    <link rel = "stylesheet" href="style.css?v=<?= time()?>">
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <a href="index.php">KEMBALI</a>
    <h3>EDIT DATA MAHASISWA</h3>

    <?php
    include 'koneksi.php';
    $kode = $_GET['id'];
    $data = mysqli_query($koneksi,"SELECT * FROM mhs WHERE kode='$kode'");
    while($d = mysqli_fetch_array($data)){
    ?>
        <form method="post" action="ubah.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="kode" value="<?php echo $d['kode']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>    
                    <td>NIM</td>
                    <td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>
</html>