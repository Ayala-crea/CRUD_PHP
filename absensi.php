<?php
require 'function.php';

$absens = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <div class="nav_icon" onclick="toggleSidebar()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="navbar__left">
                <a class="active_link" href="#">Data Mahasiswa</a>
                <a href="tambahdata.php">Add Data</a>
            </div>
            <div class="navbar__right">
                <a href="#">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <img width="30" src="assets/avatar2.png" alt="" />
                    <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
                </a>
            </div>
        </nav>
        <main>
            <div class="main__container">

                <h1>Data Mahasiswa</h1>

                <a href="tambahdata.php">Tambah Data mahasiswa</a>
                <br><br>

                <table border="1" cellpadding="10" cellspacing="0" width="80%">

                    <tr>
                        <th>no.</th>
                        <th>edit</th>
                        <th>npm</th>
                        <th>nama</th>
                        <th>jurusan</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($absens as $a): ?>
                        <tr>
                            <td>
                                <?= $i; ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?= $a["id"]; ?>">ubah</a> |
                                <a href="hapus.php?id=<?= $a["id"]; ?>"
                                    onclick="return confirm('apakah anda yakin?');">hapus</a>
                            </td>
                            <td>
                                <?= $a["npm"]; ?>
                            </td>
                            <td><?= $a["nama"]; ?></td>
                            <td>
                                <?= $a["jurusan"]; ?>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </table>
            </div>
        </main>
        <div id="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                    <h1>Absensi</h1>
                </div>
                <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
            </div>

            <div class="sidebar__menu">
                <div class="sidebar__link">
                    <i class="fa fa-user"></i>
                    <a href="#">Data Absensi</a>
                </div>

                <div class="sidebar__logout">
                    <i class="fa fa-power-off"></i>
                    <a href="#">Log out</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script src="js/main.js"></script>
</body>

</html>