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
	'attachment' => [
		// 'photo_user' => 'C:/xampp/htdocs/tourism/app/webroot/photos/user/',
		// 'photo_tourism' => 'C:/xampp/htdocs/tourism/app/webroot/photos/tourism/',
		'video_user' => 'C:/xampp/htdocs/tourism/app/webroot/videos/user/',
		'video_tourism' => 'C:/xampp/htdocs/tourism/app/webroot/video/tourism/',
		'payment_confirmation' => 'C:/xampp/htdocs/tourism/app/webroot/payment/',
		'photo_user' => 'C:/xampp/htdocs/tourism/files/photos/user/',
		'photo_tourism' => 'C:/xampp/htdocs/tourism/files/photos/tourism/',
		'photo_cover_user' => 'C:/xampp/htdocs/tourism/files/photos/cover_user/',
	],
	'jwt' => [
		'key' => '4d34rd14n',
		'algorithm' => 'HS256',
		'live' => 0, // token will apply after this value (in seconds)
		'expire' => 1800, // token will expire after this value (in seconds)
	],
	'database' => [
		'username' => 'root',
		'password' => '',
		'host' => 'localhost',
		'dbname' => 'db_pariwisata'
	]
];
