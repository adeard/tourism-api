<?php

require_once __DIR__ .'/../controller/SmsArchivesController.php';

/**
 *  @apiDefine SmsPendingData
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
 *  @apiDefine SmsPendingDataParam
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
 *  @apiDescription Get Sms Archive by Direction ID & Email Status ID
 *  @api {get} /directions/:direction_id/sms_statuses/:sms_status_id/sms_archives Read by Direction ID & Email Status ID
 *  @apiName getByDirectionStatus
 *  @apiGroup Sms Archive
 *  
 *  @apiParam {Number} direction_id Direction ID
 *  @apiParam {Number} sms_status_id Sms Status ID
 *  
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Number} total_data Count total data
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse SmsPendingData
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
$app->get('/directions/{direction_id:[0-9]}/sms_statuses/{sms_status_id:[0-9]}/sms_archives', '\SmsArchivesController:getByDirectionStatus');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Update Sms Archive by given ID
 *  @api {put} /sms_archives/:id Update
 *  @apiName update
 *  @apiGroup Sms Archive
 *  
 *  @apiParam {Number} id Sms Archive ID
 *  @apiUse UserDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Object} data Response data
 *  @apiSuccess {Number} data.id Sms Archive ID
 *  
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"data": {
			"id": 4
		}
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ClientErrorNotFound
 *  @apiUse ServerError
 */
$app->put('/sms_archives/{id:[0-9]+}', '\SmsArchivesController:update');