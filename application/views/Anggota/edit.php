<h1>Edit Anggota</h1>
<form action="<?= site_url('anggota/edit/'.$anggota['nis']); ?>" method="post">
    <label>Nama Anggota</label><br>
    <input type="text" name="nama_anggota" value="<?= $anggota['nama_anggota']; ?>" required><br><br>

    <label>Alamat</label><br>
    <textarea name="alamat"><?= $anggota['alamat']; ?></textarea><br><br>

    <label>Nomor Telepon</label><br>
    <input type="text" name="nomor_telepon" value="<?= $anggota['nomor_telepon']; ?>"><br><br>

    <label>Email</label><br>
    <input type="email" name="email" value="<?= $anggota['email']; ?>"><br><br>

    <label>Tanggal Daftar</label><br>
    <input type="date" name="tanggal_daftar" value="<?= $anggota['tanggal_daftar']; ?>" required><br><br>

    <label>Password (Kosongkan jika tidak ingin mengubah)</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit">Update</button>
</form>