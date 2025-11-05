<?php
include 'koneksi.php';

$Kode_Mahasiswa=$_POST['Kode_Mahasiswa'];
$Nama_Mahasiswa=$_POST['Nama_Mahasiswa'];
$NIM=$_POST['NIM'];
$Jurusan=$_POST['Jurusan'];
$Alamat=$_POST['Alamat'];

mysqli_query($koneksi,"UPDATE siswa SET Nama_Mahasiswa='$Nama_Mahasiswa', NIM='$NIM', Alamat='$Alamat' where Kode_Mahasiswa='$Kode_Mahasiswa'");

header("location:index.php");