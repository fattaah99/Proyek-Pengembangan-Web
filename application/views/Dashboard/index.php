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


    <div class="p-4 sm:ml-64">
        <div class="p-4 dark:border-gray-700 mt-14">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="h-40 rounded bg-cyan-500 rounded-xl dark:bg-gray-800 card">
                    <div>
                        <div class="flex grid grid-cols-2 items-center">
                            <div>
                                <div class="text-4xl font-semibold text-white pt-4 pl-4">
                                    <?php echo $total_nis; ?></div>
                                <div class="flex text-white font-normal text-2xl pt-4 pl-4">Anggota</div>
                            </div>
                            <div class="justify-items-end pr-5">
                                <svg class="text-gray-600 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="92" height="92" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-5 pt-2 pb-2 text-center font-medium text-white bg-cyan-600"><a
                                href="<?= site_url('anggota') ?>">More
                                Info</a></div>
                    </div>
                </div>
                <div class="h-40 rounded bg-green-500 rounded-xl dark:bg-gray-800 card">
                    <div>
                        <div class="flex grid grid-cols-2 items-center">
                            <div>
                                <div class="text-4xl font-semibold text-white pt-4 pl-4">
                                    <?php echo $total_kode_buku; ?></div>
                                <div class="flex text-white font-normal text-2xl pt-4 pl-4">Buku</div>
                            </div>
                            <div class="justify-items-end pr-5">
                                <svg class="text-gray-600 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="88" height="88" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-5 pt-2 pb-2 text-center font-medium text-white bg-green-700"><a
                                href="<?= site_url('buku') ?>">More Info</a></div>
                    </div>
                </div>
                <div class="h-40 rounded bg-yellow-500 rounded-xl dark:bg-gray-800 card">
                    <div>
                        <div class="flex grid grid-cols-2 items-center">
                            <div>
                                <div class="text-4xl font-semibold text-white pt-4 pl-4">
                                    <?php echo $total_peminjaman; ?>
                                </div>
                                <div class="flex text-white font-normal text-2xl pt-4 pl-4">Peminjaman</div>
                            </div>
                            <div class="justify-items-end pr-5">
                                <svg class="text-gray-600 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="92" height="92" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4v15a1 1 0 0 0 1 1h15M8 16l2.5-5.5 3 3L17.273 7 20 9.667" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-5 pt-2 pb-2 text-center font-medium text-white bg-yellow-600"><a
                                href="<?= site_url('peminjaman') ?>">More Info</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>