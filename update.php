<?php
require "function.php";

$idPengunjung = $_POST["id"];
$namaPengunjung = $_POST["nama"];
$tanggalKunjungan = $_POST["tanggal"];

$isUpdated = save("UPDATE pengunjung SET nama = '$namaPengunjung', tanggal = '$tanggalKunjungan' WHERE id = $idPengunjung");

if ($isUpdated) {
    header("Location: /php_crud/index.php");
} else {
    echo "Gagal mengupdate data ke database";
    die();
}
