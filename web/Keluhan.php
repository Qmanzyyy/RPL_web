<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluhan</title>
    <!-- style -->
    <link rel="stylesheet" href="../output.css">
    <!-- endstyle -->

    <!-- script -->
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
    <!-- endscript -->
</head>
<body class="">
    <!-- header -->
     <?php 
        include '../component/header-web.php';
     ?>
    <!-- endheader -->

    <!-- main -->
    <main class="h-screen flex flex-col items-center justify-center">
        <form action='index.php' method='POST'>
            <div class="flex flex-col mb-4">
                <label for="pengirim" class="mb-2 font-medium text-base md:text-lg lg:text-xl text-gray-900 dark:text-white">Pengirim</label>
                <input type="text" id="pengirim" name="pengirim" placeholder="nama pengirim bisa disamarkan" class="w-full text-gray-900 dark:text-white placeholder:text-gray-600 placeholder:text-sm placeholder:dark:text-white bg-white dark:bg-gray-400 px-4 py-2 border-white dark:border-gray-800 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-200 dark:focus:ring-violet-200 focus:border-blue-300 dark:focus:border-violet-300">
            </div>
            <div class="flex flex-col mb-4">
                <label for="pesan" class="mb-2 font-medium text-base md:text-lg lg:text-xl text-gray-900 dark:text-white">Keluhan</label>
                <textarea type="text" rows="5" id="pesan" name="pesan" placeholder="jangan lupa dengan pesannya.." class="w-full text-gray-900 dark:text-white placeholder:text-gray-600 placeholder:text-sm placeholder:dark:text-white bg-white dark:bg-gray-400 px-4 py-2 border-white dark:border-gray-800 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-200 dark:focus:ring-violet-200 focus:border-blue-300 dark:focus:border-violet-300"></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" name="kirim" class="px-6 py-2 bg-blue-600 dark:bg-violet-600 text-white font-medium rounded-md shadow-md hover:bg-blue-700 dark:hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-violet-500">Kirim</button>
            </div>
        </form>
    </main>
    <!-- endmain -->
    <!-- footer -->
     <?php 
        include '../component/footer.php'
     ?>
    <!-- endfooter -->
</body>
</html>