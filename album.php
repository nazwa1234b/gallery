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
<a href="tambahalbum.php" type="submit" class="btn btn-primary">Tambah</a>
<table>
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Deskripsi</th>
                          <th>Tanggal</th>
                          <th width="15%">Aksi</th>
                        </tr>
                        <?php
                            $id_user    =$_SESSION["UserID"]; 
                           $sql = mysqli_query ($konek, "SELECT * FROM album where UserID ='$id_user' ");
                           $no=0;
                           while($data = mysqli_fetch_array($sql)){ 
                            $no++;?>
                           
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $data ['namaalbum'];?></td>
                          <td><?php echo $data ['deskripsi'];?></td>
                          <td><?php echo $data ['tanggal'];?></td>
                          <td>
                          <a class="btn btn-warning" href="editalbum.php?albumid=<?= $data['albumid']?>">edit</a>
                          <a class="btn btn-danger" href="hapusalbum.php?albumid=<?= $data ['albumid'] ?>">hapus</a>
                          <a href="13.php?albumid=<?php echo $data['albumid']; ?>">lihat</a>
                          </td>
                        </tr>
                        <?php } ?>
                        </thead>
                      <tbody>
                         
                      </tbody>
                    </table>
    
</body>
</html>