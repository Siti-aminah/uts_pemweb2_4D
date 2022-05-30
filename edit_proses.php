<?php

    include('connection.php');
        $id = $_POST['id'];
        $nama_barang = $_POST['nama_barang'];
        $kategori_barang = $_POST['kategori_barang'];
        $jumlah_stok = $_POST['jumlah_stok']; 

        $query_edit = "UPDATE stok_barang SET nama_barang='$nama_barang', kategori_barang='$kategori_barang', jumlah_stok='$jumlah_stok' WHERE nama_barang = '$nama_barang' ";
        $edit = pg_query($connection,$query_edit);

        if($edit){
            header("location:index.php");
        }else{
            header("location:index.php?nama_barang=$nama_barang");
        }
?>