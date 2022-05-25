<script type="text/javascript">

  $('#ListDestinationAccountsBtn').click(function(e){
    e.preventDefault();

    getDestinationAccounts();

    $('.setting_tab').hide('slow');
    $('#PaymentAccountsTab').show('slow');
  });

  $('#AddPaymentAccount').click(function(){
    $('#ModalTitle').html(`Tambah Rekening Tujuan`);
    $('.form_destination_account').val('');
  });

  $('#SavePaymentAccounts').click(function(){
    var data_post = {
      'bank_account' : $('#BankAccount').val(),
      'account_number' : $('#AccountNumber').val(),
      'account_fullname' : $('#AccountFullname').val(),
      'destination_account_id' : $('#DestinationAccountId').val(),
      'is_active' : $('#AccountActive').prop("checked")
    };

    if (data_post.destination_account_id == '') {
      addDestinationAccounts(data_post);
    } else {
      editDestinationAccounts(data_post);
    }
  });

  $('#ResultDestinationAccounts').on('click', '.edit_destination_account', function(){
    var id = this.id;
    $('#ModalTitle').html(`Edit Rekening Tujuan`);
    getDetailDestinationAccounts(id);
  });

  $('#ResultDestinationAccounts').on('click', '.delete_destination_account', function(){
    var id = this.id;
    $('#DeleteDestinationAccountId').val(id);
  });

  $('#DeletePaymentAccounts').click(function(){
    var id = $('#DeleteDestinationAccountId').val();
    deleteDestinationAccounts(id);
  });
</script>
