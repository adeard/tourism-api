<?php

/**
 *  @apiDefine SmsInboundData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {Number} data.sms_status_id
 *  @apiSuccess {String} data.queue_time
 *  @apiSuccess {String} data.process_time
 *  @apiSuccess {Number} data.read_time
 *  @apiSuccess {Number} data.message
 *  @apiSuccess {Number} data.recipient
 *  @apiSuccess {Number} data.reference
 *  @apiSuccess {Number} data.delivery_report
 *  @apiSuccess {Number} data.delivery_code
 *  @apiSuccess {Number} data.delivery_status
 *  @apiSuccess {Number} data.delivery_time
 *  @apiSuccess {Number} data.sender
 *  @apiSuccess {Number} data.replied
 *  @apiSuccess {Number} data.reply_id
 *  @apiSuccess {Number} data.user_id
 *  @apiSuccess {Number} data.contact_name
 *  @apiSuccess {Number} data.contact_type_id
 *  @apiSuccess {Number} data.customer_id
 *  @apiSuccess {Number} data.username
 *  @apiSuccess {Number} data.direction_name
 *  @apiSuccess {Number} data.sms_status_name
 *  @apiSuccess {Number} data.contact_type_name
 *  @apiSuccess {Number} data.customer_fullname
 *  @apiSuccess {String} data.inbound_type_1
 *  @apiSuccess {String} data.inbound_type_2
 *  @apiSuccess {String} data.inbound_type_3
 *  @apiSuccess {String} data.inbound_type_4
 *  @apiSuccess {String} data.inbound_type_5
 *  @apiSuccess {String} data.inbound_type_6
 *  @apiSuccess {String} data.inbound_type_7
 *  @apiSuccess {String} data.inbound_type_8
 *  @apiSuccess {String} data.inbound_type_9
 *  @apiSuccess {String} data.inbound_type_10
 *  @apiSuccess {String} data.inbound_type_11
 *  @apiSuccess {String} data.inbound_type_12
 *  @apiSuccess {String} data.inbound_type_13
 *  @apiSuccess {String} data.inbound_type_14
 *  @apiSuccess {String} data.inbound_type_15
 *  @apiSuccess {String} data.inbound_type_16
 *  @apiSuccess {String} data.inbound_type_17
 *  @apiSuccess {String} data.inbound_type_18
 *  @apiSuccess {String} data.inbound_type_19
 *  @apiSuccess {String} data.inbound_type_20
 *  @apiSuccess {String} data.product_1
 *  @apiSuccess {String} data.product_2
 *  @apiSuccess {String} data.product_3
 *  @apiSuccess {String} data.product_4
 *  @apiSuccess {String} data.product_5
 *  @apiSuccess {String} data.product_6
 *  @apiSuccess {String} data.product_7
 *  @apiSuccess {String} data.product_8
 *  @apiSuccess {String} data.product_9
 *  @apiSuccess {String} data.product_10
 *  @apiSuccess {String} data.product_11
 *  @apiSuccess {String} data.product_12
 *  @apiSuccess {String} data.product_13
 *  @apiSuccess {String} data.product_14
 *  @apiSuccess {String} data.product_15
 *  @apiSuccess {String} data.product_16
 *  @apiSuccess {String} data.product_17
 *  @apiSuccess {String} data.product_18
 *  @apiSuccess {String} data.product_19
 *  @apiSuccess {String} data.product_20
 *  @apiSuccess {String} data.product_21
 *  @apiSuccess {String} data.product_22
 *  @apiSuccess {String} data.product_23
 *  @apiSuccess {String} data.product_24
 *  @apiSuccess {String} data.product_25
 */

