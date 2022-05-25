<?php

require_once __DIR__ .'/../controller/UsersController.php';

$app->post('/users/token', '\UsersController:login');

$app->get('/users', '\UsersController:getAll')->add($mw_jwt);

$app->get('/users/enable', '\UsersController:getAllEnable')->add($mw_jwt);

$app->get('/users/user_escort', '\UsersController:getUserEscort')->add($mw_jwt);

$app->get('/users/report_escort', '\UsersController:getReportEscort')->add($mw_jwt);

$app->get('/view_users', '\UsersController:getViewUsers')->add($mw_jwt);

$app->post('/users', '\UsersController:create');

$app->get('/users/{id:[0-9]+}', '\UsersController:getDetail')->add($mw_jwt);

$app->get('/users/{current_unique_id}/unique', '\UsersController:getDetailUnique')->add($mw_jwt);

$app->put('/users/{id:[0-9]+}', '\UsersController:update')->add($mw_jwt);

$app->put('/users/password/{id:[0-9]+}', '\UsersController:updatePassword')->add($mw_jwt);

$app->get('/view_monitoring_user_count', '\UsersController:getMonitoringUserCount')->add($mw_jwt);

$app->post('/users/picture', '\UsersController:upload')->add($mw_jwt);

$app->get('/users/{id:[0-9]+}/picture', '\UsersController:getPhoto')->add($mw_jwt);

$app->get('/users/technician', '\UsersController:getTechnician')->add($mw_jwt);

$app->delete('/users/{id:[0-9]+}', '\UsersController:delete')->add($mw_jwt);
