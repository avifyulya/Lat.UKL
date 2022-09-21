<?php
    include "../connect.php";
    $query = "SELECT * FROM karyawan";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);
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
    <table border='1'>
        <h2>Data Karyawan</h2>
        <tr>
            <th>No.</th>
            <th>Nama Karyawan</th>
            <th>Telepon Karyawan</th>
            <th>Aksi</th>
            <th>Hapus</th>
        </tr>
    <?php
        if($num > 0)
        {
            $no= 1;
            while($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>" . $no ."</td>";
                echo "<td>" . $data['nama_karyawan'] . "</td>";
                echo "<td>" . $data['telp'] . "</td>";
                echo "<td><a href='form-update.php?id_karyawan=" . $data['id_karyawan']."'>Edit</a> | ";
                echo "<td><a href='delete.php?id_karyawan=".$data['id_karyawan']."'onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")' >Hapus</a></td>";
                echo "</tr>";
                $no++;
            }
        }
        else
        {
            echo "<td colspan='3'>Tidak ada data</td>";
        }
    ?>
</table>
<a href="form-create.php">Tambah Data</a>
</body>
</html>