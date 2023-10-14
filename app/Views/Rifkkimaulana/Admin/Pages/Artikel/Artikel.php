<?= $this->extend('Rifkkimaulana/Admin/Layout/Template'); ?>
<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title; ?></h3>
                        <a class="btn btn-primary btn-sm float-right" href="<?= base_url('artikel/new') ?>">
                            <i class="fas fa-plus"></i> Tambah Artikel
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tablerifkkimaulana" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="padding: 10px;">No</th>
                                        <th class="text-center" style="padding: 10px;">Judul</th>
                                        <th class="text-center" style="padding: 10px;">Kategori</th>
                                        <th class="text-center" style="padding: 10px;">Tag</th>
                                        <th class="text-center" style="padding: 10px;">Dibuat</th>
                                        <th class="text-center" style="padding: 10px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($artikelData as $artikel) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $artikel['judul'] ?></td>
                                            <td>
                                                <?php
                                                $kategoriIds = explode(',', $artikel['kategori_id']);
                                                $kategoriNames = [];

                                                foreach ($kategoriIds as $kategoriId) {
                                                    $kategoriId = trim($kategoriId);
                                                    if ($kategoriId !== '' && isset($kategoriMap[$kategoriId])) {
                                                        $kategoriNames[] = $kategoriMap[$kategoriId]['nama'];
                                                    }
                                                }

                                                echo implode(', ', $kategoriNames);

                                                if (empty($kategoriNames)) {
                                                    echo 'No Kategori';
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                $tagIds = explode(',', $artikel['tag_id']);
                                                $tagNames = [];

                                                foreach ($tagIds as $tagId) {
                                                    $tagId = trim($tagId);
                                                    if ($tagId !== '' && isset($tagMap[$tagId])) {
                                                        $tagNames[] = $tagMap[$tagId]['nama'];
                                                    }
                                                }

                                                echo implode(', ', $tagNames);

                                                if (empty($tagNames)) {
                                                    echo 'No Tag';
                                                }
                                                ?>
                                            </td>


                                            <td class="text-center"><?= $artikel['created_at'] ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-primary btn-sm" href="<?= base_url('artikel/ubah/' . $artikel['id']) ?>">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?= $artikel['id'] ?>">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Modal Konfirmasi Delete -->
                                        <div class="modal fade" id="deleteModal<?= $artikel['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus pengguna: <?= $artikel['judul'] ?>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a href="<?= base_url('artikel/delete/' . $artikel['id']) ?>" class="btn btn-danger">Hapus</a>
                                                    </div>
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

<?= $this->endSection(); ?>