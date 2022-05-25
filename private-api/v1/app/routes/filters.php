<?php

require_once __DIR__ .'/../controller/FiltersController.php';

$app->post('/filters', '\FiltersController:create');

$app->put('/filters/{id:[0-9]+}', '\FiltersController:update');

$app->get('/filters/active', '\FiltersController:getAll');

$app->get('/filters/{id:[0-9]+}/active', '\FiltersController:getDetail');

$app->delete('/filters/{id:[0-9]+}', '\FiltersController:delete');