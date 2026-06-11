<html>
    <head>
           <h1 align="center">
        WEB TI ARIF | 2026
    </h1>
     <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <table border="1" align="center" cellspacing="0" cellpadding="10px">
        <tr>
            <td>
                <a href="index.php">Home</a></td>
            <td>
                <a href="about.php">Profile</a></td>
            <td>
                <a href="kontak.php">Contact</a></td>
            <td>
                <a href="mahasiswaa.php">Data Mahasiswa</a>
            </td>
        </tr>
    </table>
    <center>
    <br><br>
    <h2>Data Mahasiswa</h2>
    <a href="tambahdata.php"><button>Tambah Data</button></a>
    <table border="1" cellpadding="5px" >
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>Nomor Whatsapp</th>
            <th>Foto</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Sean Alexander</td>
            <td>13242521111</td>
            <td>Akutansi</td>
            <td>seanwannnn8898@gmail.com </td>
            <td>088215731111</td>
            <td><img src="assets/gunung.jpg" width="100px" alt="gunung" />
            <td>
                <a href="editdata.php"><button>Edit</Button></a>
                <a href="hapusdata.php"><button>Hapus</Button></a>
            <td>
            <!-- <td> Baris 2, Kolom 3</td> -->
        </tr>
    </table>
    <br><br>
    <table border="1" cellpadding="5px">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td align="center" colspan="2" rowspan="2"> ? </td>
            <td>2,3</td>
        </tr>
        <tr>
            <td>3,1</td>
            <td colspan="2">3,2</td>
        </tr>
        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>

    </table>
    <br><br>
    <form action="#" method="post">
    <table cellpadding="8" cellspacing="0">
        
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>NIM</td>
            <td><input type="number" name="nim"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>

        <tr>
            <td>No HP</td>
            <td><input type="tel" name="nohp"></td>
        </tr>

        <tr>
            <td>Website</td>
            <td><input type="url" name="website"></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tgl_lahir"></td>
        </tr>

        <tr>
            <td>Warna Favorit</td>
            <td><input type="color" name="warna"></td>
        </tr>

        <tr>
            <td>Tingkat Kepuasan</td>
            <td><input type="range" name="kepuasan" min="0" max="100"></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                <input type="radio" name="jk" value="Perempuan"> Perempuan
            </td>
        </tr>

        <tr>
            <td>Hobi</td>
            <td>
                <input type="checkbox" name="hobi" value="Membaca"> Membaca
                <input type="checkbox" name="hobi" value="Olahraga"> Olahraga
                <input type="checkbox" name="hobi" value="Musik"> Musik
            </td>
        </tr>

        <tr>
            <td>Upload Foto</td>
            <td><input type="file" name="foto"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="4" cols="30"></textarea></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>
                <select name="jurusan">
                    <option value="TI">Teknik Informatika</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Kirim">
            </td>
        </tr>

    </table>
</form>
</body>
</html>
