<script type="text/javascript">
$('.territory_tab').click(function(e){
  e.preventDefault();

  var id = this.id;
  var continent_name = $(this).attr('region');

  getCountries(id)
  .then(result => {
    if (result.status == 'success') {

      $('#TerritoryCountry').html(`<option value="">Please Select</option>`);
      for (var i = 0; i < result.data.length; i++) {
        $('#TerritoryCountry').append(`
          <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
        `);
      }

      $('#TerritoriesTableHeader').html(`
        <tr>
          <th>Nama</th>
          <th>Total Destinasi</th>
          <th>Opsi</th>
        </tr>
      `);

      $('#TerritoriesTableResult').html(``);
      for (var i = 0; i < result.data.length; i++) {
        $('#TerritoriesTableResult').append(`
          <tr>
            <td>`+result.data[i].name+`</td>
            <td>`+result.data[i].total_tourism_places+`</td>
            <td>
              <button class="btn btn-primary btn-sm edit_territories" type="region" id="`+result.data[i].id+`" row_data="`+result.data[i].name+`" data-toggle="modal" data-target="#TerritoryModal">Edit</button>
              <button class="btn btn-danger btn-sm delete_territories" type="region" id="`+result.data[i].id+`" row_data="`+result.data[i].name+`" data-toggle="modal" data-target="#TerritoryModal">Delete</button>
            </td>
          </tr>
        `);
      }
    }
  });

  $('body,html').animate({ scrollTop: $('#TerritoriesTab').height() }, 800);
  $('.setting_tab').hide('slow');
  $('#TerritoryTitle').html(`
    <div class="form-inline">
      <div class="form-group">
        <h2>
          `+continent_name+`
        </h2>
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-warning btn-sm" action="add_countries" name="button" continent="`+id+`" id="AddCountries" data-toggle="modal" data-target="#TerritoryModal">Tambah Negara</button>
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-primary btn-sm" action="add_provinces" name="button" continent="`+id+`" id="AddProvinces" data-toggle="modal" data-target="#TerritoryModal">Tambah Provinsi</button>
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-success btn-sm" action="add_cities" name="button" continent="`+id+`" id="AddCities" data-toggle="modal" data-target="#TerritoryModal">Tambah Kota</button>
      </div>
    </div>
  `);
  $('#TerritoriesTab').show('slow');
});

$('#TerritoryTitle').on('click', '#AddCountries', function(){
  $('#TerritoryActionChoice').val($(this).attr('action'));
  $('#ModalTitleTerritory').html(`
    Tambah Negara
  `);
  $('#ModalBodyTerritory').html(`
    <div class="form-group">
      <label>Nama Negara</label>
      <input type="text" class="form-control input-sm" name="country_name" id="CountryName" value="">
      <input type="hidden" class="form-control input-sm" name="continent_id" id="ContinentId" value="">
    </div>
  `);
});

$('#TerritoryTitle').on('click', '#AddProvinces', function(){
  var continent_id = $('#AddProvinces').attr('continent');

  $('#TerritoryActionChoice').val($(this).attr('action'));
  $('#ModalTitleTerritory').html(`
    Tambah Provinsi
  `);
  $('#ModalBodyTerritory').html(`
    <div class="form-group">
      <label>Nama Negara</label>
      <select class="form-control input-sm" id="SelectCountryName" name="select_country_name"></select>
    </div>
    <div class="form-group">
      <label>Nama Provinsi</label>
      <input type="text" class="form-control input-sm" name="new_province_name" id="NewProvinceName" value="">
    </div>
  `);

  getCountries(continent_id)
  .then(result => {
    if (result.status == 'success') {
      $('#SelectCountryName').html(`<option value="">Please Select</option>`);
      for (var i = 0; i < result.data.length; i++) {
        $('#SelectCountryName').append(`
          <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
        `);
      }
    }
  });
});

$('#TerritoryTitle').on('click', '#AddCities', function(){
  var continent_id = $('#AddProvinces').attr('continent');

  $('#TerritoryActionChoice').val($(this).attr('action'));
  $('#ModalTitleTerritory').html(`
    Tambah Kota/Kabupaten
  `);
  $('#ModalBodyTerritory').html(`
    <div class="form-group">
      <label>Nama Negara</label>
      <select class="form-control input-sm" id="SelectCountryName" name="select_country_name"></select>
    </div>
    <div class="form-group">
      <label>Nama Provinsi</label>
      <select class="form-control input-sm" id="SelectProvinceName" name="select_province_name"></select>
    </div>
    <div class="form-group">
      <label>Nama Kota/Kabupaten</label>
      <input type="text" class="form-control input-sm" id="CityName" name="city_name" value="">
    </div>
  `);

  getCountries(continent_id)
  .then(result => {
    if (result.status == 'success') {
      $('#SelectCountryName').html(`<option value="">Please Select</option>`);
      for (var i = 0; i < result.data.length; i++) {
        $('#SelectCountryName').append(`
          <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
        `);
      }
    }
  });

});

