<?php 
    include "../connect.php";

    $id_karyawan = $_POST['id_karyawan'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $telp = $_POST['telp'];

    $query = "UPDATE karyawan SET nama_karyawan = '$nama_karyawan', telp = '$telp' WHERE id_karyawan = $id_karyawan";

    $result = mysqli_query($connect, $query);

    $num = mysqli_affected_rows($connect);

    if($num>0){
        echo "Berhasil update data <br>";
    }else{
        echo "Gagal update data <br>";
    }
    echo "<a href='read.php'>Lihat Data</a>";
?>