<?php $this->start('style'); ?>
  <?php echo $this->Html->css('/vendor/bootstrap-datepicker/css/bootstrap-datepicker'); ?>
<?php $this->end(); ?>
<?php $this->start('script'); ?>
  <?php echo $this->Html->script('/vendor/bootstrap-datepicker/js/bootstrap-datepicker'); ?>

  <?php echo $this->element('SettingsContent/setting_functions'); ?>

  <?php echo $this->element('SettingsContent/tickets_script'); ?>
  <?php echo $this->element('SettingsContent/users_script'); ?>
  <?php echo $this->element('SettingsContent/feedback_script'); ?>
  <?php echo $this->element('SettingsContent/payment_accounts_script'); ?>
  <?php echo $this->element('SettingsContent/payment_confirmations_script'); ?>
  <?php echo $this->element('SettingsContent/destination_confirmations_script'); ?>
  <?php echo $this->element('SettingsContent/region_script'); ?>
  <?php echo $this->element('SettingsContent/territories_script'); ?>
<?php $this->end(); ?>

<section class="travelling-block-section-demo awe-parallax" style="background-image:url(<?php echo '/tourism/files/photos/lanskap2.jpg' ?>);">
  <div class="container">
    <div class="travelling-block text-center">
      <div class="title">
        <h2>Setting</h2>
      </div>
      <div class="travelling-tabs tabs">
        <ul>
          <li><a href="#tabs-1">List</a></li>
          <li><a href="#tabs-2">Destinasi</a></li>
          <li><a href="#tabs-3">Wilayah</a></li>
        </ul>
        <div class="travelling-tabs__content">
          <div id="tabs-1">
            <div class="purpose-slider">
              <div class="item">
                <a href="#" id="ListTicketBtn">
                  <i class="awe-icon fa fa-tags"></i>
                  <span>List Ticket</span>
                </a>
              </div>
              <div class="item">
                <a href="#" id="ListUsersBtn">
                  <i class="awe-icon fa fa-users"></i>
                  <span>List User</span>
                </a>
              </div>
              <div class="item">
                <a href="#" id="ListCustomerFeedbackBtn">
                  <i class="awe-icon fa fa-comments"></i>
                  <span>List Kritik & Saran</span>
                </a>
              </div>
              <div class="item">
                <a href="#" id="ListDestinationAccountsBtn">
                  <i class="awe-icon fa fa-credit-card"></i>
                  <span>List Rekening</span>
                </a>
              </div>
              <div class="item">
                <a href="#" data-toggle="modal" data-target="#PaymentAccount" id="AddPaymentAccount">
                  <i class="awe-icon fa fa-bank"></i>
                  <span>Tambah Rekening</span>
                </a>
              </div>
              <div class="item">
                <a href="#" id="ListPaymentConfirmationBtn">
                  <i class="awe-icon fa fa-money"></i>
                  <span>List Pembayaran</span>
                </a>
              </div>
              <div class="item">
                <a href="#" id="ListDestinationConfirmationBtn">
                  <i class="awe-icon fa fa-globe"></i>
                  <span>List Pengajuan Destinasi</span>
                </a>
              </div>
            </div>
          </div>

          <div id="tabs-2">
            <div class="travelling-tabs__region">
              <div class="item">
                <a href="#" class="destination_tab" id="1" region="Amerika Utara">
                  <i class="awe-icon awe-icon-north-america"></i>
                  <span>Amerika Utara</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="destination_tab" id="2" region="Amerika Selatan">
                  <i class="awe-icon awe-icon-south-america"></i>
                  <span>Amerika Selatan</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="destination_tab" id="3" region="Eropa">
                  <i class="awe-icon awe-icon-europe"></i>
                  <span>Eropa</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="destination_tab" id="4" region="Australia">
                  <i class="awe-icon awe-icon-australia"></i>
                  <span>Australia</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="destination_tab" id="5" region="Asia">
                  <i class="awe-icon awe-icon-asia"></i>
                  <span>Asia</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="destination_tab" id="6" region="Antartika">
                  <i class="awe-icon awe-icon-antarctica"></i>
                  <span>Antartika</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="destination_tab" id="7" region=Afrika>
                  <i class="awe-icon awe-icon-africa"></i>
                  <span>Afrika</span>
                </a>
              </div>
            </div>
          </div>

          <div id="tabs-3">
            <div class="travelling-tabs__region">
              <div class="item">
                <a href="#" class="territory_tab" id="1" region="Amerika Utara">
                  <i class="awe-icon awe-icon-north-america"></i>
                  <span>Amerika Utara</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="territory_tab" id="2" region="Amerika Selatan">
                  <i class="awe-icon awe-icon-south-america"></i>
                  <span>Amerika Selatan</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="territory_tab" id="3" region="Eropa">
                  <i class="awe-icon awe-icon-europe"></i>
                  <span>Eropa</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="territory_tab" id="4" region="Australia">
                  <i class="awe-icon awe-icon-australia"></i>
                  <span>Australia</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="territory_tab" id="5" region="Asia">
                  <i class="awe-icon awe-icon-asia"></i>
                  <span>Asia</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="territory_tab" id="6" region="Antartika">
                  <i class="awe-icon awe-icon-antarctica"></i>
                  <span>Antartika</span>
                </a>
              </div>
              <div class="item">
                <a href="#" class="territory_tab" id="7" region=Afrika>
                  <i class="awe-icon awe-icon-africa"></i>
                  <span>Afrika</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<section class="your-destinations-section-demo">
    <div class="container">
        <div class="your-destinations setting_tab" id="TicketsTab" hidden>
            <?php echo $this->element('SettingsContent/tickets_tab'); ?>
        </div>
        <div class="your-destinations setting_tab" id="UsersTab" hidden>
            <?php echo $this->element('SettingsContent/users_tab'); ?>
        </div>
        <div class="your-destinations setting_tab" id="FeedbackTab" hidden>
            <?php echo $this->element('SettingsContent/feedback_tab'); ?>
        </div>
        <div class="your-destinations setting_tab" id="PaymentAccountsTab" hidden>
            <?php echo $this->element('SettingsContent/payment_accounts_tab'); ?>
        </div>
        <div class="your-destinations setting_tab" id="RegionsTab" hidden>
            <?php echo $this->element('SettingsContent/regions_tab'); ?>
        </div>
        <div class="your-destinations setting_tab" id="PaymentConfirmationsTab" hidden>
            <?php echo $this->element('SettingsContent/payment_confirmations_tab'); ?>
        </div>
        <div class="your-destinations setting_tab" id="DestinationConfirmationsTab" hidden>
            <?php echo $this->element('SettingsContent/destination_confirmations_tab'); ?>
        </div>
        <div class="your-destinations setting_tab" id="TerritoriesTab" hidden>
            <?php echo $this->element('SettingsContent/territories_tab'); ?>
        </div>
    </div>
</section>


<?php echo $this->element('SettingsContent/payment_accounts_modals'); ?>
<?php echo $this->element('SettingsContent/destination_confirmations_modals'); ?>
