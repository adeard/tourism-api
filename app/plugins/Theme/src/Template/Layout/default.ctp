<?php
use Cake\Core\Configure;
// header('X-CSRF-Token: '.$this->request->params['_csrfToken']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- TITLE -->
    <title>Jalan Yuk</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- GOOGLE FONT -->
    <?php echo $this->Html->css('fonts/font1') ?>
    <?php echo $this->Html->css('fonts/font2') ?>
    <?php echo $this->Html->css('fonts/font3') ?>

		<?php echo $this->fetch('style'); ?>
		<?php echo $this->Html->css('lib/bootstrap.min') ?>
		<?php echo $this->Html->css('lib/font-awesome.min') ?>
		<?php echo $this->Html->css('lib/awe-booking-font') ?>
		<?php echo $this->Html->css('lib/owl.carousel') ?>
		<?php echo $this->Html->css('lib/jquery-ui') ?>
		<?php echo $this->Html->css('/vendor/revslider-demo/css/settings') ?>
        <?php echo $this->Html->css('lib/magnific-popup'); ?>

		<?php echo $this->Html->css('style') ?>
		<?php echo $this->Html->css('demo') ?>

		<?php echo $this->Html->css('colors/blue') ?>

</head>

    <!-- PAGE WRAP -->
    <div id="page-wrap">
        <!-- PRELOADER -->
        <div class="preloader"></div>
        <!-- END / PRELOADER -->

        <!-- HEADER PAGE -->
        <header id="header-page">
            <div class="header-page__inner">
                <div class="container">
                    <!-- LOGO -->
                    <div class="logo">
                        <h3 style="color:#428bca">JalanYuk</h3>
                    </div>
                    <!-- END / LOGO -->

                    <!-- NAVIGATION -->
                    <nav class="navigation awe-navigation" data-responsive="1200">
                        <ul class="menu-list">
                            <?php $here = $this->request->here; ?>
                            <li class="menu-item-has-children <?php echo ($here == $this->request->webroot )? 'current-menu-parent':''; ?> ">
                                <a href="<?php echo $this->request->webroot ?>">Beranda</a>
                            </li>
                            <li class="menu-item-has-children <?php echo ($here == $this->request->webroot.'destinations' )? 'current-menu-parent':''; ?>">
                                <a href="<?php echo $this->request->webroot ?>destinations">Destinasi</a>
                            </li>
                            <li class="menu-item-has-children <?php echo ($here == $this->request->webroot.'contactus' )? 'current-menu-parent':''; ?>">
                                <a href="<?php echo $this->request->webroot ?>contactus">Kontak Kami</a>
                            </li>
                            <li class="menu-item-has-children <?php echo ($here == $this->request->webroot.'paymentconfirmations' )? 'current-menu-parent':''; ?>">
                                <a href="<?php echo $this->request->webroot ?>paymentconfirmations">Konfirmasi Pembayaran</a>
                            </li>

							<?php if (!empty($this->request->session()->read('Auth.User.id'))): ?>
                                <?php if ($this->request->session()->read('Auth.User.user_level_id') == 3) { ?>
                                    <li class="menu-item-has-children <?php echo ($here == $this->request->webroot.'settings' )? 'current-menu-parent':''; ?>">
                                        <a href="<?php echo $this->request->webroot ?>settings">Settings</a>
                                    </li>
                                <?php } ?>
                                <li class="menu-item-has-children <?php echo ($here == $this->request->webroot.'users/dashboard' )? 'current-menu-parent':''; ?>">
                                    <a href="<?php echo $this->request->webroot ?>users/dashboard"><?php echo ucwords($this->request->session()->read('Auth.User.username')); ?></a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo $this->request->webroot ?>users/dashboard">Dashboard</a></li>
                                        <li><a href="<?php echo $this->request->webroot ?>users/logout">Log Out</a></li>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="menu-item-has-children">
                                    <a href="<?php echo $this->request->webroot ?>users">Log In</a>
                                </li>
                            <?php endif; ?>
                            <li class="menu-item-has-children <?php echo ($here == $this->request->webroot.'cart' )? 'current-menu-parent':''; ?>">
                                <a href="<?php echo $this->request->webroot ?>cart"><i class="awe-icon awe-icon-cart"></i></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END / NAVIGATION -->
                    <!-- SEARCH BOX -->
                    <div class="search-box">
                        <span class="searchtoggle"><i class="awe-icon awe-icon-search"></i></span>
                        <?php echo $this->Form->create(null, ['url' => ['controller' => 'Destinations','action' => 'index'], 'type' => 'get', 'class' => 'form-search']); ?>
                            <div class="form-item">
                                <input type="text" name="tourism_name" value="Cari &amp; tekan enter">
                            </div>
                        <?php echo $this->Form->end(); ?>
                    </div>
                    <!-- END / SEARCH BOX -->


                    <!-- TOGGLE MENU RESPONSIVE -->
                    <a class="toggle-menu-responsive" href="#">
                        <div class="hamburger">
                            <span class="item item-1"></span>
                            <span class="item item-2"></span>
                            <span class="item item-3"></span>
                        </div>
                    </a>
                    <!-- END / TOGGLE MENU RESPONSIVE -->
                </div>
            </div>
        </header>
        <!-- END / HEADER PAGE -->


				<?php echo $this->Flash->render() ?>
				<?php echo $this->fetch('content'); ?>
        <!-- FOOTER PAGE -->
        <footer id="footer-page">
            <div class="container">
                <div class="row">
                    <!-- WIDGET -->
                    <div class="col-md-3">
                        <div class="widget widget_contact_info">
                            <div class="widget_background">
                                <div class="widget_background__half">
                                    <div class="bg"></div>
                                </div>
                                <div class="widget_background__half">
                                    <div class="bg"></div>
                                </div>
                            </div>
                            <div class="logo">
                                <h2 style="color:white">JalanYuk</h2>
                            </div>
                            <div class="widget_content">
                                <p>Jl. Narogong Megah 4 blok E15, Kota Bekasi, Bekasi Timur</p>
                                <p>+62-815-3338-1213</p>
                                <a href="#">contact@jalanyuk.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-6">
                        <div class="widget widget_about_us">
                            <h3>Tentang Kami</h3>
                            <div class="widget_content">
                                <p>Merupakan fasilitas untuk memesan tiket obyek wisata secara online</p>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-3">
                        <div class="widget widget_follow_us">
                            <div class="widget_content">
                                <p>Untuk pemesanan lain, hubungi:</p>
                                <span class="phone">+6281533381213</span>
                                <div class="awe-social">
                                    <a href="twitter.com"><i class="fa fa-twitter"></i></a>
                                    <a href="pinterest.com"><i class="fa fa-pinterest"></i></a>
                                    <a href="facebook.com"><i class="fa fa-facebook"></i></a>
                                    <a href="youtube.com"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->
                </div>
                <div class="copyright">
                    <p>©2019 JalanYuk™ All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!-- END / FOOTER PAGE -->

    </div>
    <!-- END / PAGE WRAP -->

		<?php echo $this->Html->script('lib/jquery-1.11.2.min'); ?>
		<?php echo $this->Html->script('lib/masonry.pkgd.min'); ?>
		<?php echo $this->Html->script('lib/jquery.parallax-1.1.3'); ?>
		<?php echo $this->Html->script('lib/jquery.owl.carousel'); ?>
		<?php echo $this->Html->script('lib/theia-sticky-sidebar'); ?>
		<?php echo $this->Html->script('lib/jquery-ui'); ?>
    <?php echo $this->Html->script('lib/bootstrap.min'); ?>
    <?php echo $this->Html->script('lib/jquery.magnific-popup.min'); ?>
		<?php echo $this->Html->script('scripts'); ?>

		<?php echo $this->Html->script('/vendor/revslider-demo/js/jquery.themepunch.revolution.min'); ?>
		<?php echo $this->Html->script('/vendor/revslider-demo/js/jquery.themepunch.tools.min'); ?>


		<?php echo $this->fetch('script'); ?>
        <script type="text/javascript">
        var csrf_token =  function (xhr) {
            xhr.setRequestHeader('X-CSRF-Token', "<?php echo $this->request->params['_csrfToken'] ?>");
        };

            if($('#slider-revolution').length) {
                $('#slider-revolution').show().revolution({
                    ottedOverlay:"none",
                    delay:10000,
                    startwidth:1600,
                    startheight:650,
                    hideThumbs:200,

                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:5,


                    simplifyAll:"off",

                    navigationType:"none",
                    navigationArrows:"solo",
                    navigationStyle:"preview4",

                    touchenabled:"on",
                    onHoverStop:"on",
                    nextSlideOnWindowFocus:"off",

                    swipe_threshold: 0.7,
                    swipe_min_touches: 1,
                    drag_block_vertical: false,

                    parallax:"mouse",
                    parallaxBgFreeze:"on",
                    parallaxLevels:[7,4,3,2,5,4,3,2,1,0],


                    keyboardNavigation:"off",

                    navigationHAlign:"center",
                    navigationVAlign:"bottom",
                    navigationHOffset:0,
                    navigationVOffset:20,

                    soloArrowLeftHalign:"left",
                    soloArrowLeftValign:"center",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,

                    soloArrowRightHalign:"right",
                    soloArrowRightValign:"center",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,

                    shadow:0,
                    fullWidth:"on",
                    fullScreen:"off",

                    spinner:"spinner2",

                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,

                    shuffle:"off",

                    autoHeight:"off",
                    forceFullWidth:"off",



                    hideThumbsOnMobile:"off",
                    hideNavDelayOnMobile:1500,
                    hideBulletsOnMobile:"off",
                    hideArrowsOnMobile:"off",
                    hideThumbsUnderResolution:0,

                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    startWithSlide:0
                });
            }
        </script>

</body>
</html>
