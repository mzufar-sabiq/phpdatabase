<?php
//koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "db_hokage");

//cek apakah tombol submit sudsh ditekan atau belum
if( isset($_POST["submit"]) ) {
    //ambil data dari tiap elemen dlm form
    $Nama = $_POST["Nama"];
    $Gambar = $_POST["Gambar"];
    $Gender = $_POST["Gender"];
    $Klan = $_POST["Klan"];
    $Hokage_ke = $_POST["Hokage_ke"];

    //query insert data
    $query = "INSERT INTO tb_hokage
                VALUES 
              ('', '$Nama', '$Gambar', '$Gender', ' $Klan', ' $Hokage_ke')
                  ";
    mysqli_query($conn, "$query");
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah dt hkg</title>
    <style>
        .container {
            background-color: red;
            width: 500px;
            height: 500px;
            margin: auto;
        }
        h1 {
            text-align: center;
        }
        ul {
            list-style-type:none;
        }
        .container, form input li{
        list-style-type:none;
        margin-top: -50px;
        margin: auto;
        box-sizing: border-box;
       }
       .container form button{
        margin-top: 20px;
        color: rgb(255, 255, 255);
        background-color: rgb(28, 180, 28);
        padding:  7px 30px 7px 30px;
        border-radius: 6px;
        margin-left: -35px;
        margin: auto;
    }
        
    </style>
</head>
<body>
    
<div class="container">

<h1>Tambah dt hkg</h1>
<form action="" method="post">
    <ul>
        <li>
            <label></label>
            <input type="text" name="Nama" id="Nama" placeholder="Nama">
        </li><br><br>
        <li>
            <label></label>
            <input type="text" name="Gambar" id="Gambar" placeholder="Gambar">
        </li><br><br>
        <li>
            <label></label>
            <input type="text" name="Gender" id="Gender" placeholder="Gender">
        </li><br><br>
        <li>
            <label></label>
            <input type="text" name="Klan" id="Klan" placeholder="Klan">
        </li><br><br>
        <li>
            <label></label>
            <input type="text" name="Hokage ke" id="Hokage ke" placeholder="Hokage ke">
        </li><br><br>
        <li>
            <button type="submit" name="submit">Tambah data</button>
        </li>
    </ul>
</form>
</div>


</body>
</html>