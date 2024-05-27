<?php
    session_start();

    if(!isset($_SESSION["email"])) {
        header("Location : index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>
    <h1> Aplikasi Perpustakaan </h1>

    <a href="./buku.php">Lihat daftar Buku</a>
    <br>
    <a href="./staff.php">Lihat daftar Staff</a>

    <form action="./logout_proccess.php" method="POST">
            <button class="btn" type="submit">LOGOUT</button>
        </form>
</body>
</html>