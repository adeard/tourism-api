<?php

require_once __DIR__ .'/../controller/SmsPendingController.php';

/**
 *  @apiDefine SmsPendingData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {Number} data.sms_status_id
 *  @apiSuccess {String} data.queue_time
 *  @apiSuccess {String} data.process_time
 *  @apiSuccess {String} data.read_time
 *  @apiSuccess {String} data.message
 *  @apiSuccess {String} data.recipient
 *  @apiSuccess {String} data.reference
 *  @apiSuccess {Number} data.delivery_report
 *  @apiSuccess {Number} data.delivery_code
 *  @apiSuccess {String} data.delivery_status
 *  @apiSuccess {String} data.delivery_time
 *  @apiSuccess {String} data.sender
 *  @apiSuccess {Number} data.replied
 *  @apiSuccess {Number} data.reply_id
 *  @apiSuccess {Number} data.user_id
 *  @apiSuccess {Number} data.inbound_media_id
 *  @apiSuccess {Number} data.inbound_media_record_id
 *  @apiSuccess {String} data.contact_name
 *  @apiSuccess {Number} data.contact_type_id
 *  @apiSuccess {Number} data.customer_id
 */

/**
 *  @apiDefine SmsPendingDataParam
 *  @apiParam {Number} direction_id
 *  @apiParam {Number} sms_status_id
 *  @apiParam {String} queue_time
 *  @apiParam {String} process_time
 *  @apiParam {String} read_time
 *  @apiParam {String} message
 *  @apiParam {String} recipient
 *  @apiParam {String} reference
 *  @apiParam {Number} delivery_report
 *  @apiParam {Number} delivery_code
 *  @apiParam {String} delivery_status
 *  @apiParam {String} delivery_time
 *  @apiParam {String} sender
 *  @apiParam {Number} replied
 *  @apiParam {Number} reply_id
 *  @apiParam {Number} user_id
 *  @apiParam {Number} inbound_media_id
 *  @apiParam {Number} inbound_media_record_id
 *  @apiParam {String} contact_name
 *  @apiParam {Number} contact_type_id
 *  @apiParam {Number} customer_id
 */
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get SMS needs to be send
 *  @api {get} /sms_pending/ready Ready to send
 *  @apiName checkSms
 *  @apiGroup Sms Pending
 *  
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {Number} limit=20 Limit data
 *  
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Number} total_data Count total data
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse SmsPendingData
 *  
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": [
			{
				"id": "9",
				"recipient": null,
				"message": "tes aja kok",
				"sms_date": "2010-10-17",
				"sms_time": "09:25:12"
			}
		]
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ServerError
 */
$app->get('/sms_pending/ready', '\SmsPendingController:readyList');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create New Sms Pending Data
 *  @api {post} /sms_pending Create
 *  @apiName create
 *  @apiGroup Sms Pending
 *  
 *  @apiUse SmsPendingDataParam
 *  
 *  @apiSuccess (Success 201) {Number} request_time Request time (timestamp)
 *  @apiSuccess (Success 201) {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess (Success 201) {Number} response_code Response Code
 *  @apiSuccess (Success 201) {String} status Response status <b>(success)</b>
 *  @apiSuccess (Success 201) {Object} data Response data
 *  @apiSuccess (Success 201) {Number} data.id ID of created data
 *  
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 201 Created
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 201,
		"status": "success",
		"data": {
			"id": "12"
		}
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ServerError
 */
$app->post('/sms_pending', '\SmsPendingController:create');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Delete SMS Pending data by ID
 *  @api {delete} /sms_pending/:id Delete
 *  @apiName delete
 *  @apiGroup Sms Pending
 *  
 *  @apiParam {Number} id Sms Pending ID
 *  
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Object} data Response data (Array of Object)
 *  @apiSuccess {Number} data.id ID of deleted data
 *  
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"data": {
			"id": "9"
		}
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorNotFound
 *  @apiUse ServerError
 */
$app->delete('/sms_pending/{id:[0-9]+}', 'SmsPendingController:delete');