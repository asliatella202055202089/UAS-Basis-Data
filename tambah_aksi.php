<?php 
// koneksi database
include 'koneksi.php';
 

$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
 if (!empty($nama) || !empty($jumlah) || !empty($harga)) {
// menginput data ke database
mysqli_query($koneksi,"insert into penjualan values('','$nama_barang','$jumlah','$harga')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>