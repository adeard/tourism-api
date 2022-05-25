<?php

require_once __DIR__ .'/../controller/SocketsController.php';

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Send Message to Socket.io's event
 *  @api {post} /sockets Send
 *  @apiName create
 *  @apiGroup Sockets
 *  
 *  @apiParam {String} event Socket.io's event
 *  @apiParam {String} message Event's message
 *  
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Object} data Response data
 *  @apiSuccess {String} data.event Socket.io's event
 *  @apiSuccess {String} data.message Event's message
 *  
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 Created
	{
		"request_time": 1482388575,
		"execution_time": 1,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"event": "event_name",
			"message": "message content"
		}
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ServerError
 */
$app->post('/sockets', '\SocketsController:create');
