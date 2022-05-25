<?php $this->start('style'); ?>
  <?php echo $this->Html->css('lib/magnific-popup'); ?>
  <?php echo $this->Html->css('/vendor/bootstrap-datepicker/css/bootstrap-datepicker'); ?>
<?php $this->end(); ?>

<?php $this->start('script'); ?>
  <?php echo $this->Html->script('lib/jquery.magnific-popup.min'); ?>
  <?php echo $this->Html->script('/vendor/bootstrap-datepicker/js/bootstrap-datepicker'); ?>
  <?php echo $this->element('UsersContent/function'); ?>
  <?php echo $this->element('UsersContent/dashboard_script'); ?>
<?php $this->end(); ?>

<section class="awe-parallax category-heading-section-demo" style="background-image:url(<?php echo '/tourism/files/photos/cover_user/'.$this->request->session()->read('Auth.User.id').'/'.$this->request->session()->read('Auth.User.photo_cover') ?>)">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="category-heading-content text-uppercase">
            <!-- <h2><?php echo $this->request->session()->read('Auth.User.fullname') ?> <a href="flight-popup.html" class="flight-popup-open"><i class="awe-icon awe-icon-info"></i></a></h2> -->
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="detail-sidebar">
                    <div class="booking-info" style="border:none">
                        <div class="item-thumb" style="text-align:center">
                            <div class="image-thumb">
                            <img src="<?php echo '/tourism/files/photos/user/'.$this->request->session()->read('Auth.User.id').'/'.$this->request->session()->read('Auth.User.photo_profile') ?>" alt="">
                            </div>
                            <div class="text">
                            &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="product-tabs tabs">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <ul>
                                <li>
                                    <a href="#tabs-1">My Profile</a>
                                </li>
                                <li>
                                    <a href="#tabs-2">Tiket</a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div id="WarningDashboard" hidden></div>
                            <div class="product-tabs__content">
                                <div id="tabs-1">
                                    <?php echo $this->element('UsersContent/dashboard_profile'); ?>
                                </div>
                                <div id="tabs-2">
                                    <?php echo $this->element('UsersContent/dashboard_booking'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

