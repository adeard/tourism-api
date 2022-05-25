<section class="checkout-section-demo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="checkout-page__content">
                            <div class="yourcart-content">
                                <div class="content-title">
                                    <h2><i class="awe-icon awe-icon-cart"></i>Keranjang</h2>
                                </div>
                                <?php echo $this->Form->create(null, ['url' => ['action' => 'checkout',$this->request->session()->read('Auth.User.id')], 'id' => 'AddTicket', 'type' => 'file']); ?>
                                <div class="cart-content">
                                    <table class="cart-table">
                                        <tbody>
                                            <?php
                                                foreach ($Tickets['data'] as $ticket) {
                                            ?>
                                                <tr>
                                                    <td class="product-remove">
                                                        <a href="<?php echo $this->request->webroot; ?>cart/delete/<?php echo $ticket['id'] ?>"><i class="awe-icon awe-icon-close-o"></i></a>
                                                    </td>
                                                    <td class="product-name">
                                                        <span><?php echo ucwords($ticket['tourism_name']) ?></span>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amount">Rp <?php echo number_format($ticket['price'], 0, ",", ".") ?></span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <span><?php echo number_format($ticket['total_ticket'], 0, ",", ".") ?></span>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="amount">Rp <?php echo number_format($ticket['total_price'], 0, ",", ".") ?></span>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    

                                    <div class="cart-footer">
                                        <div class="order-total">
                                            <h4 class="title">Total Harga</h4>
                                            <?php 
                                                $total_user_ticket = 0;
                                                for ($i=0; $i < count($Tickets['data']) ; $i++) { 
                                                    $total_user_ticket += $Tickets['data'][$i]['total_price'];
                                                }
                                            ?>
                                            <span class="amount">Rp <?php echo number_format($total_user_ticket, 0, ",", ".") ?></span>
                                        </div>
                                        <div class="cart-submit">
                                            <input type="submit" value="Checkout" class="checkout">
                                        </div>
                                    </div>
                                </div>
                                <?php echo $this->Form->end(); ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>