<?php 
// menghubungkan halaman ke functionn-
require './function/function.php';

// mengambil data dari function query dan menyimpan kedalam $mahasiswa
$mahasiswa = query("SELECT * FROM XIrpl");

// tombol pencarian di tekan
if( isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaftarSiswa</title>
    <!-- style -->
    <link rel="stylesheet" href="./output.css">
    <!-- endstyle -->

    <!-- script -->
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <!-- endscript -->
</head>
<body class="">
    <!-- header -->
     <?php 
        include '../component/header-web.php';
     ?>
    <!-- endheader -->

    <!-- main -->
    <main class="mx-10">
    
    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-bold font-serif text-center mt-10">Daftar Siswa</h1>

    <!-- wrapper -->
    <!-- search -->
    <form action="" method="post" class="flex items-center justify-center">
        <input type="text" name="keyword" class="border p-1 rounded-md" autofocus autocomplete="off" placeholder="Masukkan Kata Kunci">
        <button type="submit" name="cari" class="px-6 py-2 bg-black text-white font-medium rounded-md shadow-md hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-violet-500">Cari!</button>
    </form>
    <!-- endsearch -->
    <div class="flex flex-col items-center">

        <!-- link ke tambah.php -->
       <a class="text-blue-500 text-left mt-7" href="tambah.php">Tambahkan Daftar Siswa</a>
       <!-- end link tambah.php -->

       <!-- table -->
       <?php $i = 1?>
       <?php foreach ($mahasiswa as $mhs):?>
       <div class="w-full justify-start mb-5 mt-5">
    <div class="flex items-center">
    <p class="text-2xl mx-2"><?= $i ?></p>
        <label for="dropzone-file" class="flex flex-col items-center justify-center aspect-square  h-44 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                </svg>
                
                <p class="text-xs text-gray-500 dark:text-gray-400"><?= $mhs["gambar"] ?></p>
            </div>
            <input id="dropzone-file" type="file" class="hidden" />
        </label>
        <div class="ml-5">
            <p class="border-b-2 border-slate-300 mb-5"><?= $mhs["nama"] ?></p>
            <p class="" for="katakata"><?= $mhs["kelas"] ?></p>
        </div>

    </div>
            <a class="p-1 text-blue-500" href="edit.php?id=<?=$mhs['id']; ?>">edit</a> |
            <a class="p-1 text-blue-500" href="hapus.php?id=<?=$mhs["id"];?>" onclick="return confirm('Yakin Kah Dek?')">hapus</a>
</div>
<?php $i++ ?>
<?php endforeach;?>
       <!-- endtable -->
   </div>
   <!-- endwrapper -->
   </main>
    <!-- endmain -->
    <!-- footer -->
     <?php 
        include './component/footer.php'
     ?>
    <!-- endfooter -->
</body>
</html>
