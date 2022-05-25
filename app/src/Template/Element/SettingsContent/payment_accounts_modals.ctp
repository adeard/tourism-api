<div id="PaymentAccount" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="ModalTitle">Tambah Rekening Tujuan</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" class="input-sm input_sm form-control form_destination_account" id="DestinationAccountId" name="destination_account_id" value="">
        </div>
        <div class="form-group">
          <label>Nama Bank</label>
          <input type="text" class="input-sm input_sm form-control form_destination_account" id="BankAccount" name="bank_account" value="">
        </div>
        <div class="form-group">
          <label>Nomor Rekening</label>
          <input type="text" class="input-sm input_sm form-control form_destination_account" id="AccountNumber" name="account_number" value="">
        </div>
        <div class="form-group">
          <label>Pemilik Rekening</label>
          <input type="text" class="input-sm input_sm form-control form_destination_account" id="AccountFullname" name="account_fullname" value="">
        </div>
        <div class="form-group">
          <label class="checkbox-inline"><input type="checkbox" value="1" id="AccountActive">Aktif</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" id="SavePaymentAccounts">Simpan</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="DeletePaymentAccount" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Rekening Tujuan</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" class="input-sm input_sm form-control" id="DeleteDestinationAccountId" name="delete_destination_account_id" value="">
        </div>
        <div class="form-group">
          Hapus Rekening Tujuan ?
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" id="DeletePaymentAccounts">Hapus</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
