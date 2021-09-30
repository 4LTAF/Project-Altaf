<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$no_transaksi=$_POST["nots"];
$tgl_transaksi=$_POST["tgts"];
$nama_pelanggan=$_POST["nama"];
$pesan_makan=$_POST["makan"];
$pesan_minum=$_POST["minum"];
$tambahan=$_POST["tambah"];
$total_transaksi=$_POST["ts"];

//Query input menginput data kedalam tabel barang
  $sql="insert into transaksi (no_transaksi,tgl_transaksi,id_pelanggan,id_detailmakanan,id_detailminuman,total_transaksi) values
		('$no_transaksi','$tgl_transaksi','$nama_pelanggan','$pesan_makan','$pesan_minum','$tambahan','$total_transaksi')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	//echo "Berhasil insert data";
	exit;
  }
else {
	//echo "Gagal insert data";
	exit;
}  

?>