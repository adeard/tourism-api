<?php
// Request Log
$log_dir = './log/';
$log_name = 'request-'.date('Ymd').'.log';

createLog($log_dir.$log_name);