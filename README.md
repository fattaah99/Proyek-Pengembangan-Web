# Aplikasi Web Peminjaman Buku

## Analisis Kebutuhan

| **Aspek**              | **Kebutuhan Pengguna**                                                        | **Kebutuhan Administrator**                                                                  |
| ---------------------- | ----------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| **Fungsionalitas**     | Mencari buku, melihat detail buku, peminjaman buku, melihat riwayat pinjam    | Mengelola stok buku, menambahkan/menyunting buku, memproses pengembalian, laporan peminjaman |
| **Antarmuka Pengguna** | Desain yang bersih dan intuitif, navigasi mudah, daftar buku yang terstruktur | Dashboard yang mudah digunakan untuk mengelola buku dan transaksi peminjaman                 |
| **Kinerja**            | Waktu loading yang cepat, pencarian buku yang responsif                       | Laporan kinerja sistem untuk memonitor aktivitas peminjaman dan pengembalian buku            |
| **Keamanan**           | Proteksi data pribadi pengguna, histori peminjaman yang aman                  | Backup data secara berkala, akses terkontrol ke data sensitif (stok buku, data peminjaman)   |

## Schema Tabel

### Table: anggota

| Kolom          | Tipe Data    | Keterangan                      |
| -------------- | ------------ | ------------------------------- |
| nis            | INT          | Nomor Induk Siswa (Primary Key) |
| nama_anggota   | VARCHAR(100) | Nama lengkap anggota            |
| alamat         | TEXT         | Alamat anggota                  |
| nomor_telepon  | VARCHAR(15)  | Nomor telepon anggota           |
| email          | VARCHAR(100) | Email anggota                   |
| tanggal_daftar | DATE         | Tanggal anggota mendaftar       |
| password       | VARCHAR      | Password anggota                |

### Table: buku

| Kolom        | Tipe Data    | Keterangan                   |
| ------------ | ------------ | ---------------------------- |
| kode_buku    | VARCHAR      | Kode unik buku (Primary Key) |
| judul_buku   | VARCHAR(150) | Judul buku                   |
| penulis      | VARCHAR(100) | Nama penulis buku            |
| penerbit     | VARCHAR(100) | Nama penerbit buku           |
| tahun_terbit | YEAR         | Tahun buku diterbitkan       |
| id_kategori  | VARCHAR(50)  | ID kategori buku             |
| stok_buku    | INT          | Jumlah buku yang tersedia    |

## Table: kategori

| Kolom         | Tipe Data   | Keterangan                |
| ------------- | ----------- | ------------------------- |
| id_kategori   | INT         | ID kategori (Primary Key) |
| nama_kategori | VARCHAR(50) | Nama kategori             |

### Table: admin

| Kolom      | Tipe Data    | Keterangan                     |
| ---------- | ------------ | ------------------------------ |
| id_admin   | INT          | ID admin (Primary Key)         |
| username   | VARCHAR(50)  | Username admin untuk login     |
| password   | VARCHAR(255) | Password admin yang dienkripsi |
| nama_admin | VARCHAR(100) | Nama lengkap admin             |

### Table: peminjaman

| Kolom                | Tipe Data | Keterangan                                         |
| -------------------- | --------- | -------------------------------------------------- |
| id_peminjaman        | INT       | ID peminjaman (Primary Key)                        |
| id_admin             | INT       | ID admin (Foreign Key ke tabel `admin`)            |
| nis                  | INT       | Nomor Induk Siswa (Foreign Key ke tabel `anggota`) |
| kode_buku            | VARCHAR   | Kode buku (Foreign Key ke tabel `buku`)            |
| tanggal_peminjaman   | DATE      | Tanggal peminjaman                                 |
| tanggal_pengembalian | DATE      | Tanggal pengembalian                               |
| status_peminjaman    | ENUM      | Status peminjaman ('dipinjam', 'dikembalikan')     |

## Table relation

![Untitled (3)](https://github.com/user-attachments/assets/40bf0054-50fe-4e16-9700-1c439743bb96)

### Link Design

https://www.figma.com/design/pSr0fzUOuDffOsvAPToydh/Rancangan-website-perpus?node-id=0-1&t=L82lpHUjBAzyrTKd-1

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
