<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPlsite</title>
    <!-- style -->
    <link rel="stylesheet" href="./src/output.css">

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
    <?php include './component/header-web.php' ?>
<!-- endnav -->

<!-- main -->
    <!-- background -->
    <div class="relative w-full h-full text-white flex flex-col justify-center">
        <video id="video-background" class="-z-10 object-cover w-full h-full top-0 left-0 " autoplay muted loop >
            <source src="../Background.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-extrabold text-center">Coming Soon</h1>
        <div class="col-span-2">
                <a href="../index.php" class=" gap-2 flex justify-center items-center group hover:bg-black rounded-full text-center bg-white text-black font-extrabold p-3">
                <span class="text-black group-hover:text-white">Home</span>
                    <svg class="w-6 h-6 text-black group-hover:text-white  transition-all" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                    </svg>
                    
                </a>
            </div>
        
    </div>
    <!-- endbackground -->
<!-- endmain -->
     <!-- footer -->
     <?php 
        include './component/footer.php'
     ?>
    <!-- endfooter -->
</body>
</html>