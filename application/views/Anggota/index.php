<!-- <h1>Data Anggota</h1>
<a href="<?= site_url('anggota/create'); ?>">Tambah Anggota</a>
<table border="1">
    <tr>
        <th>NIS</th>
        <th>Nama Anggota</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Email</th>
        <th>Tanggal Daftar</th>
        <th>Foto</th>
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
            <?php if (!empty($row['foto'])): ?>
            <img src="<?= base_url('uploads/'.$row['foto']); ?>" alt="Foto <?= $row['nama_anggota']; ?>" width="200">
            <?php else: ?>
            Tidak ada foto
            <?php endif; ?>
        </td>
        <td>
            <a href="<?= site_url('anggota/edit/'.$row['nis']); ?>">Edit</a> |
            <a href="<?= site_url('anggota/delete/'.$row['nis']); ?>"
                onclick="return confirm('Apakah Anda yakin?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belajar Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>

<body>
    <main>
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700 mt-14">
                <div class="font-bold text-2xl underline-offset-8">
                    <h2 class="font-bold text-2xl">Anggota</h2>
                </div>
                <div>
                    <hr class="w-full h-1 my-3 bg-gray-200 border-0 rounded dark:bg-black-700" width="100%" />
                </div>

                <div class="relative overflow-x-auto mb-4 mt-4 shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Nis</th>
                                <th scope="col" class="px-6 py-3">Nama</th>
                                <th scope="col" class="px-6 py-3">Alamat</th>
                                <th scope="col" class="px-6 py-3">No Telepon</th>
                                <th scope="col" class="px-6 py-3">Email</th>
                                <th scope="col" class="px-6 py-3">Tanggal Daftar</th>
                                <th scope="col" class="px-6 py-3">Foto</th>
                                <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($anggota as $row): ?>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">

                                <td class="px-6 py-4"><?= $row['nis']; ?></td>
                                <td class="px-6 py-4"><?= $row['nama_anggota']; ?></td>
                                <td class="px-6 py-4"><?= $row['alamat']; ?></td>
                                <td class="px-6 py-4"><?= $row['nomor_telepon']; ?></td>
                                <td class="px-6 py-4"><?= $row['email']; ?></td>
                                <td class="px-6 py-4"><?= $row['tanggal_daftar']; ?></td>
                                <td class="px-6 py-4"><?php if (!empty($row['foto'])): ?>
                                    <img src="<?= base_url('uploads/'.$row['foto']); ?>"
                                        alt="Foto <?= $row['nama_anggota']; ?>" width="200">
                                    <?php else: ?>
                                    Tidak ada foto
                                    <?php endif; ?>
                                </td>

                                <td class="px-6 py-4">
                                    <a href="<?= site_url('anggota/edit/'.$row['nis']); ?>"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    |
                                    <a href="<?= site_url('anggota/delete/'.$row['nis']); ?>"
                                        onclick="return confirm('Apakah Anda yakin?');"
                                        class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>



<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success">
    <?= $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
<div class="alert alert-danger">
    <?= $this->session->flashdata('error'); ?>
</div>
<?php endif; ?>