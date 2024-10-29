<h1>Tambah Anggota</h1>
<form action="<?= site_url('anggota/create'); ?>" method="post">
    <label>NIS</label><br>
    <input type="number" name="nis" required><br><br>

    <label>Nama Anggota</label><br>
    <input type="text" name="nama_anggota" required><br><br>

    <label>Alamat</label><br>
    <textarea name="alamat"></textarea><br><br>

    <label>Nomor Telepon</label><br>
    <input type="text" name="nomor_telepon"><br><br>

    <label>Email</label><br>
    <input type="email" name="email"><br><br>

    <label>Tanggal Daftar</label><br>
    <input type="date" name="tanggal_daftar" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Simpan</button>
</form>