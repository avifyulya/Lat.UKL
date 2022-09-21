<?php
 include "../connect.php";

 $query = "SELECT id_karyawan, nama_karyawan FROM karyawan";
 $result = mysqli_query($connect, $query);
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
 <h1>TAMBAH DATA </h1>
        <form action="create.php" method="post">
            <table>
                <tbody>
                    <tr>
                        <td>Id Transaksi</td>
                        <td>:</td>
                        <td><input type="text" name="id_transaksi"></td>
                    </tr>
                    <tr>
                        <td>Nama Customer</td>
                        <td>:</td>
                        <td><input type="text" name="nama_customer" ></td>
                    </tr>
                    <tr>
                        <td>Nama Karyawan</td>
                        <td>:</td>
                        <td>
                        <select name="id_karyawan">
                            <option value="">Pilih Karyawan</option>
                            <?php
                            if(mysqli_num_rows($result) > 0){
                                while($data = mysqli_fetch_assoc($result)){
                                    echo "<option value='".$data['id_karyawan']."'>".$data['nama_karyawan']."</option>";
                                }
                            }
                            ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Transaksi</td>
                        <td>:</td>
                        <td><input type="date" name="tgl" ></td>
                    </tr>
                    <tr>
                        <td>Total Transaksi</td>
                        <td>:</td>
                        <td><input type="text" name="total" ></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><input type="text" name="in_process" ></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="simpan"></td>
                    </tr>
                </tbody>
            </table>
        </form>
 </body>
 </html>