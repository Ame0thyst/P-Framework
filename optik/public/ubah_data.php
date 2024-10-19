<?php
include("config.php");
// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: index.php');
}
//ambil id dari query string
$id = $_GET['id'];
//buat query untuk ambil data dari database
$sql = "SELECT * FROM lensa join distributor on lensa.distributor =
distributor.kode_distributor where kode_lensa='$id'";
$query1 = mysqli_query($conn, $sql);
$s = mysqli_fetch_assoc($query1);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query1) < 1) {
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data Kacamata</title>
</head>

<body>
    <header>
        <h3>Ubah Data Kacamata</h3>
    </header>
    <form action="proses_edit.php" method="POST">
        <fieldset>
            <label for="id">Kode Lensa : </label>
            <input type="int" name="id" value="<?php echo $s['kode_lensa'] ?>" />
            <p>
                <label for="jenis">Jenis Lensa : </label>
                <input type="text" name="jenis" placeholder="jenis lensa"
                    value="<?php echo $s['jenis_lensa'] ?>" />
            </p>
            <p>
                <label for="nama">Brand Lensa : </label>
                <textarea name="nama"><?php echo $s['brand_lensa'] ?></textarea>
            </p>
            <p>
                <label for="harga">Harga : </label>
                <textarea name="harga"><?php echo $s['harga'] ?></textarea></label>
            </p>
            <p>
                <label for="stok">Stok : </label>
                <textarea name="stok"><?php echo $s['stok'] ?></textarea></label>
            </p>
            <p>
                <label for="distributor">Distributor : </label>
                <?php $dis = $s['nama_distributor']; ?>
                <select name="distributor" id="distributor">
                    <option value="">- Pilih -</option>
                    <?php
                    $query = "SELECT * from distributor";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                        while ($optionData = $result->fetch_assoc()) {
                            $dis = $optionData['nama_distributor'];
                            $kode_distributor = $optionData['kode_distributor'];
                    ?>
                            <option value="<?php echo $kode_distributor; ?>"><?php echo
                                                                                $dis; ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>

</html>