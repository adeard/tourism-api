<?php

/**
 *  @apiDefine CallTypeSummariesData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {Number} data.inbound_type_id
 *  @apiSuccess {Number} data.outbound_type_id
 *  @apiSuccess {String} data.date
 *  @apiSuccess {Number} data.hour_00
 *  @apiSuccess {Number} data.hour_01
 *  @apiSuccess {Number} data.hour_02
 *  @apiSuccess {Number} data.hour_03
 *  @apiSuccess {Number} data.hour_04
 *  @apiSuccess {Number} data.hour_05
 *  @apiSuccess {Number} data.hour_06
 *  @apiSuccess {Number} data.hour_07
 *  @apiSuccess {Number} data.hour_08
 *  @apiSuccess {Number} data.hour_09
 *  @apiSuccess {Number} data.hour_10
 *  @apiSuccess {Number} data.hour_11
 *  @apiSuccess {Number} data.hour_12
 *  @apiSuccess {Number} data.hour_13
 *  @apiSuccess {Number} data.hour_14
 *  @apiSuccess {Number} data.hour_15
 *  @apiSuccess {Number} data.hour_16
 *  @apiSuccess {Number} data.hour_17
 *  @apiSuccess {Number} data.hour_18
 *  @apiSuccess {Number} data.hour_19
 *  @apiSuccess {Number} data.hour_20
 *  @apiSuccess {Number} data.hour_21
 *  @apiSuccess {Number} data.hour_22
 *  @apiSuccess {Number} data.hour_23
 *  @apiSuccess {String} data.request_time
 */
 
/**
 *  @apiDefine CallTypeSummariesDataParam
 *  @apiParam {Number} direction_id
 *  @apiParam {Number} inbound_type_id
 *  @apiParam {Number} outbound_type_id
 *  @apiParam {String} date
 *  @apiParam {Number} hour_00
 *  @apiParam {Number} hour_01
 *  @apiParam {Number} hour_02
 *  @apiParam {Number} hour_03
 *  @apiParam {Number} hour_04
 *  @apiParam {Number} hour_05
 *  @apiParam {Number} hour_06
 *  @apiParam {Number} hour_07
 *  @apiParam {Number} hour_08
 *  @apiParam {Number} hour_09
 *  @apiParam {Number} hour_10
 *  @apiParam {Number} hour_11
 *  @apiParam {Number} hour_12
 *  @apiParam {Number} hour_13
 *  @apiParam {Number} hour_14
 *  @apiParam {Number} hour_15
 *  @apiParam {Number} hour_16
 *  @apiParam {Number} hour_17
 *  @apiParam {Number} hour_18
 *  @apiParam {Number} hour_19
 *  @apiParam {Number} hour_20
 *  @apiParam {Number} hour_21
 *  @apiParam {Number} hour_22
 *  @apiParam {Number} hour_23
 *  @apiParam {String} request_time
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create
 *  @api {post} /call_type_summaries Create
 *  @apiName create
 *  @apiGroup Call Type Summaries
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CallTypeSummariesDataParam
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
 *  @api {put} /call_type_summaries/:id Update
 *  @apiName update
 *  @apiGroup Call Type Summaries
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CallTypeSummariesDataParam
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
 *  @api {delete} /call_type_summaries/:id Delete
 *  @apiName delete
 *  @apiGroup Call Type Summaries
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
 *  @api {get} /call_type_summaries Get All
 *  @apiName getAll
 *  @apiGroup Call Type Summaries
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
 *  @apiUse CallTypeSummariesDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallTypeSummariesData
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
				"inbound_type_id": "1",
				"outbound_type_id": null,
				"date": "2016-12-07",
				"hour_00": "1",
				"hour_01": "0",
				"hour_02": "3",
				"hour_03": "0",
				"hour_04": "0",
				"hour_05": "0",
				"hour_06": "0",
				"hour_07": "0",
				"hour_08": "0",
				"hour_09": "0",
				"hour_10": "0",
				"hour_11": "0",
				"hour_12": "0",
				"hour_13": "0",
				"hour_14": "0",
				"hour_15": "0",
				"hour_16": "0",
				"hour_17": "0",
				"hour_18": "0",
				"hour_19": "0",
				"hour_20": "0",
				"hour_21": "0",
				"hour_22": "0",
				"hour_23": "0",
				"request_time": null
			},
			{
				"id": "3",
				"direction_id": "1",
				"inbound_type_id": "2",
				"outbound_type_id": null,
				"date": "2016-12-07",
				"hour_00": "15",
				"hour_01": "4",
				"hour_02": "0",
				"hour_03": "7",
				"hour_04": "0",
				"hour_05": "0",
				"hour_06": "0",
				"hour_07": "0",
				"hour_08": "0",
				"hour_09": "0",
				"hour_10": "0",
				"hour_11": "0",
				"hour_12": "0",
				"hour_13": "0",
				"hour_14": "0",
				"hour_15": "0",
				"hour_16": "0",
				"hour_17": "0",
				"hour_18": "0",
				"hour_19": "0",
				"hour_20": "0",
				"hour_21": "0",
				"hour_22": "0",
				"hour_23": "0",
				"request_time": null
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