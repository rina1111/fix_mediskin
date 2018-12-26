<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$No  = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from apoointment where No='$No'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
echo"<script>alert('Data telah terhapus');</script>";
echo "<script>location='table_appo.php?halaman=produk'; </script>";
?>