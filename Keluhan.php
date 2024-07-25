<?php
// menghubungkan halaman ke functionn-
require './function/function.php';

$detail_postingan = query("SELECT * FROM keluhan ORDER BY created_at DESC");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluhan</title>
    <!-- style -->
    <link rel="stylesheet" href="./output.css">
    <!-- endstyle -->

    <!-- script -->
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <!-- endscript -->
</head>
<body  class="bg-[url('BG.jpg')] bg-cover backdrop-blur-sm">
    <!-- header -->
     <?php 
        include './component/header-web.php';
     ?>
    <!-- endheader -->
    <!-- main -->
    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-extrabold text-center mt-10">Keluhan</h1>
    <main class="py-6 grid gap-6 sm:grid-cols-2 md:grid-cols-3 ">
        <?php foreach ($detail_postingan as $post) : ?>
            <div class="bg-white dark:bg-gray-200 shadow-md rounded-lg py-5 px-5 mx-5">
                    <h1 class="text-lg text-gray-900 font-medium mb-1">Pengirim : <strong><?= $post['pengirim'] ?></strong></h1>
                <article class="border-t border-gray-300">
                        <div class="bg-white dark:bg-gray-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                            <dt class="text-sm sm:text-base font-medium text-gray-500">Keluhan</dt>
                            <dd class="mt-1 sm:mt-0 text-sm sm:text-base sm:col-span-2 text-gray-900"><?= $post['pesan'] ?></dd>
                        </div>
                    </dl>
                </article>
            </div>
        <?php endforeach; ?>
    </main>
    <!-- endmain -->
    <!-- footer -->
     <?php 
        include './component/footer.php'
     ?>
    <!-- endfooter -->
</body>
</html>