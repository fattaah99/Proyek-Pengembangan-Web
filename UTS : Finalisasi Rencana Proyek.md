# Aplikasi Peminjaman Buku
Aplikasi Web Peminjaman Buku dirancang untuk mempermudah pengelolaan proses peminjaman buku di perpustakaan. Aplikasi ini memungkinkan penggunauntuk mencari buku yang tersedia, melakukan peminjaman. Admin perpustakaan dapat mengelola data buku, memantau aktivitas peminjaman.

## Fitur Aplikasi
### Sisi User
1. halaman beranda: Halaman utama yang menampilkan informasi singkat tentang aplikasi, buku-buku populer, serta rekomendasi buku yang tersedia di perpustakaan. Pengguna dapat melihat sekilas buku-buku yang sedang dipromosikan atau populer.
2. pencarian : Fitur pencarian memungkinkan pengguna menemukan buku berdasarkan judul, penulis, atau kategori. Setelah memasukkan kata kunci, hasil pencarian akan menampilkan daftar buku yang relevan, sehingga pengguna dapat menemukan buku yang diinginkan dengan mudah.
3. Halaman buku : Halaman ini menampilkan detail buku yang dipilih oleh pengguna, termasuk judul, penulis, sinopsis, tahun terbit, serta informasi ketersediaan buku.

### Sisi Admin

1. Dasboard : Dasbor yang memberikan tampilan ringkas data aplikasi seperti jumlah total pengguna, jumlah buku yang tersedia, statistik peminjaman, dan notifikasi terbaru. Dasbor ini dirancang untuk memberikan gambaran cepat kepada admin tentang aktivitas di aplikasi.
2. Manajemen pengguna : Fitur untuk mengelola data pengguna aplikasi, termasuk menambah, menghapus, atau memblokir pengguna. Admin dapat memantau aktivitas pengguna dan memastikan bahwa pengguna mematuhi aturan peminjaman yang ditetapkan.
3. Manajemen buku : Fitur ini memungkinkan admin untuk menambahkan, mengedit, atau menghapus data buku yang tersedia dalam sistem. Admin dapat mengatur informasi buku seperti judul, penulis, deskripsi, kategori, dan status ketersediaan.
4. Manajemen peminjaman buku : Admin dapat mengelola data peminjaman yang meliputi melihat daftar buku yang sedang dipinjam, memverifikasi permintaan peminjaman atau pengembalian, serta mencatat tanggal peminjaman dan pengembalian buku. Fitur ini membantu admin dalam memantau aktivitas peminjaman secara efisien.
5. login : Fitur login yang khusus untuk admin agar dapat mengakses dashboard dan fitur manajemen lainnya. Hanya admin yang terdaftar yang memiliki hak akses untuk masuk ke bagian ini, sehingga keamanan sistem lebih terjaga.



## Schema Tabel
Schema tabel ini digunakan untuk aplikasi peminjaman buku yang memisahkan data anggota, buku, admin, dan transaksi peminjaman. Berikut adalah detail masing-masing ke 4 tabel tersebut:
### Table: anggota

| Kolom          | Tipe Data    | Keterangan                      |
| -------------- | ------------ | ------------------------------- |
| nis            | INT          | Nomor Induk Siswa (Primary Key) |
| nama_anggota   | VARCHAR(100) | Nama lengkap anggota            |
| alamat         | TEXT         | Alamat anggota                  |
| nomor_telepon  | VARCHAR(15)  | Nomor telepon anggota           |
| email          | VARCHAR(100) | Email anggota                   |
| tanggal_daftar | DATE         | Tanggal anggota mendaftar       |

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


## Rencana Kegiatan
1. Kegiatan ke-8 (12-18 Nov 2024)
   * Membuat CRUD untuk tabel admin
   * Membuat CRUD untuk tabel buku
2. Kegiatan ke-9 (19-25 Nov 2024)
   * Membuat fungsi untuk melakukan peminjaman buku
   * Membuat fungsi pencarian buku
   * Membuat fungsi untuk login
4. Kegiatan ke-10 (26 Nov -2 Des 2024)
   * Membuat halaman beranda user
   * Membuat tampilan halaman buku untuk user
   * Membuat tampilan pencarian 
5. Kegiatan ke-11 (3 - 9 Des 2024)
   * Membuat halaman beranda untuk admin
   * Membuat halaman manajemen pengguna
   * Membuat halaman untuk manajemen buku
6. Kegiatan ke-12 (10 - 16 Des 2024)
   * Membuat halaman manajemen peminjaman buku
   * Membuat halaman login

