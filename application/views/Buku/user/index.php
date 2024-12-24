<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>




<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Perpus</span>
                </a>
            </div>

        </div>
    </div>
</nav>
<aside id="logo-sidebar"
    class="fixed top-0 bg-blue-500 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full  border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full bg-blue-500  px-3 pb-4 overflow-y-auto dark:bg-gray-800">
        <ul class="space-y-2  bg-gray-400 font-medium">



        </ul>
    </div>
</aside>




<main>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700 mt-14">
            <div class="font-bold text-2xl underline-offset-8">
                <h2 class="font-bold text-2xl">Daftar Buku</h2>
            </div>
            <div>
                <hr class="w-full h-1 my-3 bg-gray-200 border-0 rounded dark:bg-black-700" width="100%" />
            </div>

            <div class="relative overflow-x-auto mb-4 mt-4 shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Kode Buku</th>
                            <th scope="col" class="px-6 py-3">Judul Buku</th>
                            <th scope="col" class="px-6 py-3">Penulis</th>
                            <th scope="col" class="px-6 py-3">Kategori</th>
                            <th scope="col" class="px-6 py-3">Stok Buku</th>
                            <th scope="col" class="px-6 py-3">Foto</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($buku as $row): ?>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">

                            <td class="px-6 py-4"><?= $row['kode_buku']; ?></td>
                            <td class="px-6 py-4"><?= $row['judul_buku']; ?></td>
                            <td class="px-6 py-4"><?= $row['penulis']; ?></td>
                            <td class="px-6 py-4"><?= $row['kategori']; ?></td>
                            <td class="px-6 py-4"><?= $row['stok_buku']; ?></td>
                            <td class="px-6 py-4">
                                <?php if (!empty($row['foto'])): ?>
                                <img src="<?= base_url('uploads/buku/'.$row['foto']); ?>"
                                    alt="Foto <?= $row['judul_buku']; ?>" width="100">
                                <?php else: ?>
                                Tidak ada foto
                                <?php endif; ?>
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