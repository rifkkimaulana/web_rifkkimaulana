<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/ticker-style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/slicknav.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/slick.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/front-rifkkimaulana/css/style.css'); ?>">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url('assets/img/logo/logo.png'); ?>" alt="Loading...">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <?= $this->include('Rifkkimaulana/Front/Layout/Header'); ?>
    <?= $this->renderSection('content'); ?>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <!-- logo -->
                        <div class="footer-logo">
                            <a href="home"><img src="<?= base_url('assets/img/logo/logo2_footer.png'); ?>" alt=""></a>
                        </div>
                        <div class="footer-tittle">
                            <div class="footer-pera">
                                <p>Kami adalah komunitas web yang bersemangat tentang teknologi, aplikasi web, dan berbagi pengetahuan. Situs web ini merupakan tempat kami untuk berbagi panduan, tutorial, dan informasi terkini seputar perkembangan terbaru dalam dunia teknologi dan aplikasi web. Kami didedikasikan untuk membantu Anda memahami konsep-konsep yang mungkin rumit dalam dunia teknologi dengan cara yang sederhana dan mudah dipahami.</p>
                            </div>
                        </div>
                        <!-- social -->
                        <div class="footer-social">
                            <a href="https://www.youtube.com/channel/UCPtCjMCRM47_cllS7S8gB1A"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/rifkkimaulana/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.facebook.com/rifkkimaulana"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Dapatkan notifikasi postingan terbaru dari kami!</p>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="" method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>Instagram Feed</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li><a href="#"><img src="assets/img/post/instra1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p>
                                    Copyright &copy; <?= date('Y'); ?> rifkkimaulana.com | All rights reserved
                                </p>
                            </div>
                        </div>
                        <?php $term = '
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="term_of_use">Terms of use</a></li>
                                    <li><a href="privacy_policy">Privacy Policy</a></li>
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>'; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?= base_url('assets/front-rifkkimaulana/js/vendor/modernizr-3.5.0.min.js'); ?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url('assets/front-rifkkimaulana/js/vendor/jquery-1.12.4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/bootstrap.min.js'); ?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url('assets/front-rifkkimaulana/js/jquery.slicknav.min.js'); ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url('assets/front-rifkkimaulana/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/slick.min.js'); ?>"></script>
    <!-- Date Picker -->
    <script src="<?= base_url('assets/front-rifkkimaulana/js/gijgo.min.js'); ?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url('assets/front-rifkkimaulana/js/wow.min.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/animated.headline.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/jquery.magnific-popup.js'); ?>"></script>

    <!-- Breaking New Pluging -->
    <script src="<?= base_url('assets/front-rifkkimaulana/js/jquery.ticker.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/site.js'); ?>"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?= base_url('assets/front-rifkkimaulana/js/jquery.scrollUp.min.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/jquery.nice-select.min.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/jquery.sticky.js'); ?>"></script>

    <!-- contact js -->
    <script src="<?= base_url('assets/front-rifkkimaulana/js/contact.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/jquery.form.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/jquery.validate.min.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/mail-script.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/jquery.ajaxchimp.min.js'); ?>"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= base_url('assets/front-rifkkimaulana/js/plugins.js'); ?>"></script>
    <script src="<?= base_url('assets/front-rifkkimaulana/js/main.js'); ?>"></script>

</body>

</html>