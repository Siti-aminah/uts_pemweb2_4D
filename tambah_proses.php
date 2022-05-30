<?php
    include 'connection.php';

    $nama_barang = $_POST['nama_barang'];
    $kategori_barang = $_POST['kategori_barang'];
    $jumlah_stok = $_POST['jumlah_stok'];

    $query_tambah = "INSERT INTO stok_barang (nama_barang,kategori_barang,jumlah_stok) VALUES ('$nama_barang','$kategori_barang','$jumlah_stok')";
    $tambah = pg_query($connection,$query_tambah);

    if($tambah){
        header("location: index.php");
    }else{
        header("location: tambah.php");
    }

?>