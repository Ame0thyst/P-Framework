<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['simpan'])) {
    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $pic = $_POST['pic'];
    // buat query
    $sql = "INSERT INTO distributor (kode_distributor, nama_distributor, alamat, 
email, telepon, pic) VALUE ('$id', '$nama', '$alamat', '$email', '$telp', 
'$pic')";
    $query = mysqli_query($conn, $sql);
    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: admin.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: admin.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
