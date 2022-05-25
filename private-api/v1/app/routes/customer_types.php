<?php

require_once __DIR__ .'/../controller/CustomerTypesController.php';

$app->post('/customer_types', '\CustomerTypesController:create');

$app->put('/customer_types/{id:[0-9]+}', '\CustomerTypesController:update');

$app->get('/customer_types/active', '\CustomerTypesController:getAll');

$app->get('/customer_types/{id:[0-9]+}/active', '\CustomerTypesController:getDetail');

$app->delete('/customer_types/{id:[0-9]+}', '\CustomerTypesController:delete');