
  <div class="your-destinations">
      <div class="your-destionations__top">
          <div class="title" id="RegionTitle"></div>
          <div class="your-destinations__bar">
              <div class="order">
                  <select class="orderby awe-select" id="RegionCountry">
                      <option>Negara</option>
                  </select>
              </div>
              <div class="order">
                  <select class="orderby awe-select" id="RegionProvince">
                      <option>Provinsi</option>
                  </select>
              </div>
              <div class="order" hidden>
                  <select class="orderby awe-select" id="RegionCities">
                      <option>Kota/kabupaten</option>
                  </select>
              </div>
              <div class="order">
                <button type="button" class="btn btn-primary" name="button">Filter</button>
              </div>
          </div>
      </div>

      <div class="destination-list__content">
          <div class="table">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Total Tiket</th>
                  <th>Tiket Masuk</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody id="RegionResult"></tbody>
            </table>
          </div>
      </div>


      <!-- PAGINATION -->
      <!-- <div class="page__pagination text-center">
          <span class="pagination-prev"><i class="fa fa-caret-left"></i></span>
          <span class="current">1</span>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#" class="pagination-next"><i class="fa fa-caret-right"></i></a>
      </div> -->
      <!-- END / PAGINATION -->
  </div>


<div id="RegionModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="ModalTitleRegion"></h4>
        <div id="WarningModal" hidden></div>
      </div>
      <div class="modal-body" id="ModalBodyRegion"></div>
      <div class="modal-footer">
        <input type="hidden" id="ActionChoice" name="" value="">
        <button type="button" class="btn btn-primary btn-sm" id="SaveRegion">Save</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