$('#SaveTerritory').click(function(){
  var data_post = {
    //----------add countries---------//
    'country_name' : $('#CountryName').val(),
    'continent_id' : $('#AddCountries').attr('continent'),
    //-----------add provinces---------//
    'country_id' : $('#SelectCountryName').val(),
    'province_name' : $('#NewProvinceName').val(),
    //-----------add cities------------//
    'province_id' : $('#SelectProvinceName').val(),
    'cities_name' : $('#CityName').val(),
    //-----------edit data-------------//
    'update_id' : $('#UpdateId').val(),
    'update_category' : $("#UpdateCategory").val(),
    'update_name' : $('#UpdateName').val(),
    //-----------delete data-------------//
    'delete_id' : $('#DeleteId').val(),
    'delete_category' : $("#DeleteCategory").val(),
    //----------action_type-----------//
    'action' : $('#TerritoryActionChoice').val()
  };

  submitModal(data_post, data_post.action)
  .then(result => {
    if (result == 'success') {
      $('#WarningTerritoryModal').html(`
        <div class="alert alert-success">berhasil</div>
      `);
    } else {
      $('#WarningTerritoryModal').html(`
        <div class="alert alert-danger">gagal</div>
      `);
    }

    $('#WarningTerritoryModal').show('slow');
    setTimeout(function(){
      $('#WarningTerritoryModal').hide('slow');
    }, 3000);
  });
});

$('#ModalBodyTerritory').on('change', '#SelectCountryName', function(){
  getProvinces(this.value)
  .then(result => {
    if (result.status == 'success') {
      $('#SelectProvinceName').html(`<option value="">Please Select</option>`);
      for (var i = 0; i < result.data.length; i++) {
        $('#SelectProvinceName').append(`
          <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
        `);
      }
    }
  });
});

$('#TerritoryCountry').change(function(){

  getProvinces(this.value)
  .then(result => {
    if (result.status == 'success') {
      $('#TerritoryProvince').html(`<option value="">Please Select</option>`);
      for (var i = 0; i < result.data.length; i++) {
        $('#TerritoryProvince').append(`
          <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
        `);
      }

      $('#TerritoriesTableHeader').html(`
        <tr>
          <th>Nama</th>
          <th>Total Destinasi</th>
          <th>Opsi</th>
        </tr>
      `);

      $('#TerritoriesTableResult').html(``);
      for (var i = 0; i < result.data.length; i++) {
        $('#TerritoriesTableResult').append(`
          <tr>
            <td>`+result.data[i].name+`</td>
            <td>`+result.data[i].total_tourism_places+`</td>
            <td>
              <button class="btn btn-primary btn-sm edit_territories" type="province" id="`+result.data[i].id+`" row_data="`+result.data[i].name+`" data-toggle="modal" data-target="#TerritoryModal">Edit</button>
              <button class="btn btn-danger btn-sm delete_territories" type="province" id="`+result.data[i].id+`" row_data="`+result.data[i].name+`" data-toggle="modal" data-target="#TerritoryModal">Delete</button>
            </td>
          </tr>
        `);
      }
    }
  });

});

$('#TerritoryProvince').change(function(){

  getCities(this.value)
  .then(result => {
    if (result.status == 'success') {
      $('#TerritoryCities').html(`<option value="">Please Select</option>`);
      for (var i = 0; i < result.data.length; i++) {
        $('#TerritoryCities').append(`
          <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
        `);
      }

      $('#TerritoriesTableHeader').html(`
        <tr>
          <th>Nama</th>
          <th>Total Destinasi</th>
          <th>Opsi</th>
        </tr>
      `);

      $('#TerritoriesTableResult').html(``);
      for (var i = 0; i < result.data.length; i++) {
        $('#TerritoriesTableResult').append(`
          <tr>
            <td>`+result.data[i].name+`</td>
            <td>`+result.data[i].total_tourism_places+`</td>
            <td>
              <button class="btn btn-primary btn-sm edit_territories" type="city" id="`+result.data[i].id+`" row_data="`+result.data[i].name+`" data-toggle="modal" data-target="#TerritoryModal">Edit</button>
              <button class="btn btn-danger btn-sm delete_territories" type="city" id="`+result.data[i].id+`" row_data="`+result.data[i].name+`" data-toggle="modal" data-target="#TerritoryModal">Delete</button>
            </td>
          </tr>
        `);
      }

    }
  });

});

$('#TerritoriesTableResult').on('click', '.edit_territories', function(){
  var type = $(this).attr('type');
  var row_data = $(this).attr('row_data');
  $('#TerritoryActionChoice').val('edit');
  $('#ModalTitleTerritory').html(`Edit `+type);

  $('#ModalBodyTerritory').html(`
    <div class="form-group">
      <label>Nama `+type+`</label>
      <input type="hidden" name="update_id" id="UpdateId" value="`+this.id+`">
      <input type="hidden" name="update_category" id="UpdateCategory" value="`+type+`">
      <input type="text" class="form-control input-sm" name="update_name" id="UpdateName" value="`+row_data+`">
    </div>
  `);
});

$('#TerritoriesTableResult').on('click', '.delete_territories', function(){
  var type = $(this).attr('type');
  var row_data = $(this).attr('row_data');
  $('#TerritoryActionChoice').val('delete');
  $('#ModalTitleTerritory').html(`Delete `+type);

  $('#ModalBodyTerritory').html(`
    <div class="form-group">
      <input type="hidden" name="delete_id" id="DeleteId" value="`+this.id+`">
      <input type="hidden" name="delete_category" id="DeleteCategory" value="`+type+`">
      <p>Anda yakin ingin menghapus <b>`+row_data+`</b> ?</p>
    </div>
  `);
});
</script>
