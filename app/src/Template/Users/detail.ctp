<?php $this->start('style'); ?>
<?php echo $this->Html->css('lib/magnific-popup'); ?>
<?php $this->end(); ?>
<?php $this->start('script'); ?>
<?php echo $this->Html->script('lib/jquery.magnific-popup.min'); ?>
<?php $this->end(); ?>
<section class="awe-parallax category-heading-section-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="category-heading-content text-uppercase">
            <!-- <h3>USA</h3><br> -->
            <h2>Ade <a href="flight-popup.html" class="flight-popup-open"><i class="awe-icon awe-icon-info"></i></a></h2>
        </div>
    </div>
</section>

<section class="product-detail">
  <div class="container">
      <div class="row">
        <div class="col-md-3">
            <div class="detail-sidebar">
                <div class="booking-info" style="border:none">
                    <div class="item-thumb" style="text-align:center">
                        <div class="image-thumb">
                          <?php echo $this->Html->image('/images/flight/4.jpg'); ?>
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
                  <ul>
                      <li>
                          <a href="#tabs-1">My Profile</a>
                      </li>
                      <li>
                          <a href="#tabs-2">My Booking</a>
                      </li>
                      <li>
                          <a href="#tabs-3">Setting</a>
                      </li>
                      <li>
                          <a href="#tabs-4">History</a>
                      </li>
                  </ul>
                  <div class="product-tabs__content">
                      <div id="tabs-1">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Account Data</div>
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Username</label>
                                  <input type="text" class="form-control input-sm" name="" value="">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" class="form-control input-sm" name="" value="">
                                </div>
                              </div>
                            </div>
                            <button type="button" name="button" class="btn btn-sm btn-success">Change Password</button>
                          </div>
                        </div>
                        <div class="panel panel-primary">
                          <div class="panel-heading">Profile Data</div>
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Fullname</label>
                                  <input type="text" class="form-control input-sm" name="" value="">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Birth Date</label>
                                  <input type="text" class="form-control input-sm" name="" value="">
                                </div>
                              </div>
                            </div>
                            <button type="button" name="button" class="btn btn-sm btn-success">Change Password</button>
                          </div>
                        </div>
                      </div>
                      <div id="tabs-2">
                          <h3>My Booking</h3>
                      </div>
                      <div id="tabs-3">
                          <h3>Setting</h3>
                      </div>
                      <div id="tabs-4">
                          <h4>History</h4>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
