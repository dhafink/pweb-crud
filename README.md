# pweb-crud

# Tugas 10 - CRUD Pendaftaran Siswa (MySQL + PHP)

LINK WEB LOCALHOST: [http://localhost/Tugas10\_Crud/index.php](http://localhost/Tugas10_Crud/index.php)
LINK REPO GITHUB: [https://github.com/username/tugas10-crud](https://github.com/username/tugas10-crud)

---

## 📄 Deskripsi

Tugas 10 merupakan kelanjutan dari tugas 9 yang kini dilengkapi dengan fitur **CRUD** (Create, Read, Update, Delete) menggunakan database **MySQL**. Data siswa disimpan ke dalam tabel `calon_siswa` dan dapat dimanipulasi melalui antarmuka yang user-friendly.

---

## 🚀 Fitur Utama

✅ Tambah Data Siswa
✅ Lihat Daftar Pendaftar
✅ Edit Data Pendaftar
✅ Hapus Data Pendaftar
✅ Tampilan Estetik: Desain pastel yang lembut, responsif dan bersih

---

## 📁 Struktur Folder

```
/
├── index.php              # Halaman utama: menu navigasi CRUD
├── form-daftar.php        # Halaman form tambah data siswa
├── proses-pendaftaran.php # Script menyimpan data ke MySQL
├── list-siswa.php         # Menampilkan semua data siswa
├── proses-edit.php        # Script proses update data siswa
├── hapus.php              # Script hapus data siswa dari database
├── config.php             # Koneksi database MySQL
├── style.css              # Styling dengan tema pastel dan modern
```

---

## ⚙️ Cara Menjalankan Proyek

1. **Install XAMPP**: [Download XAMPP](https://www.apachefriends.org/index.html)
2. **Buat Database:**

   * Buka phpMyAdmin
   * Buat database `pendaftaran_siswa`
   * Buat tabel `calon_siswa`:

```sql
CREATE TABLE calon_siswa (
    id INT NOT NULL AUTO_INCREMENT,
    nama VARCHAR(64) NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    jenis_kelamin VARCHAR(16) NOT NULL,
    agama VARCHAR(16) NOT NULL,
    sekolah_asal VARCHAR(64) NOT NULL,
    PRIMARY KEY (id)
);
```

3. **Copy folder** ke `htdocs/Tugas10_Crud/`
4. **Aktifkan Apache & MySQL** dari XAMPP
5. **Buka di browser:** `http://localhost/Tugas10_Crud/index.php`

---

## 🖥️ Preview Tampilan

### Beranda

![image](https://github.com/user-attachments/assets/0b97ff07-861f-47df-b2dc-3763c201c40b)


### Form Pendaftaran

![image](https://github.com/user-attachments/assets/8d7e20de-d5a6-472a-88ad-2411535d9183)


### Daftar Siswa dan Edit Data

> Halaman edit data siswa yang sudah ada

> Tabel dengan data siswa lengkap dan tombol Edit & Hapus
![image](https://github.com/user-attachments/assets/9dd0e975-75a3-4068-80eb-af58b91c9f3c)

## Database Siswa yang sudah mendaftar
![image](https://github.com/user-attachments/assets/b27821ff-c087-4f7c-965c-6f207390853a)

---

## 🧩 Penjelasan File & Kode Utama

### 🔹 `config.php`

Digunakan untuk koneksi ke database:

```php
$host = "localhost";
$user = "root";
$password = "";
$db = "pendaftaran_siswa";

$koneksi = mysqli_connect($host, $user, $password, $db);
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
```

---

### 🔹 `form-daftar.php`

Berisi form HTML yang mengirim data ke `proses-pendaftaran.php`:

```php
<form action="proses-pendaftaran.php" method="POST">
    <input type="text" name="nama" required>
    <textarea name="alamat" required></textarea>
    <input type="radio" name="jenis_kelamin" value="Laki-laki">
    <select name="agama">
        <option>Islam</option>
        <option>Kristen</option>
    </select>
    <input type="text" name="asal_sekolah">
    <input type="email" name="email">
    <input type="text" name="no_telepon">
    <button type="submit">Daftar</button>
</form>
```

---

### 🔹 `proses-pendaftaran.php`

File ini memproses dan menyimpan data ke database:

```php
include("config.php");
$sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, asal_sekolah, email, no_telepon)
        VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$asal_sekolah', '$email', '$no_telepon')";
mysqli_query($koneksi, $sql);
```

---

### 🔹 `list-siswa.php`

Menampilkan seluruh data siswa dari database dalam bentuk tabel:

```php
include("config.php");
$result = mysqli_query($koneksi, "SELECT * FROM calon_siswa");
while ($siswa = mysqli_fetch_array($result)) {
    echo "<tr>",
         "<td>".$siswa['nama']."</td>",
         "<td><a href='proses-edit.php?id={$siswa['id']}'>Edit</a></td>",
         "<td><a href='hapus.php?id={$siswa['id']}'>Hapus</a></td>",
         "</tr>";
}
```

---

### 🔹 `proses-edit.php`

Mengupdate data siswa berdasarkan ID:

```php
include("config.php");
$sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat' WHERE id=$id";
mysqli_query($koneksi, $sql);
```

---

### 🔹 `hapus.php`

Menghapus data siswa berdasarkan ID:

```php
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM calon_siswa WHERE id=$id";
mysqli_query($koneksi, $sql);
```

---

> 📌 Tugas ini adalah implementasi penuh dari sistem CRUD menggunakan PHP dan MySQL.

---

© Dhafin Kurniawan - 5054231016

