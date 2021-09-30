<html>
    <head>
        <title>Stok Barang</title>
    </head>
<body>
<h2>List Barang</h2>
<table border="1">
    <tr><th>ID Barang</th><th>Nama Makanan</th><th>Jenis</th><th>Harga</th><th>Status</th></tr>
    <?php
    include 'koneksi.php';
    $makanan = mysqli_query($koneksi, "SELECT * from makanan");
    $no=1;
    foreach ($makanan as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['nim']."</td>
            <td>".$row['nama']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$row['jurusan']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>
</body>
</html>