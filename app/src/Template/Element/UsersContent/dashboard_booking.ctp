<div class="panel panel-primary">
    <div class="panel-heading">&nbsp;</div>
    <div class="panel-body">
        <div class="row">
            <?php echo $this->Form->create(null, ['url' => ['controller' => 'Export', 'action' => 'tickets'], 'type' => 'get']); ?>
            <div class="form-inline">
                <div class="form-group">
                    <input type="text" name="start_date_ticket" id="StartDateTicket" class="form-control input-sm date" placeholder="Tanggal awal">
                </div>
                <div class="form-group">
                    <input type="text" name="end_date_ticket" id="EndDateTicket" class="form-control input-sm date" placeholder="Tanggal akhir">
                </div>
                <div class="form-group">
                    <input type="text" name="no_ticket" id="NoTicket" class="form-control input-sm" placeholder="No Ticket">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm" id="SearchTicket" type="button">Cari</button>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-sm">Export</button>
                </div>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
        <hr>
        <div class="row">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Tiket</th>
                        <th>User</th>
                        <th>Destinasi</th>
                        <th>Status Tiket</th>
                        <th>Tanggal Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        foreach ($Tickets as $ticket) {
                    ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><a href="<?php echo $this->request->webroot ?>tickets/detail/<?php echo $ticket['ticket_id'] ?>"><?php echo $ticket['ticket_no'] ?></a></td>
                            <td><?php echo $ticket['user_fullname'] ?></td>
                            <td><a href="<?php echo $this->request->webroot ?>destinations/detail/<?php echo $ticket['tourism_id'] ?>"><?php echo ucwords($ticket['tourism_name']) ?></a></td>
                            <td><?php echo $ticket['ticket_status'] ?></td>
                            <td><?php echo $ticket['create_date'] ?></td>
                            <td>

                                <?php 
                                    if ($ticket['ticket_status_id'] == 2 && $ticket['user_id'] == $this->request->session()->read('Auth.User.id')) {
                                ?>
                                    <a href="<?php echo $this->request->webroot ?>paymentconfirmations" >
                                        <button type="button" class="btn btn-success btn-sm">Konfirmasi Pembayaran</button>
                                    </a> 
                                <?php
                                    }
                                ?>
                                
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>