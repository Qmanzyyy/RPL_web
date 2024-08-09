<?php 
session_start();
require './function/function.php';

if (isset($_POST["kirim"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query untuk memeriksa username
    $result = mysqli_query($conn, "SELECT * FROM XIrpl WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row["password"]) {
            $_SESSION['id'] = $row["id"]; // Simpan ID pengguna dalam session
            header("Location: 01101001_01100100.php"); // Arahkan ke halaman edit
            exit;
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RPlsite</title>
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
<body class="">
    <!-- header -->
    <?php include './component/header-web.php'; ?>
    <!-- endheader -->
    <!-- main -->
    <main class="h-screen text-white bg-[url('BG.jpg')] bg-cover">
        <div class="flex flex-col items-center justify-center h-full backdrop-blur-sm">
            <div class="h-screen flex flex-col items-center justify-center">
                <h1 class="text-center mb-5 font-bold text-2xl">Masuk Untuk Mengganti gambar</h1>
                <form action="" method="POST">
                    <div class="flex flex-col mb-4">
                        <label for="username" class="mb-2 font-medium text-base md:text-lg lg:text-xl text-white">Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan Nama Lengkap KAPITAL" class="w-full text-gray-900 dark:text-white placeholder:text-gray-600 placeholder:text-sm placeholder:dark:text-white bg-white dark:bg-gray-400 px-4 py-2 border-white dark:border-gray-800 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-200 dark:focus:ring-violet-200 focus:border-blue-300 dark:focus:border-violet-300" required>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="password" class="mb-2 font-medium text-base md:text-lg lg:text-xl text-white">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan NISN" class="w-full text-gray-900 dark:text-white placeholder:text-gray-600 placeholder:text-sm placeholder:dark:text-white bg-white dark:bg-gray-400 px-4 py-2 border-white dark:border-gray-800 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-200 dark:focus:ring-violet-200 focus:border-blue-300 dark:focus:border-violet-300" required>
                    </div>
                    <div class="">
                        <button type="submit" name="kirim" class="px-6 py-2 bg-black text-white font-medium rounded-md shadow-md hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-violet-500">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- endmain -->
    <!-- footer -->
    <?php include './component/footer.php'; ?>
    <!-- endfooter -->
</body>
</html>
