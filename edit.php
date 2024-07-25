<!-- php -->
<?php 
// menghubungkan halaman ke functionn-
require './function/function.php';

// mengambil data dari url
$id = $_GET['id'];

// query data mahasiswa sesuai dengan id
$mhs = query("SELECT * FROM XIrpl WHERE id = '$id'")[0];


// mengecek tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])) {
    // mengecek apakah data berhasil dikirimkan atau tidak
    if ( ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Di Edit!');
            document.location.href = 'DaftarSiswaAdmin.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('Data Berhasil Di Edit!');
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
    <title>Tambah Data Siswa</title>

    <!-- stylecss tailwind -->
    <link rel="stylesheet" href="./output.css">

</head>
<body>
    <!-- wrapper utama -->
    <div class="flex flex-col items-center h-svh justify-center">

            <h1 class="text-4xl font-serif font-bold text-center mb-4">Edit Data Mahasiswa</h1>
            <a class="text-blue-500" href="DaftarSiswaAdmin.php">Kembali ke Daftar</a>
            <!-- form -->
            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?= $mhs['id']?>">
                <ul class="flex flex-col">
        
                    <li class=" mb-3>
                        <label for="nama">Nama</label>
                        <input class="w-full border border-black rounded-lg justify-stretch" type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>">
                    </li>
                    
                    <li class=" mb-3>
                        <label for="kelas">kelas</label>
                        <input class="w-full border border-black rounded-lg justify-stretch" type="text" name="kelas" id="kelas" value="<?= $mhs["kelas"] ?>">
                    </li>
                    <li class=" mb-3>
                        <label for="kelas">gambar</label>
                        <input class="w-full border border-black rounded-lg justify-stretch" type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"] ?>">
                    </li>
        
        
                    <li class=" mb-3">
                        <button type="submit" name="submit" class="border my-3 border-red-500 bg-slate-500 p-3 rounded-lg font-bold hover:scale-110 hover:bg-slate-700 transition">
                            <span>Kirim!</span>
                        </button>
                    </li>
                </ul>       
            </form>
            <!-- endform -->
    </div>
</body>
</html>
<!-- endhtml -->