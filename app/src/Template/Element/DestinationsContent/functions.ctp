<script type="text/javascript">

  function getCountries(continent_id){
    var data_get = {
      'id' : continent_id
    };

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Destinations', 'action' => 'getCountries']); ?>',
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
        url: '<?php echo $this->Url->build(['controller' => 'Destinations', 'action' => 'getProvinces']); ?>',
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
        url: '<?php echo $this->Url->build(['controller' => 'Destinations', 'action' => 'getCities']); ?>',
        data: data_get,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });
  }

  function getContinents(continent_id){

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Destinations', 'action' => 'getContinents']); ?>',
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });
  }

  function calculatingTicket(data_get){

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Destinations', 'action' => 'calculatingTicket']); ?>',
        data: data_get,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });
  }

  function checkInTicket(data_post){

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Destinations', 'action' => 'checkInTicket']); ?>',
        data: data_post,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });
  }

  function uploadAttachments(data_post){

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Destinations', 'action' => 'uploadAttachments']); ?>',
        cache: false,
        contentType: false,
        processData: false,
        data: data_post,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });
  }

  function deleteAttachments(data_post){

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Destinations', 'action' => 'deleteAttachments']); ?>',
        data: data_post,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });
  }

  function updateTourism(data_post){

    return new Promise((resolve, reject) => {
      $.ajax({
        type: 'POST',
        url: '<?php echo $this->Url->build(['controller' => 'Destinations', 'action' => 'updateTourism']); ?>',
        data: data_post,
        beforeSend: csrf_token,
        dataType: "json",
        success: resolve,
        error: reject
      });
    });
  }

</script>
