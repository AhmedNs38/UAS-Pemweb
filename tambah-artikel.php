<?php
require 'functions.php';


if (isset($_POST['kirim'])) {
    $judul = $_POST['judul'];
    $isi_artikel = $_POST['isi_artikel'];
    $tgl_dibuat = $_POST['tgl_dibuat'];

    $query = "INSERT INTO artikel VALUES (NULL, '$judul', '$isi_artikel')";
    mysqli_query($koneksi, $query);
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>
</head>

<body>
    <form action="" method="post">
        <br>
        <div>
            <label for="judul">Judul Artikel</label> <br>
            <input type="text" id="judul" name="judul">
        </div>

        <br>

        <div>
            <label for="isi_artikel">Isi Artikel</label> <br>
            <textarea name="isi_artikel" id="isi_artikel" cols="30" rows="10"></textarea>
        </div>

        <br>

        <div>
            <input type="date" name="tgl_dibuat">
        </div>

        <br>

        <button type="submit" name="kirim">Kirim</button>
    </form>
</body>

</html>