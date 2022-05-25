<?php

require_once __DIR__ .'/../controller/ContinentsController.php';

$app->post('/continents', '\ContinentsController:create')->add($mw_jwt);

$app->put('/continents/{id:[0-9]+}', '\ContinentsController:update')->add($mw_jwt);

$app->delete('/continents/{id:[0-9]+}', '\ContinentsController:delete')->add($mw_jwt);

$app->get('/continents', '\ContinentsController:getAll');

$app->get('/continents/{id:[0-9]+}', '\ContinentsController:getDetailProvinces')->add($mw_jwt);
