<!DOCTYPE html>
<html>

<head>
    <title>TOKO KACAMATA</title>
</head>

<body>
    <?php
    include("menu.html");
    include("config.php");
    ?>
    <header>
        <h3 align="center">DAFTAR KACAMATA</h3>
    </header>
    <table border="1" width="70%" align="center">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Jenis Lensa</th>
                <th>Brand Lensa</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Distributor</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM lensa JOIN distributor ON lensa.distributor =
distributor.kode_distributor";
            $query = mysqli_query($conn, $sql);
            while ($s_lensa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $s_lensa['kode_lensa'] . "</td>";
                echo "<td>" . $s_lensa['jenis_lensa'] . "</td>";
                echo "<td>" . $s_lensa['brand_lensa'] . "</td>";
                echo "<td>" . $s_lensa['harga'] . "</td>";
                echo "<td>" . $s_lensa['stok'] . "</td>";
                echo "<td>" . $s_lensa['nama_distributor'] . "</td>";
                echo "<td>";
                echo "<a href='ubah_data.php?id=" . $s_lensa['kode_lensa'] . "'>Edit</a> 
| ";
                echo "<a 
href='proses_hapus.php?id=" . $s_lensa['kode_lensa'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="tambah_data.php">[+] Tambah Baru</a>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <header>
        <h3 align="center">DAFTAR DISTRIBUTOR</h3>
    </header>
    <table border="1" width="70%" align="center">
        <thead>
            <tr>
                <th>Kode Distributor</th>
                <th>Nama Distributor</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>PIC</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql_distributor = "SELECT * FROM distributor";
            $query_distributor = mysqli_query($conn, $sql_distributor);
            while ($s_distributor = mysqli_fetch_array($query_distributor)) {
                echo "<tr>";
                echo "<td>" . $s_distributor['kode_distributor'] . "</td>";
                echo "<td>" . $s_distributor['nama_distributor'] . "</td>";
                echo "<td>" . $s_distributor['alamat'] . "</td>";
                echo "<td>" . $s_distributor['email'] . "</td>";
                echo "<td>" . $s_distributor['telepon'] . "</td>";
                echo "<td>" . $s_distributor['pic'] . "</td>";
                echo "<td>";
                echo "<a 
href='ubah_data_dis.php?id=" . $s_distributor['kode_distributor'] . "'>Edit</a> | ";
                echo "<a 
href='proses_hapus_dis.php?id=" . $s_distributor['kode_distributor'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="tambah_data_dis.php">[+] Tambah Baru</a>
    <p>Total: <?php echo mysqli_num_rows($query_distributor) ?></p>
</body>
<?php
include("footer.html");
?>

</html>