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

> Menu "Daftar Baru" dan "Lihat Pendaftar" dengan desain modern pastel

### Form Pendaftaran

> Form interaktif untuk memasukkan data siswa

### Daftar Siswa

> Tabel dengan data siswa lengkap dan tombol Edit & Hapus

### Edit Data

> Halaman edit data siswa yang sudah ada

---

## 🧩 Penjelasan File

### 🔹 `index.php`

Halaman awal berisi navigasi ke form dan list siswa

### 🔹 `form-daftar.php`

Form input data siswa baru

### 🔹 `proses-pendaftaran.php`

Menerima input form, menyimpan ke MySQL

### 🔹 `list-siswa.php`

Menampilkan semua siswa dari database + tombol edit & hapus

### 🔹 `proses-edit.php`

Memproses pembaruan data

### 🔹 `hapus.php`

Menghapus data dari tabel berdasarkan `id`

### 🔹 `style.css`

Tampilan modern dengan warna pastel (pink, biru, putih) dan animasi halus

---

> 📌 Tugas ini adalah implementasi penuh CRUD menggunakan PHP dan MySQL, dengan tampilan yang ditingkatkan agar lebih menarik dan profesional.

---

© Dhafin Kurniawan - 5054231016
