<?php

require_once __DIR__ .'/../controller/ReportFiltersController.php';

$app->get('/report_filters/active', '\ReportFiltersController:getAll');

$app->get('/report_filters/{id:[0-9]+}/active', '\ReportFiltersController:getDetail');

$app->post('/report_filters', '\ReportFiltersController:create');

$app->put('/report_filters/{id:[0-9]+}', '\ReportFiltersController:update');

$app->delete('/report_filters/{id:[0-9]+}', '\ReportFiltersController:delete');
