<h1>Data Anggota</h1>
<a href="<?= site_url('anggota/create'); ?>">Tambah Anggota</a>
<table border="1">
    <tr>
        <th>NIS</th>
        <th>Nama Anggota</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Email</th>
        <th>Tanggal Daftar</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($anggota as $row): ?>
    <tr>
        <td><?= $row['nis']; ?></td>
        <td><?= $row['nama_anggota']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['nomor_telepon']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['tanggal_daftar']; ?></td>
        <td>
            <a href="<?= site_url('anggota/edit/'.$row['nis']); ?>">Edit</a> |
            <a href="<?= site_url('anggota/delete/'.$row['nis']); ?>"
                onclick="return confirm('Apakah Anda yakin?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>