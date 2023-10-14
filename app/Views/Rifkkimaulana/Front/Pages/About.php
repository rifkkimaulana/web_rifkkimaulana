<?= $this->extend('Rifkkimaulana/Front/Layout/Template'); ?>
<?= $this->section('content'); ?>

<main>
    <!-- About US Start -->
    <div class="about-area">
        <div class="container">
            <?php $trending = '
            <!-- Hot Aimated News Tittle-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>'; ?>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <?php $imagethumbnail = '
                        <div class="about-img">
                            <img src="assets/img/post/about_heor.jpg" alt="">
                        </div>'; ?>
                        <div class="section-tittle mb-30 pt-30">
                            <h3>About Us</h3>
                        </div>
                        <div class="about-content">
                            <p class="about-para1 mb-25">
                                Tentang Kami

                                Kami adalah komunitas web yang bersemangat tentang teknologi, aplikasi web, dan berbagi pengetahuan. Situs web ini merupakan tempat kami untuk berbagi panduan, tutorial, dan informasi terkini seputar perkembangan terbaru dalam dunia teknologi dan aplikasi web. Kami didedikasikan untuk membantu Anda memahami konsep-konsep yang mungkin rumit dalam dunia teknologi dengan cara yang sederhana dan mudah dipahami.
                            </p>

                            <p class="about-para1 mb-25">
                                Apa yang Kami Tawarkan

                                Tutorial Aplikasi Web: Kami menyediakan beragam tutorial langkah demi langkah untuk membantu Anda membangun, mengembangkan, dan memahami aplikasi web. Baik Anda seorang pemula yang ingin belajar atau seorang pengembang berpengalaman yang mencari wawasan tambahan, kami memiliki tutorial untuk Anda.
                            </p>

                            <p class="about-para1 mb-25">
                                Artikel Teknologi: Kami menyediakan artikel terbaru tentang tren dan perkembangan terbaru dalam teknologi, seperti kecerdasan buatan, pemrograman, pengembangan perangkat lunak, dan banyak lagi.
                            </p>

                            <p class="about-para1 mb-25">
                                Berbagi Pengetahuan: Kami percaya dalam berbagi pengetahuan. Kami berupaya untuk menjelaskan konsep-konsep yang rumit dalam bahasa yang mudah dipahami, sehingga semua orang dapat mengakses dan memahami teknologi.
                            </p>

                            <p class="about-para1 mb-25">
                                Kenapa Kami Melakukan Ini

                                Kami percaya bahwa pengetahuan adalah kekuatan, dan dengan berbagi pengetahuan, kami dapat membantu orang lain mencapai potensi maksimal mereka dalam dunia teknologi. Kami juga sangat antusias tentang inovasi dan ingin membantu masyarakat yang berbagi minat yang sama untuk berkembang bersama.
                            </p>

                            <p class="about-para1 mb-25">
                                Bergabunglah dengan Kami

                                Kami mengundang Anda untuk bergabung dengan komunitas kami di rifkkimaulana.com. Bersama-sama, kita dapat menjelajahi dunia teknologi, belajar bersama, dan terus berkembang. Jika Anda memiliki pertanyaan, saran, atau ingin berkontribusi dengan artikel atau tutorial, jangan ragu untuk menghubungi kami. Kami berharap dapat berbagi perjalanan teknologi yang menarik bersama Anda.

                                Terima kasih telah mengunjungi rifkkimaulana.com!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <?php $sosmed = '<!-- Section Tittle -->
                    <div class="section-tittle mb-40">
                        <h3>Follow Us</h3>
                    </div>
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                        </div>
                    </div>'; ?>
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src="assets/img/news/news_card.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About US End -->
</main>

<?= $this->endSection(); ?>