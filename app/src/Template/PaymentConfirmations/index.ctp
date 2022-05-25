<section class="awe-parallax register-page-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="login-register-page__content">
            <div class="content-title">
                <span>Konfirmasi Pembayaran</span>
            </div>
            <?php echo $this->Form->create(null, ['url' => '','type' => 'file', 'autocomplete' => 'off', 'role' => 'form']); ?>
                <div class="form-item">
                    <label>No Tiket</label>
                    <input type="text" name="ticket_no" id="TicketNo" required>
                </div>
                <div class="form-item">
                    <label>Pembayaran Tujuan</label>
                    <select name="destination_account" class="form-control" id="DestinationAccount" required>
                        <option value="">--Silahkan Pilih--</option>
                        <?php 
                            foreach ($DestinationAccount['data'] as $destination_account) {
                        ?>
                            <option value="<?php echo $destination_account['id'] ?>"><?php echo $destination_account['bank_account'].' '.$destination_account['account_number'].' '.$destination_account['account_fullname'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-item">
                    <label>Filename</label>
                    <input type="file" name="file" id="File" accept="image/*"" required>
                </div>
                <div class="form-item">
                    <label>Nama Lengkap</label>
                    <input type="text" name="paid_by" id="PaidBy" required>
                </div>
                <div class="form-actions">
                    <input type="submit" value="Konfirmasi">
                </div>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</section>
