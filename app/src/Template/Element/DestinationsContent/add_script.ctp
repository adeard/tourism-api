<script type="text/javascript">

  $(document).ready(function(){

    getContinents()
    .then(result => {
      if (result.status == 'success') {
        $('#DestinationContinent').html(`<option value="">--Please Select--</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#DestinationContinent').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
      }
    });

  });

  $('#DestinationContinent').change(function(){

    getCountries(this.value)
    .then(result => {
      if (result.status == 'success') {
        $('#DestinationCountry').html(`<option value="">--Please Select--</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#DestinationCountry').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
      }
    });

  });

  $('#DestinationCountry').change(function(){

    getProvinces(this.value)
    .then(result => {
      if (result.status == 'success') {
        $('#DestinationProvince').html(`<option value="">--Please Select--</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#DestinationProvince').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
      }
    });

  });

  $('#DestinationProvince').change(function(){

    getCities(this.value)
    .then(result => {
      if (result.status == 'success') {
        $('#DestinationCity').html(`<option value="">--Please Select--</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#DestinationCity').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
      }
    });

  });

  $('#SubmitDestination').click(function(e){
    e.preventDefault();

    var empty_required = '';
    var data_post = {
        'name' : $('#DestinationName').val(),
        'description' : $('#DestinationDescription').val(),
        'continent' : $('#DestinationContinent').val(),
        'country' : $('#DestinationCountry').val(),
        'province' : $('#DestinationProvince').val(),
        'city' : $('#DestinationCity').val(),
        'address' : $('#DestinationAddress').val(),
        'photo' : $('#DestinationPhoto').prop('files')[0],
        'video' : $('#DestinationVideo').prop('files')[0]
    }

    var form_data = new FormData();
    form_data.append('name', data_post.name);
    form_data.append('description', data_post.description);
    form_data.append('continent', data_post.continent);
    form_data.append('country', data_post.country);
    form_data.append('province', data_post.province);
    form_data.append('city', data_post.city);
    form_data.append('address', data_post.address);
    form_data.append('photo', data_post.photo);
    form_data.append('video', data_post.video);

    $(".require_add_destination").each(function(){
      if($(this).val() === "") {
				empty_required = this.id;
      }
    });

    if (empty_required != '') {
			$("html, body").animate({ scrollTop: 0 }, "slow");

			$('#WarningNewDestination').html(`
        <div class="alert alert-danger">
          Data destinasi belum lengkap
        </div>
			`);
			$('#WarningNewDestination').show('slow');
					
			setTimeout(function() {
          $("#WarningNewDestination").hide('slow')
      }, 3000);

			return false;
		}

    // $(this).attr('disabled', true);
    // $(this).html(`Menyimpan...`);

    $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Destinations', 'action' => 'saveDestination']); ?>',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        beforeSend: csrf_token,
        dataType: "json",
        success: function(result){
          $('#SubmitDestination').html(`Simpan`);
          $('#SubmitDestination').removeAttr(`disabled`);

          if (result == 'success') {
            $('.form-control').val('');
            $('#WarningNewDestination').html(`
              <div class="alert alert-success">Destinasi berhasil diajukan</div>
            `);
          } else {
            $('#WarningNewDestination').html(`
              <div class="alert alert-failed">Error</div>
            `);
          }

          $('#WarningNewDestination').show('slow');
          setTimeout(function() {
						  $("#WarningNewDestination").hide('slow')
				  }, 3000);

        }
    });

  });


</script>
