<?php

include 'koneksi.php';

$id = $_GET['id'];


$data= mysqli_query($koneksi,"DELETE FROM `barang` WHERE `id` = '$id' ");
header('Location:daftar_barang.php');





?>