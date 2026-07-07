<?php
require 'fungsi.php';

if(isset($_POST["submit"])){

    if(tambah($_POST) > 0){
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href='mahasiswa.php';
        </script>";
    }else{
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href='tambahdata.php';
        </script>";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

<h2>Tambah Data Mahasiswa</h2>
<form action="" method="post" enctype="multipart/form-data">
    <tr>
    <td>Foto</td>
    <td>
        <input type="file" name="foto" required>
    </td>
</tr>

<table>

<tr>
    <td>Nama</td>
    <td><input type="text" name="nama" required></td>
</tr>

<tr>
    <td>NIM</td>
    <td><input type="number" name="nim" required></td>
</tr>

<tr>
    <td>Program Studi</td>
    <td><input type="text" name="prodi" required></td>
</tr>

<tr>
    <td>Email</td>
    <td><input type="email" name="email" required></td>
</tr>

<tr>
    <td>Nomor HP</td>
    <td><input type="number" name="no_hp" required></td>
</tr>

<tr>
    <td>Foto</td>
    <td><input type="text" name="foto" placeholder="contoh: foto.jpg"></td>
</tr>

<tr>
    <td></td>
    <td>
        <button type="submit" name="submit">Simpan</button>
        <a href="mahasiswa.php">Kembali</a>
    </td>
</tr>

</table>

</form>

</body>
</html>