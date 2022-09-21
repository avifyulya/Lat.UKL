<?php
    include "../connect.php";

    $id_transaksi = $_POST['id_transaksi'];
    $nama_customer=$_POST['nama_customer'];
    $tgl=$_POST['tgl'];
    $total=$_POST['total'];
    $in_process=$_POST['in_process'];
    $id_karyawan=$_POST['id_karyawan'];

    $query = "INSERT INTO transaksi 
            VALUES ('$id_transaksi', '$nama_customer', '$tgl', '$total', '$in_process', '$id_karyawan')";
    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if($num>0){
        echo "Berhasil tambah data <br>";
    }
    else{
        echo "Gagal tambah data <br>";
    }

    echo "<a href='read.php'>Lihat data</a>";
?>