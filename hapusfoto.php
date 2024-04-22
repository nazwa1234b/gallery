<?php
    include "koneksi.php";

?>
<?php

    $Id_Foto = $_GET['fotoid'];

    $sqql = mysqli_query($konek, "SELECT * FROM foto WHERE fotoid='$Id_Foto'");

    $sql = mysqli_query($konek, "DELETE FROM foto WHERE fotoid='$Id_Foto'");

    $data = mysqli_fetch_array($sqql);
    
    if ($sql){
        if(unlink("gambar/". $data['lokasifile']) ){
            header("Location: 5.php");
        }else{
            header("Location: 5.php");
        }
    }else{
        mysqli_error($konek);
    }
?>