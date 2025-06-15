<?php
include("config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Edit Data Siswa</h2>
    <form action="proses-pendaftaran.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">

        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $siswa['nama'] ?>">

        <label>Alamat:</label>
        <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>

        <label>Jenis Kelamin:</label>
        <div class="radio-group">
            <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($siswa['jenis_kelamin']=='Laki-laki') echo 'checked'?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($siswa['jenis_kelamin']=='Perempuan') echo 'checked'?>> Perempuan</label>
        </div>

        <label>Agama:</label>
        <input type="text" name="agama" value="<?php echo $siswa['agama'] ?>">

        <label>Sekolah Asal:</label>
        <input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>">

        <button type="submit" name="update" class="btn">Update</button>
    </form>
</div>
</body>
</html>
