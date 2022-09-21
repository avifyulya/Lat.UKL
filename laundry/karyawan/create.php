<?php
    include "../connect.php";

    $nama_karyawan =$_POST["nama_karyawan"];
    $telp=$_POST["telp"];

    $query = "INSERT INTO karyawan(nama_karyawan, telp) 
    VALUES ('$nama_karyawan','$telp')";

    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);

    if($num > 0){
        echo "Berhasil tambah data<br>";
    }
    else{
        echo "Gagal tambah data<br>";
    }
    echo "<a href='read.php'>Lihat Data</a>";
?>