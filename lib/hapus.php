<?php
include 'koneksi.php';

$id_pemesanan = htmlentities($_GET['id_pemesanan']);

    $sql_hapus = "delete from pemesanan where id_pemesanan ='$id_pemesanan'";
    $query_hapus = mysqli_query($db,$sql_hapus);
    //var_dump($sql_hapus); exit;
    if($query_hapus)
    {
        header('Location: ../daftar.php');
    }else{
        header('Location: index.php?aksi=detail&id_pemesanan='.$id_pemesanan);
    }
