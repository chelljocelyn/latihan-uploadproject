<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="editing.css">
</head>
<body>
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br/>
    <br/>
<table border="1">
        <tr>
            <th>Kode_Mahasiswa</th>
            <th>Nama_Mahasiswa</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data=mysqli_query($koneksi,"select * from siswa");
        while($d=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['Kode_Mahasiswa']; ?></td>
                <td><?php echo $d['Nama_Mahasiswa']; ?></td>
                <td><?php echo $d['NIM']; ?></td>
                <td><?php echo $d['Jurusan']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $d['Kode_Mahasiswa']; ?>">UPDATE</a>
                    <a href="delete.php?id=<?php echo $d['Kode_Mahasiswa']; ?>">DELETE</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </table>
</body>
</html>