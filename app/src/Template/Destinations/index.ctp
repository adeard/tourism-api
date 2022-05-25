<?php $this->start('script'); ?>
  <?php echo $this->element('DestinationsContent/functions'); ?>
  <?php echo $this->element('DestinationsContent/script'); ?>
<?php $this->end(); ?>

<section class="awe-parallax category-heading-section-demo" style="background-image:url(<?php echo '/tourism/files/photos/lanskap2.jpg' ?>);">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="category-heading-content category-heading-content__2 text-uppercase">
            <div class="find">
                <h2 class="text-center" style="color:black">Cari Destinasi Kamu</h2>
                <?php echo $this->Form->create(null, ['url' => ['action' => 'index'], 'type' => 'get']); ?>
                    <div class="form-group">
                        <div class="form-elements" style="width:50%">
                            <label>&nbsp;</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-marker-1"></i>
                                <input type="text" name="tourism_name" placeholder="Nama Destinasi..">
                            </div>
                        </div>
                        <div class="form-elements" style="width:25%">
                        
                            <div class="form-actions">
                                <input type="submit" value="Cari">
                            </div>
                        </div>
                        <div class="form-elements" style="width:25%">
                            <div class="form-actions">
                                <input type="button"  id="AddDestination" value="Belum Ada ?">
                            </div>
                        </div>
                    </div>
                <?php echo $this->Form->end(); ?> 
            </div>
        </div>
    </div>
</section>


<?php echo $this->element('DestinationsContent/content'); ?>

