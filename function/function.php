<?php 

// menghubungkan ke database
$conn = mysqli_connect("localhost","root","","DaftarSiswa");



// function untuk mengambil data mahasiswa dari database
function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    };
    // mengembalikan data ke dalam $rows
    return $rows;
};



// function untuk menambahkan data ke dalam database
function tambah($tambah){
    // globalscope $conn
    global $conn;

    // ambil data dari setiap name
    $nama = htmlspecialchars($tambah["nama"]);
    $kelas = htmlspecialchars($tambah["kelas"]);
    $gambar = htmlspecialchars($tambah["gambar"]);

    // menambah data ke database
    $query = "INSERT INTO XIrpl
                VALUES
              (null,'$nama','$kelas','$gambar')
              ";

    // menambah
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
};

// function untuk mengapus data dari dalam database via id
function hapus($id){
     // globalscope $conn
    global $conn;

    // menghapus data 
    mysqli_query($conn,"DELETE FROM XIrpl WHERE id = $id");
    return mysqli_affected_rows($conn);
}; 


// function untuk meng-edit data dari dalam data base
function ubah($edit){
    // globalscope $conn
    global $conn;

    // ambil data dari setiap data
    $id = $edit["id"];
    $nama = htmlspecialchars($edit["nama"]);
    $kelas = htmlspecialchars($edit["kelas"]);
    $gambar = htmlspecialchars($edit["gambar"]);

    // menambah data ke database
    $query = "UPDATE XIrpl SET
              nama = '$nama',
              kelas = '$kelas',
              gambar = '$gambar'
              WHERE id = '$id'
              ";

    // menambah
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
};

// function untuk mencari data
function cari($keyword) {
  $query  = "SELECT * FROM XIrpl 
                WHERE
            nama LIKE '%$keyword%' OR
            kelas LIKE '%$keyword%'
            ORDER BY nama ASC";
        return query($query);
};

// function untuk menambahkan data ke dalam database
function bahtam($bahtam){
    // globalscope $conn
    global $conn;

    // ambil data dari setiap name
    $pengirim = htmlspecialchars($bahtam["pengirim"]);
    $pesan = htmlspecialchars($bahtam["pesan"]);

    // menambah data ke database
    $query = "INSERT INTO keluhan
                VALUES
              (null,'$pengirim','$pesan')
              ";

    // menambah
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
};


?>