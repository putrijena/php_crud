<?php
require "function.php";

$idPengunjung = $_GET['id'];
$isDeleted = delete("DELETE from pengunjung WHERE id = $idPengunjung");

if($isDeleted) {
    header("Location: /php_crud/index.php");
} else {
    echo "Gagal menghapus data";
}