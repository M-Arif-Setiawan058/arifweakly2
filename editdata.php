<?php

require 'fungsi.php';

$id = $_GET["id"];

$mhs = tampildata("SELECT * FROM mahasiswa WHERE id=$id")[0];

if(isset($_POST["submit"])){

    if(ubah($_POST) > 0){
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href='mahasiswa.php';
        </script>";
    }else{
        echo "
        <script>
            alert('Data gagal diubah');
            document.location.href='mahasiswa.php';
        </script>";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>

<h2>Edit Data Mahasiswa</h2>

<form action="" method="post">

<input type="hidden" name="id" value="<?= $mhs['id']; ?>">

<p>
Nama<br>
<input type="text" name="nama" value="<?= $mhs['nama']; ?>">
</p>

<p>
NIM<br>
<input type="text" name="nim" value="<?= $mhs['nim']; ?>">
</p>

<p>
Program Studi<br>
<input type="text" name="prodi" value="<?= $mhs['prodi']; ?>">
</p>

<p>
Email<br>
<input type="email" name="email" value="<?= $mhs['email']; ?>">
</p>

<p>
Nomor HP<br>
<input type="text" name="no_hp" value="<?= $mhs['no_hp']; ?>">
</p>

<button type="submit" name="submit">Simpan</button>

</form>

</body>
</html>