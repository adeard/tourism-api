<script type="text/javascript">

  $(document).ready(function(){

    getContinents('<?php echo $this->request->query('continent') ?>')
    .then(result => {
      if (result.status == 'success') {
        $('#RegionContinent').html(`<option value="">Benua</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#RegionContinent').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
        $('#RegionContinent').val('<?php echo $this->request->query('continent') ?>');
      }
    });

    getCountries('<?php echo $this->request->query('continent') ?>')
    .then(result => {
      if (result.status == 'success') {
        $('#RegionCountry').html(`<option value="">Negara</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#RegionCountry').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
        $('#RegionCountry').val('<?php echo $this->request->query('country') ?>');
      }
    });

    getProvinces('<?php echo $this->request->query('country') ?>')
    .then(result => {
      if (result.status == 'success') {
        $('#RegionProvince').html(`<option value="">Please Select</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#RegionProvince').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
        $('#RegionProvince').val('<?php echo $this->request->query('province') ?>');
      }
    });
    
    getCities('<?php echo $this->request->query('province') ?>')
    .then(result => {
      if (result.status == 'success') {
        $('#RegionCities').html(`<option value="">Kota/Kabupaten</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#RegionCities').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
        $('#RegionCities').val('<?php echo $this->request->query('cities') ?>');
      }
    });

  });

  $('#RegionContinent').change(function(){

    getCountries(this.value)
    .then(result => {
      if (result.status == 'success') {
        $('#RegionCountry').html(`<option value="">Negara</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#RegionCountry').append(`
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
        $('#RegionCities').html(`<option value="">Kota/Kabupaten</option>`);
        for (var i = 0; i < result.data.length; i++) {
          $('#RegionCities').append(`
            <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
          `);
        }
      }
    });

  });

  $('#AddDestination').click(function(){
    var user = '<?php echo $this->request->session()->read('Auth.User.id'); ?>';

    if (user != '') {
      window.location.href = '<?php echo $this->Url->build(['controller' => 'Destinations', 'action' => 'add']); ?>';
    } else {
      $(this).val('Silahkan Login Terlebih Dulu');

      setTimeout(function() {
          $('#AddDestination').val('Belum Ada ?');
      }, 1000);
    }
    
  });

  $('.ticket_buy').keyup(function(){
    var data_get = {
      'adult_ticket' : $('#AdultTicket').val(),
      'kids_ticket' : $('#KidsTicket').val(),
      'price_ticket' : $('#PriceTicket').val()
    };

    calculatingTicket(data_get)
    .then(result => {
      $('#TotalPriceText').html(`Rp. `+ result.total_price_2);
      $('#TotalPrice').val(result.total_price_1);
    })
  });

  $('#CheckIn').click(function(){
    var data_post = {
      'ticket_no' : $('#NoTicketCheckIn').val(),
    };

    checkInTicket(data_post)
    .then(result => {
      if (result != '') {
        $('#WarningCheckInTicket').html(`
          <div class="alert alert-success">Berhasil masuk</div>
        `);
        $('#NoTicketCheckIn').val('');
      } else {
        $('#WarningCheckInTicket').html(`
          <div class="alert alert-danger">Tiket tidak ditemukan</div>
        `);
      }
      $('#WarningCheckInTicket').show('slow');
      setTimeout(function(){ 
        $('#WarningCheckInTicket').hide('slow');
      }, 3000);
    })
  });

  $(document).on('keypress',function(e) {
    if(e.which == 13) {
      var data_post = {
        'ticket_no' : $('#NoTicketCheckIn').val(),
      };

      if (data_post.ticket_no != '') {
        checkInTicket(data_post)
        .then(result => {
          if (result != '') {
            $('#WarningCheckInTicket').html(`
              <div class="alert alert-success">Berhasil masuk</div>
            `);
            $('#NoTicketCheckIn').val('');
          } else {
            $('#WarningCheckInTicket').html(`
              <div class="alert alert-danger">Tiket tidak ditemukan</div>
            `);
          }
          $('#WarningCheckInTicket').show('slow');
          setTimeout(function(){ 
            $('#WarningCheckInTicket').hide('slow');
          }, 3000);
        })
      }
    }
  });

  $('#AddFormAttachment').click(function(){
    
    var total_attachment = parseInt($('#TotalAttachment').val());
    var total = parseInt(total_attachment+1);

    $('#TotalAttachment').val(total);

    $('#FormAttachments').append(`
        <div class="form-group">
            <div class="form-inline">
                <input type="file" id="`+total+`" class="form-control input-sm upload_file">
                <button class="btn btn-primary btn-sm submit_file" id="`+total+`">Upload</button>
            </div>
        </div>
    `);
  });

  $('#FormAttachments').on('click', '.submit_file', function(){
    var id = this.id;
    var upload_id = $('.upload_file#'+id).prop('files')[0];

    var data_post = {
        'upload_file' : upload_id,
        'tourism_id' : $('#TourismId').val()
    }

    var form_data = new FormData();
    form_data.append('upload_file', data_post.upload_file);
    form_data.append('tourism_id', data_post.tourism_id);

    uploadAttachments(form_data)
    .then(result => {
      if (result == "success") {
        $('#WarningUploadAttachmentsTicket').html(`
          <div class="alert alert-success">Berhasil diupload</div>
        `);
      } else {
        $('#WarningUploadAttachmentsTicket').html(`
          <div class="alert alert-danger">Gagal diupload</div>
        `);
      }
      $('#WarningUploadAttachmentsTicket').show('slow');
      setTimeout(function(){ 
        $('#WarningUploadAttachmentsTicket').hide('slow');
      }, 3000);
    })

  });

  $('#FormDelAttachments').on('click', '.del_attachment', function(){
    var id = this.id;
    $('#AttachmentId').val(id);
  });

  $('#ConfirmDeleteAttachment').click(function(){
    var data_post = {
      'id' : $('#AttachmentId').val()
    };

    deleteAttachments(data_post)
    .then(result => {
      if (result.response_code == 200) {
          $('#WarningUploadAttachmentsTicket').html(`
            <div class="alert alert-success">Lampiran berhasil dihapus</div>
          `);
          $('#Attachment_'+data_post.id).hide();
      } else {
        $('#WarningUploadAttachmentsTicket').html(`
            <div class="alert alert-danger">Gagal</div>
        `);
      }

      $('#WarningUploadAttachmentsTicket').show('slow');
      setTimeout(function(){ 
        $('#WarningUploadAttachmentsTicket').hide('slow');
      }, 3000);
    })
  })

  $('#OpenFormDescription').click(function(){
    $('#FormEditDescription').show('slow');
  });

  $('#SaveDescription').click(function(){
    var data_post = {
      'description' : $('#NewDescription').val(),
      'tourism_id' : $('#TourismId').val()
    };

    $(this).attr('disabled', true);
    $(this).html('Loading...');

    updateTourism(data_post)
    .then(result => {
      if (result.response_code == 200) {
        $('#TourismDescription').html(data_post.description);
        $('#SaveDescription').html('Simpan');
        $('#SaveDescription').removeAttr('disabled');

        $('#WarningDescription').html(`
          <div class="alert alert-success">Deskripsi berhasil diubah</div>
        `);
      } else {
        $('#WarningDescription').html(`
          <div class="alert alert-danger">Error `+result.response_code+`</div>
        `);
      }

      $('#WarningDescription').show('slow');
      setTimeout(function(){ 
        $('#WarningDescription').hide('slow');
      }, 3000);
    });
  });

  $('#OpenFormGeneral').click(function(){
    $('#FormGeneralUpdateTourism').show('slow');
  });

  $('#SaveGeneralUpdate').click(function(){
    var data_put = {
      'name' : $('#UpdateGeneralName').val(),
      'address' : $('#UpdateGeneralAddress').val(),
      'price' : $('#UpdateGeneralPrice').val(),
      'tourism_id' : $('#TourismId').val()
    };

    updateTourism(data_put)
    .then(result => {
      if (result.response_code == 200) {
        $('#FormGeneralUpdateTourism').hide('slow');

        $('#WarningGeneralUpdateTourism').html(`
          <div class="alert alert-success">Data destinssi berhasil diubah</div>
        `);
      } else {
        $('#WarningGeneralUpdateTourism').html(`
          <div class="alert alert-danger">Error `+result.response_code+`</div>
        `);
      }

      $('#WarningGeneralUpdateTourism').show('slow');
      setTimeout(function(){ 
        $('#WarningGeneralUpdateTourism').hide('slow');
      }, 3000);
    });
  });

</script>
