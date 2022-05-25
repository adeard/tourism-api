<?php

require_once __DIR__ .'/../controller/CallsController.php';

/**
 *  @apiDefine CallData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {String} data.channel
 *  @apiSuccess {String} data.unique_id
 *  @apiSuccess {String} data.phone_number
 *  @apiSuccess {Number} data.call_state_id
 *  @apiSuccess {Number} data.call_status_id
 *  @apiSuccess {Number} data.call_status_detail_id
 *  @apiSuccess {String} data.call_date
 *  @apiSuccess {String} data.ivr_date
 *  @apiSuccess {String} data.queue_date
 *  @apiSuccess {String} data.leave_date
 *  @apiSuccess {String} data.transfer_date
 *  @apiSuccess {String} data.hangup_date
 *  @apiSuccess {String} data.pickup_date
 *  @apiSuccess {String} data.dropcall_date
 *  @apiSuccess {String} data.talk_time
 *  @apiSuccess {Number} data.user_id
 *  @apiSuccess {String} data.extension
 *  @apiSuccess {String} data.host_address
 *  @apiSuccess {String} data.filename
 *  @apiSuccess {String} data.contact_name
 *  @apiSuccess {Number} data.contact_type_id
 *  @apiSuccess {Number} data.customer_id
 *  @apiSuccess {String} data.note
 */
 
/**
 *  @apiDefine CallDataParam
 *  @apiParam {Number} direction_id
 *  @apiParam {String} channel
 *  @apiParam {String} unique_id
 *  @apiParam {String} phone_number
 *  @apiParam {Number} call_state_id
 *  @apiParam {Number} call_status_id
 *  @apiParam {Number} call_status_detail_id
 *  @apiParam {String} call_date
 *  @apiParam {String} ivr_date
 *  @apiParam {String} queue_date
 *  @apiParam {String} leave_date
 *  @apiParam {String} transfer_date
 *  @apiParam {String} hangup_date
 *  @apiParam {String} pickup_date
 *  @apiParam {String} dropcall_date
 *  @apiParam {String} talk_time
 *  @apiParam {Number} user_id
 *  @apiParam {String} extension
 *  @apiParam {String} host_address
 *  @apiParam {String} filename
 *  @apiParam {String} contact_name
 *  @apiParam {Number} contact_type_id
 *  @apiParam {Number} customer_id
 *  @apiParam {String} note
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All
 *  @api {get} /calls Get All
 *  @apiName getAll
 *  @apiGroup Calls
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse CallDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"total_data": 125,
		"data": [
			{
				"id": "6",
				"direction_id": "1",
				"channel": "SIP/8787-00000033",
				"unique_id": "1477386177.51",
				"phone_number": "8787",
				"call_state_id": "23",
				"call_status_id": null,
				"call_status_detail_id": null,
				"call_date": null,
				"ivr_date": "2016-10-25 16:01:06",
				"queue_date": "2016-10-25 16:04:53",
				"leave_date": "2016-10-26 16:42:00",
				"transfer_date": "2016-10-26 16:42:57",
				"hangup_date": "2016-10-25 16:04:55",
				"pickup_date": null,
				"dropcall_date": null,
				"talk_time": null,
				"user_id": "2",
				"extension": "3",
				"host_address": null,
				"filename": null,
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"note": null
			},
			{
				"id": "7",
				"direction_id": "1",
				"channel": "SIP/8787-00000033",
				"unique_id": "1477386177.51",
				"phone_number": "8787",
				"call_state_id": "23",
				"call_status_id": null,
				"call_status_detail_id": null,
				"call_date": null,
				"ivr_date": "2016-10-25 16:01:06",
				"queue_date": "2016-10-25 16:04:53",
				"leave_date": "2016-10-26 16:42:00",
				"transfer_date": "2016-10-26 16:42:57",
				"hangup_date": "2016-10-25 16:04:55",
				"pickup_date": null,
				"dropcall_date": null,
				"talk_time": null,
				"user_id": "2",
				"extension": "3",
				"host_address": null,
				"filename": null,
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"note": null
			}
		]
	}
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ServerError
 */
$app->get('/calls', '\CallsController:getAll');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Monitoring
 *  @api {get} /calls/monitoring Monitoring
 *  @apiName getMonitoring
 *  @apiGroup Calls
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object} data Response data
 *  @apiSuccess {Number} data.incoming_call
 *  @apiSuccess {Number} data.asa
 *  @apiSuccess {Number} data.aat_ivr
 *  @apiSuccess {Number} data.aat
 *  @apiSuccess {Number} data.aht
 *  @apiSuccess {Number} data.abandone_rate
 *  @apiSuccess {Number} data.answer_rate
 *  @apiSuccess {Number} data.service_level
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1485147540,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"incoming_call": "3",
			"asa": "00:00:20",
			"aat_ivr": "00:00:11",
			"aat": "00:00:00",
			"aht": "00:00:20",
			"abandone_rate": "66.6667",
			"answer_rate": "33.3333",
			"service_level": "0.0300"
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ServerError
 */
$app->get('/calls/monitoring', '\CallsController:getMonitoring');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create New Call Data
 *  @api {post} /calls Create
 *  @apiName create
 *  @apiGroup Calls
 *
 *  @apiUse CallDataParam
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
			"id": 12
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ServerError
 */
