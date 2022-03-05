<?php
    require "function.php";

    $dataPengunjung = get("SELECT * FROM pengunjung");

    if (isset($_GET['keyword'])){
        $keyword = $_GET['keyword'];
        $dataPengunjung = get("SELECT * FROM pengunjung WHERE nama LIKE '%$keyword%' ");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengunjung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: whitesmoke;">

<div class="container">
    <h1 style="margin: 0.5rem; text-align: center;">Daftar Pengunjung</h1>
    <a href="tambah.php" class="btn btn-primary" style="margin: 1.5rem;" >Tambah data pengunjung</a>
    <form method="GET">
        <div class="form-group">
            <label for="keyword">Cari Data Pengunjung</label>
            <input type="text" name="keyword" id="keyword" placeholder="Cari Data" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit" style="margin: 0.5rem;">Cari</button>
    </form>
    <table class="table table-bordered">
        <thead>
            <th>Nama</th>
            <th>Tanggal Kunjungan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php foreach ($dataPengunjung as $pengunjung): ?>
            <tr>
                <td><?= $pengunjung['nama'] ?></td>
                <td><?= $pengunjung['tanggal'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $pengunjung['id'] ?>" class="btn btn-info">Edit</a>
                    <a href="action/delete.php?id=<?= $pengunjung['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin menghapus data ?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>    
</body>
</html>