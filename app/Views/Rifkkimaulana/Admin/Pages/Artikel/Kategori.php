<?= $this->extend('Rifkkimaulana/Admin/Layout/Template'); ?>
<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title; ?></h3>
                        <a class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#addModal">
                            <i class="fas fa-plus"></i> Tambah Kategori
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tablerifkkimaulana" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="padding: 10px;">No</th>
                                        <th class="text-center" style="padding: 10px;">Nama</th>
                                        <th class="text-center" style="padding: 10px;">Dibuat</th>
                                        <th class="text-center" style="padding: 10px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kategoriData as $kategori) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $kategori['nama'] ?></td>
                                            <td class="text-center"><?= $kategori['created_at'] ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal<?= $kategori['id'] ?>">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?= $kategori['id'] ?>">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Modal Konfirmasi Delete -->
                                        <div class="modal fade" id="deleteModal<?= $kategori['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus kategori: <?= $kategori['nama'] ?>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a href="<?= base_url('artikel/kategori/delete/' . $kategori['id']) ?>" class="btn btn-danger">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="editModal<?= $kategori['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Ubah Kategori</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post" action="kategori/ubah">
                                                        <div class="modal-body">
                                                            <input type="hidden" class="form-control" name="id" value="<?= $kategori['id'] ?>">
                                                            <div class="form-group">
                                                                <label for="user_nama">Nama</label>
                                                                <input type="text" class="form-control" name="nama" value="<?= $kategori['nama'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal Tambah -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="kategori/tambah" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="user_nama">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>