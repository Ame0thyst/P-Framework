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
    // buat query update
    $sql = "UPDATE lensa SET kode_lensa='$id', jenis_lensa='$jenis', 
brand_lensa='$nama', harga='$harga', stok='$stok', distributor='$dis' WHERE
kode_lensa='$id'";
    $query = mysqli_query($conn, $sql);
    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman admin
        header('Location: admin.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
