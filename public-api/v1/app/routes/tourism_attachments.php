<?php

require_once __DIR__ .'/../controller/TourismAttachmentsController.php';

$app->post('/tourism_attachments/photo', '\TourismAttachmentsController:createPhoto')->add($mw_jwt);

$app->post('/tourism_attachments/video', '\TourismAttachmentsController:createVideo')->add($mw_jwt);

$app->delete('/tourism_attachments/{id:[0-9]+}', '\TourismAttachmentsController:delete')->add($mw_jwt);

$app->get('/tourism_attachments/{id:[0-9]+}', '\TourismAttachmentsController:getDetail')->add($mw_jwt);

$app->get('/tourism/{tourism_id:[0-9]+}/tourism_attachments', '\TourismAttachmentsController:getByTourism');

$app->get('/tourism_attachments/{id:[0-9]+}/file', '\TourismAttachmentsController:download')->add($mw_jwt);