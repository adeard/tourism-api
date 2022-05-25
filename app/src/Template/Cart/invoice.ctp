<section class="checkout-section-demo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="checkout-page__content">
                            <div class="complete-content">
                                <div class="woocommerce-info">
                                    Thank you for your purchase! We received your order.
                                </div>
                                <div class="your-order">
                                    <h2>Your Order</h2>
                                    <table class="order-table">
                                        <thead>
                                            <tr>
                                                <th>No Tiket</th>
                                                <th>Destinasi Tujuan</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($TicketCheckout['data'] as $ticket_checkout) { ?>
                                                <td><?php echo $ticket_checkout['ticket_no']  ?></td>
                                                <td><?php echo ucwords($ticket_checkout['tourism_name'])  ?></td>
                                                <td><?php echo $ticket_checkout['total_ticket']  ?></td>
                                                <td>Rp. <?php echo number_format($ticket_checkout['total_price'], 0, ",", ".")  ?></td>
                                            <?php } ?>
                                            <tr>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="billing-info">
                                        <h3>Keterangan</h3>
                                        <table class="billing-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h4 class="title">User</h4>
                                                        <p><?php echo $Users['data']['username'] ?></p>
                                                    </td>
                                                    <td>
                                                        <h4 class="title">Nama Lengkap</h4>
                                                        <p><?php echo $Users['data']['fullname'] ?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="title">Email</h4>
                                                        <p><a href="#"><?php echo $Users['data']['email'] ?></a></p>
                                                    </td>
                                                    <td>
                                                        <h4 class="title">Phone</h4>
                                                        <p><?php echo $Users['data']['phone_number'] ?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4 class="title">Info</h4>
                                                        <p style="color:red"><i>Silahkan lakukan transfer dan konfirmasi sesuai total biaya per nomor tiket</i></p>
                                                        <ul>
                                                            <?php foreach ($DestinationAccount['data'] as $destination_account) { ?>
                                                                <li><?php echo $destination_account['bank_account'].' '.$destination_account['account_number'].' '.$destination_account['account_fullname'] ?></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="your-cart-footer text-right">
                                        <a href="<?php echo $this->request->webroot ?>destinations" class="awe-btn awe-btn-style3">Back to Shop</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>