<?php 
// menghubungkan halaman ke functionn-
require './function/function.php';

// mengambil id yang ada pada url
$id = $_GET["id"];

// mengecek apakah data berhasil di hapus atau gagal di hapus
if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data Berhasil Di hapus!');
            document.location.href = 'DaftarSiswaAdmin.php';
        </script>
        ";
}else {
    echo "
        <script>
            alert('Data Gagal Di Hapus!');
            document.location.href = 'DaftarSiswaAdmin.php';
        </script>
        ";
};

?>