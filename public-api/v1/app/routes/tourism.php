<?php

require_once __DIR__ .'/../controller/TourismController.php';

$app->post('/tourism', '\TourismController:create')->add($mw_jwt);

$app->put('/tourism/{id:[0-9]+}', '\TourismController:update')->add($mw_jwt);

$app->get('/tourism/{id:[0-9]+}', '\TourismController:getDetail');

$app->get('/tourism', '\TourismController:getAll');

$app->delete('/tourism/{id:[0-9]+}', '\TourismController:delete')->add($mw_jwt);