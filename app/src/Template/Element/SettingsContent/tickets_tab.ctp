<div class="your-destionations__top">
    <div class="title">
        <h2>Daftar Ticket</h2>
    </div>
</div>
<div id="WarningTickets" hidden></div>
<div class="panel panel-default">
  <div class="panel-body">
    <?php echo $this->Form->create(null, ['url' => ['controller' => 'Export', 'action' => 'tickets'], 'type' => 'get']); ?>
      <div class="form-inline">
          <input type="text" name="start_date_ticket" id="StartDateTicket" class="form-control date-ticket" placeholder="from">
          <input type="text" name="end_date_ticket" id="FinishDateTicket" class="form-control date-ticket" placeholder="to">
          <button type="button" class="btn btn-primary" id="FilterTicket">Cari</button>
          <button type="submit" class="btn btn-success" id="ExportTicketAdmin">Export</button>
      </div>
    <?php echo $this->Form->end(); ?>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Ticket No</th>
            <th>Nama Lengkap</th>
            <th>Destinasi</th>
            <th>Jumlah Tiket</th>
            <th>Jumlah Harga</th>
            <th>Tanggal Pemesanan</th>
            <th>Status</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody id="ResultTickets"></tbody>
      </table>
    </div>
  </div>
</div>
