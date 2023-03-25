<?php
error_reporting();
include'koneksi.php';

?>

<!-- html -->
<!DOCTYPE html>
<html>
<head>
    <title>EDIT DATA</title>
</head>
<body>
    <?php
    //menampilkan data
    $nim=$_GET['edit'];
    $sql=mysqli_query($koneksi,"SELECT * FROM absen WHERE nim='$nim'");
    $data=mysqli_fetch_array($sql);
    //data prodi
    $cb=explode(',', $data['prodi']);

    ?>

    <form method="post" enctype="multipart/form-data" name="form1" id="form1">
    
    <fieldset>
        <legend><h3>Edit Data Absensi Mahasiswa</h3></legend>
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input name="nim" type="text" id="nim" size="20" placeholder="Masukkan NIM" readonly
                value="<?=$data['nim']?>"/></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input name="nama" type="text" id="nama" size="50" placeholder="Masukkan Nama" readonly
                <?=$data['nama']?>/></td>
            </tr>
            <!-- checkbox -->
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="prodi[]" id="it" readonly
                    value = "IT" <?php if(in_array('IT',$cb)) echo "checked" ?>>IT
                
                    <input type="checkbox" name="prodi[]" id="akn" readonly 
                    value="Akn" <?php if(in_array('Akn',$cb)) echo "checked" ?>>Akuntansi

                    <input type="checkbox" name="prodi[]" id="dkv" readonly
                    value="DKV" <?php if(in_array('DKV',$cb)) echo "checked" ?>>DKV

                    <input type="checkbox" name="prodi[]" id="ars" readonly 
                    value="Arsi" <?php if(in_array('Arsi',$cb)) echo "checked" ?>>Arsitek
                </td>
            </tr>
            <!-- radio button -->
            <tr>
                <td>Kehadiran</td>
                <td>:</td>
                <td>
                <input type="radio" name="kehadiran" value="hadir" 
                <?php if($data['kehadiran']=='hadir') echo 'checked' ?>>
                <label for="hdr">Hadir</label>

                <input type="radio" name="kehadiran" value="sakit" 
                <?php if($data['kehadiran']=='sakit') echo 'checked' ?>>
                <label for="skt">Sakit</label>

                <input type="radio" name="kehadiran" value="ijin" 
                <?php if($data['kehadiran']=='ijin') echo 'checked' ?>>
                <label for="ijn">Ijin</label>

                <input type="radio" name="kehadiran" value="alpha" 
                <?php if($data['kehadiran']=='alpha') echo 'checked' ?>>
                <label for="alp">Alpha</label>
                </td>
            </tr>
            <!-- date -->
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="datetime-local" name="tgl" id="tgl" value="<?=$data['waktu']?>">
                </td>
            </tr>
            <!-- file -->
            <tr>
                <td>Bukti Kehadiran</td>
                <td>:</td>
                <td><input  type="file" name="foto" id="foto" <?=$data['bukti']?>/>
            </td>
            </tr>
            <tr>
            <td><input name="simpan" type="submit" id="simpan" value="Simpan"/></td>
            <td></td>
            </tr>
        </table>
    </fieldset>
    </form>

    <!-- proses edit -->
    <?php
    if (isset($_POST['simpan'])){
        $kehadiran=$_POST['kehadiran'];
        $waktu=$_POST['tgl'];
        $bukti=$_POST['foto'];

        $query=mysqli_query($koneksi, "UPDATE absen SET kehadiran='$kehadiran', waktu='$waktu',
        bukti='$bukti' WHERE nim='$nim'");

        if($query) {
            header("location:hlm1.php");
        }
    }
    ?>
    
</body>
</html>