<?php

/**
 *  @apiDefine CallSummariesData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {String} data.date
 *  @apiSuccess {String} data.hour
 *  @apiSuccess {Number} data.total_call
 *  @apiSuccess {Number} data.answered
 *  @apiSuccess {Number} data.abandon
 *  @apiSuccess {Number} data.disconnect_on_ivr
 *  @apiSuccess {Number} data.disconnect_on_queue
 *  @apiSuccess {Number} data.disconnect_on_agent
 *  @apiSuccess {Number} data.disconnect_on_voicemail
 *  @apiSuccess {String} data.talk_duration
 *  @apiSuccess {String} data.speed_answer
 *  @apiSuccess {String} data.after_call_work
 *  @apiSuccess {Number} data.connected
 *  @apiSuccess {Number} data.unconnected
 *  @apiSuccess {String} data.request_time
 *  @apiSuccess {String} data.key_field
 */
 
/**
 *  @apiDefine CallSummariesDataParam
 *  @apiParam {Number} direction_id
 *  @apiParam {String} date
 *  @apiParam {String} hour
 *  @apiParam {Number} total_call
 *  @apiParam {Number} answered
 *  @apiParam {Number} abandon
 *  @apiParam {Number} disconnect_on_ivr
 *  @apiParam {Number} disconnect_on_queue
 *  @apiParam {Number} disconnect_on_agent
 *  @apiParam {Number} disconnect_on_voicemail
 *  @apiParam {String} talk_duration
 *  @apiParam {String} speed_answer
 *  @apiParam {String} after_call_work
 *  @apiParam {Number} connected
 *  @apiParam {Number} unconnected
 *  @apiParam {String} request_time
 *  @apiParam {String} key_field
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create
 *  @api {post} /call_summaries Create
 *  @apiName create
 *  @apiGroup Call Summaries
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CallSummariesDataParam
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
 *  @api {put} /call_summaries/:id Update
 *  @apiName update
 *  @apiGroup Call Summaries
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CallSummariesDataParam
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
			"id": "1"
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
 *  @apiDescription Delete
 *  @api {delete} /call_summaries/:id Delete
 *  @apiName delete
 *  @apiGroup Call Summaries
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
 *	@apiSuccess {Number} data.id
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1481884440,
		"execution_time": 0,
		"response_code": 200,
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
 *  @apiUse ClientErrorNotFound
 *  @apiUse ServerError
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All
 *  @api {get} /call_summaries Get All
 *  @apiName getAll
 *  @apiGroup Call Summaries
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
 *  @apiUse CallSummariesDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallSummariesData
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
				"direction_id": "1",
				"date": "2016-12-07",
				"hour": "00:00:00",
				"total_call": "1",
				"answered": "1",
				"abandon": "0",
				"disconnect_on_ivr": "0",
				"disconnect_on_queue": "0",
				"disconnect_on_agent": "0",
				"disconnect_on_voicemail": "0",
				"talk_duration": null,
				"speed_answer": null,
				"after_call_work": null,
				"connected": "0",
				"unconnected": "0",
				"request_time": null,
				"key_field": "2016-12-07 00:00:00"
			},
			{
				"id": "2",
				"direction_id": "1",
				"date": "2016-12-07",
				"hour": "01:00:00",
				"total_call": "10",
				"answered": "10",
				"abandon": "0",
				"disconnect_on_ivr": "0",
				"disconnect_on_queue": "0",
				"disconnect_on_agent": "0",
				"disconnect_on_voicemail": "0",
				"talk_duration": null,
				"speed_answer": null,
				"after_call_work": null,
				"connected": "0",
				"unconnected": "0",
				"request_time": null,
				"key_field": "2016-12-07 01:00:00"
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