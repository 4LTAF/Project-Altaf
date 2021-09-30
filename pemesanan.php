<html>
    <head>
    <link href="css/style2.css" rel="stylesheet">
    </head>
    <body>
      <form action="simpan_pesan.php" method="POST">
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
      <h2>Pemesanan</h2>
      <br><br><br>
      <table>
      <tr>
            <td>No Transaksi</td>
            <td>:</td>
            <td><input type="number" name = 'nots' required></td>
      </tr>

      <tr>
            <td>Tanggal Transaksi</td>
            <td>:</td>
            <td><input type="date" name = 'tgts' required></td>
        </tr>

        <tr>
            <td>Nama Pelanggan</td>
            <td>:</td>
            <td><input type="text" name = 'nama' required></td>
        </tr>

        <tr>
            <td>Pesan Makanan</td>
            <td>:</td>
            <td><input type="text" name = 'makan' required></td>
        </tr>

        <tr>
            <td>Pesan Minuman</td>
            <td>:</td>
            <td><input type="text" name = 'minum' required></td>
        </tr>

        <tr>
            <td>Pesan Tambahan</td>
            <td>:</td>
            <td><input type="text" name = 'tambah' required></td>
        </tr>

        <tr>
            <td>Total Transaksi</td>
            <td>:</td>
            <td><input type="text" name = 'ts' required></td>
        </tr>

        
      </table>
      <br>
      <tr><td>
      <button type="button submit" class="btn btn-dark" name="submit">Lanjutkan Transaksi</button></td></tr>
    </p>
    </div>
  </div>
</div>
</form>
</body>
</html>