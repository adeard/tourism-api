<?php $this->start('script'); ?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADxWFOh4wTX0BkI25fbyhHE9f1kTl_3RM"></script>
    <?php echo $this->Html->script('lib/md-map-extend'); ?>
    <?php echo $this->Html->script('lib/jquery.form.min'); ?>
    <?php echo $this->Html->script('lib/jquery.validate.min'); ?>
    <?php echo $this->element('ContactUsContent/script'); ?>
<?php $this->end(); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="contact-page__map">
                    <div data-latlong="-6.274095, 107.009457"></div>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <div class="contact-page__form">
                    <div class="title">
                        <!-- <span>We would like to know you</span> -->
                        <h2>Hubungi Kami</h2>
                    </div>
                    <div class="descriptions">
                        <p>Berikan kritik dan saran untuk keberlangsungan website ini</p>
                    </div>
                    <div id="WarningFeedback" hidden></div>
                    <form class="contact-form" action="" method="post">
                        <div class="form-item" hidden>
                            <input type="text" id="UserIdFeedback" value="<?php echo $this->request->session()->read('Auth.User.id') ?>" name="user_id_feedback">
                        </div>
                        <div class="form-item">
                            <input type="text" id="FullnameFeedback" value="<?php echo $this->request->session()->read('Auth.User.fullname') ?>" name="name" placeholder="Nama Lengkap *">
                        </div>
                        <div class="form-item">
                            <input type="email" id="EmailFeedback" value="<?php echo $this->request->session()->read('Auth.User.email') ?>" name="email" placeholder="Email *">
                        </div>
                        <div class="form-textarea-wrapper">
                            <textarea name="message" id="MessageFeedback" placeholder="Catatan.."></textarea>
                        </div>
                        <div class="form-actions">
                            <input type="submit" id="SubmitFeedback" value="Send" class="submit-contact">
                        </div>
                        <div id="contact-content"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>