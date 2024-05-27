<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])) {
    $nama=$_POST["nama"];
    $telp=$_POST["telp"];
    $email=$_POST["email"];
    
    $query = mysqli_query ($db,"INSERT INTO staff VALUES(
        NULL, '$nama', '$telp', '$email'
    )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah Staff</title> 
</head>
<body>
    <h1>Form tambah Data Staff </h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="telp">Telephone</label>
        <input type="text" id="telp" name="telp">
        <br>
        <br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
</form>
</body>
</html>