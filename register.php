<?php
    session_start();

    if(isset($_SESSION["email"])) {
        header('Location: index.php');
    }
?>

<html>
    <body>
        <h2>Register</h2>

        <form action="./register_proccess.php" method="POST">
            <label for="email">Email: </label>
            <input type="text" id="email" name="email"><br>
            
            <label for="password">Password: </label>
            <input type="password" id="password" name="password"><br>
            
            <br>

            <input type="submit" value="Register">
        </form>
    </body>
</html>