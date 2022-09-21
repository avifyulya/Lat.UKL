<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TAMBAH DATA KARYAWAN</h1>
    <form action="create.php" method="post">
    <table>
    <tr>
        <td><label for="nama">Nama Karyawan</lable></td>
        <td>:</td>
        <td><input type ="text" name="nama_karyawan" id="nama" ></td>
    </tr>
    <tr>
        <td><label for="no_telp">No. Telepon</lable></td>
        <td>:</td>
        <td><input type ="text" name="telp" id="no_telp" ></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="simpan" name="btnSimpan"></td>
    </tr>
    </table>
        <!-- Nama Karyawan : <input type="text" name="nama_karyawan"><br><br>
        No.Telepon    : <input type="text" name="telp"><br>
        <input type="submit" value="simpan" name="btnSimpan"> -->
    </form>
</body>
</html>