<?php
    include_once("./connect.php");

    $query = mysqli_query ($db,"SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
</head>
<body>
    <h1>Daftar Staff</h1>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Telephone</td>
            <td>Email</td>
            <td>Action</td>
        <tr>
    <?php foreach($query as $staff) {?>
        <tr>
        <td><?php echo $staff["nama"] ?></td>
        <td><?php echo $staff["telp"] ?></td>
        <td><?php echo $staff["email"] ?></td>
        <td><a href=<?php echo "edit-staff.php?id=" . $staff["id"]?>>EDIT</a> |
        <a href=<?php echo "delete-staff.php?id=" . $staff["id"] ?>>Hapus</a>
    </td>
        <tr>
        <?php } ?> 
    </table>
    <br>
    <a href="./tambah-staff.php">Form Tambah Staff </a> <br>
    <a href="./index.php">Kembali Kehalaman Utama </a>
</body>
</html>