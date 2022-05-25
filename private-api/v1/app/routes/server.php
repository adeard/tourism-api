<?php

require_once __DIR__ .'/../controller/ServerController.php';

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get Server Time
 *  @api {get} /server/time Get Server Time 
 *  @apiName getTime
 *  @apiGroup Server
 *  
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object} data Response data
 *  @apiSuccess {String} time Sever Time
 *  
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482403664,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"server_time": "2016-12-22 17:45:53"
		}
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ServerError
 */
$app->get('/server/time', '\ServerController:getTime');