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
                    <h2 class="font-bold text-2xl">Peminjaman</h2>
                </div>
                <div>
                    <hr class="w-full h-1 my-3 bg-gray-200 border-0 rounded dark:bg-black-700" width="100%" />
                </div>

                <div class="relative overflow-x-auto mb-4 mt-4 shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">Admin</th>
                                <th scope="col" class="px-6 py-3">Anggota</th>
                                <th scope="col" class="px-6 py-3">Buku</th>
                                <th scope="col" class="px-6 py-3">Tanggal Peminjaman</th>
                                <th scope="col" class="px-6 py-3">Tanggal Pengembalian</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($peminjaman as $row): ?>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">


                                <td class="px-6 py-4"><?= $row['id_peminjaman']; ?></td>
                                <td class="px-6 py-4"><?= $row['nama_admin']; ?></td>
                                <td class="px-6 py-4"><?= $row['nama_anggota']; ?></td>
                                <td class="px-6 py-4"><?= $row['judul_buku']; ?></td>
                                <td class="px-6 py-4"><?= $row['tanggal_peminjaman']; ?></td>
                                <td class="px-6 py-4"><?= $row['tanggal_pengembalian']; ?></td>
                                <td class="px-6 py-4"><?= $row['status_peminjaman']; ?></td>

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