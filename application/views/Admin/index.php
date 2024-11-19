<h1>Data Admin</h1>
<a href="<?= site_url('admin/create'); ?>">Tambah Admin</a>
<table border="1">
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Nama Admin</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($admin as $row): ?>
    <tr>
        <td><?= $row['username']; ?></td>
        <td><?= $row['password']; ?></td>
        <td><?= $row['nama_admin']; ?></td>
        <td>
            <a href="<?= site_url('admin/edit/'.$row['id_admin']); ?>">Edit</a> |
            <!-- <a href="<?= site_url('anggota/delete/'.$row['nis']); ?>"
                onclick="return confirm('Apakah Anda yakin?');">Delete</a> -->
        </td>
    </tr>
    <?php endforeach; ?>
</table>