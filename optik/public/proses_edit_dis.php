<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['simpan'])) {
    // ambil data dari formulir
    $id = $_POST['kode_distributor'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telp = $_POST['telepon'];
    $pic = $_POST['pic'];
    // buat query update
    $sql = "UPDATE distributor SET kode_distributor='$id', 
nama_distributor='$nama', alamat='$alamat', email='$email', telepon='$telp', 
pic='$pic' WHERE kode_distributor='$id'";
    $query = mysqli_query($conn, $sql);
    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: admin.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
