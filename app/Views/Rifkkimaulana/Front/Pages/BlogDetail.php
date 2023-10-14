<?= $this->extend('Rifkkimaulana/Front/Layout/Template'); ?>
<?= $this->section('content'); ?>

<!--================Blog Area =================-->
<section class="blog_area single-post-area mt-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <img class="img-fluid" src="<?= base_url('assets/image/artikel/' . $artikel['cover']); ?>" alt="<?= $artikel['cover']; ?>">
               </div>
               <div class="blog_details">
                  <h2><?= $artikel['judul']; ?>
                  </h2>
                  <ul class="blog-info-link mt-3 mb-4">
                     <li><a href="javascript:void(0)"><i class="fa fa-user"></i> <?= $userMap[$artikel['penulis_id']]['user_name']; ?></a></li>
                     <li><a href="#komentar"><i class="fa fa-comments"></i><?php echo isset($komentarCount[$artikel['id']]) ? $komentarCount[$artikel['id']] : 0; ?> Comments</a></li>
                  </ul>
                  <p class="excert">
                     <?= $artikel['isi']; ?>
                  </p>
               </div>
            </div>
            <div class="navigation-top">
               <div class="d-sm-flex justify-content-between text-center">
                  <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                     people like this</p>
                  <div class="col-sm-4 text-center my-2 my-sm-0">
                  </div>
                  <ul class="social-icons">
                     <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url('blog/' . $artikel['slug']); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="https://twitter.com/intent/tweet?url=<?= base_url('blog/' . $artikel['slug']); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="https://www.linkedin.com/shareArticle?url=<?= base_url('blog/' . $artikel['slug']); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                     <li><a href="https://wa.me/?text=<?= base_url('blog/' . $artikel['slug']); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
               </div>

               <div class="navigation-area">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                        <div class="thumb">
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                           </a>
                        </div>
                        <div class="arrow">
                           <a href="#">
                              <span class="lnr text-white ti-arrow-left"></span>
                           </a>
                        </div>
                        <div class="detials">
                           <p>Prev Post</p>
                           <a href="#">
                              <h4>Space The Final Frontier</h4>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                        <div class="detials">
                           <p>Next Post</p>
                           <a href="#">
                              <h4>Telescopes 101</h4>
                           </a>
                        </div>
                        <div class="arrow">
                           <a href="#">
                              <span class="lnr text-white ti-arrow-right"></span>
                           </a>
                        </div>
                        <div class="thumb">
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/next.png" alt="">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="blog-author mb-5">
               <div class="media align-items-center">
                  <div class="media-body">
                     <h4>Tag: <a href="#">in tag </a></h4>
                     <h4>Kategori: <a href="#">in tag 2 </a></h4>
                  </div>
               </div>
            </div>

            <div class="comments-area" id="komentar">
               <h4><?= isset($komentarCount[$artikel['id']]) ? $komentarCount[$artikel['id']] : 0; ?> Comments</h4>
               <?php if (isset($komentarCount[$artikel['id']])) { ?>
                  <?php foreach ($komentarDataByArtikel as $komentar) { ?>
                     <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <?php if (isset($userMap[$komentar['user_id']]['user_foto']) && empty($userMap[$komentar['user_id']]['user_foto'])) { ?>
                                    <img src="<?= base_url('assets/image/user_foto/' . $userMap[$komentar['user_id']]['user_foto']); ?>" alt="<?= $userMap[$komentar['user_id']]['user_foto']; ?>">
                                 <?php } else { ?>
                                    <img src="<?= base_url('assets/image/avatar5.png'); ?>" alt="Default User Foto">
                                 <?php } ?>
                              </div>

                              <div class="desc">
                                 <p class="comment">
                                    <?= $komentar['komentar']; ?>
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a href="javascript:void(0)"><?= $userMap[$komentar['user_id']]['user_name']; ?></a>
                                       </h5>
                                       <p class="date"><?= $komentar['created_at']; ?> </p>
                                    </div>
                                    <?php if ($komentar['user_id'] === session('user_id')) { ?>
                                       <div class="reply-btn">
                                          <a href="<?= base_url('komentar/delete/' . $komentar['id']); ?>" class="btn-reply text-uppercase"> <i class="fas fa-trash"></i></a>
                                       </div>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php } ?>
               <?php } else { ?>
                  <div class="comment-list">
                     <p>
                        Tidak Ada Komentar!
                     </p>
                  </div>
               <?php } ?>
            </div>

            <div class="comment-form">
               <h4>Leave a Reply</h4>
               <form class="form-contact comment_form" action="#" id="commentForm">
                  <div class="row">
                     <div class="col-12">
                        <div class="form-group">
                           <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="tulis komentar anda disini..."></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                  </div>
               </form>
            </div>

         </div>


         <div class="col-lg-4">
            <div class="blog_right_sidebar">

               <aside class="single_sidebar_widget search_widget">
                  <form action="#">
                     <div class="form-group">
                        <div class="input-group mb-3">
                           <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                           <div class="input-group-append">
                              <button class="btns" type="button"><i class="ti-search"></i></button>
                           </div>
                        </div>
                     </div>
                     <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                  </form>
               </aside>
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
                           <a href="<?= base_url('blog/' . $artikel['judul']); ?>">
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
            </div>
         </div>
      </div>
   </div>
</section>
<!--================ Blog Area end =================-->

<?= $this->endSection(); ?>