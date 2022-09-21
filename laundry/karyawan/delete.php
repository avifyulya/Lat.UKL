<?php
    include "../connect.php";

    $id_karyawan = $_GET['id_karyawan'];

    $query = "DELETE FROM karyawan WHERE id_karyawan = $id_karyawan";

    $result = mysqli_query($connect, $query);

    $num = mysqli_affected_rows($connect);

    if($num>0){
        echo "Berhasil hapus data <br>";
    }
    else{
        echo 
        "Gagal hapus data <br>";
    }
    echo "<a href='read.php'>Lihat Data</a>";     
?>