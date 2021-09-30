<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	
	<br/>
	
	<a href="kasir.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit Data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id_makanan'];
	$query_mysql = mysql_query("SELECT * FROM makanan WHERE id_makanan='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama Makanan</td>
				<td>
					<input type="hidden" name="id_makanan" value="<?php echo $data['id_makanan'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama_makanan'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Jenis</td>
				<td><input type="text" name="jenis" value="<?php echo $data['jenis'] ?>"></td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>					
			</tr>
            <tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?php echo $data['status'] ?>"></td>					
			</tr>	

			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>