<?php
include("menu.html");
include("config.php"); ?>
<h3 align="center">Daftar Kacamata</h3>
<!-- Menu Cari -->
<form action="index.php" method="get">
    <p align="center">
        <label>Cari Brand Lensa :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </p>
</form>
<?php
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    echo "<p align=center><b><i>Hasil pencarian : " . $cari . "</i></b></p>";
}
?>
<table border="1" align="center" width="70%">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Jenis Lensa</th>
        <th>Brand Lensa</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Distributor</th>
    </tr>
    <?php
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        $data = mysqli_query($conn, "SELECT * FROM lensa join distributor on
lensa.distributor=distributor.kode_distributor where brand_lensa like
'%" . $cari . "%'");
    } else {
        $data = mysqli_query($conn, "SELECT * FROM lensa join distributor on
lensa.distributor=distributor.kode_distributor");
    }
    $no = 1;
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['kode_lensa']; ?></td>
            <td><?php echo $d['jenis_lensa']; ?></td>
            <td><?php echo $d['brand_lensa']; ?></td>
            <td><?php echo $d['harga']; ?></td>
            <td><?php echo $d['stok']; ?></td>
            <td><?php echo $d['nama_distributor']; ?></td>
        </tr>
    <?php } ?>
</table>
<p>Total: <?php echo mysqli_num_rows($data) ?></p>
<?php include("footer.html"); ?>