<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0"> Data pegawai </h3>
        <a href="/pegawai/create" class="btn btn-dark"> Tambah Data </a>
    </div>
    <div class="pt-3"> </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No. </th>
                <th> Nama pegawai </th>
                <th> Alamat</th>
                <th> No. Telepon</th>
                <th> pegawai</th>
                <th> Aksi </th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($pegawai as $key => $row) { ?>
                <tr>
                    <td> <?= $key + 1; ?></td>
                    <td> <?= $row->nama_pegawai; ?></td>
                    <td> <?= $row->alamat; ?></td>
                    <td> <?= $row->telepon; ?></td>
                    <td> <?= $row->nama_jabatan; ?></td>
                    <td>
                        <form action="/pegawai/delete/<?= $row->id; ?>" method="post">
                            <a href="/pegawai/edit/<?= $row->id; ?>" class="btn btn-sm btn-warning"> Edit </a>
                            <?= csrf_field(); ?>
                            <button type="submit" class="btn btn-sm btn-danger"> Hapus </button>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>