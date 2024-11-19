<h1>Edit Admin</h1>
<form action="<?= site_url('admin/edit/'.$admin['id_admin']); ?>" method="post">
    <label>Username</label><br>
    <input type="text" name="username" value="<?= $admin['username']; ?>" required><br><br>

    <label>Password</label><br>
    <input type="text" name="password" value="<?= $admin['password']; ?>"><br><br>

    <label>Nama</label><br>
    <input type="text" name="nama_admin" value="<?= $admin['nama_admin']; ?>"><br><br>

    <button type="submit">Update</button>
</form>