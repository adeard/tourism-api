<section class="checkout-section-demo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="checkout-page__content">
                    <div class="complete-content">
                        <div class="woocommerce-info">
                            <b>Invoice No TIcket : <?php echo $Tickets['ticket_no']  ?></b>
                        </div>
                        <div class="your-order">
                            <div class="billing-info">
                                <h2>Keterangan</h2>
                                <table class="billing-table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h4 class="title">Destinasi Tujuan</h4>
                                                <p><?php echo ucwords($Tickets['tourism_name'])  ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="title">Jumlah Tiket</h4>
                                                <p><?php echo $Tickets['total_ticket']  ?></p>
                                            </td>
                                            <td>
                                                <h4 class="title">Total</h4>
                                                <p>Rp. <?php echo number_format($Tickets['total_price'], 0, ",", ".")  ?></p>
                                            </td>
                                        </tr>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>