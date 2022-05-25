<?php

require_once __DIR__ .'/../controller/TicketsController.php';

$app->get('/tickets', '\TicketsController:getAll');

$app->get('/tickets/report', '\TicketsController:getReport');

$app->post('/tickets', '\TicketsController:create');

$app->put('/tickets/{id:[0-9]+}', '\TicketsController:update');

$app->get('/tickets/{id:[0-9]+}', '\TicketsController:getDetail');

$app->get('/tickets/process', '\TicketsController:getProcess');