/**
 *  @apiDefine SmsOutboundData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {Number} data.sms_status_id
 *  @apiSuccess {String} data.queue_time
 *  @apiSuccess {String} data.process_time
 *  @apiSuccess {Number} data.read_time
 *  @apiSuccess {Number} data.message
 *  @apiSuccess {Number} data.recipient
 *  @apiSuccess {Number} data.reference
 *  @apiSuccess {Number} data.delivery_report
 *  @apiSuccess {Number} data.delivery_code
 *  @apiSuccess {Number} data.delivery_status
 *  @apiSuccess {Number} data.delivery_time
 *  @apiSuccess {Number} data.sender
 *  @apiSuccess {Number} data.replied
 *  @apiSuccess {Number} data.reply_id
 *  @apiSuccess {Number} data.user_id
 *  @apiSuccess {Number} data.contact_name
 *  @apiSuccess {Number} data.contact_type_id
 *  @apiSuccess {Number} data.customer_id
 *  @apiSuccess {Number} data.username
 *  @apiSuccess {Number} data.direction_name
 *  @apiSuccess {Number} data.sms_status_name
 *  @apiSuccess {Number} data.contact_type_name
 *  @apiSuccess {Number} data.customer_fullname
 *  @apiSuccess {String} data.outbound_type_1
 *  @apiSuccess {String} data.outbound_type_2
 *  @apiSuccess {String} data.outbound_type_3
 *  @apiSuccess {String} data.outbound_type_4
 *  @apiSuccess {String} data.outbound_type_5
 *  @apiSuccess {String} data.outbound_type_6
 *  @apiSuccess {String} data.outbound_type_7
 *  @apiSuccess {String} data.outbound_type_8
 *  @apiSuccess {String} data.outbound_type_9
 *  @apiSuccess {String} data.outbound_type_10
 *  @apiSuccess {String} data.outbound_type_11
 *  @apiSuccess {String} data.outbound_type_12
 *  @apiSuccess {String} data.outbound_type_13
 *  @apiSuccess {String} data.outbound_type_14
 *  @apiSuccess {String} data.outbound_type_15
 *  @apiSuccess {String} data.outbound_type_16
 *  @apiSuccess {String} data.outbound_type_17
 *  @apiSuccess {String} data.outbound_type_18
 *  @apiSuccess {String} data.outbound_type_19
 *  @apiSuccess {String} data.outbound_type_20
 *  @apiSuccess {String} data.product_1
 *  @apiSuccess {String} data.product_2
 *  @apiSuccess {String} data.product_3
 *  @apiSuccess {String} data.product_4
 *  @apiSuccess {String} data.product_5
 *  @apiSuccess {String} data.product_6
 *  @apiSuccess {String} data.product_7
 *  @apiSuccess {String} data.product_8
 *  @apiSuccess {String} data.product_9
 *  @apiSuccess {String} data.product_10
 *  @apiSuccess {String} data.product_11
 *  @apiSuccess {String} data.product_12
 *  @apiSuccess {String} data.product_13
 *  @apiSuccess {String} data.product_14
 *  @apiSuccess {String} data.product_15
 *  @apiSuccess {String} data.product_16
 *  @apiSuccess {String} data.product_17
 *  @apiSuccess {String} data.product_18
 *  @apiSuccess {String} data.product_19
 *  @apiSuccess {String} data.product_20
 *  @apiSuccess {String} data.product_21
 *  @apiSuccess {String} data.product_22
 *  @apiSuccess {String} data.product_23
 *  @apiSuccess {String} data.product_24
 *  @apiSuccess {String} data.product_25
 */
 
/**
 *  @apiDefine SmsInboundDataParam
 *  @apiParam {Number} direction_id
 *  @apiParam {Number} sms_status_id
 *  @apiParam {String} queue_time
 *  @apiParam {String} process_time
 *  @apiParam {Number} read_time
 *  @apiParam {Number} message
 *  @apiParam {Number} recipient
 *  @apiParam {Number} reference
 *  @apiParam {Number} delivery_report
 *  @apiParam {Number} delivery_code
 *  @apiParam {Number} delivery_status
 *  @apiParam {Number} delivery_time
 *  @apiParam {Number} sender
 *  @apiParam {Number} replied
 *  @apiParam {Number} reply_id
 *  @apiParam {Number} user_id
 *  @apiParam {Number} contact_name
 *  @apiParam {Number} contact_type_id
 *  @apiParam {Number} customer_id
 *  @apiParam {Number} username
 *  @apiParam {Number} direction_name
 *  @apiParam {Number} sms_status_name
 *  @apiParam {Number} contact_type_name
 *  @apiParam {Number} customer_fullname
 *  @apiParam {String} inbound_type_1
 *  @apiParam {String} inbound_type_2
 *  @apiParam {String} inbound_type_3
 *  @apiParam {String} inbound_type_4
 *  @apiParam {String} inbound_type_5
 *  @apiParam {String} inbound_type_6
 *  @apiParam {String} inbound_type_7
 *  @apiParam {String} inbound_type_8
 *  @apiParam {String} inbound_type_9
 *  @apiParam {String} inbound_type_10
 *  @apiParam {String} inbound_type_11
 *  @apiParam {String} inbound_type_12
 *  @apiParam {String} inbound_type_13
 *  @apiParam {String} inbound_type_14
 *  @apiParam {String} inbound_type_15
 *  @apiParam {String} inbound_type_16
 *  @apiParam {String} inbound_type_17
 *  @apiParam {String} inbound_type_18
 *  @apiParam {String} inbound_type_19
 *  @apiParam {String} inbound_type_20
 *  @apiParam {String} product_1
 *  @apiParam {String} product_2
 *  @apiParam {String} product_3
 *  @apiParam {String} product_4
 *  @apiParam {String} product_5
 *  @apiParam {String} product_6
 *  @apiParam {String} product_7
 *  @apiParam {String} product_8
 *  @apiParam {String} product_9
 *  @apiParam {String} product_10
 *  @apiParam {String} product_11
 *  @apiParam {String} product_12
 *  @apiParam {String} product_13
 *  @apiParam {String} product_14
 *  @apiParam {String} product_15
 *  @apiParam {String} product_16
 *  @apiParam {String} product_17
 *  @apiParam {String} product_18
 *  @apiParam {String} product_19
 *  @apiParam {String} product_20
 *  @apiParam {String} product_21
 *  @apiParam {String} product_22
 *  @apiParam {String} product_23
 *  @apiParam {String} product_24
 *  @apiParam {String} product_25
 */

