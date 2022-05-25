
<div class="your-destinations">
    <div class="your-destionations__top">
        <div class="title" id="TerritoryTitle"></div>
        <div class="your-destinations__bar">
            <div class="order">
                <select class="orderby awe-select" id="TerritoryCountry">
                    <option>Negara</option>
                </select>
            </div>
            <div class="order">
                <select class="orderby awe-select" id="TerritoryProvince">
                    <option>Provinsi</option>
                </select>
            </div>
        </div>
    </div>

    <div class="destination-list__content">
        <div class="table" id="TerritoriesTable">
          <table class="table table-responsive">
            <thead id="TerritoriesTableHeader">
            </thead>
            <tbody id="TerritoriesTableResult">
            </tbody>
          </table>
        </div>
    </div>
</div>


<div id="TerritoryModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="ModalTitleTerritory"></h4>
        <div id="WarningTerritoryModal" hidden></div>
      </div>
      <div class="modal-body" id="ModalBodyTerritory"></div>
      <div class="modal-footer">
        <input type="hidden" id="TerritoryActionChoice" name="" value="">
        <button type="button" class="btn btn-primary btn-sm" id="SaveTerritory">Save</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
