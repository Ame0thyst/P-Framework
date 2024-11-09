<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protal Berita Codeigniter</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
</head>

<body>

    <?= $this->include('layout/navbar') ?>
    <?= $this->include('layout/header') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('layout/footer') ?>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>

</html>