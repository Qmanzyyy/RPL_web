<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPlsite</title>
    <!-- style -->
    <link rel="stylesheet" href="../output.css">

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
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
    <!-- endscript -->
</head>

<body class="h-screen">

        <?php include '../component/header-web.php' ?>

    <div class="relative w-full h-full text-white">
        <video id="video-background" class="-z-10 object-cover w-full h-full top-0 left-0 " autoplay muted loop >
            <source src="../Background.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <div class="flex flex-col items-center justify-center h-full backdrop-blur-sm">
        <div class="h-lvh grid grid-cols-2 gap-x-5 mx-5 gap-y-0">
    <div class="col-span-2 flex items-center justify-center">
        <h1 class="text-5xl font-extrabold text-white">Menu</h1>
    </div>
    <div class="">
        <a href="DaftarSiswa.php" class="flex justify-center items-center bg-black p-3 group hover:bg-white rounded-full">
            <span class="text-white group-hover:text-black">DaftarSiswa</span>
            <svg class="w-6 h-6 text-white group-hover:text-black group-hover:translate-x-1 transition-all aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
            </svg>            
        </a>
    </div>
    <div class="">
        <a href="jadwalpelajaran.php" class="flex justify-center items-center bg-black p-3 group hover:bg-white rounded-full">
            <span class="text-white group-hover:text-black">Jadwal Pelajaran</span>
            <svg class="w-6 h-6 text-white group-hover:text-black group-hover:translate-x-1 transition-all aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
            </svg>            
        </a>
    </div>
    <div class="">
        <a href="Keluhan.php" class="flex justify-center items-center bg-black p-3 group hover:bg-white rounded-full">
            <span class="text-white group-hover:text-black">Keluhan</span>
            <svg class="w-6 h-6 text-white group-hover:text-black group-hover:translate-x-1 transition-all aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
            </svg>            
        </a>
    </div>
    <div class="">
        <a href="Mengeluh.php" class="flex justify-center items-center bg-black p-3 group hover:bg-white rounded-full">
            <span class="text-white group-hover:text-black">Mengeluh</span>
            <svg class="w-6 h-6 text-white group-hover:text-black group-hover:translate-x-1 transition-all aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
            </svg>            
        </a>
    </div>
</div>
        </div>
    </div>
     <!-- footer -->
     <?php 
        include '../component/footer.php'
     ?>
    <!-- endfooter -->
</body>
</html>