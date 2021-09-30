<?php 
include 'koneksi.php';
$id = $_GET['id_makanan'];
$query = ("DELETE FROM makanan WHERE id_makanan='$id'")or die(mysql_error());
$hasil = mysqli_query($koneksi, $query);

$id = $_GET['id_minuman'];
$query = ("DELETE FROM minuman WHERE id_minuman='$id'")or die(mysql_error());
$hasil = mysqli_query($koneksi, $query);

if ($hasil == true){
header("location:kasir.php?pesan=hapus");
} else
    header("location:hapus.php?pesan=hapusGagal")
?>