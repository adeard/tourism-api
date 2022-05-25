<?php

require_once __DIR__ .'/../controller/GendersController.php';

$app->post('/genders', '\GendersController:create')->add($mw_jwt);

$app->put('/genders/{id:[0-9]+}', '\GendersController:update')->add($mw_jwt);

$app->get('/genders', '\GendersController:getAll')->add($mw_jwt);

$app->get('/genders/{id:[0-9]+}', '\GendersController:getDetail')->add($mw_jwt);

$app->delete('/genders/{id:[0-9]+}', '\GendersController:delete')->add($mw_jwt);
