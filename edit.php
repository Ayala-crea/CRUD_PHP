<?php

require 'function.php';

//Ambil data dari url
$id = $_GET["id"];

// Query data mahasiswa bedasarkan id
$db = query("SELECT * FROM mahasiswa WHERE id = $id")[0];




//Cek apakah tombol sudah ditekan atau belom
if (isset($_POST["submit"])) {

    // Cek apakah data sudah berhasil di ubah atau belum
    if (edit($_POST) > 0) {
        echo
            "<script>
            alert('Data berhasil diubah');
            window.location.href = 'absensi.php';
        </script>";
    } else {
        echo
            "<script>
            alert('Data gagal diubah :( ');
        </script>";
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
    <!-- CSS only -->

</head>

<body>
    <div class="judul1">
        <h1>Ubah Data Mahasiswa</h1>
    </div>

    <div class="form">
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="npm">npm</label></td>
                    <td>:</td>
                    <td><input type="number" placeholder="isi npm" name="npm" id="npm" required class="form-control"
                            value="<?= $a["npm"] ?>"></td>
                </tr>
                <tr>
                    <td><label for="nama">nama</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi nama" name="nama" id="nama" required class="form-control"
                            value="<?= $a["nama"] ?>"></td>
                </tr>
                <tr>
                    <td><label for="jurusan">jurusan</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi alamat" name="jurusan" id="jurusan" required
                            class="form-control" value="<?= $a["jurusan"] ?>"></td>
                </tr>
                <tr>
                    <td><a href="absensi.php" class=" btn-primary"><i class="fa-solid fa-backward"></i></a></td>
                    <td></td>
                    <td><button type="submit" name="submit" class="btn btn-primary">Ubah data</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>