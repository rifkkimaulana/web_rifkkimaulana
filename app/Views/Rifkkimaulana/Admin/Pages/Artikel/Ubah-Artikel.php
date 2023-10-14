<?= $this->extend('Rifkkimaulana/Admin/Layout/Template'); ?>
<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <form action="<?= base_url('artikel/ubah'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?= $artikel['id']; ?>" name="id">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Artikel Baru</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Judul Artikel:</label>
                                <input type="text" class="form-control" id="title" name="judul" value="<?= $artikel['judul']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Isi Artikel:</label>
                                <textarea class="form-control" id="summernote" name="isi" rows="12" required><?= $artikel['isi']; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="0" <?= ($artikel['status'] == 0) ? 'selected' : ''; ?>>Draft</option>
                                    <option value="1" <?= ($artikel['status'] == 1) ? 'selected' : ''; ?>>Published</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Simpan Perubahan</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Gambar Andalan</h3>
                        </div>
                        <div class="card-body">
                            <input type="hidden" value="<?= $artikel['cover']; ?>" name="gambar_lama">
                            <?php if (!empty($artikel['cover'])) : ?>
                                <img class="img-fluid mb-2" src="<?= base_url('assets/image/artikel/' . $artikel['cover']); ?>" alt="<?= $artikel['cover']; ?>">
                            <?php endif; ?>
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="image" name="gambar" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kategori</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <select multiple class="form-control" name="kategori_id[]">
                                    <?php foreach ($kategoriData as $kategori) : ?>

                                        <?php
                                        $kategoriIds = explode(',', $artikel['kategori_id']);
                                        $isSelectedKategori = in_array($kategori['id'], $kategoriIds);
                                        ?>

                                        <option value="<?= $kategori['id']; ?>" <?= $isSelectedKategori ? 'selected' : ''; ?>>
                                            <?= $kategori['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tag</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <select multiple class="form-control" name="tag_id[]">
                                    <?php foreach ($tagData as $tag) : ?>

                                        <?php
                                        $tagIds = explode(',', $artikel['tag_id']);
                                        $isSelected = in_array($tag['id'], $tagIds);
                                        ?>

                                        <option value="<?= $tag['id']; ?>" <?= $isSelected ? 'selected' : ''; ?>>
                                            <?= $tag['nama']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?= $this->endSection(); ?>