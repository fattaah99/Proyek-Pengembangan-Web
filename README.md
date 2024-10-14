# Aplikasi Web Peminjaman Buku

## Analisis Kebutuhan

| **Aspek**              | **Kebutuhan Administrator**                                                                  |
| ---------------------- | -------------------------------------------------------------------------------------------- |
| **Fungsionalitas**     | Mengelola stok buku, menambahkan/menyunting buku, memproses pengembalian, laporan peminjaman   |
| **Antarmuka Pengguna** | Dashboard yang mudah digunakan untuk mengelola buku dan transaksi peminjaman                   |
| **Kinerja**            | Laporan kinerja sistem untuk memonitor aktivitas peminjaman dan pengembalian buku              |
| **Keamanan**           | Backup data secara berkala, akses terkontrol ke data sensitif (stok buku, data peminjaman)     |

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
| kategori     | VARCHAR(50)  | Kategori                     |
| stok_buku    | INT          | Jumlah buku yang tersedia    |


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

![Untitled (4)](https://github.com/user-attachments/assets/e57c371d-a00e-4968-9748-bcfe4391b47d)


### Link Design

https://www.figma.com/design/pSr0fzUOuDffOsvAPToydh/Rancangan-website-perpus?node-id=0-1&t=L82lpHUjBAzyrTKd-1

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
