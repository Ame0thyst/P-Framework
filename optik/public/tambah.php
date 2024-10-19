<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['simpan'])) {
    // ambil data dari formulir
    $id = $_POST['id'];
    $jenis = $_POST['jenis'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $dis = $_POST['distributor'];
    // buat query
    $sql = "INSERT INTO lensa (kode_lensa, jenis_lensa, brand_lensa, harga, stok, 
distributor) VALUE ('$id', '$jenis', '$nama', '$harga', '$stok', '$dis')";
    $query = mysqli_query($conn, $sql);
    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman admin.php dengan status=sukses
        header('Location: admin.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman admin.php dengan status=gagal
        header('Location: admin.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
