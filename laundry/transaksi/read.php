<?php
    include "../connect.php";

    $query = "SELECT id_transaksi, nama_customer, tgl_transaksi, total_transaksi, in_process, nama_karyawan 
    FROM transaksi LEFT JOIN karyawan 
    USING(id_karyawan) 
    ORDER BY id_transaksi";
 
    $result = mysqli_query($connect, $query);

    $num  = mysqli_num_rows($result);
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
    <h3>DATA TRANSAKSI</h3>
    <table border='1'>
        <tr>
        <th>NO.</th>
        <th>Id Transaksi</th>
        <th>Nama Customer</th>
        <th>Nama Karyawan</th>
        <th>Tanggal Transaksi</th>
        <th>Total Transaksi</th>
        <th>Status</th>
        <th colspan=2>Aksi</th>
        </tr>
<?php
    if($num>0){
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td> <?php echo $no; ?> </td>
                <td> <?php echo $data['id_transaksi'] ?></td>
                <td> <?php echo $data['nama_customer'] ?></td>
                <td><?php
                    if($data['nama_karyawan']!= NULL){
                        echo $data['nama_karyawan'];
                    }else {echo "-";}
                    ?></td>
                <td> <?php echo $data['tgl_transaksi'] ?></td>
                <td> <?php echo $data['total_transaksi'] ?></td>
                <td> <?php echo $data['in_process'] ?></td>
                <td> <a href= 'form-update.php?id=<?php echo $data['id_transaksi']?>'>Edit</a></td>
                <td> <a href= 'delete.php?id=<?php echo $data['id_transaksi']?>' onclick='return confirm("Apakah Anda yakin ingin menghapus data?")'>Delete</a></td>
            </tr>
        <?php
        $no++;
        }
    }
    else{
        echo "<tr> <td colspan= '8' > Tidak ada data </td><tr>";
    }
?>
</table>
</body>
</html>