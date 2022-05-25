<?php

require_once __DIR__ .'/../controller/UserLevelsController.php';

$app->post('/user_levels', '\UserLevelsController:create')->add($mw_jwt);

$app->put('/user_levels/{id:[0-9]+}', '\UserLevelsController:update')->add($mw_jwt);

$app->get('/user_levels/active', '\UserLevelsController:getAll')->add($mw_jwt);

$app->get('/user_levels/{id:[0-9]+}/active', '\UserLevelsController:getDetailUserLevel')->add($mw_jwt);

$app->delete('/user_levels/{id:[0-9]+}', '\UserLevelsController:delete')->add($mw_jwt);