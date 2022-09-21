<?php
    include "../connect.php";

    $id_karyawan = $_GET['id_karyawan'];

    $query = "SELECT * FROM karyawan WHERE id_karyawan = $id_karyawan";
    
    $result = mysqli_query($connect, $query);

    $row = mysqli_fetch_assoc($result);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
    <table>
    <tr>
        <td><label for="nama">Nama Karyawan</lable></td>
        <td>:</td>
        <td><input type ="text" name="nama_karyawan" id="nama" value="<?php echo $row['nama_karyawan']; ?>" ></td>
    </tr>
    <tr>
        <td><label for="no_telp">No. Telepon</lable></td>
        <td>:</td>
        <td><input type ="text" name="telp" id="no_telp" value="<?php echo $row['telp']; ?>" ></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="hidden" name="id_karyawan" value="<?php echo $row['id_karyawan']; ?>"></td>
        <td><input type="submit" value="Simpan" name="btnSimpan"></td>
    </tr>
    </table>
</form>
</body>
</html>