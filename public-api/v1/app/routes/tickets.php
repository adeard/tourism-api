<?php

require_once __DIR__ .'/../controller/TicketsController.php';

$app->get('/tickets', '\TicketsController:getAll')->add($mw_jwt);

$app->get('/tickets/report', '\TicketsController:getReport')->add($mw_jwt);

$app->post('/tickets', '\TicketsController:create')->add($mw_jwt);

$app->put('/tickets/{id:[0-9]+}', '\TicketsController:update')->add($mw_jwt);

$app->get('/tickets/{id:[0-9]+}', '\TicketsController:getDetail')->add($mw_jwt);

$app->get('/tickets/{ticket_no:[0-9]+}/ticket_no', '\TicketsController:getDetailByTicketNo');

$app->get('/users/{user_id:[0-9]+}/tickets', '\TicketsController:getTicketsByUser')->add($mw_jwt);

$app->get('/users/{user_id:[0-9]+}/admin', '\TicketsController:getTicketsByUserAdmin')->add($mw_jwt);

$app->get('/users/{user_id:[0-9]+}/tickets/checkout', '\TicketsController:getTicketsCheckoutByUser')->add($mw_jwt);

$app->get('/users/{user_id:[0-9]+}/tickets/invoices', '\TicketsController:getTicketsInvoiceByUser')->add($mw_jwt);

$app->get('/tickets/survey', '\TicketsController:getSurvey')->add($mw_jwt);

$app->delete('/tickets/{id:[0-9]+}', '\TicketsController:delete')->add($mw_jwt);
