<?php

require_once __DIR__ .'/../controller/VoiceMailsController.php';

$app->put('/voice_mails/booking', '\VoiceMailsController:updateBooking');

$app->get('/users/{user_id:[0-9]+}/voice_mails/booking', '\VoiceMailsController:getBooking');
