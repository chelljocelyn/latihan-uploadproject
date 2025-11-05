<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br/>
    <h3>EDIT DATA MAHASISWA</h3>

    <?php
    include 'koneksi.php';
    $Kode_Mahasiswa = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * from siswa where Kode_Mahasiswa='$Kode_Mahasiswa'");
    while($d = mysqli_fetch_array($data)){
    ?>
        <form method="post" action="ubah.php">
            <table>
                <tr>
                    <td>Kode_Mahasiswa</td>
                    <td>
                        <input type="hidden" name="Kode_Mahasiswa" value="<?php echo $d['Kode_Mahasiswa']; ?>">
                        <input type="text" name="Kode_Mahasiswa" value="<?php echo $d['Kode_Mahasiswa']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama_Mahasiswa</td>
                    <td>
                        <input type="text" name="Nama_Mahasiswa" value="<?php echo $d['Nama_Mahasiswa']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>
                        <input type="number" name="NIM" value="<?php echo $d['NIM']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        <input type="text" name="Jurusan" value="<?php echo $d['Jurusan']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Save">
                    <input type="hidden" name="Kode_Mahasiswa" value="<?php echo $d['Kode_Mahasiswa'];?>">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>
</html>