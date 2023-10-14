<?= $this->extend('Rifkkimaulana/Front/Layout/Template'); ?>
<?= $this->section('content'); ?>

<!--================Blog Area =================-->
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">

                <?php foreach ($artikelData as $artikel) : ?>
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="<?= base_url('assets/image/artikel/' . $artikel['cover']); ?>" alt="<?= $artikel['cover']; ?>">
                            <?php $datemyd =  date('d-m-y', strtotime($artikel['created_at'])); ?>
                            <a href="<?= base_url('blog/filter/date/' . $datemyd); ?>" class="blog_item_date">
                                <h3><?= date('d', strtotime($artikel['created_at'])); ?></h3>
                                <p><?= date('M', strtotime($artikel['created_at'])); ?></p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="<?= base_url('blog/' . $artikel['slug']); ?>">
                                <h2><?= $artikel['judul']; ?></h2>
                            </a>
                            <p><?= substr($artikel['isi'], 0,  200); ?></p>
                            <ul class="blog-info-link">
                                <li><i class="fa fa-tag"></i>
                                    <?php
                                    // Menampilkan tag berdasarkan tag_id di artikel
                                    $tagIds = explode(',', $artikel['tag_id']);
                                    foreach ($tagIds as $tagId) {
                                        $tagId = trim($tagId);
                                        if ($tagId !== '' && isset($tagMap[$tagId])) {
                                            echo '<a href="' . base_url('filter/tag/' . $tagMap[$tagId]['nama']) . '">' . $tagMap[$tagId]['nama'] . '</a>';
                                        }
                                    }
                                    ?>
                                </li>
                                <li><i class="fa fa-comments"></i><a href="#"> 03 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                <?php endforeach; ?>

                <?= $pager->links('rifkkimaulana', 'bootstrap_pagination'); ?>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="blog_right_sidebar">
                <?php $search_card = '
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btns" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                        </form>
                    </aside>'; ?>

                <aside class="single_sidebar_widget post_category_widget">
                    <h4 class="widget_title">Category</h4>
                    <ul class="list cat-list">
                        <?php foreach ($kategoriData as $kategori) : ?>
                            <li>
                                <a href="<?= base_url('filter/kategori/' . $kategori['nama']); ?>" class="d-flex">
                                    <p><?= $kategori['nama']; ?>
                                        <?= ' (' . $kategoriArticleCount[$kategori['id']] . ')'; ?></p>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </aside>

                <?php function time_elapsed_string($datetime, $full = false)
                {
                    $now = new DateTime;
                    $ago = new DateTime($datetime);
                    $diff = $now->diff($ago);

                    $string = [
                        'y' => 'tahun',
                        'm' => 'bulan',
                        'd' => 'hari',
                        'h' => 'jam',
                        'i' => 'menit',
                        's' => 'detik',
                    ];

                    $result = [];
                    foreach ($string as $key => $value) {
                        if ($diff->$key) {
                            $result[] = $diff->$key . ' ' . $value . ($diff->$key > 1 ? '' : '');
                        }
                    }

                    if (!$full) {
                        $result = array_slice($result, 0, 1);
                    }

                    return $result ? implode(', ', $result) . ' lalu' : 'just now';
                }
                ?>

                <aside class="single_sidebar_widget popular_post_widget">
                    <h3 class="widget_title">Recent Post</h3>
                    <?php foreach ($artikelDataWidgets as $artikel) : ?>
                        <div class="media post_item">
                            <img class="img-fluid" style="max-width: 25%; height: auto;" src="<?= base_url('assets/image/artikel/' . $artikel['cover']); ?>" alt="post">

                            <div class="media-body">
                                <a href="<?= base_url('blog/' . $artikel['slug']); ?>">
                                    <h3><?= $artikel['judul']; ?></h3>
                                </a>
                                <p><?= time_elapsed_string($artikel['created_at']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </aside>


                <aside class="single_sidebar_widget tag_cloud_widget">
                    <h4 class="widget_title">Tag Clouds</h4>
                    <ul class="list">
                        <?php foreach ($tagData as $tag) : ?>
                            <li>
                                <a href="<?= base_url('filter/tag/' . $tag['nama']); ?>"> <?= $tag['nama']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </aside>

                <?php $igfeed = '
                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </aside>'; ?>

                <?php $newslater = '<aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
                        </form>
                    </aside>'; ?>
            </div>
        </div>
    </div>
</div>
<!--================Blog Area =================-->

<?= $this->endSection(); ?>