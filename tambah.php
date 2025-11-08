<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR CRUD</title>
    <link rel = "stylesheet" href="style.css?v=<?= time()?>">
</head>
<body>
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="post" action="tambah_aksi.php">
        <fieldset>
            <legend><strong>Form Input</strong></legend>
            <table>
                <tr>
                    <td>Kode</td>
                    <td><input type="text" name="kode" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="number" name="nim" required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="SIMPAN"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br><a href="index.php">KEMBALI</a>
</body>
</html>
