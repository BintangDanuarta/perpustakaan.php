<?php
    // memulai interaksi session
    session_start();

    // memanggil koneksi database connect.php
    include_once("./connect.php");

    // apakah ada POST request email dan password dari form?
    if (isset($_POST['email']) && isset($_POST['password'])) {

        // kalau ada, simpain email kedalam variabel email
        $email = $_POST['email'];

        // kalau ada, simpan password kedalam variabel email
        $password = $_POST['password'];
        
        // kalau ada, simpan password kedalam variabel email
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) { 
            $row = mysqli_fetch_assoc($result);

            if(password_verify($password, $row['password'])) {

                $_SESSION['email'] = $email;

                header("Location: index.php");
                exit;
            }else {
                echo "Password salah.";
            }
        }else {
            echo "Email tidak ditemukan.";
        }
    }