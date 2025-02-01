<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0"> Edit Data Jabatan </h3>
        <a href="/jabatan" class="btn btn-dark"> Kembali </a>
    </div>
    <div class="pt-3">
        <form action="/jabatan/update/ <?= $jabatan->id; ?> " method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                <input type="text" class="form-control" name="nama_jabatan" value="<?= $jabatan->nama_jabatan; ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi_jabatan" class="form-label">Deskripsi Jabatan</label>
                <input type="text" class="form-control" name="deskripsi_jabatan" value="<?= $jabatan->deskripsi_jabatan; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
    </div>

    </form>
</div>

<?= $this->endSection(); ?>