<?php
include 'connection.php';

    $query_hapus = "DELETE FROM stok_barang WHERE nama_barang = '$_GET[nama_barang]'";
    $hapus = pg_query($connection, $query_hapus);

    if($hapus){
        header("location:index.php");
    }else{
        header("location:index.php");
    }
?>