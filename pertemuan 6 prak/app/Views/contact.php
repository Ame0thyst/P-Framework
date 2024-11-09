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

    <h1>ini adalah page contact HUHAHAHAHAH</h1>
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html> -->

<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <h3 class="h3">Hello !</h3>
            <p>Silakan hubungi kami melalui form berikut</p>

            <form action="" class="form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Message</label>
                    <textarea name="message" class="form-control" id="" cols="30" rows="10" required></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Kirim" class="btn btn-primary w-100">
                </div>

            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>