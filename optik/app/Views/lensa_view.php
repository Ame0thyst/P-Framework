<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kacamata</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
            border-right: 1px solid #bbb;
        }

        li:last-child {
            border-right: none;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #635c5c;
        }

        .active {
            background-color: #0813ac;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <img src="gambar/kaca.jpg" width="150">
    <ul>
        <li><a class="active" href="/">HOME</a></li>
        <li><a href="#">ADMIN</a></li>
        <li><a href="#">PEMESANAN</a></li>
    </ul>

    <h3 align="center">Daftar Kacamata</h3>

    <!-- Menu Cari -->
    <form action="/" method="get">
        <p align="center">
            <label>Cari Brand Lensa :</label>
            <input type="text" name="cari" value="<?= $keyword ?>">
            <input type="submit" value="Cari">
        </p>
    </form>

    <?php if ($keyword): ?>
        <p align="center"><b><i>Hasil pencarian: <?= $keyword ?></i></b></p>
    <?php endif; ?>

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
        <?php $no = 1;
        foreach ($lensa as $d): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $d['kode_lensa'] ?></td>
                <td><?= $d['jenis_lensa'] ?></td>
                <td><?= $d['brand_lensa'] ?></td>
                <td><?= $d['harga'] ?></td>
                <td><?= $d['stok'] ?></td>
                <td><?= $d['nama_distributor'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p>Total: <?= count($lensa) ?></p>

</body>

</html>