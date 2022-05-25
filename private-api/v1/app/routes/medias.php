<?php

require_once __DIR__ .'/../controller/MediasController.php';

/**
 *  @apiDefine MediaUnreadData
 *  @apiSuccess {Number} data.media_id
 *  @apiSuccess {Number} data.total
 */
 
/**
 *  @apiDefine MediaUnredDataParam
 *  @apiParam {Number} total
 */
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get Total Media Unread
 *  @api {get} /medias/unread Get Total Unread
 *  @apiName unread
 *  @apiGroup Medias
 *  
 *  @apiParam {String} order="media_id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit Limit data
 *  @apiParam {Number} page=1 Page number
 *  
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Number} total_data Count total data
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse MediaUnreadData
 *  
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482393958,
		"execution_time": 1,
		"response_code": 200,
		"status": "success",
		"total_data": 3,
		"data": [
			{
				"media_id": "2",
				"total": "1"
			},
			{
				"media_id": "3",
				"total": "0"
			},
			{
				"media_id": "5",
				"total": "0"
			}
		]
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ServerError
 */
$app->get('/medias/unread', '\MediasController:unread');
