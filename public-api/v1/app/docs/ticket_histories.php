<?php

/**
 *  @apiDefine TicketHistoriesData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.ticket_id
 *  @apiSuccess {String} data.ticket_status_id
 *  @apiSuccess {String} data.user_id
 *  @apiSuccess {String} data.note
 *  @apiSuccess {String} data.created
 */
 
/**
 *  @apiDefine TicketHistoriesDataParam
 *  @apiParam {Number} ticket_id
 *  @apiParam {String} ticket_status_id
 *  @apiParam {String} user_id
 *  @apiParam {String} note
 *  @apiParam {String} created
 */
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create
 *  @api {post} /ticket_histories Create
 *  @apiName create
 *  @apiGroup Ticket Histories
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse TicketHistoriesDataParam
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
 *  @apiDescription Get All
 *  @api {get} /ticket_histories Get All
 *  @apiName getAll
 *  @apiGroup Ticket Histories
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
 *  @apiUse TicketHistoriesData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
  	HTTP/1.1 200 OK
    {
        "request_time": 1488769464,
        "execution_time": 1,
        "response_code": 200,
        "status": "success",
        "total_data": 1,
        "data": [
            {
                "id": "1",
                "ticket_id": "38",
                "ticket_status_id": "2",
                "user_id": "3",
                "note": "ticket created by adil",
                "created": "2017-02-08 00:00:00"
            },
            {
                "id": "28",
                "ticket_id": "39",
                "ticket_status_id": "3",
                "user_id": "6",
                "note": "Ticket opened by rahmat",
                "created": "2017-02-13 00:00:00"
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
 *  @apiDescription Get All by Ticket Id
 *  @api {get} /ticket_histories Get All by Ticket Id
 *  @apiName getByTicket
 *  @apiGroup Ticket Histories
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=0 Limit data
 *  @apiUse TicketHistoriesDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse TicketHistoriesData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
   	HTTP/1.1 200 OK
    {
        "request_time": 1488769464,
        "execution_time": 1,
        "response_code": 200,
        "status": "success",
        "total_data": 2,
        "data": [
            {
                "id": "28",
                "ticket_id": "39",
                "ticket_status_id": "3",
                "user_id": "6",
                "note": "Ticket opened by rahmat",
                "created": "2017-02-13 00:00:00"
            },
            {
                "id": "30",
                "ticket_id": "39",
                "ticket_status_id": "4",
                "user_id": "6",
                "note": "[Progress Reason: PENDING SPARE PART] test progress",
                "created": "2017-02-13 00:00:00"
            }
        ]
    }
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ClientErrorUnauthorized
 *  @apiUse ClientErrorForbidden
 *  @apiUse ServerError
 */