/**
 *  @apiDefine SmsOutboundDataParam
 *  @apiParam {Number} direction_id
 *  @apiParam {Number} sms_status_id
 *  @apiParam {String} queue_time
 *  @apiParam {String} process_time
 *  @apiParam {Number} read_time
 *  @apiParam {Number} message
 *  @apiParam {Number} recipient
 *  @apiParam {Number} reference
 *  @apiParam {Number} delivery_report
 *  @apiParam {Number} delivery_code
 *  @apiParam {Number} delivery_status
 *  @apiParam {Number} delivery_time
 *  @apiParam {Number} sender
 *  @apiParam {Number} replied
 *  @apiParam {Number} reply_id
 *  @apiParam {Number} user_id
 *  @apiParam {Number} contact_name
 *  @apiParam {Number} contact_type_id
 *  @apiParam {Number} customer_id
 *  @apiParam {Number} username
 *  @apiParam {Number} direction_name
 *  @apiParam {Number} sms_status_name
 *  @apiParam {Number} contact_type_name
 *  @apiParam {Number} customer_fullname
 *  @apiParam {String} outbound_type_1
 *  @apiParam {String} outbound_type_2
 *  @apiParam {String} outbound_type_3
 *  @apiParam {String} outbound_type_4
 *  @apiParam {String} outbound_type_5
 *  @apiParam {String} outbound_type_6
 *  @apiParam {String} outbound_type_7
 *  @apiParam {String} outbound_type_8
 *  @apiParam {String} outbound_type_9
 *  @apiParam {String} outbound_type_10
 *  @apiParam {String} outbound_type_11
 *  @apiParam {String} outbound_type_12
 *  @apiParam {String} outbound_type_13
 *  @apiParam {String} outbound_type_14
 *  @apiParam {String} outbound_type_15
 *  @apiParam {String} outbound_type_16
 *  @apiParam {String} outbound_type_17
 *  @apiParam {String} outbound_type_18
 *  @apiParam {String} outbound_type_19
 *  @apiParam {String} outbound_type_20
 *  @apiParam {String} product_1
 *  @apiParam {String} product_2
 *  @apiParam {String} product_3
 *  @apiParam {String} product_4
 *  @apiParam {String} product_5
 *  @apiParam {String} product_6
 *  @apiParam {String} product_7
 *  @apiParam {String} product_8
 *  @apiParam {String} product_9
 *  @apiParam {String} product_10
 *  @apiParam {String} product_11
 *  @apiParam {String} product_12
 *  @apiParam {String} product_13
 *  @apiParam {String} product_14
 *  @apiParam {String} product_15
 *  @apiParam {String} product_16
 *  @apiParam {String} product_17
 *  @apiParam {String} product_18
 *  @apiParam {String} product_19
 *  @apiParam {String} product_20
 *  @apiParam {String} product_21
 *  @apiParam {String} product_22
 *  @apiParam {String} product_23
 *  @apiParam {String} product_24
 *  @apiParam {String} product_25
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All Report Inbound
 *  @api {get} /sms/report_inbound Get All Report Inbound
 *  @apiName getReportInbound
 *  @apiGroup SMS
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse SmsInboundDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiParam {Number} start Start Date
 *  @apiParam {Number} end End Date
 *  @apiUse SmsInboundData
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
				"id": "7",
				"direction_id": "1",
				"sms_status_id": "2",
				"queue_time": "2010-10-17 09:25:12",
				"process_time": null,
				"read_time": "2016-12-01 16:38:57",
				"message": "tes aja kok",
				"recipient": null,
				"reference": null,
				"delivery_report": null,
				"delivery_code": null,
				"delivery_status": null,
				"delivery_time": null,
				"sender": "08566546",
				"replied": null,
				"reply_id": null,
				"user_id": "15",
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"username": null,
				"direction_name": "INBOUND",
				"sms_status_name": "READ",
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
				"inbound_type_16": "NO",
				"inbound_type_17": "NO",
				"inbound_type_18": "NO",
				"inbound_type_19": "NO",
				"inbound_type_20": "NO",
				"product_1": "NO",
				"product_2": "NO",
				"product_3": "NO",
				"product_4": "NO",
				"product_5": "NO",
				"product_6": "NO",
				"product_7": "NO",
				"product_8": "NO",
				"product_9": "NO",
				"product_10": "NO",
				"product_11": "NO",
				"product_12": "NO",
				"product_13": "NO",
				"product_14": "NO",
				"product_15": "NO",
				"product_16": "NO",
				"product_17": "NO",
				"product_18": "NO",
				"product_19": "NO",
				"product_20": "NO",
				"product_21": "NO",
				"product_22": "NO",
				"product_23": "NO",
				"product_24": "NO",
				"product_25": "NO"
			},
			{
				"id": "9",
				"direction_id": "1",
				"sms_status_id": "1",
				"queue_time": "2010-02-03 09:20:00",
				"process_time": null,
				"read_time": "2016-12-22 13:55:59",
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
				"user_id": "19",
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"username": "wahyu",
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
				"inbound_type_16": "NO",
				"inbound_type_17": "NO",
				"inbound_type_18": "NO",
				"inbound_type_19": "NO",
				"inbound_type_20": "NO",
				"product_1": "NO",
				"product_2": "NO",
				"product_3": "NO",
				"product_4": "NO",
				"product_5": "NO",
				"product_6": "NO",
				"product_7": "NO",
				"product_8": "NO",
				"product_9": "NO",
				"product_10": "NO",
				"product_11": "NO",
				"product_12": "NO",
				"product_13": "NO",
				"product_14": "NO",
				"product_15": "NO",
				"product_16": "NO",
				"product_17": "NO",
				"product_18": "NO",
				"product_19": "NO",
				"product_20": "NO",
				"product_21": "NO",
				"product_22": "NO",
				"product_23": "NO",
				"product_24": "NO",
				"product_25": "NO"
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
 *  @api {get} /sms/report_outbound Get All Report Outbound
 *  @apiName getReportOutbound
 *  @apiGroup SMS
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse SmsOutboundDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiParam {Number} start Start Date
 *  @apiParam {Number} end End Date
 *  @apiUse SmsOutboundData
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
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"username": null,
				"direction_name": "OUTBOUND",
				"sms_status_name": "QUEUED",
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
				"outbound_type_16": "NO",
				"outbound_type_17": "NO",
				"outbound_type_18": "NO",
				"outbound_type_19": "NO",
				"outbound_type_20": "NO",
				"product_1": "NO",
				"product_2": "NO",
				"product_3": "NO",
				"product_4": "NO",
				"product_5": "NO",
				"product_6": "NO",
				"product_7": "NO",
				"product_8": "NO",
				"product_9": "NO",
				"product_10": "NO",
				"product_11": "NO",
				"product_12": "NO",
				"product_13": "NO",
				"product_14": "NO",
				"product_15": "NO",
				"product_16": "NO",
				"product_17": "NO",
				"product_18": "NO",
				"product_19": "NO",
				"product_20": "NO",
				"product_21": "NO",
				"product_22": "NO",
				"product_23": "NO",
				"product_24": "NO",
				"product_25": "NO"
			},
			{
				"id": "8",
				"direction_id": "2",
				"sms_status_id": "3",
				"queue_time": "2010-10-17 09:25:12",
				"process_time": null,
				"read_time": null,
				"message": "tes aja kok",
				"recipient": null,
				"reference": null,
				"delivery_report": null,
				"delivery_code": null,
				"delivery_status": null,
				"delivery_time": null,
				"sender": "08566546",
				"replied": null,
				"reply_id": null,
				"user_id": null,
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"username": null,
				"direction_name": "OUTBOUND",
				"sms_status_name": "QUEUED",
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
				"outbound_type_16": "NO",
				"outbound_type_17": "NO",
				"outbound_type_18": "NO",
				"outbound_type_19": "NO",
				"outbound_type_20": "NO",
				"product_1": "NO",
				"product_2": "NO",
				"product_3": "NO",
				"product_4": "NO",
				"product_5": "NO",
				"product_6": "NO",
				"product_7": "NO",
				"product_8": "NO",
				"product_9": "NO",
				"product_10": "NO",
				"product_11": "NO",
				"product_12": "NO",
				"product_13": "NO",
				"product_14": "NO",
				"product_15": "NO",
				"product_16": "NO",
				"product_17": "NO",
				"product_18": "NO",
				"product_19": "NO",
				"product_20": "NO",
				"product_21": "NO",
				"product_22": "NO",
				"product_23": "NO",
				"product_24": "NO",
				"product_25": "NO"
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