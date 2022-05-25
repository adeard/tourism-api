<?php

require_once __DIR__ .'/../controller/DestinationAccountsController.php';

$app->post('/destination_accounts', '\DestinationAccountsController:create')->add($mw_jwt);

$app->put('/destination_accounts/{id:[0-9]+}', '\DestinationAccountsController:update')->add($mw_jwt);

$app->get('/destination_accounts/active', '\DestinationAccountsController:getAll')->add($mw_jwt);

$app->get('/destination_accounts/{id:[0-9]+}', '\DestinationAccountsController:getDetail')->add($mw_jwt);

$app->delete('/destination_accounts/{id:[0-9]+}', '\DestinationAccountsController:delete')->add($mw_jwt);
