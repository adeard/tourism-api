<?php

require_once __DIR__ .'/../controller/PaymentConfirmationsController.php';

$app->post('/payment_confirmations', '\PaymentConfirmationsController:create')->add($mw_jwt);

$app->delete('/payment_confirmations/{id:[0-9]+}', '\PaymentConfirmationsController:delete')->add($mw_jwt);

$app->get('/payment_confirmations/{id:[0-9]+}', '\PaymentConfirmationsController:getDetail')->add($mw_jwt);

$app->get('/payment_confirmations/{id:[0-9]+}/file', '\PaymentConfirmationsController:download')->add($mw_jwt);

$app->get('/payment_confirmations', '\PaymentConfirmationsController:getAll')->add($mw_jwt);

$app->put('/payment_confirmations/{id:[0-9]+}', '\PaymentConfirmationsController:update')->add($mw_jwt);