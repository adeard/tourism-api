<?php

require_once __DIR__ .'/../controller/EmailsController.php';

/**
 *  @apiDefine EmailData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {String} data.mail_date
 *  @apiSuccess {String} data.subject
 *  @apiSuccess {String} data.email_from
 *  @apiSuccess {String} data.email_to
 *  @apiSuccess {String} data.email_cc
 *  @apiSuccess {String} data.email_bcc
 *  @apiSuccess {String} data.content
 *  @apiSuccess {String} data.content_html
 *  @apiSuccess {String} data.mail_error_info
 *  @apiSuccess {Number} data.email_status_id
 *  @apiSuccess {Number} data.is_complete
 *  @apiSuccess {String} data.created
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {Number} data.user_id
 *  @apiSuccess {String} data.contact_name
 *  @apiSuccess {Number} data.contact_type_id
 *  @apiSuccess {Number} data.customer_id
 */

/**
 *  @apiDefine EmailDataParam
 *  @apiParam {String} mail_date
 *  @apiParam {String} subject
 *  @apiParam {String} email_from
 *  @apiParam {String} email_to
 *  @apiParam {String} email_cc
 *  @apiParam {String} email_bcc
 *  @apiParam {String} content
 *  @apiParam {String} content_html
 *  @apiParam {String} mail_error_info
 *  @apiParam {Number} email_status_id
 *  @apiParam {Number} is_complete
 *  @apiParam {String} created
 *  @apiParam {Number} direction_id
 *  @apiParam {Number} user_id
 *  @apiParam {String} contact_name
 *  @apiParam {Number} contact_type_id
 *  @apiParam {Number} customer_id
 */

 /**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All
 *  @api {get} /emails Get All
 *  @apiName getAll
 *  @apiGroup Emails
 *  
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse EmailDataParam
 *  
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Number} total_data Count total data
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse EmailData
 *  @apiUse Paging
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
				"id": "6",
				"direction_id": "2",
				"sms_status_id": "2",
				"queue_time": "0000-00-00 00:00:00",
				"process_time": null,
				"read_time": "0000-00-00 00:00:00",
				"message": "message",
				"recipient": null,
				"reference": null,
				"delivery_report": null,
				"delivery_code": null,
				"delivery_status": null,
				"delivery_time": null,
				"sender": "087777",
				"replied": null,
				"reply_id": null,
				"user_id": null,
				"contact_name": "contact name",
				"contact_type_id": "0",
				"customer_id": null
			}
		],
		"paging": {
			"current": 1,
			"next": 1,
			"previuos": 1,
			"first": 1,
			"last": 1
		}	
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ServerError
 */
$app->get('/emails', '\EmailsController:getAll');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get Email data by given Email Status ID and status Complete
 *  @api {get} /email_statuses/:email_status_id/emails/is_complete Ready to send
 *  @apiName checkEmail
 *  @apiGroup Emails
 *  
 *  @apiParam {Number} email_status_id Email Status ID
 *  
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Number} total_data Count total data
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse EmailData
 *  @apiUse Paging
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
				"id": "6",
				"direction_id": "2",
				"sms_status_id": "2",
				"queue_time": "0000-00-00 00:00:00",
				"process_time": null,
				"read_time": "0000-00-00 00:00:00",
				"message": "message",
				"recipient": null,
				"reference": null,
				"delivery_report": null,
				"delivery_code": null,
				"delivery_status": null,
				"delivery_time": null,
				"sender": "087777",
				"replied": null,
				"reply_id": null,
				"user_id": null,
				"contact_name": "contact name",
				"contact_type_id": "0",
				"customer_id": null
			}
		],
		"paging": {
			"current": 1,
			"next": 1,
			"previuos": 1,
			"first": 1,
			"last": 1
		}	
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ServerError
 */
$app->get('/email_statuses/{email_status_id:[0-9]}/emails/is_complete', '\EmailsController:checkEmail');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Update Email by given ID
 *  @api {put} /emails/:id Update
 *  @apiName update
 *  @apiGroup Emails
 *  
 *  @apiParam {Number} id Email ID
 *  @apiUse EmailDataParam
 *  
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Object} data Response data
 *  @apiSuccess {String} data.id User ID
 *  
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"data": {
			"id": "12"
		}
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ClientErrorNotFound
 *  @apiUse ServerError
 */
$app->put('/emails/{id:[0-9]+}', '\EmailsController:update');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create New Email Data
 *  @api {post} /emails Create
 *  @apiName create
 *  @apiGroup Emails
 *  
 *  @apiUse EmailDataParam
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
$app->post('/emails', '\EmailsController:create');
