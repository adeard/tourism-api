<?php

/**
 *  @apiDefine SmsArchivesData
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
 *  @apiSuccess {String} data.contact_name
 *  @apiSuccess {Number} data.contact_type_id
 *  @apiSuccess {Number} data.customer_id
 */
 
/**
 *  @apiDefine SmsArchivesDataParam
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
 *  @apiParam {String} contact_name
 *  @apiParam {Number} contact_type_id
 *  @apiParam {Number} customer_id
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Update
 *  @api {put} /sms_archive/:id Update
 *  @apiName update
 *  @apiGroup Sms Archives
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse SmsArchivesDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiSuccess {String} data.id
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482122824,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"data": {
			"id": "3"
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ClientErrorUnauthorized
 *  @apiUse ClientErrorForbidden
 *  @apiUse ClientErrorNotFound
 *  @apiUse ServerError
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Update Booked SMS
 *  @api {put} /sms_archive/booking Update Booked SMS Archives
 *  @apiName updateBooked
 *  @apiGroup Sms Archives
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiSuccess {Number} data.sms_status_id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {Number} data.user_id
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482391916,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"data": {
			"sms_status_id": 1,
			"direction_id": 1,
			"user_id": null
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ClientErrorUnauthorized
 *  @apiUse ClientErrorForbidden
 *  @apiUse ClientErrorNotFound
 *  @apiUse ServerError
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All Unread SMS Archive
 *  @api {get} /sms_archive/unread Get All Unread SMS Archive
 *  @apiName countUnreadSms
 *  @apiGroup Sms Archives
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse SmsArchivesData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482133301,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"total_data": 2,
		"data": [
			{
				"id": "9",
				"direction_id": "1",
				"sms_status_id": "1",
				"queue_time": "2010-02-03 09:20:00",
				"process_time": null,
				"read_time": "0000-00-00 00:00:00",
				"message": "bug",
				"recipient": null,
				"reference": null,
				"delivery_report": null,
				"delivery_code": null,
				"delivery_status": null,
				"delivery_time": null,
				"sender": "088332",
				"replied": null,
				"reply_id": null,
				"user_id": "0",
				"inbound_media_id": null,
				"inbound_media_record_id": null,
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null
			},
			{
				"id": "12",
				"direction_id": "1",
				"sms_status_id": "1",
				"queue_time": "2016-11-15 15:27:57",
				"process_time": null,
				"read_time": null,
				"message": "cobaiseng",
				"recipient": null,
				"reference": null,
				"delivery_report": null,
				"delivery_code": null,
				"delivery_status": null,
				"delivery_time": null,
				"sender": "08888",
				"replied": null,
				"reply_id": null,
				"user_id": null,
				"inbound_media_id": null,
				"inbound_media_record_id": null,
				"contact_name": null,
				"contact_type_id": null,
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
 *  @apiUse ClientErrorUnauthorized
 *  @apiUse ClientErrorForbidden
 *  @apiUse ServerError
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Read by SMS Archives ID
 *  @api {get} /sms_archive/:id Read by SMS Archives ID
 *  @apiName getDetail
 *  @apiGroup Sms Archives
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse SmsArchivesData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482392942,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"id": "2",
			"direction_id": "2",
			"sms_status_id": "3",
			"queue_time": "2016-09-26 16:50:53",
			"process_time": null,
			"read_time": null,
			"message": "pesan terahir",
			"recipient": null,
			"reference": null,
			"delivery_report": null,
			"delivery_code": null,
			"delivery_status": null,
			"delivery_time": null,
			"sender": null,
			"replied": null,
			"reply_id": null,
			"user_id": null,
			"inbound_media_id": null,
			"inbound_media_record_id": null,
			"contact_name": null,
			"contact_type_id": null,
			"customer_id": null
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ClientErrorNotFound
 *  @apiUse ClientErrorUnauthorized
 *  @apiUse ClientErrorForbidden
 *  @apiUse ServerError
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Read Booking SMS Archive by User ID
 *  @api {get} /users/:user_id/sms_archive/booking Read Booking SMS Archive by User ID
 *  @apiName bookedSms
 *  @apiGroup Sms Archives
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse SmsArchivesData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482393235,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"id": "64",
			"direction_id": "1",
			"sms_status_id": "1",
			"queue_time": "2016-12-22 01:42:44",
			"process_time": null,
			"read_time": "2016-12-22 14:34:23",
			"message": "xxxxxxxx",
			"recipient": null,
			"reference": null,
			"delivery_report": null,
			"delivery_code": null,
			"delivery_status": null,
			"delivery_time": null,
			"sender": "09090909090",
			"replied": null,
			"reply_id": null,
			"user_id": "19",
			"inbound_media_id": null,
			"inbound_media_record_id": null,
			"contact_name": "rereerteete",
			"contact_type_id": "4",
			"customer_id": "6"
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ClientErrorNotFound
 *  @apiUse ClientErrorUnauthorized
 *  @apiUse ClientErrorForbidden
 *  @apiUse ServerError
 */