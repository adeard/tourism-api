<section class="filter-page">
    <div class="container">
        <div class="row setting_tab" id="RegionsTab">
            <div class="col-md-12">
                <div class="page-top">
                    <div class="title" id="RegionTitle"></div>
                </div>
            </div>
            <div class="col-md-9 col-md-push-3">
                <div class="filter-page__content">
                    <div class="filter-item-wrapper">

                    <?php 
                        foreach ($Destination as $destination) {
                    ?>
                        <div class="attraction-item">
                            <div class="item__inner">
                                <div class="item-media">
                                    <div class="image-cover">
                                        <img src="<?php echo '/tourism/files/photos/tourism/'.$destination['id'].'/'.$destination['filename'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="item-body">
                                    <div class="item-title">
                                        <h2>
                                            <a href="destinations/detail/<?php echo $destination['id'] ?>"><?php echo ucwords($destination['name']) ?></a>
                                        </h2>
                                    </div>
                                    <div class="item-address">
                                        <i class="awe-icon awe-icon-marker-2"></i>
                                        <?php echo $destination['address'] ?>
                                    </div>
                                    <div class="item-footer">
                                        <div class="item-rate">
                                        &nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="item-price-more">
                                    <div class="price">
                                        <ins>
                                            <span class="amount">Rp. <?php echo number_format($destination['price'], 0, ",", ".") ?></span>
                                        </ins>
                                    </div>
                                    <a href="destinations/detail/<?php echo $destination['id'] ?>" class="awe-btn">Pesan</a>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>

                    </div>

                </div>
                <nav class="pull-left">
					<?php if (!empty($paging)): ?>
					<?php echo 'Showing '.$paging['lowest'].' to '.$paging['highest'].' of '.$paging['total'].' entries'; ?>
					<?php endif; ?>
				</nav>
				
				<nav class="pull-right">
					<?php echo $paginate; ?>
				</nav>
            </div>



            <div class="col-md-3 col-md-pull-9">
                <?php echo $this->Form->create(null, ['url' => ['action' => 'index'], 'type' => 'get']); ?>
                <div class="page-sidebar">
                    <div class="sidebar-title">
                        <h2>Filter</h2>
                        <div class="clear-filter">
                            <a href="destinations">Clear all</a>
                        </div>
                    </div>
                    
                    <!-- WIDGET -->
                    <div class="widget widget_has_radio_checkbox">
                        <h3>Sort</h3>
                        <ul>
                            <li>
                                <select name="sort" class="form-control">
                                    <option value="">--Silahkan Pilih--</option>
                                    <option value="price" <?php echo ($this->request->query('sort') == 'price')?'selected':''; ?>>Harga tertinggi</option>
                                    <option value="create_date" <?php echo ($this->request->query('sort') == 'create_date')?'selected':''; ?>>Destinasi Terbaru</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_has_radio_checkbox">
                        <h3>Wilayah</h3>
                        <ul>
                            <li>
                                <select name="continent" class="form-control" id="RegionContinent">
                                </select>
                            </li>
                            <li>
                                <select name="country" class="form-control" id="RegionCountry">
                                </select>
                            </li>
                            <li>
                                <select name="province" class="form-control" id="RegionProvince">
                                </select>
                            </li>
                            <li hidden>
                                <select name="cities" class="form-control" id="RegionCities">
                                </select>
                            </li>
                        </ul>
                    </div>
                    <!-- END / WIDGET -->

                    <div class="widget widget_has_radio_checkbox">
                        <h3>&nbsp;</h3>
                        <ul>
                            <li>
                                <button type="submit" class="btn btn-primary btn-sm">Cari</button>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <?php echo $this->Form->end(); ?> 
            </div>
        </div>
    </div>
</section>