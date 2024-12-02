<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>

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
                    <h1 class="h1">About us</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Muhammadiyah sebagai pilar bangsa yang mempunyai komitmen untuk mewujudkan masyarakat yang adil dan makmur berdasarkan Pancasila dan UUD 1945 yang diridhai Allah SWT, sejak awal telah menjadikan pendidikan sebagai ujung tombak pembangunan bangsa.</p>
                <p>Kiprah Muhammadiyah dalam dunia pendidikan secara nasional telah dibuktikan dengan berdirinya lembaga-lembaga pendidikan mulai dari pendidikan pra-sekolah hingga perguruan tinggi.</p>
                <p>Dengan komitmen dan kesadaran yang mendalam ini, maka pada tanggal 23 Juli 1993, Persyarikatan Muhammadiyah Wilayah Riau mendirikan Akademi Teknologi Otomotif (ATOM) yang selanjutnya pada tanggal 17 Juli 1994 didirikan pula Akademi Perawatan (AKPER) Muhammadiyah dan pada tanggal 5 November 1998 berdiri Akademi Keuangan dan perbankan Muhammadiyah (AKPM) yang berkedudukan di jalan KH. Ahmad Dahlan No. 88 Sukajadi, Pekanbaru.</p>
                <p>Dari ketiga akademi tersebut, peningkatannya terus diupayakan oleh Pimpinan Wilayah Muhammadiyah Riau agar dapt menjadi sebuah universitas dengan harapan dapat meningkatkan amal usaha pendidikannya sebagai salah satu pilar dakwah amar ma’ruf nahi mungkar melalui penyelenggaraan pendidikan, khususnya di Provinsi Riau.</p>
            </div>
        </div>
    </div>

    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
        <div class="container text-center">Copyright &copy <?= Date('Y') ?> TIF UMRI</div>
    </footer>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>

e. Buat View untuk contact us dengan nama contact.php di view
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
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
                    <h1 class="h1">Hubungi Kami</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <form action="" class="form">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Pesan</label>
                        <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Kirim" class="btn btn-primary w-100">
                    </div>

                </form>

            </div>
        </div>
    </div>
    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
        <div class="container text-center">Copyright &copy <?= Date('Y') ?>TIF UMRI</div>
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
            <p>Muhammadiyah sebagai pilar bangsa yang mempunyai komitmen untuk mewujudkan masyarakat yang adil dan makmur berdasarkan Pancasila dan UUD 1945 yang diridhai Allah SWT, sejak awal telah menjadikan pendidikan sebagai ujung tombak pembangunan bangsa.</p>
            <p>Kiprah Muhammadiyah dalam dunia pendidikan secara nasional telah dibuktikan dengan berdirinya lembaga-lembaga pendidikan mulai dari pendidikan pra-sekolah hingga perguruan tinggi.</p>
            <p>Dengan komitmen dan kesadaran yang mendalam ini, maka pada tanggal 23 Juli 1993, Persyarikatan Muhammadiyah Wilayah Riau mendirikan Akademi Teknologi Otomotif (ATOM) yang selanjutnya pada tanggal 17 Juli 1994 didirikan pula Akademi Perawatan (AKPER) Muhammadiyah dan pada tanggal 5 November 1998 berdiri Akademi Keuangan dan perbankan Muhammadiyah (AKPM) yang berkedudukan di jalan KH. Ahmad Dahlan No. 88 Sukajadi, Pekanbaru.</p>
            <p>Dari ketiga akademi tersebut, peningkatannya terus diupayakan oleh Pimpinan Wilayah Muhammadiyah Riau agar dapt menjadi sebuah universitas dengan harapan dapat meningkatkan amal usaha pendidikannya sebagai salah satu pilar dakwah amar ma’ruf nahi mungkar melalui penyelenggaraan pendidikan, khususnya di Provinsi Riau.</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>