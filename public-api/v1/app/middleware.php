<?php
// Application middleware
use Firebase\JWT\JWT as JWT;

$mw_jwt = function ($request, $response, $next) use ($app_settings, $container) {
	$auth_header = $request->getHeaderLine('authorization');
	$result = [];
	
	if ($auth_header) {
		list($jwt) = sscanf($auth_header, 'Bearer %s');

		if ($jwt) {
			try {
				$secretKey = base64_decode($app_settings['jwt']['key']);
				$token = JWT::decode($jwt, $secretKey, [$app_settings['jwt']['algorithm']]);
				$client_ip = getClientIp();
				
				if ($token->data->ip != $client_ip) {
					$handler = $container['unauthorizedHandler']; 
					return $handler($request, $response);
				}
				
				$response = $next($request, $response);
			} catch (Exception $e) {
				$handler = $container['unauthorizedHandler']; 
				return $handler($request, $response);
			}
		} else {
			$handler = $container['forbiddenHandler']; 
			return $handler($request, $response);
		}
	} else {		
		$handler = $container['forbiddenHandler']; 
		return $handler($request, $response);
	}

	return $response;
};
