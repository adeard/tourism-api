<?php

require_once __DIR__ .'/../controller/ProvincesController.php';

$app->post('/provinces', '\ProvincesController:create')->add($mw_jwt);

$app->put('/provinces/{id:[0-9]+}', '\ProvincesController:update')->add($mw_jwt);

$app->delete('/provinces/{id:[0-9]+}', '\ProvincesController:delete')->add($mw_jwt);

$app->get('/provinces', '\ProvincesController:getAll');

$app->get('/provinces/{id:[0-9]+}/countries', '\ProvincesController:getAllByCountries');

$app->get('/provinces/{id:[0-9]+}/active', '\ProvincesController:getDetailProvinces')->add($mw_jwt);
