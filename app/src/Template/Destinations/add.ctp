<?php $this->start('script'); ?>
  <?php echo $this->element('DestinationsContent/functions'); ?>
  <?php echo $this->element('DestinationsContent/add_script'); ?>
<?php $this->end(); ?>

<section class="checkout-section-demo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="checkout-page__top">
                    <div class="title">
                        <h1 class="text-uppercase">Destinasi Baru</h1>
                    </div>
                </div>
                <div id="WarningNewDestination" hidden></div>
            </div>
            <div class="col-lg-12">
                <?php echo $this->Form->create(null, ['url' => ['action' => 'add'], 'type' => 'file', 'role' => 'form']); ?>
                    <div class="checkout-page__content">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama <small style="color:red;">*</small></label>
                                <input type="text" class="form-control require_add_destination" id="DestinationName" require>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Foto <small style="color:red;">*</small></label>
                                <input type="file" class="form-control require_add_destination" accept="image/*" id="DestinationPhoto">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Deskripsi <small style="color:red;">*</small></label>
                                <textarea id="DestinationDescription" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Alamat Destinasi <small style="color:red;">*</small></label>
                                <textarea id="DestinationAddress" class="form-control require_add_destination" rows="5"></textarea>
                            </div>
                        </div>
                        
                        <div class="col-sm-6" hidden>
                            <div class="form-group">
                                <label>Video</label>
                                <input type="file" class="form-control" accept="video/*" id="DestinationVideo">
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Benua <small style="color:red;">*</small></label>
                                <select class="form-control require_add_destination" id="DestinationContinent">
                                    <option value="">--Please Select--</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Negara <small style="color:red;">*</small></label>
                                <select class="form-control require_add_destination" id="DestinationCountry">
                                    <option value="">--Please Select--</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Provinsi <small style="color:red;">*</small></label>
                                <select class="form-control require_add_destination" id="DestinationProvince">
                                    <option value="">--Please Select--</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6" hidden>
                            <div class="form-group">
                                <label>Kota <small style="color:red;">*</small></label>
                                <select class="form-control" id="DestinationCity">
                                    <option value="">--Please Select--</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 text-right">
                            <input type="submit" class="btn btn-primary" id="SubmitDestination" value="Simpan">
                        </div>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>