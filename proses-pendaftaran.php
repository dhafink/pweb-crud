<?php
include("config.php");

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];

$sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal)
        VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
$query = mysqli_query($conn, $sql);

if ($query) {
    header('Location: list-siswa.php');
} else {
    echo "Gagal menyimpan...";
}
?>
