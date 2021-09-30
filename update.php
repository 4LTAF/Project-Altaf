<?php 
 
include 'koneksi.php';
$id_makanan = $_POST['id_makanan'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$status = $_POST['status'];
 
mysql_query("UPDATE makanan SET nama_makanan='$nama', jenis='$jenis', harga='$harga', status='status' WHERE id_makanan='$id_makanan'");

$id_minuman = $_POST['id_minuman'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$status = $_POST['status'];
 
mysql_query("UPDATE minuman SET nama_minuman='$nama', jenis='$jenis', harga='$harga', status='status' WHERE id_minuman='$id_minuman'");

header("location:kasir.php?pesan=update");
 
?>