<?php
include("config.php");
if (isset($_GET['id'])) {
    // ambil id dari query string
    $id = $_GET['id'];
    // buat query hapus
    $sql = "DELETE FROM lensa WHERE kode_lensa='$id'";
    $query = mysqli_query($conn, $sql);
    // apakah query hapus berhasil?
    if ($query) {
        header('Location: admin.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>
16. Buat File tambah data untuk distributor tambah_data_dis.php
Code
<!DOCTYPE html>
<html>

<head>
    <title>Formulir Tambah Data Distributor</title>
</head>

<body>
    <?php
    include("config.php");
    ?>
    <header>
        <h3>Tambah Data Distributor</h3>
    </header>
    <form action="proses_tambah_dis.php" method="POST">
        <fieldset>
            <p>
                <label for="id">Kode Distributor : </label>
                <input type="text" name="id" placeholder="kode" />
            </p>
            <p>
                <label for="nama">Nama Distributor : </label>
                <input type="text" name="nama" placeholder="nama distributor" />
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="email">Email : </label>
                <textarea name="email"></textarea>
            </p>
            <p>
                <label for="telp">Telepon : </label>
                <textarea name="telp"></textarea>
            </p>
            <p>
                <label for="pic">PIC : </label>
                <textarea name="pic"></textarea>
            </p>
            <p>
                <input type="submit" value="SIMPAN" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>

</html>