<?php

require_once __DIR__ .'/../controller/CountriesController.php';

$app->post('/countries', '\CountriesController:create')->add($mw_jwt);

$app->put('/countries/{id:[0-9]+}', '\CountriesController:update')->add($mw_jwt);

$app->get('/countries', '\CountriesController:getAll')->add($mw_jwt);

$app->get('/countries/{continent_id:[0-9]+}/continent', '\CountriesController:getAllByContinent');

$app->get('/countries/{id:[0-9]+}', '\CountriesController:getDetail')->add($mw_jwt);

$app->delete('/countries/{id:[0-9]+}', '\CountriesController:delete')->add($mw_jwt);
