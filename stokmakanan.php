<html>
    <head>
    <link href="css/style2.css" rel="stylesheet">
    </head>
    <body>
    <div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="kasir.php">KASIR RESTORAN</a>
      <img src="img/icon.png" alt="">
    </header>
    <ul class="nav">
      <li>
        <a href="pemesanan.php">
          <i class="zmdi zmdi-link">
          <button type="button" class="btn btn-primary btn-lg"><b>Pemesanan</b></button></i>
        </a>
      </li>
      <br><br>
      <li>
        <a href="stokmakanan.php">
          <i class="zmdi zmdi-link">
          <button type="button" class="btn btn-primary btn-lg"><b>Stok Makanan</b></button></i>
        </a>
      </li>
      <br><br>
      <li>
        <a href="stokminuman.php">
          <i class="zmdi zmdi-link">
          <button type="button" class="btn btn-primary btn-lg"><b>Stok Minuman</b></button>
          </i>
        </a>
      </li>
      <br><br>
      <li>
        <a href="kasir.php">
          <i class="zmdi zmdi-link">
          <button type="button" class="btn btn-danger"><b>Kembali</b>
          </button>
          </i>
        </a>
      </li>
    </ul>
  </div>
  <!-- Content -->
  <div id="content">

    <div class="container-fluid">
     <p>
      <h2>List Stok Makanan</h2>
      <b><button type="button" class="btn btn-success">Tambah Barang +</b>
      <a href="tambah.php"></button></a>
	<br/>
	<br/>
  <center>
	<table border="1">
		<tr>
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>Jenis</th>
			<th>Harga</th>
			<th>Status</th>
      <th>Opsi</th>
		</tr>
		<?php 
      include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from makanan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				
				<td><?php echo $d['id_makanan']; ?></td>
				<td><?php echo $d['nama_makanan']; ?></td>
				<td><?php echo $d['jenis']; ?></td>
        <td><?php echo $d['harga']; ?></td>
        <td><?php echo $d['status']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id_makanan']; ?>">
          <button type="button" class="btn btn-info">EDIT</button></a>
					<a href="hapus.php?id=<?php echo $d['id_makanan']; ?>">
          <button type="button" class="btn btn-danger">HAPUS</button></a>
				</td>
			</tr>
    <?php } ?>
	</table>
      </p>
    </div>
  </div>
</div>
</center>
</body>
</html>