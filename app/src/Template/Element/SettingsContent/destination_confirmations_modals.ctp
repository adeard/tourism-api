<div id="ApproveDestinationConfirmation" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="DestinationConfirmationModalTitle"></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" class="input-sm input_sm form-control form_destination_confirmation" id="DestinationConfirmationId" name="destination_confirmation_id" value="">
        </div>
        <div class="form-group">
          <label>Nama Destinasi</label>
          <input type="text" class="input-sm input_sm form-control form_destination_confirmation" id="DestinationConfirmationName" name="destination_confirmation_name" value="">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea name="destination_confirmation_description" id="DestinationConfirmationDescription" class="input-sm input_sm form-control form_destination_confirmation" rows="10"></textarea>
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="destination_confirmation_address" id="DestinationConfirmationAddress" class="input-sm input_sm form-control form_destination_confirmation" rows="10"></textarea>
        </div>
        <hr>
        <div class="form-group">
          <label>Admin Username</label>
          <input type="text" class="input-sm input_sm form-control form_destination_confirmation" id="DestinationConfirmationAdminUsername" name="destination_confirmation_admin_username" value="">
        </div>
        <div class="form-group">
          <label>Admin Phone</label>
          <input type="text" class="input-sm input_sm form-control form_destination_confirmation" id="DestinationConfirmationAdminPhone" name="destination_confirmation_admin_phone" value="">
        </div>
        <div class="form-group">
          <label>Admin Email</label>
          <input type="text" class="input-sm input_sm form-control form_destination_confirmation" id="DestinationConfirmationAdminEmail" name="destination_confirmation_admin_email" value="">
        </div>
        <div class="form-group">
          <label>Harga Tiket Masuk</label>
          <input type="text" class="input-sm input_sm form-control form_destination_confirmation" id="DestinationConfirmationPrice" name="destination_confirmation_price" value="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" id="SaveDestinationConfirmation">Setuju</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="DeleteDestinationConfirmation" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Pengajuan Destinasi</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" class="input-sm input_sm form-control" id="DeleteDestinationAccountId" name="delete_destination_account_id" value="">
        </div>
        <div class="form-group">
          Hapus Pengajuan Destinasi ?
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" id="DeletePaymentAccounts">Hapus</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
