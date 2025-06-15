<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="table-container">
    <h2>Daftar Siswa yang Sudah Mendaftar</h2>
    <a href="form-daftar.php" class="btn">+ Tambah Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($conn, $sql);
        $no = 1;

        while($row = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['jenis_kelamin']."</td>";
            echo "<td>".$row['agama']."</td>";
            echo "<td>".$row['sekolah_asal']."</td>";
            echo "<td>
                <a href='proses-edit.php?id=".$row['id']."'>Edit</a> | 
                <a href='hapus.php?id=".$row['id']."' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
            </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
