<?php
require "db.php";

function get($query) {
    global $connection;
    $result = mysqli_query($connection, $query);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function save($query) {
    global $connection;
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function delete($query) {
    global $connection;
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function registrasi($query){
    global $connection;
    
    $username = strtolower(stripslashes($query["username"]));
    $password = mysqli_real_escape_string ($connection, $query["password"]);
    $password2 = mysqli_real_escape_string ($connection, $query["pasword2"]);

    
    $result = mysqli_query($connection, "SELECT * username FROM users WHERE username = '$username");
   
    if (mysqli_fetch_assoc($result)) {
        echo "username sudah tersedia";
        return false;
    }


    if ($password !== $password2) {
        echo "<script>
        alert ('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    //alert konfirm pass salah dan alert akun baru berhasil belum muncul
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($connection, "INSERT INTO users VALUES ('', '$username', '$password')");
    $ifSuccess = save($query);
    
    return mysqli_affected_rows($connection);
}