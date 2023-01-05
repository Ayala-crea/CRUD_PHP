<?php
require 'function.php';

if (isset($_POST["submit"])) {



    if (tambahdata($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'absensi.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'tambahdata.php';
        </script>";

    }

}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah data Mahasiswa</h1>
    <br>
    <form action="" method="post">
        <ul>
            <li>
                <label for="npm">npm :</label>
                <input type="text" name="npm" id="npm">
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="jurusan">JURUSAN :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>


    </form>
</body>

</html>