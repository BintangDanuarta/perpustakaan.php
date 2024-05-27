<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])) {
    $nama=$_POST["nama"];
    $isbn=$_POST["isbn"];
    $unit=$_POST["unit"];
    
    $query = mysqli_query ($db,"INSERT INTO buku values(
        NULL, '$nama', '$isbn', $unit
    )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah buku</title> 
</head>
<body>
    <h1>Form tambah Data Buku </h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="nama">ISBN</label>
        <input type="text" id="isbn" name="isbn">
        <br>
        <br>
        <label for="nama">Unit</label>
        <input type="number" id="unit" name="unit">
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
</form>
</body>
</html>