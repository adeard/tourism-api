<?php

require_once __DIR__ .'/../controller/ReportsController.php';

$app->get('/reports/active', '\ReportsController:getAll');

$app->get('/reports/{id:[0-9]+}/active', '\ReportsController:getDetail');

$app->post('/reports', '\ReportsController:create');

$app->put('/reports/{id:[0-9]+}', '\ReportsController:update');

$app->delete('/reports/{id:[0-9]+}', '\ReportsController:delete');
