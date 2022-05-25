<?php

/**
 *  @apiDefine Paging
 *    
 *  @apiSuccess {Object} paging Data paging (can be set from uri parameter 'page' & 'limit'. ex: '<b>?page=1&limit=10</b>')
 *  @apiSuccess {Number} paging.current Current page
 *  @apiSuccess {Number} paging.next Next page
 *  @apiSuccess {Number} paging.previuos Previous page
 *  @apiSuccess {Number} paging.first First page
 *  @apiSuccess {Number} paging.last Last page
 */
	
/**
 *  @apiDefine ClientError
 *  
 *  @apiError {Number} request_time Request time (timestamp)
 *  @apiError {Number} execution_time Request execution time (in seconds)
 *  @apiError {Number} response_code Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b>
 *  @apiError {String} status Response status <b>(error)</b>
 *  @apiError {String} message Error Message
 */
 
// DIC configuration
$container = $app->getContainer();
$error_message = '';

/**
 *	Internal Server Error	
 *  @apiDefine ServerError
 *  
 *  @apiError (Error 500) {Number} request_time Request time (timestamp)
 *  @apiError (Error 500) {Number} execution_time Request execution time (in seconds)
 *  @apiError (Error 500) {Number} response_code Response Code <b>(500)</b>
 *  @apiError (Error 500) {String} status Response status <b>(fail)</b>
 *  @apiError (Error 500) {String} message Error Message
 *  
 *  @apiErrorExample {json} Error 500-Response:
	HTTP/1.1 500 Internal Server Error
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 500,
		"status": "fail",
		"message": "Internal Server Error"
	}
 */
$container['errorHandler'] = function ($c) {
    return function ($request, $response, $exception) use ($c) {
		$result = [];
		$result['request_time'] = $_SERVER['REQUEST_TIME'];
		$result['execution_time'] = executionTime($result['request_time']);
		$result['response_code'] = 500;
		$result['status'] = 'fail';
		$result['message'] = 'Internal Server Error';
		
        return $c['response']->withJson($result)
				->withHeader('Content-Type', 'application/json')
				->withStatus(500);
    };
}; 

/**
 *  Not Found
 *  @apiDefine ClientErrorNotFound
 *  
 *  @apiErrorExample {json} Error 404-Response:
	HTTP/1.1 404 Not Found
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 404,
		"status": "error",
		"message": "Not Found"
	}
 */
$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
		$result = [];
		$result['request_time'] = $_SERVER['REQUEST_TIME'];
		$result['execution_time'] = executionTime($result['request_time']);
		$result['response_code'] = 404;
		$result['status'] = 'error';
		$result['message'] = 'Not Found';
		
		return $c['response']->withJson($result)
				->withHeader('Content-Type', 'application/json')
				->withStatus(404);
    };
};

/**
 *  Method Not Allowed
 *  @apiDefine ClientErrorNotAllowed
 *  
 *  @apiErrorExample {json} Error 405-Response:
	HTTP/1.1 405 Method Not Allowed
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 405,
		"status": "error",
		"message": "Method Not Allowed"
	}
 */
$container['notAllowedHandler'] = function ($c) {
    return function ($request, $response, $methods) use ($c) {
        $result = [];
		$result['request_time'] = $_SERVER['REQUEST_TIME'];
		$result['execution_time'] = executionTime($result['request_time']);
		$result['response_code'] = 405;
		$result['status'] = 'error';
		$result['message'] = 'Method Not Allowed'; // 'Method must be one of: ' . implode(', ', $methods);
		
		return $c['response']->withJson($result)
				->withHeader('Allow', implode(', ', $methods))
				->withHeader('Content-Type', 'application/json')
				->withStatus(405);
    };
};

/**
 *  Bad Request
 *  @apiDefine ClientErrorBadRequest
 *  
 *  @apiErrorExample {json} Error 400-Response:
	HTTP/1.1 400 Bad Request
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 400,
		"status": "error",
		"message": "Bad Request"
	}
 */
$container['badRequestHandler'] = function ($c) use ($error_message) {
    return function ($request, $response, $error_message = '') use ($c) {
		$result = [];
		$result['request_time'] = $_SERVER['REQUEST_TIME'];
		$result['execution_time'] = executionTime($result['request_time']);
		$result['response_code'] = 400;
		$result['status'] = 'error';
		$result['message'] = (empty($error_message)) ? 'Bad Request' : 'Bad Request. '.$error_message;
		
		return $c['response']->withJson($result)
				->withHeader('Content-Type', 'application/json')
				->withStatus(400);
    };
};

/**
 *  Unauthorized
 *  @apiDefine ClientErrorUnauthorized
 *  
 *  @apiErrorExample {json} Error 401-Response:
	HTTP/1.1 401 Unauthorized
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 401,
		"status": "error",
		"message": "Unauthorized"
	}
 */
$container['unauthorizedHandler'] = function ($c) use ($error_message) {
    return function ($request, $response, $error_message = '') use ($c) {		
		$result = [];
		$result['request_time'] = $_SERVER['REQUEST_TIME'];
		$result['execution_time'] = executionTime($result['request_time']);
		$result['response_code'] = 401;
		$result['status'] = 'error';
		$result['message'] = (empty($error_message)) ? 'Unauthorized' : 'Unauthorized. '.$error_message;
		
		return $c['response']->withJson($result)
				->withHeader('Content-Type', 'application/json')
				->withStatus(401);
    };
};

/**
 *  Forbidden
 *  @apiDefine ClientErrorForbidden
 *  
 *  @apiErrorExample {json} Error 401-Response:
	HTTP/1.1 403 Forbidden
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 403,
		"status": "error",
		"message": "Forbidden"
	}
 */
$container['forbiddenHandler'] = function ($c) use ($error_message) {
    return function ($request, $response, $error_message = '') use ($c) {		
		$result = [];
		$result['request_time'] = $_SERVER['REQUEST_TIME'];
		$result['execution_time'] = executionTime($result['request_time']);
		$result['response_code'] = 403;
		$result['status'] = 'error';
		$result['message'] = (empty($error_message)) ? 'Forbidden' : 'Forbidden. '.$error_message;
		
		return $c['response']->withJson($result)
				->withHeader('Content-Type', 'application/json')
				->withStatus(403);
    };
};

// Settings
$container['globalSettings'] = function ($c) use ($app_settings) { 
	$settings = $app_settings;
	
    return $settings; 
};