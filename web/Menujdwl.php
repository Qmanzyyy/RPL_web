<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPlsite</title>
    <!-- style -->
    <link rel="stylesheet" href="../src/output.css">

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

<!-- nav -->
    <?php include '../component/header-web.php' ?>
<!-- endnav -->

<!-- main -->
    <!-- background -->
    <div class="relative w-full h-full text-white flex flex-col justify-center">
        <video id="video-background" class="-z-10 object-cover w-full h-full top-0 left-0 " autoplay muted loop >
            <source src="../Background.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- menuwrapper -->
         <div class="md:mx-40 mx-10">

        <!-- jadwal pelajaran -->
        <div class="grid mb-10 bg-white rounded-md grid-cols-3 p-5 gap-5">
            <h1 class="col-span-3 text-center bg-white text-black font-extrabold p-3 rounded-full">Jadwal Pelajaran</h1>
            <div class="">
                <a href="comingsoon.php" class="flex justify-center items-center bg-black p-3 group hover:bg-slate-900 rounded-full">
                    <span class="text-white group-hover:text-stone-400">X-RPL</span>
                    <svg class="w-6 h-6 text-white group-hover:text-stone-400 group-hover:translate-x-1 transition-all aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                    </svg>            
                </a>
             </div>
            <div class="col-span-1">
                <a href="jadwalpelajaranxi.php" class="flex justify-center items-center bg-black p-3 group hover:bg-slate-900 rounded-full">
                    <span class="text-white group-hover:text-stone-400">XI-RPL</span>
                    <svg class="w-6 h-6 text-white group-hover:text-stone-400 group-hover:translate-x-1 transition-all aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                    </svg>            
                </a>
            </div>
            <div class="">
                <a href="comingsoon.php" class="flex justify-center items-center bg-black p-3 group hover:bg-slate-900 rounded-full">
                    <span class="text-white group-hover:text-stone-400">XII-RPL</span>
                    <svg class="w-6 h-6 text-white group-hover:text-stone-400 group-hover:translate-x-1 transition-all aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                    </svg>            
                </a>
            </div>
        </div>
        <!-- endjadwal pelajaran -->

    </div>
    <!-- endmenu wrapper -->
    </div>
    <!-- endbackground -->
<!-- endmain -->
     <!-- footer -->
     <?php 
        include '../component/footer.php'
     ?>
    <!-- endfooter -->
</body>
</html>