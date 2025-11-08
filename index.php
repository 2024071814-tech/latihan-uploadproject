<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css?v=<?= time()?>">
    <title>Document</title>
</head>
<body>
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br><br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
            <?php
            include 'koneksi.php';
            $no=1;
            $data=mysqli_query($koneksi,"select * from mhs");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['kode']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['jurusan']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $d['kode']; ?>">UPDATE</a>
                        <a href="delete.php?id=<?php echo $d['kode']; ?>">DELETE</a>
                    </td>
                </tr>
                <?php
            }
            ?>
    </table>
</body>
</html>