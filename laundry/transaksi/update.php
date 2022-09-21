<?php
    include "../connect.php";
    $id_transaksi = $_POST['id_transaksi'];
    $id_karyawan = $_POST['id_karyawan'];
    $nama_customer = $_POST ['nama_customer'];
    $tgl_transaksi = $_POST['tgl_transaksi'];
    $total_transaksi = $_POST['total_transaksi'];
    $in_process = $_POST['in_process'];

    $query = "UPDATE transaksi SET nama_customer = '$nama_customer',
                                    tgl_transaksi = $tgl_transaksi,
                                    total_transaksi = $total_transaksi,
                                    in_process = '$in_process',
                                    id_karyawan = $id_karyawan
            WHERE id_transaksi = $id_transaksi";
    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if($num > 0){
        echo "Berhasil ubah data <br>";
    } else{
        echo "Gagal ubah data <br>";
    }
    echo "<a href='read.php'>Lihat data</a>";
?>