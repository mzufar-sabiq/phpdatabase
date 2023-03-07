<?php
require 'function.php';
$hokage = query("SELECT * FROM tb_hokage");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data hkg</title>
    <style>
        #a1 {
            text-decoration: none;
            margin-left: 1100px;
            background-color: green;
            color: white;
            padding: 5px;
            border-radius: 0.5em;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Daftar Hokage</h1>

<a href="tambah.php" id="a1">Tambah data hokage</a>

<center>
    <table border="1" cellpadding="10" cellspacing="0" style="text-align: center;">
        <tr style="color: red;">
            <th>No.</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Gender</th>
            <th>Klan</th>
            <th>Hokage_ke</th>
        </tr>

        <?php foreach($hokage as $anm) : ?>
        <tr>
            <td><?= $anm["No."]; ?></td>
            <td>
                <a href="">ubah</a>  |
                <a href="">hapus</a>
            </td>
            <td>
                <img src="gmbr hokage/<?= $anm["Gambar"]; ?>"  width="100" height="50">
            </td>
            <td><?= $anm["Gender"]; ?></td>
            <td><?= $anm["Klan"]; ?></td>
            <td><?= $anm["Hokage_ke"]; ?></td>
        </tr>
        <?php endforeach ;?>
    </table>
    </center>
</body>
</html>