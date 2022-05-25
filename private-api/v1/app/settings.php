<?php
// Application settings
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => true, // Allow the web server to send the content-length header
    ],
	'socket.io' => [
		'base_url' => 'http://192.168.0.196:8001'
	],
	'jwt' => [
		'key' => '4d34rd14n',
		'algorithm' => 'HS256',
		//'live' => 1, // token will apply after this value (in seconds)
		'expire' => 300, // token will expire after this value (in seconds)
	],
	'database' => [
		'username' => 'root',
		'password' => 'namakamu',
		'host' => 'localhost',
		'dbname' => 'db_pariwisata'
	]
];
