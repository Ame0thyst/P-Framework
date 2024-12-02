<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan Yang Sering Ditanya</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('faqs') ?>">Faqs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1">Pertanyaan Yang Sering Ditanya</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2">Berapa Biaya Kuliah Di UMRI</h2>
                <p>Silahkan Hubungi Team MArketing UMRI Untuk Detail Biaya KUliah</p>
                <h2 class="h2">Apasaja Jalur Masuk Di UMRI</h2>
                <p>Silahkan Download Brosur UMRI Untuk Info Selengkapnya</p>
                <h2 class="h2">Apakah Ada Beasiswa DI UMRI</h2>
                <p>Ada BIDIK MISI, KIP dan Lain-Lain</p>
                <h2 class="h2">Ada Berapa Program Studi Di UMRI</h2>
                <p>Banyakkk</p>
            </div>
        </div>
    </div>

    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
        <div class="container text-center">Copyright &copy <?= Date('Y') ?> TIF UMRI</div>
    </footer>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html> -->

<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="h2">Berapa Biaya Kuliah Di UMRI</h2>
            <p>Silahkan Hubungi Team MArketing UMRI Untuk Detail Biaya KUliah</p>
            <h2 class="h2">Apasaja Jalur Masuk Di UMRI</h2>
            <p>Silahkan Download Brosur UMRI Untuk Info Selengkapnya</p>
            <h2 class="h2">Apakah Ada Beasiswa DI UMRI</h2>
            <p>Ada BIDIK MISI, KIP dan Lain-Lain</p>
            <h2 class="h2">Ada Berapa Program Studi Di UMRI</h2>
            <p>Banyakkk</p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>