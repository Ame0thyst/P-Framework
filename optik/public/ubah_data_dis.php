<?php
include("config.php");
// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: index.php');
}
//ambil id dari query string
$id = $_GET['id'];
//buat query untuk ambil data dari database
$sql1 = "SELECT * FROM distributor where kode_distributor='$id'";
$query1 = mysqli_query($conn, $sql1);
$s = mysqli_fetch_assoc($query1);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query1) < 1) {
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data Distributor</title>
</head>

<body>
    <header>
        <h3>Ubah Data Distributor</h3>
    </header>
    <form action="proses_edit_dis.php" method="POST">
        <fieldset>
            <label for="id">Kode Distributor : </label>
            <input type="int" name="kode_distributor" value="<?php echo
                                                                $s['kode_distributor'] ?>" />
            <p>
                <label for="nama">Nama Distributor : </label>
                <input type="text" name="nama" placeholder="nama distributor"
                    value="<?php echo $s['nama_distributor'] ?>" />
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat"><?php echo $s['alamat'] ?></textarea>
            </p>
            <p>
                <label for="email">Email : </label>
                <textarea name="email"><?php echo $s['email'] ?></textarea></label>
            </p>
            <p>
                <label for="telp">Telepon : </label>
                <textarea name="telepon"><?php echo $s['telepon']
                                            ?></textarea></label>
            </p>
            <p>
                <label for="pic">PIC : </label>
                <textarea name="pic"><?php echo $s['pic'] ?></textarea></label>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>

</html>