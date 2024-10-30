<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- <h1>Image Gallery</h1>
<a href="/images/create">Add Image</a> -->

<nav style="display: flex; justify-content: space-between; align-items: center; padding: 10px;  ">
    <h1 style="margin: 0;">Image Gallery</h1>
    <p style="margin: 0; font-weight: bold; ;"> Gilang Wiko Wicaksono | 210401227</p>
    <a href="/images/create">
        <button style="padding: 5px 15px; border: none; background-color: #007bff; border-radius: 5px; cursor: pointer;">
            ➕ Foto
        </button>
    </a>
</nav>
<div class="gallery">
    <?php foreach ($images as $image) : ?>
        <div class="gallery-item" style="background-image: url('/uploads/<?= $image['image'] ?>');">
            <div class="overlay">
                <p><?= $image['description'] ?></p>
                <div class="action-buttons">
                    <a href="/images/edit/<?= $image['id'] ?>">Edit</a>
                    <a href="/images/delete/<?= $image['id'] ?>">Delete</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



<?= $this->endSection() ?>