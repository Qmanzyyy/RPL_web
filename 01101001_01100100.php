<?php 
// Menghubungkan halaman ke function
require './function/function.php';

// Memulai session
session_start();

// Mengambil ID dari session
$id = $_SESSION['id'] ?? null;

// Pastikan ID valid dan bukan null
if ($id) {
    // Query data sesuai dengan ID
    $result = query("SELECT * FROM XIrpl WHERE id = '$id'");
    
    // Pastikan data ada
    if ($result && !empty($result)) {
        $mhs = $result[0]; // Ambil data pertama dari hasil query (karena kita tahu ID seharusnya unik)
    } else {
        echo "<p>Data tidak ditemukan.</p>";
        exit;
    }
} else {
    echo "<p>ID tidak valid atau tidak ada dalam session.</p>";
    exit;
}

// Mengecek tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {

    // Mengecek apakah data berhasil dikirimkan atau tidak
    if (change($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Di Edit!');
            document.location.href = 'DaftarSiswa.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal Di Edit!');
            document.location.href = 'DaftarSiswa.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- style -->
    <link rel="stylesheet" href="./output.css">
    <!-- endstyle -->
    <!-- script -->
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <!-- endscript -->
</head>
<body class="bg-gray-800">
    <!-- header -->
    <?php include './component/header-web.php'; ?>
    <!-- endheader -->

    <!-- main -->
    <main>
        <form action="" method="post" enctype="multipart/form-data" class="mx-10 backdrop-blur-sm text-white h-screen flex items-center justify-center flex-col">
        <input type="hidden" name="id" value="<?= $mhs['id']?>">  
        <label class="block mb-2 text-sm font-medium text-white" for="file_input">Upload file</label>
        <input class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" name="gambar">
            <label for="nama">Nama</label>
            <input class="text-black p-3 rounded-md" id="nama" name="nama" value="<?= htmlspecialchars($mhs['nama'] ?? ''); ?>">
            
            <label for="kelas">Kelas</label>
            <input class="text-black p-3 rounded-md" id="kelas" name="kelas" value="<?= htmlspecialchars($mhs['kelas'] ?? ''); ?>">
            
            
            <button type="submit" name="submit" class="p-3 bg-black mt-3 rounded-md hover:bg-white hover:text-black">Kirim</button>
        </form>
    </main>
    <!-- endmain -->

    <!-- footer -->
    <?php include './component/footer.php'; ?>
    <!-- endfooter -->
</body>
</html>
