</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Peminjaman</title>
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

                <form action="<?= site_url('peminjaman/create'); ?>" method="post" enctype="multipart/form-data"
                    class="mt-3">
                    <!-- NIS -->
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="anggota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Anggota</label>
                        <select id="anggota" name="nis"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <?php foreach ($anggota as $ag) : ?>
                            <option value="<?= $ag['nis']; ?>"><?= $ag['nama_anggota']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="buku"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Buku</label>
                        <select id="buku" name="kode_buku"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <?php foreach ($buku as $bk) : ?>
                            <option value="<?= $bk['kode_buku']; ?>"><?= $bk['judul_buku']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>



                    <!-- Alamat -->

                    <!-- Tanggal Daftar -->
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="tanggal_peminjaman"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal
                            Peminjaman</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="tanggal_pengembalian"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal
                            Pengembalian</label>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <label for="status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select id="status" name="status_peminjaman"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="dipinjam">Dipinjam</option>
                            <option value="dikembalikan">Dikembalikan</option>
                        </select>
                    </div>



                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>