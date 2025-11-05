<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="editing1.css">
</head>
<body>
    <h3> TAMBAH DATA MAHASISWA </h3>
    <form method="post" action="tambah_aksi.php">
    <fieldset>
        <legend>Form Input</legend>
        <table>
            <tr>
                <td>Kode_Mahasiswa</td>
                <td><input type="text" name="Kode_Mahasiswa"></td>
            </tr>
            <tr>
                <td>Nama_Mahasiswa</td>
                <td><input type="text" name="Nama_Mahasiswa"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="NIM"></td>
            </tr>    
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="Jurusan"></td>
            </tr>    
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>    
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>       
        </table>
        </fieldset>
    </form>
    <a href="index.php">KEMBALI</a>
</body>
</html>