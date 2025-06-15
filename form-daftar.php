<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Formulir Pendaftaran Siswa</h2>
    <form action="proses-pendaftaran.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Alamat:</label>
        <textarea name="alamat" required></textarea>

        <label>Jenis Kelamin:</label>
        <div class="radio-group">
            <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan</label>
        </div>

        <label>Agama:</label>
        <input type="text" name="agama" required>

        <label>Sekolah Asal:</label>
        <input type="text" name="sekolah_asal" required>

        <button type="submit" class="btn">Daftar</button>
    </form>
</div>
</body>
</html>
