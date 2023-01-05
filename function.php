<?php
use LDAP\Result;
$db = mysqli_connect("localhost", "root", "", "absensi");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $absens = [];
    while( $absen = mysqli_fetch_assoc($result)) {
        $absens[] = $absen;
    }
    return $absens;
}

function tambahdata($data)
{
    global $db;

    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //quey insert data
    $query = "INSERT INTO mahasiswa
        VALUES
        ('', '$npm', '$nama', '$jurusan')
        ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($db);
}

function edit($data){
    global $db;

    $npm = $data["npm"];
    $nama = $data["nama"];
    $jurusan = $data["jurusan"];


    $query = "UPDATE mahasiswa SET
                npm = '$npm',
                nama = '$nama',
                jurusan    = '$jurusan'
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

?>