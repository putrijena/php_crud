<?php

use function PHPSTORM_META\registerArgumentsSet;

require 'function.php';

if (isset ($_POST["register"])) {

    if(registrasi ($_POST) > 0){
        echo "user baru berhasil ditambahkan";
    } else {
        echo mysqli_error($connection);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="POST"></form>

    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">Konfirmasi Password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register">Register</button>
        </li>
    </ul>
</body>
</html>