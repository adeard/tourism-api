<script type="text/javascript">

  function getDestinationAccounts(){

    $('#ResultDestinationAccounts').html('');

    $.ajax({
      type: 'POST',
      url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getDestinationAccounts']); ?>',
      beforeSend: csrf_token,
      dataType: "json",
      success: function(result){
        if (result.status == "success") {
          for (var i = 0; i < result.data.length; i++) {

            if (result.data[i].is_active == 1) {
              var active = 'aktif';
            } else {
              var active = 'non-aktif';
            }

            $('#ResultDestinationAccounts').append(`
              <tr id="DestinationAccountRow_`+result.data[i].id+`">
                <td>`+result.data[i].bank_account+`</td>
                <td>`+result.data[i].account_number+`</td>
                <td>`+result.data[i].account_fullname+`</td>
                <td>`+active+`</td>
                <td>
                  <button class="btn btn-sm btn-primary edit_destination_account" id="`+result.data[i].id+`" data-toggle="modal" data-target="#PaymentAccount">Edit</button>
                  <button class="btn btn-sm btn-danger delete_destination_account" id="`+result.data[i].id+`" data-toggle="modal" data-target="#DeletePaymentAccount">Delete</button>
                </td>
              </tr>
            `);

          }
        }

      }
    });

  }

  function addDestinationAccounts(data_post){

    $.ajax({
      type: 'POST',
      url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'addDestinationAccounts']); ?>',
      data: data_post,
      beforeSend: csrf_token,
      dataType: "json",
      success: function(result){
        if (result.status == 'success') {
          $('#PaymentAccount').modal('hide');

          $('#WarningPayment').html(`
            <div class="alert alert-success">Rekening berhasil ditambahkan !</div>
          `);
          $('#WarningPayment').show('slow');

          setTimeout(function(){
            $('#WarningPayment').hide('slow');
          }, 3000);
        }
      }
    });

  }

  function editDestinationAccounts(data_put){

    $.ajax({
      type: 'POST',
      url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'editDestinationAccounts']); ?>',
      data: data_put,
      beforeSend: csrf_token,
      dataType: "json",
      success: function(result){
        if (result.status == 'success') {

          if (data_put.is_active == true) {
            var active = 'aktif';
          } else {
            var active = 'non-aktif';
          }

          $('#DestinationAccountRow_'+data_put.destination_account_id).html(`
            <td>`+data_put.bank_account+`</td>
            <td>`+data_put.account_number+`</td>
            <td>`+data_put.account_fullname+`</td>
            <td>`+active+`</td>
            <td>
              <button class="btn btn-sm btn-primary edit_destination_account" id="`+data_put.destination_account_id+`" data-toggle="modal" data-target="#PaymentAccount">Edit</button>
              <button class="btn btn-sm btn-danger delete_destination_account" id="`+data_put.destination_account_id+`">Delete</button>
            </td>
          `);

          $('#PaymentAccount').modal('hide');

          $('#WarningPayment').html(`
            <div class="alert alert-success">Rekening berhasil ditambahkan !</div>
          `);
          $('#WarningPayment').show('slow');
          setTimeout(function(){
            $('#WarningPayment').hide('slow');
          }, 3000);

        }
      }
    });

  }

  function getDetailDestinationAccounts(destination_account_id){

    var data_get = {
      'id' : destination_account_id
    };

    $.ajax({
      type: 'POST',
      url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getDetailDestinationAccounts']); ?>',
      data: data_get,
      beforeSend: csrf_token,
      dataType: "json",
      success: function(result){
        if (result.status == 'success') {
          $('#DestinationAccountId').val(result.data['id']);
          $('#BankAccount').val(result.data['bank_account']);
          $('#AccountNumber').val(result.data['account_number']);
          $('#AccountFullname').val(result.data['account_fullname']);

          if (result.data['is_active'] == 1) {
            $('#AccountActive').prop("checked", true);
          }

        }
      }
    });

  }

  function deleteDestinationAccounts(destination_account_id){

    var data_get = {
      'id' : destination_account_id
    };

    $.ajax({
      type: 'POST',
      url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'deleteDestinationAccounts']); ?>',
      data: data_get,
      beforeSend: csrf_token,
      dataType: "json",
      success: function(result){
        if (result.status == 'success') {
          $('#DestinationAccountRow_'+destination_account_id).hide();

          $('#DeletePaymentAccount').modal('hide');

          $('#WarningPayment').html(`
            <div class="alert alert-success">Rekening berhasil dihapus !</div>
          `);
          $('#WarningPayment').show('slow');
          setTimeout(function(){
            $('#WarningPayment').hide('slow');
          }, 3000);
        }
      }
    });

  }

  function getCountries(continent_id){
    var data_get = {
      'id' : continent_id
    };

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getCountries']); ?>',
        data: data_get,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });
  }

  function getProvinces(country_id){
    var data_get = {
      'id' : country_id
    };

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getProvinces']); ?>',
        data: data_get,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });
  }

  function getCities(province_id){
    var data_get = {
      'id' : province_id
    };

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getCities']); ?>',
        data: data_get,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });
  }

  function submitModal(param, action_type){
    var data_post = param;
    var action = action_type;
    var url = '';

    if (action == 'add_countries') {
      url = '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'addCountries']); ?>';
    }

    if (action == 'add_provinces') {
      url = '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'addProvinces']); ?>';
    }

    if (action == 'add_cities') {
      url = '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'addCities']); ?>';
    }

    if (action == 'edit') {
      url = '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'editRegionData']); ?>';
    }

    if (action == 'delete') {
      url = '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'deleteRegionData']); ?>';
    }

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: url,
        data: data_post,
        beforeSend: csrf_token,
        success: resolve,
        error: reject
      });
    });
  }

  function getDestinationConfirmation(){

    $('#ResultDestinationConfirmations').html('');

    $.ajax({
      type: 'POST',
      url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getDestinationConfirmations']); ?>',
      beforeSend: csrf_token,
      dataType: "json",
      success: function(result){
        if (result.status == "success") {
          for (var i = 0; i < result.data.length; i++) {

            $('#ResultDestinationConfirmations').append(`
              <tr id="DestinationConfirmationRow_`+result.data[i].id+`">
                <td>`+result.data[i].name+`</td>
                <td>`+result.data[i].address+`</td>
                <td>`+result.data[i].create_user+`</td>
                <td>
                  <button class="btn btn-sm btn-success approve_destination_confirmation" id="`+result.data[i].id+`" data-toggle="modal" data-target="#ApproveDestinationConfirmation">Approve</button>
                  <button class="btn btn-sm btn-danger delete_destination_confirmation" id="`+result.data[i].id+`" data-toggle="modal" data-target="#DeleteDestinationConfirmation">Delete</button>
                </td>
              </tr>
            `);

          }
        }

      }
    });

  }

  function getDetailDestinations(tourism_id){

    var data_get = {
      'id' : tourism_id
    };

    $.ajax({
      type: 'POST',
      url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getDetailDestinations']); ?>',
      data: data_get,
      beforeSend: csrf_token,
      dataType: "json",
      success: function(result){
        if (result.status == 'success') {
          $('#DestinationConfirmationId').val(result.data['id']);
          $('#DestinationConfirmationName').val(result.data['name']);
          $('#DestinationConfirmationDescription').val(result.data['tourism_description']);
          $('#DestinationConfirmationAddress').val(result.data['address']);
        }
      }
    });

  }

  function approveDestinationConfirmation(data_post){
    
    $.ajax({
      type: 'POST',
      url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'approveDestinationConfirmations']); ?>',
      data: data_post,
      beforeSend: csrf_token,
      dataType: "json",
      success: function(result){
        if (result.status == 'success') {

          $('#DestinationConfirmationRow_'+data_post.tourism_id).hide();

          $('#ApproveDestinationConfirmation').modal('hide');

          $('#WarningDestinationConfirmations').html(`
            <div class="alert alert-success">destinasi berhasil disetujui !</div>
          `);
          $('#WarningDestinationConfirmations').show('slow');
          setTimeout(function(){
            $('#WarningDestinationConfirmations').hide('slow');
          }, 3000);

        }
      }
    });

  }

  function getPaymentConfirmation(data_post){

    var data_post = data_post;

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getPaymentConfirmations']); ?>',
        data: data_post,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });

  }

  function processPayment(data_post){

    var data_post = data_post;

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'processPayment']); ?>',
        data: data_post,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });

  }

  function tickets(data_post){

    var data_post = data_post;

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getTickets']); ?>',
        data: data_post,
        beforeSend: csrf_token,
        dataType: "json",
        success: function(result){
          if (result.response_code == 200) {
            $('#ResultTickets').html(``);
            result.data.forEach(element => {
              $('#ResultTickets').append(`
                <tr>
                  <td>`+element.ticket_no+`</td>
                  <td>`+element.user_fullname+`</td>
                  <td>`+element.tourism+`</td>
                  <td>`+element.total_ticket+`</td>
                  <td>`+element.total_price+`</td>
                  <td>`+element.create_date+`</td>
                  <td>`+element.ticket_status+`</td>
                  <td>
                    <a href="tickets/detail/`+element.id+`">Detail</a>
                  </td>
                </tr>
              `);
            });
          }
        }
      });
    });

  }

  function users(data_post){

    var data_post = data_post;

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getUsers']); ?>',
        data: data_post,
        beforeSend: csrf_token,
        dataType: "json",
        success: function(result){
          if (result.response_code == 200) {
            $('#ResultUsers').html(``);
            result.data.forEach(element => {
              $('#ResultUsers').append(`
                <tr>
                  <td>`+element.username+`</td>
                  <td>`+element.fullname+`</td>
                  <td>`+element.email+`</td>
                  <td>`+element.phone_number+`</td>
                  <td>`+element.user_level+`</td>
                </tr>
              `);
            });
          }
        }
      });
    });

  }

  function feedback(data_post){

    var data_post = data_post;

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getFeedback']); ?>',
        data: data_post,
        beforeSend: csrf_token,
        dataType: "json",
        success: function(result){
          if (result.response_code == 200) {
            $('#ResultFeedback').html(``);
            result.data.forEach(element => {
              $('#ResultFeedback').append(`
                <tr>
                  <td>`+element.name+`</td>
                  <td>`+element.email+`</td>
                  <td>`+element.create_date+`</td>
                  <td>`+element.note+`</td>
                </tr>
              `);
            });
          }
        }
      });
    });

  }

  function getDestination(continent_id){
    var data_get = {
      'id' : continent_id
    };

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Settings', 'action' => 'getDestinations']); ?>',
        data: data_get,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });
  }

</script>
