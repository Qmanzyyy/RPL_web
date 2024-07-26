<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPlsite</title>
    <!-- style -->
    <link rel="stylesheet" href="./output.css">
    <style>
        #video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
    </style>
    <!-- endstyle -->

    <!-- script -->
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <!-- endscript -->
     
</head>

<body class=" w-full h-full bg-[url('BG.jpg')] bg-cover">
    <!-- header -->
    <?php include './component/header-web.php'; ?>
    <!-- endheader -->

    <!-- main -->
    <main class="relative w-full h-full text-white">
        <div class="flex flex-col items-center justify-center h-full backdrop-blur-sm">
            <div class="h-screen flex flex-col items-center justify-center">
                <form action='index.php' method='POST'>
                    <h1 class="text-center mb-5 font-bold text-2xl">Masuk Sebagai Admin</h1>
            <div class="flex flex-col mb-4">
                <label for="pengirim" class=" mb-2 font-medium text-base md:text-lg lg:text-xl text-white">Username</label>
                <input type="text" id="pengirim" name="username" placeholder="masukkan username" class="w-full text-gray-900 dark:text-white placeholder:text-gray-600 placeholder:text-sm placeholder:dark:text-white bg-white dark:bg-gray-400 px-4 py-2 border-white dark:border-gray-800 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-200 dark:focus:ring-violet-200 focus:border-blue-300 dark:focus:border-violet-300">
            </div>
            <div class="flex flex-col mb-4">
                <label for="password" class="mb-2 font-medium text-base md:text-lg lg:text-xl text-white">Password</label>
                <input type="password" id="pengirim" name="pengirim" placeholder="masukkan pasword" class="w-full text-gray-900 dark:text-white placeholder:text-gray-600 placeholder:text-sm placeholder:dark:text-white bg-white dark:bg-gray-400 px-4 py-2 border-white dark:border-gray-800 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-200 dark:focus:ring-violet-200 focus:border-blue-300 dark:focus:border-violet-300">
            </div>
            <div class="flex justify-around items-center">
            <div class="">
                <button type="submit" name="kirim" class="px-6 py-2 bg-black text-white font-medium rounded-md shadow-md hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-violet-500">Kirim</button>
            </div>
            <div>
                <span class="">atau</span>
            </div>
            <div class="">
                <button type="submit" name="kirim" class="px-6 py-2 bg-black text-white font-medium rounded-md shadow-md hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-violet-500">masuk sebagai kroco</button>
            </div>
            </div>
            
            </form>
            </div>
        </div>
    </main>
    <!-- endmain -->

     <!-- footer -->
     <?php 
        include './component/footer.php'
     ?>
    <!-- endfooter -->
</body>
</html>