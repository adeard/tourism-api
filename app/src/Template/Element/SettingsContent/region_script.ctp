<script type="text/javascript">

  $('.destination_tab').click(function(e){
    e.preventDefault();

    var id = this.id;
    var continent_name = $(this).attr('region');

    getCountries(id)
    .then(result => {
      if (result.status == 'success') {
        $('#RegionCountry').html(`<option value="">Please Select</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#RegionCountry').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
      }
    });

    $('body,html').animate({ scrollTop: $('#RegionsTab').height() }, 800);
    $('.setting_tab').hide('slow');
    $('#RegionTitle').html(`
      <div class="form-inline">
        <div class="form-group">
          <h2>
            `+continent_name+`
          </h2>
        </div>
      </div>
    `);
    $('#RegionsTab').show('slow');

    getDestination(id)
    .then(result => {
      $('#RegionResult').html(``);
      result.data.forEach(element => {
        $('#RegionResult').append(`
          <tr>
            <td>`+element.name+`</td>
            <td>`+element.address+`</td>
            <td>`+element.total_ticket+`</td>
            <td>`+element.price+`</td>
            <td><a href="destinations/detail/`+element.id+`">Detail</td>
          </tr>
        `);
      });
    });
  });

  $('#SaveRegion').click(function(){
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
      //----------action_type-----------//
      'action' : $('#ActionChoice').val()
    };

    submitModal(data_post, data_post.action)
    .then(result => {
      if (result == 'success') {
        $('#WarningModal').html(`
          <div class="alert alert-success">berhasil ditambahkan</div>
        `);
      } else {
        $('#WarningModal').html(`
          <div class="alert alert-danger">gagal ditambahkan</div>
        `);
      }

      $('#WarningModal').show('slow');
      setTimeout(function(){
        $('#WarningModal').hide('slow');
      }, 3000);
    });
  });

  $('#ModalBodyRegion').on('change', '#SelectCountryName', function(){
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

  $('#RegionCountry').change(function(){

    getProvinces(this.value)
    .then(result => {
      if (result.status == 'success') {
        $('#RegionProvince').html(`<option value="">Please Select</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#RegionProvince').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
      }
    });

  });

  $('#RegionProvince').change(function(){

    getCities(this.value)
    .then(result => {
      if (result.status == 'success') {
        $('#RegionCities').html(`<option value="">Please Select</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#RegionCities').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
      }
    });

  });

</script>
