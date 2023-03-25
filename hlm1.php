<?php
error_reporting();
include 'koneksi.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Absen</title>
</head>
<body>
    <h1 style="text-align:center;">Data Absensi Univ X</h1>
    <center><a href="input.php">Tambah Data</a></center><br>
    <table border="1" style="margin:auto">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>PRODI</th>
            <th>KEHADIRAN</th>
            <th>WAKTU</th>
            <th>BUKTI</th>
            <th>EDIT</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $no=0;
        $result = mysqli_query($koneksi, "SELECT*FROM absen");
        while($row = mysqli_fetch_array($result)){
            $no++
    ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row['nim'];?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['prodi'];?></td>
            <td><?php echo $row['kehadiran'];?></td>
            <td><?php echo $row['waktu'];?></td>
            <td>
                <center>
                    <img src="img/<?php echo $row['bukti'];?>" border="0"
                    width="70px" height="60px"/>
                </center>
            </td>
            <td>
                <a href="editdata.php?edit=<?=$row['nim']?>">edit</a>
            </td>
        </tr>
    <?php } ?>
    
    </tbody>
    </table>
    
</body>
</html>