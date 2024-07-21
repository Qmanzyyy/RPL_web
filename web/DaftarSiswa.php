<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaftarSiswa</title>
    <!-- style -->
    <link rel="stylesheet" href="../output.css">
    <!-- endstyle -->

    <!-- script -->
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
    <!-- endscript -->
</head>
<body>
    <!-- header -->
     <?php 
        include '../component/header-web.php';
     ?>
    <!-- endheader -->

    <!-- main -->
    
    <main class="h-lvh flex justify-start">

    <div class="p-5 border">
        <div class="flex items-center justify-center">
            <label for="dropzone-file" class="flex flex-col items-center justify-center aspect-square  h-44 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="text-xs text-gray-500 dark:text-gray-400">masukan foto anda</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>
            <div class="ml-5">
                <p class="border-b-2 border-slate-300 mb-5">Miftahur Rahman</p>
                <label class="" for="katakata">Kata-Kata</label>
                <input type="text" id="katakata" class="rounded-lg" placeholder="max-50-karakter">
            </div>
        </div>
    </div>

           
    </main>
    <!-- endmain -->
    <!-- footer -->
     <?php 
        include '../component/footer.php'
     ?>
    <!-- endfooter -->
</body>
</html>