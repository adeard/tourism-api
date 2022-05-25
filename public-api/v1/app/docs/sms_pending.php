<?php

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
 *  @apiDescription Create
 *  @api {post} /sms_pending Create
 *  @apiName create
 *  @apiGroup Sms Pending
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse SmsPendingDataParam
 *
 *  @apiSuccess (Success 201) {Number} request_time Request time (timestamp)
 *  @apiSuccess (Success 201) {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess (Success 201) {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess (Success 201) {String} status Response status <b>(success)</b>
 *  @apiSuccess (Success 201) {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess (Success 201) {Object[]} data Response data (Array of Object)
 *	@apiSuccess (Success 201) {Number} data.id
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 201 Created
	{
		"request_time": 1481884440,
		"execution_time": 0,
		"response_code": 201,
		"status": "success",
		"data": {
			"id": "1"
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ClientErrorUnauthorized
 *  @apiUse ClientErrorForbidden
 *  @apiUse ServerError
 */