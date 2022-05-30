<?php

    include 'connection.php';
    $tampil = pg_query("SELECT * FROM stok_barang");

?>

<nav class="navbar navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="marketami.png" alt="" width="120" height="80" class="d-inline-block align-text-top">
      <class style="font-size: 2rem; color: #FFFFFF">AMIMARKET</class>
    </a>
  </div>
</nav>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body shadow" style="margin-auto;">
                <a href="tambah.php" class="btn btn-secondary" >Tambah</a>
                <h3 class="text-center"><b>DATA STOK BARANG</b></h3>
                <table class="table table-hover table-info">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama_Barang</td>
                            <td>Kategori_Barang</td>
                            <td>Jumlah_Stok</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while($data = pg_fetch_array($tampil)):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_barang'];?></td>
                            <td><?= $data['kategori_barang'];?></td>
                            <td><?= $data['jumlah_stok'];?></td>
                            <td>
                                <a href="edit.php?nama_barang=<?= $data['nama_barang']; ?>" class="btn btn-secondary">Edit</a>
                                <a href="hapus.php?nama_barang=<?= $data['nama_barang']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>