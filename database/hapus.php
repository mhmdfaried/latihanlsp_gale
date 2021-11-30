<?php
include 'koneksi.php';
$id = $_GET['id'];

//query hapus
mysqli_query($conn, "DELETE FROM siswa where id =$id") or die(mysqli_error($conn));


echo "<script>alert('Data Berhasil Dihapus.');window.location='tampilan.php';</script>";
