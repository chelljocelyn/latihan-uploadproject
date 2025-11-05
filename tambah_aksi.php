<?php
include "koneksi.php";

$Kode_Mahasiswa=$_POST['Kode_Mahasiswa'];
$Nama_Mahasiswa=$_POST['Nama_Mahasiswa'];
$NIM=$_POST['NIM'];
$Jurusan=$_POST['Jurusan'];
$Alamat=$_POST['Alamat'];

mysqli_query($koneksi, "INSERT INTO siswa (Kode_Mahasiswa, Nama_Mahasiswa, NIM, Jurusan, Alamat) VALUES ('$Kode_Mahasiswa', '$Nama_Mahasiswa','$NIM', '$Jurusan','$Alamat')");

header("location:index.php");

?>