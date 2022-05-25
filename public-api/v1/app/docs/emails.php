<?php

/**
 *  @apiDefine EmailsData
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
 *  @apiDefine EmailsDataParam
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
 *  @apiDescription Create
 *  @api {post} /emails Create
 *  @apiName create
 *  @apiGroup Emails
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse EmailsDataParam
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

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Update
 *  @api {put} /emails/:id Update
 *  @apiName update
 *  @apiGroup Emails
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse EmailsDataParam
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
 *  @apiDescription Update Booked Email
 *  @api {put} /emails/booking Update Booked Email
 *  @apiName updateBooked
 *  @apiGroup Emails
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {Number} user_id
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiSuccess {String} data.email_status_id
 *  @apiSuccess {String} data.direction_id
 *  @apiSuccess {String} data.user_id
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482230959,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"data": {
			"email_status_id": 7,
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
 *  @apiDescription Read by Emails ID
 *  @api {get} /emails/:id Read by Emails ID
 *  @apiName getDetail
 *  @apiGroup Emails
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
 *  @apiUse EmailsData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482289357,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"id": "1",
			"mail_date": "2016-11-14 15:29:52",
			"subject": null,
			"email_from": "b.adil@jsm.co.id",
			"email_to": null,
			"email_cc": null,
			"email_bcc": null,
			"content": null,
			"content_html": null,
			"mail_error_info": "testing",
			"email_status_id": "7",
			"is_complete": "1",
			"created": "2016-10-13 14:28:27",
			"direction_id": "1",
			"user_id": "2",
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
 *  @apiDescription Get All Unread Email
 *  @api {get} /emails/unread Get All Unread Email
 *  @apiName countUnreadEmail
 *  @apiGroup Emails
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
 *  @apiUse EmailsData
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
				"id": "1",
				"mail_date": "2016-11-14 15:29:52",
				"subject": null,
				"email_from": "b.adil@jsm.co.id",
				"email_to": null,
				"email_cc": null,
				"email_bcc": null,
				"content": null,
				"content_html": null,
				"mail_error_info": "testing",
				"email_status_id": "7",
				"is_complete": "1",
				"created": "2016-10-13 14:28:27",
				"direction_id": "1",
				"user_id": "2",
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null
			},
			{
				"id": "14",
				"mail_date": "2016-11-14 15:29:52",
				"subject": "coba iseng",
				"email_from": "juha",
				"email_to": null,
				"email_cc": "di@yahoo.com",
				"email_bcc": null,
				"content": "coba",
				"content_html": "gif",
				"mail_error_info": null,
				"email_status_id": "7",
				"is_complete": "1",
				"created": "2016-10-25 10:56:57",
				"direction_id": "1",
				"user_id": "2",
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
 *  @apiDescription Get All Report Inbound
 *  @api {get} /emails/report_inbound Get All Report Inbound
 *  @apiName getReportInbound
 *  @apiGroup Emails
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiParam {Number} start Start Date
 *  @apiParam {Number} end End Date
 *
 *  @apiUse EmailsDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse EmailsData
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
				"id": "1",
				"mail_date": "2016-11-14 15:29:52",
				"subject": null,
				"email_from": "b.adil@jsm.co.id",
				"email_to": null,
				"email_cc": null,
				"email_bcc": null,
				"content": null,
				"content_html": null,
				"mail_error_info": "testing",
				"email_status_id": "7",
				"is_complete": "1",
				"created": "2016-10-13 14:28:27",
				"direction_id": "1",
				"user_id": "2",
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"username": null,
				"direction_name": "INBOUND",
				"sms_status_name": "UNREAD",
				"contact_type_name": null,
				"customer_fullname": null,
				"inbound_type_1": "NO",
				"inbound_type_2": "NO",
				"inbound_type_3": "NO",
				"inbound_type_4": "NO",
				"inbound_type_5": "NO",
				"inbound_type_6": "NO",
				"inbound_type_7": "NO",
				"inbound_type_8": "NO",
				"inbound_type_9": "NO",
				"inbound_type_10": "NO",
				"inbound_type_11": "NO",
				"inbound_type_12": "NO",
				"inbound_type_13": "NO",
				"inbound_type_14": "NO",
				"inbound_type_15": "NO",
				"product_1": "NO",
				"product_2": "NO",
				"product_3": "NO",
				"product_4": "NO",
				"product_5": "NO",
				"product_6": "NO",
				"product_7": "NO",
				"product_8": "NO",
				"product_9": "NO",
				"product_10": "NO"
			},
			{
				"id": "8",
				"mail_date": "2018-10-13 09:47:59",
				"subject": "seubject 123",
				"email_from": "karlina@jsm.co.id",
				"email_to": null,
				"email_cc": "karlina@jsm.co.id",
				"email_bcc": null,
				"content": "ngetes",
				"content_html": "coba doang",
				"mail_error_info": null,
				"email_status_id": "10",
				"is_complete": "1",
				"created": "2016-10-17 13:50:06",
				"direction_id": "1",
				"user_id": null,
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"username": null,
				"direction_name": "INBOUND",
				"sms_status_name": "SENT",
				"contact_type_name": null,
				"customer_fullname": null,
				"inbound_type_1": "NO",
				"inbound_type_2": "NO",
				"inbound_type_3": "NO",
				"inbound_type_4": "NO",
				"inbound_type_5": "NO",
				"inbound_type_6": "NO",
				"inbound_type_7": "NO",
				"inbound_type_8": "NO",
				"inbound_type_9": "NO",
				"inbound_type_10": "NO",
				"inbound_type_11": "NO",
				"inbound_type_12": "NO",
				"inbound_type_13": "NO",
				"inbound_type_14": "NO",
				"inbound_type_15": "NO",
				"product_1": "NO",
				"product_2": "NO",
				"product_3": "NO",
				"product_4": "NO",
				"product_5": "NO",
				"product_6": "NO",
				"product_7": "NO",
				"product_8": "NO",
				"product_9": "NO",
				"product_10": "NO"
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
 *  @apiDescription Get All Report Outbound
 *  @api {get} /emails/report_outbound Get All Report Outbound
 *  @apiName getReportOutbound
 *  @apiGroup Emails
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiParam {Number} start Start Date
 *  @apiParam {Number} end End Date
 *
 *  @apiUse EmailsDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse EmailsData
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
				"id": "11",
				"mail_date": "2222-10-17 09:25:12",
				"subject": "test",
				"email_from": "lina@jsm.co.id",
				"email_to": null,
				"email_cc": "karlina@jsm.co.id",
				"email_bcc": null,
				"content": "tersihir",
				"content_html": "test",
				"mail_error_info": null,
				"email_status_id": "4",
				"is_complete": "1",
				"created": "2016-10-17 17:18:33",
				"direction_id": "2",
				"user_id": null,
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"username": null,
				"direction_name": "OUTBOUND",
				"sms_status_name": "SENT",
				"contact_type_name": null,
				"customer_fullname": null,
				"outbound_type_1": "NO",
				"outbound_type_2": "NO",
				"outbound_type_3": "NO",
				"outbound_type_4": "NO",
				"outbound_type_5": "NO",
				"outbound_type_6": "NO",
				"outbound_type_7": "NO",
				"outbound_type_8": "NO",
				"outbound_type_9": "NO",
				"outbound_type_10": "NO",
				"outbound_type_11": "NO",
				"outbound_type_12": "NO",
				"outbound_type_13": "NO",
				"outbound_type_14": "NO",
				"outbound_type_15": "NO",
				"product_1": "NO",
				"product_2": "NO",
				"product_3": "NO",
				"product_4": "NO",
				"product_5": "NO",
				"product_6": "NO",
				"product_7": "NO",
				"product_8": "NO",
				"product_9": "NO",
				"product_10": "NO"
			},
			{
				"id": "12",
				"mail_date": "2222-10-17 09:25:12",
				"subject": "test",
				"email_from": "lina@jsm.co.id",
				"email_to": null,
				"email_cc": "karlina@jsm.co.id",
				"email_bcc": null,
				"content": "tersihir",
				"content_html": "test",
				"mail_error_info": null,
				"email_status_id": "41",
				"is_complete": "1",
				"created": "2016-10-17 17:19:17",
				"direction_id": "2",
				"user_id": null,
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"username": null,
				"direction_name": "OUTBOUND",
				"sms_status_name": null,
				"contact_type_name": null,
				"customer_fullname": null,
				"outbound_type_1": "NO",
				"outbound_type_2": "NO",
				"outbound_type_3": "NO",
				"outbound_type_4": "NO",
				"outbound_type_5": "NO",
				"outbound_type_6": "NO",
				"outbound_type_7": "NO",
				"outbound_type_8": "NO",
				"outbound_type_9": "NO",
				"outbound_type_10": "NO",
				"outbound_type_11": "NO",
				"outbound_type_12": "NO",
				"outbound_type_13": "NO",
				"outbound_type_14": "NO",
				"outbound_type_15": "NO",
				"product_1": "NO",
				"product_2": "NO",
				"product_3": "NO",
				"product_4": "NO",
				"product_5": "NO",
				"product_6": "NO",
				"product_7": "NO",
				"product_8": "NO",
				"product_9": "NO",
				"product_10": "NO"
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
 *  @apiDescription Read Booked Email by Emails ID
 *  @api {get} /users/:user_id/emails/booking Read Booked Email by Emails ID
 *  @apiName getBookedEmail
 *  @apiGroup Emails
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
 *  @apiUse EmailsData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482290585,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"id": "18",
			"mail_date": "2016-11-07 10:22:48",
			"subject": "subject",
			"email_from": "from@email.com",
			"email_to": "to@email.com",
			"email_cc": "cc@email.com",
			"email_bcc": "bcc@email.com",
			"content": "content",
			"content_html": "content_html",
			"mail_error_info": "error_info",
			"email_status_id": "7",
			"is_complete": "1",
			"created": "2016-11-07 10:22:48",
			"direction_id": "1",
			"user_id": "2",
			"contact_name": "contact name",
			"contact_type_id": "2",
			"customer_id": "2"
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