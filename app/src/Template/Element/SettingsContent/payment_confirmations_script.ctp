<script type="text/javascript">
$('#ListPaymentConfirmationBtn').click(function(e){
  e.preventDefault();

  $('.setting_tab').hide('slow');
  $('#PaymentConfirmationsTab').show('slow');

  if ($('#ResultPaymentConfirmations').html('')) {

    getPaymentConfirmation()
    .then(result => {
      if (result != '') {
        $('#ResultPaymentConfirmations').html(``);
        result.forEach(element => {
          var opt = '';
          if (element.status != 'verifikasi') {
            var opt = `
              <div class="payment_opt" id="`+element.id+`">
                <button class="btn btn-success btn-sm payment_success" id="`+element.id+`">Konfirmasi</button>
                <button class="btn btn-danger btn-sm payment_failed" id="`+element.id+`">Tolak</button>
              </div>
            `;
          }

          $('#ResultPaymentConfirmations').append(`
          <tr>
            <td>`+element.ticket_no+`</td>
            <td>`+element.tourism_name+`</td>
            <td>`+element.total_price+`</td>
            <td><a target="_blank" href="<?php echo $this->request->webroot ?>/payment/`+element.filename+`">`+element.filename+`</a></td>
            <td> Rp. `+element.bank_account+` `+element.account_number+` `+element.account_fullname+`</td>
            <td>`+element.paid_by+`</td>
            <td>`+element.create_date+`</td>
            <td>`+element.status+`</td>
            <td>`+opt+`</td>
          </tr>
          `);
        });
      }
    });

  }
});

$('#ResultPaymentConfirmations').on('click', '.payment_success', function(){
  var data_post = {
    'status' : 1,
    'id' : this.id
  };

  processPayment(data_post)
  .then(result => {
    $('#WarningPaymentConfirmation').hide('slow');
    if (result.response_code == 200) {
      $('#WarningPaymentConfirmation').html('<div class="alert alert-success">konfirmasi pembayaran berhasil diverifikasi</div>');
      $('#WarningPaymentConfirmation').show('slow');
    }
  });
});

$('#ResultPaymentConfirmations').on('click', '.payment_failed', function(){
  var data_post = {
    'status' : 2,
    'id' : this.id
  };

  processPayment(data_post)
  .then(result => {
    $('#WarningPaymentConfirmation').hide('slow');
    if (result.response_code == 200) {
      $('#WarningPaymentConfirmation').html('<div class="alert alert-success">konfirmasi pembayaran berhasil ditolak</div>');
      $('#WarningPaymentConfirmation').show('slow');
    }
  });
});

</script>
