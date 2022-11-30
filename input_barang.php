<?php
include 'koneksi.php';

$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$jumlah = $_POST['jumlah'];


$data = mysqli_query($koneksi,"INSERT INTO `barang`( `nama_barang`, `stok`, `jumlah`) VALUES ('$nama_barang','$stok','$jumlah')");

header('Location:daftar_barang.php');
?>