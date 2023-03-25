<?php
error_reporting();
include 'koneksi.php';

if (isset($_POST['simpan'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = implode($_POST['prodi']);
    $kehadiran = $_POST['kehadiran'];
    $waktu = $_POST['tgl'];
    $bukti = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "img/".$bukti;

    if (move_uploaded_file($tmp, $path)){
        $query = "INSERT INTO absen VALUES ('$nim','$nama','$prodi','$kehadiran',
        '$waktu','$bukti')";

        $result = mysqli_query($koneksi, $query);

        if(!$result){
            die("Query gagal dijalankan: ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
        }
        else{
            echo "<script>alert('Data Berhasil Ditambah');window.location.href='hlm1.php'</script>";
        }
    }
}
?>