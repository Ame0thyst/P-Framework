<!DOCTYPE html>
<html>

<head>
    <title>Formulir Tambah Data Kacamata</title>
</head>

<body>
    <?php
    include("config.php");
    ?>
    <header>
        <h3>Tambah Data Kacamata</h3>
    </header>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="id">Kode Lensa : </label>
                <input type="text" name="id" placeholder="kode" />
            </p>
            <p>
                <label for="jenis">Jenis Lensa : </label>
                <input type="text" name="jenis" placeholder="jenis lensa" />
            </p>
            <p>
                <label for="nama">Brand Lensa : </label>
                <textarea name="nama"></textarea>
            </p>
            <p>
                <label for="harga">Harga : </label>
                <textarea name="harga"></textarea>
            </p>
            <p>
                <label for="stok">Stok : </label>
                <textarea name="stok"></textarea>
            </p>
            <p>
                <label for="distributor">Distributor : </label>
                <select name="distributor">
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
                <input type="submit" value="SIMPAN" name="simpan" />
                << /p>
        </fieldset>
    </form>
</body>

</html>