<?php

require_once __DIR__ .'/../controller/CitiesController.php';

$app->post('/cities', '\CitiesController:create')->add($mw_jwt);

$app->put('/cities/{id:[0-9]+}', '\CitiesController:update')->add($mw_jwt);

$app->get('/cities', '\CitiesController:getAll')->add($mw_jwt);

$app->get('/cities/active', '\CitiesController:getAllActive');

$app->get('/cities/{id:[0-9]+}/active', '\CitiesController:getDetailCitiesActive')->add($mw_jwt);

$app->get('/cities/{id:[0-9]+}', '\CitiesController:getDetailCities')->add($mw_jwt);

$app->get('/province/{province_id:[0-9]+}/cities', '\CitiesController:getProvince');

$app->delete('/cities/{id:[0-9]+}', '\CitiesController:delete')->add($mw_jwt);
