<?php
    include "../connect.php"; 
    $id_transaksi = $_GET['id'];
    $query = "SELECT id_transaksi, nama_customer, tgl_transaksi, total_transaksi, in_process, transaksi.id_karyawan, nama_karyawan
                FROM transaksi LEFT JOIN karyawan USING(id_karyawan)
                    WHERE id_transaksi = '$id_transaksi'";
    $result = mysqli_query($connect, $query);
    $data_karyawan = mysqli_fetch_assoc($result);
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
        <h1>Ubah Data Transaksi</h1>
        <form action="update.php" method="post">
            <table>
                <tbody>
                    <tr>
                        <td>Id Transaksi</td>
                        <td>:</td>
                        <td><input type="text" name="id_transaksi" value="<?php echo $data_karyawan['id_transaksi']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Nama Customer</td>
                        <td>:</td>
                        <td><input type="text" name="nama_customer" value="<?php echo $data_karyawan['nama_customer']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Karyawan</td>
                        <td>:</td>
                        <td>
                        <select name="id_karyawan">
                                <option value="<?php echo $data_karyawan['id_karyawan']; ?>"><?php echo $data_karyawan['nama_karyawan']; ?></option>
                                <?php
                                    $query = "SELECT * FROM karyawan";
                                    $result = mysqli_query($connect, $query);
                                    while($data = mysqli_fetch_assoc($result)){
                                        echo "<option value='$data[id_karyawan]'>$data[nama_karyawan]</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Transaksi</td>
                        <td>:</td>
                        <td><input type="date" name="tgl_transaksi" value="<?php echo $data_karyawan['tgl_transaksi']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Total Transaksi</td>
                        <td>:</td>
                        <td><input type="text" name="total_transaksi" value="<?php echo $data_karyawan['total_transaksi']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><input type="text" name="in_process" value="<?php echo $data_karyawan['in_process']; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Simpan"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
    </html>