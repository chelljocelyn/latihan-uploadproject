<?php
include 'koneksi.php';

$Kode_Mahasiswa=$_GET['id'];

mysqli_query($koneksi, "DELETE from siswa where Kode_Mahasiswa='$Kode_Mahasiswa'");

header("location:index.php");

?>