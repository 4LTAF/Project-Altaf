<?php
$username   = $_POST['user'];
$pass       = ($_POST['pass']);

include 'koneksi.php';

$user = mysqli_query($koneksi,"select * from kasir where nama_kasir='$username' and pass_kasir='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    header("location:kasir.php");
}else
{
    echo "Login Gagal Periksa kembali User dan Password Anda";
    header("location:login.php");
}
?>