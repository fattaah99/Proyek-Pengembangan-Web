<h1>Tambah Admin</h1>
<form action="<?= site_url('admin/create'); ?>" method="post">
    <label>username</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password</label><br>
    <input type="text" name="password" required><br><br>

    <label>Nama</label><br>
    <textarea name="nama_admin"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>