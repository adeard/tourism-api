<?php

require_once __DIR__ .'/../controller/UserMetasController.php';

$app->post('/user_metas', '\UserMetasController:create');

$app->put('/user_metas/{id:[0-9]+}', '\UserMetasController:update')->add($mw_jwt);

$app->get('/user_metas', '\UserMetasController:getAll')->add($mw_jwt);

$app->delete('/user_metas/{id:[0-9]+}', '\UserMetasController:delete')->add($mw_jwt);
