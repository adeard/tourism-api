<?php

require_once __DIR__ .'/../controller/TicketStatusesController.php';

$app->post('/ticket_statuses', '\TicketStatusesController:create')->add($mw_jwt);

$app->put('/ticket_statuses/{id:[0-9]+}', '\TicketStatusesController:update')->add($mw_jwt);

$app->get('/ticket_statuses/active', '\TicketStatusesController:getAll')->add($mw_jwt);

$app->delete('/ticket_statuses/{id:[0-9]+}', '\TicketStatusesController:delete')->add($mw_jwt);