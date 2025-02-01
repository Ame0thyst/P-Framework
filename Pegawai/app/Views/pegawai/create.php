<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0"> Edit Data pegawai </h3>
        <a href="/pegawai" class="btn btn-dark"> Kembali </a>
    </div>
    <div class="pt-3">
        <form action="/pegawai/update/ <?= $pegawai->id; ?> " method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="nama_pegawai" class="form-label">Nama pegawai</label>
                <input type="text" class="form-control" name="nama_pegawai" value="<?= $pegawai->nama_pegawai; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?= $pegawai->alamat; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">No. Telepon</label>
                <input type="text" class="form-control" name="telepon" value="<?= $pegawai->telepon; ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jabatan</label>
                <select name="jabatan_id" id="" class="form-control">
                    <?php foreach ($jabatan as $j) { ?>
                        <option value="<?= $j->id; ?>" <?= ($j->id == $pegawai->jabatan_id) ? 'selected' : ''; ?>><?= $j->nama_jabatan; ?></option>
                    <?php } ?>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Update</button>
    </div>

    </form>
</div>

<?= $this->endSection(); ?>