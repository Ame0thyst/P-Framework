<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h1>Add New Image</h1>
<form action="/images/store" method="post" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <textarea name="description" placeholder="Image Description"></textarea>
    <button type="submit">Upload</button>
</form>


<?= $this->endSection() ?>