<?php

require_once __DIR__ .'/../controller/UserAttachmentsController.php';

$app->post('/user_attachments', '\UserAttachmentsController:create')->add($mw_jwt);

$app->delete('/user_attachments/{id:[0-9]+}', '\UserAttachmentsController:delete')->add($mw_jwt);

$app->get('/user_attachments/{id:[0-9]+}', '\UserAttachmentsController:getDetail')->add($mw_jwt);

$app->get('/user_attachments/{id:[0-9]+}/file', '\UserAttachmentsController:download')->add($mw_jwt);