<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT DATA</title>
</head>
<body>
    <form action="prosesinput.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

    <fieldset>
        <legend><h3>Data Absensi Mahasiswa</h3></legend>
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input name="nim" type="text" id="nim" size="20" placeholder="Masukkan NIM"/></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input name="nama" type="text" id="nama" size="50" placeholder="Masukkan Nama"/></td>
            </tr>
            <!-- checkbox -->
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="prodi[]" id="it" value="IT">
                    <label for="it">IT</label>
                    
                    <input type="checkbox" name="prodi[]" id="akn" value="Akn">
                    <label for="akn">Akuntansi</label>

                    <input type="checkbox" name="prodi[]" id="dkv" value="DKV">
                    <label for="dkv">DKV</label>

                    <input type="checkbox" name="prodi[]" id="ars" value="Arsi">
                    <label for="ars">Arsitek</label>
                </td>
            </tr>
            <!-- radio button -->
            <tr>
                <td>Kehadiran</td>
                <td>:</td>
                <td>
                <input type="radio" name="kehadiran" id="hdr" value="hadir" checked>
                <label for="hdr">Hadir</label>

                <input type="radio" name="kehadiran" id="skt" value="sakit" checked>
                <label for="skt">Sakit</label>

                <input type="radio" name="kehadiran" id="ijn" value="ijin" checked>
                <label for="ijn">Ijin</label>

                <input type="radio" name="kehadiran" id="alp" value="alpha" checked>
                <label for="alp">Alpha</label>
                </td>
            </tr>
            <!-- date -->
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="datetime-local" name="tgl" id="tgl"></td>
            </tr>
            <!-- file -->
            <tr>
                <td>Bukti Kehadiran</td>
                <td>:</td>
                <td><input  type="file" name="foto" id="foto"/></td>
            </tr>
            <tr>
            <td><input name="simpan" type="submit" id="simpan" value="Simpan"/></td>
            </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>