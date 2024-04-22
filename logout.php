<?php
    include "koneksi.php";

    session_start();
    session_destroy();

    header("location:1.php");

?>


