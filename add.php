<?php
    require "../function.php";

$namaPengunjung = $_POST['nama'];
$tanggalKunjungan = $_POST ['tanggal'];
$query = "INSERT INTO pengunjung (nama, tanggal) VALUES ('$namaPengunjung', '$tanggalKunjungan')";
$isInserted = save($query);

if ($isInserted) {
    header ("Location: /php_crud/index.php");
} else { 
    echo "Gagal memasukkan data ke database";
    die();
}

$username = $_POST ['username'];
$password = $_POST ['password'];
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$ifSuccess = save($query);

if ($ifSuccess) {
    echo "Berhasil menambahkan user baru!";
} else {
    echo "Gagal menambahkan user baru!";
}