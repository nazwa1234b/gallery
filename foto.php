<?php
    include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr><a href="home.php">home</a></tr>
        <br>
        <tr><a href="album.php">album</a></tr>
        <br>
        <tr><a href="foto.php">foto</a></tr>
        <br>
        <tr><a href="logout.php">logout</a></tr>
        
    </table>
    <a href="tambahfoto.php" type="submit" class="btn btn-primary">Tambah</a>
    <table border="1">
    <?php
                $Id = $_SESSION['UserID'];
                $sql="SELECT * FROM foto WHERE UserID='$Id'";
                $res = mysqli_query($konek,$sql);
                while($data=mysqli_fetch_array($res)){
            ?>
            <tr>
                <td><img src="gambar/<?= $data['lokasifile'];?>"></td>
                <td><h5><?= $data['judulfoto'];?></h5></td>
                <td><p><?= $data['deskripsifoto'];?></p></td>
                <td><small><?= $data['tanggalunggah'];?></small></td>
                <td><a href="editfoto.php?fotoid=<?php echo $data['fotoid']; ?>">Edit</a></td>
                <td><a href="hapusfoto.php?fotoid=<?php echo $data['fotoid']; ?>">Hapus</a></td>
            </tr>
    </table>
    <?php } ?>
</body>
</html>