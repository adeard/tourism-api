<?php

require_once __DIR__ .'/../controller/CustomerFeedbackController.php';

$app->post('/customer_feedback', '\CustomerFeedbackController:create')->add($mw_jwt);

$app->put('/customer_feedback/{id:[0-9]+}', '\CustomerFeedbackController:update')->add($mw_jwt);

$app->get('/customer_feedback/{id:[0-9]+}', '\CustomerFeedbackController:getDetail');

$app->get('/customer_feedback', '\CustomerFeedbackController:getAll');

$app->delete('/customer_feedback/{id:[0-9]+}', '\CustomerFeedbackController:delete')->add($mw_jwt);