$app->post('/calls', '\CallsController:create');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Update call data by given unique ID
 *  @api {put} /calls/:param_unique_id/unique Update by unique ID
 *  @apiName updateUnique
 *  @apiGroup Calls
 *
 *  @apiParam {String} param_unique_id Call Unique ID
 *  @apiUse CallDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Object} data Response data
 *  @apiSuccess {String} data.unique_id unique ID of created data
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"data": {
			"unique_id": "1234.567"
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ClientErrorNotFound
 *  @apiUse ServerError
 */
$app->put('/calls/{unique_id}/unique', '\CallsController:updateUnique');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get call data by given unique ID
 *  @api {get} /calls/:unique_id/unique Read by unique ID
 *  @apiName getDetailUnique
 *  @apiGroup Calls
 *
 *  @apiParam {String} unique_id Call unique ID
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Number} total_data Count total data
 *  @apiSuccess {Object} data Response data
 *  @apiUse CallData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"id": "6",
			"direction_id": "1",
			"channel": "SIP/8787-00000033",
			"unique_id": "1477386177.51",
			"phone_number": "8787",
			"call_state_id": "23",
			"call_status_id": null,
			"call_status_detail_id": null,
			"call_date": null,
			"ivr_date": "2016-10-25 16:01:06",
			"queue_date": "2016-10-25 16:04:53",
			"leave_date": "2016-10-26 16:42:00",
			"transfer_date": "2016-10-26 16:42:57",
			"hangup_date": "2016-10-25 16:04:55",
			"pickup_date": null,
			"dropcall_date": null,
			"talk_time": null,
			"user_id": "2",
			"extension": "3",
			"host_address": null,
			"filename": null,
			"contact_name": null,
			"contact_type_id": null,
			"customer_id": null,
			"note": null
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorNotFound
 *  @apiUse ServerError
 */
$app->get('/calls/{unique_id}/unique', '\CallsController:getDetailUnique');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get longest Call on queue
 *  @api {get} /calls/longest_queue Longest Queue
 *  @apiName getLongestQueue
 *  @apiGroup Calls
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Number} total_data Count total data
 *  @apiSuccess {Object} data Response data
 *  @apiUse CallData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"id": "6",
			"direction_id": "1",
			"channel": "SIP/8787-00000033",
			"unique_id": "1477386177.51",
			"phone_number": "8787",
			"call_state_id": "23",
			"call_status_id": null,
			"call_status_detail_id": null,
			"call_date": null,
			"ivr_date": "2016-10-25 16:01:06",
			"queue_date": "2016-10-25 16:04:53",
			"leave_date": "2016-10-26 16:42:00",
			"transfer_date": "2016-10-26 16:42:57",
			"hangup_date": "2016-10-25 16:04:55",
			"pickup_date": null,
			"dropcall_date": null,
			"talk_time": null,
			"user_id": "2",
			"extension": "3",
			"host_address": null,
			"filename": null,
			"contact_name": null,
			"contact_type_id": null,
			"customer_id": null,
			"note": null
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ServerError
 */
$app->get('/calls/longest_queue', '\CallsController:getLongestQueue');

/**
 *  @apiDefine MonitoringCallCountData
 *  @apiSuccess {Number} data.IncomingCall
 *  @apiSuccess {Number} data.AnswerCall
 *  @apiSuccess {Number} data.AbandoneCall
 *  @apiSuccess {Number} data.AbandoneIvr
 *  @apiSuccess {Number} data.IvrCall
 *  @apiSuccess {Number} data.QueueCall
 */

/**
 *  @apiDefine MonitoringCallCountDataParam
 *  @apiParam {Number} IncomingCall
 *  @apiParam {Number} AnswerCall
 *  @apiParam {Number} AbandoneCall
 *  @apiParam {Number} AbandoneIvr
 *  @apiParam {Number} IvrCall
 *  @apiParam {Number} QueueCall
 */
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get Total Monitoring Call Count
 *  @api {get} /view_monitoring_call_count Get Total Monitoring Call Count
 *  @apiName getMonitoringCallCount
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: BearereyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *  @apiParam {String} order="IncomingCall" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse MonitoringCallCountDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse MonitoringCallCountData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1485486434,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 1,
        "data": [
            {
                "IncomingCall": "0",
                "AnswerCall": "0",
                "AbandoneCall": "0",
                "AbandoneIvr": "0",
                "IvrCall": "0",
                "QueueCall": "0"
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
 
$app->get('/view_monitoring_call_count', '\CallsController:getMonitoringCallCount');

/**
 *  @apiDefine MonitoringCallDurationData
 *  @apiSuccess {String} data.ASA
 *  @apiSuccess {String} data.AAT_ivr
 *  @apiSuccess {String} data.AAT
 *  @apiSuccess {String} data.AHT
 *  @apiSuccess {Number} data.AbandoneRate
 *  @apiSuccess {Number} data.AnswerRate
 *  @apiSuccess {Number} data.ServiceLevel
 */
 
/**
 *  @apiDefine MonitoringCallDurationDataParam
 *  @apiParam {String} ASA
 *  @apiParam {String} AAT_ivr
 *  @apiParam {String} AAT
 *  @apiParam {String} AHT
 *  @apiParam {Number} AbandoneRate
 *  @apiParam {Number} AnswerRate
 *  @apiParam {Number} ServiceLevel
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get Total Monitoring Call Duration
 *  @api {get} /view_monitoring_call_duration Get Total Monitoring Call Duration
 *  @apiName getMonitoringCallDuration
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: BearereyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *  @apiParam {String} order="ASA" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse MonitoringCallDurationDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse MonitoringCallDurationData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1485487374,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 1,
        "data": [
            {
                "ASA": "00:00:00",
                "AAT_ivr": "00:00:00",
                "AAT": "00:00:00",
                "AHT": "00:00:00",
                "AbandoneRate": null,
                "AnswerRate": null,
                "ServiceLevel": "0.0000"
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
 
$app->get('/view_monitoring_call_duration', '\CallsController:getMonitoringCallDuration');