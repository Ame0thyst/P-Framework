<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="form-container">
    <h1>Edit Image</h1>
    <form action="/images/update/<?= $image['id'] ?>" method="post" enctype="multipart/form-data">
        <img src="/uploads/<?= $image['image'] ?>" alt="Current Image" class="preview-image">
        <input type="file" name="image">
        <textarea name="description" placeholder="Image Description"><?= $image['description'] ?></textarea>
        <button type="submit">Update</button>
    </form>
</div>



<?= $this->endSection() ?>