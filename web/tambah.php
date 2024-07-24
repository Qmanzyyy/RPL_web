<!-- php -->
<?php 
// menghubungkan halaman ke functionn-
require '../function/function.php';

// mengecek tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    // mengecek apakah data berhasil dikirimkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Di Tambahkan!');
            document.location.href = 'DaftarSiswaAdmin.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('Data Berhasil Di Tambahkan!');
            document.location.href = 'Gagal Di Tambahkan!';
        </script>
        ";
    }
};
?>
<!-- endphp -->
 <!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>

    <!-- stylecss tailwind -->
    <link rel="stylesheet" href="../output.css">

</head>
<body>
    <!-- wrapper utama -->
    <div class="flex flex-col items-center h-svh justify-center">

            <h1 class="text-4xl font-serif font-bold text-center mb-4">Tambah Data Siswa</h1>
            <a class="text-blue-500" href="DaftarSiswaAdmin.php">Kembali ke Daftar</a>
            <!-- form -->
            <form action="" method="post">
                <ul class="flex flex-col">
        
                    <li class=" mb-3>
                        <label for="nama">Nama</label>
                        <input class="w-full border border-black rounded-lg justify-stretch" type="text" name="nama" id="nama">
                    </li>
                    
                    <li class=" mb-3>
                        <label for="nrp">kelas</label>
                        <input class="w-full border border-black rounded-lg justify-stretch" type="text" name="kelas" id="nrp">
                    </li>
        
                    <li class=" mb-3>
                        <input class="w-full border-black rounded-lg justify-stretch" type="hidden" name="gambar" id="email">
                    </li>
                    
        
                    <li class=" mb-3">
                        <button type="submit" name="submit" class="border my-3 border-red-500 bg-slate-500 text-white p-3 rounded-lg font-bold hover:scale-110 hover:bg-slate-700 transition">
                            Kirim!
                        </button>
                    </li>
                </ul>       
            </form>
            <!-- endform -->
    </div>
</body>
</html>
<!-- endhtml -->