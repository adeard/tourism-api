<?php

$app->get('/', function($request, $response) {
	$result = [
		'Api Name' => 'Synergix Private API',
		'Description' => 'Only use these API for Gateway Service',
		'Version' => '1.0'
	];
	
	return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
});