<?php

/**
 *  @apiDefine CustomersData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.identity_type_id
 *  @apiSuccess {String} data.identity_number
 *  @apiSuccess {String} data.birth_date
 *  @apiSuccess {String} data.birth_place
 *  @apiSuccess {String} data.fullname
 *  @apiSuccess {String} data.firstname
 *  @apiSuccess {String} data.middlename
 *  @apiSuccess {String} data.lastname
 *  @apiSuccess {String} data.nickname
 *  @apiSuccess {String} data.salutation
 *  @apiSuccess {Number} data.gender_id
 *  @apiSuccess {String} data.address
 *  @apiSuccess {String} data.rt
 *  @apiSuccess {String} data.rw
 *  @apiSuccess {Number} data.city_id
 *  @apiSuccess {String} data.zip
 *  @apiSuccess {String} data.created
 */
 
/**
 *  @apiDefine CustomersDataParam
 *  @apiParam {Number} identity_type_id
 *  @apiParam {String} identity_number
 *  @apiParam {String} birth_date
 *  @apiParam {String} birth_place
 *  @apiParam {String} fullname
 *  @apiParam {String} firstname
 *  @apiParam {String} middlename
 *  @apiParam {String} lastname
 *  @apiParam {String} nickname
 *  @apiParam {String} salutation
 *  @apiParam {Number} gender_id
 *  @apiParam {String} address
 *  @apiParam {String} rt
 *  @apiParam {String} rw
 *  @apiParam {Number} city_id
 *  @apiParam {String} zip
 *  @apiParam {String} created
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create
 *  @api {post} /customers Create
 *  @apiName create
 *  @apiGroup Customers
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CustomersDataParam
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
 *  @api {put} /customers/:id Update
 *  @apiName update
 *  @apiGroup Customers
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CustomersDataParam
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
 *  @apiDescription Delete
 *  @api {delete} /customers/:id Delete
 *  @apiName delete
 *  @apiGroup Customers
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
 *  @api {get} /customers Get All
 *  @apiName getAll
 *  @apiGroup Customers
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse CustomersDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CustomersData
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
				"identity_type_id": "3",
				"identity_number": "12345678",
				"birth_date": "2016-11-24",
				"birth_place": "JAKARTA",
				"fullname": "hundaina",
				"firstname": "basuki cahaya purnama",
				"middlename": "FULAN",
				"lastname": "KHAIDIR",
				"nickname": null,
				"salutation": "BPK",
				"gender_id": "2",
				"address": null,
				"rt": null,
				"rw": null,
				"city_id": "1",
				"zip": null,
				"created": "2016-12-16 13:46:29",
				"identity_name": "PASSPORT",
				"gender_name": "PEREMPUAN",
				"city_name": "Kabupaten Aceh Barat",
				"home_phone_1": null,
				"home_phone_2": "55555555",
				"home_phone_3": null,
				"hand_phone_1": "0867668668",
				"hand_phone_2": null,
				"hand_phone_3": null,
				"email_1": "0219800757",
				"email_2": null,
				"email_3": null,
				"no_member": null
			},
			{
				"id": "2",
				"identity_type_id": "0",
				"identity_number": "1234567890",
				"birth_date": "2016-11-27",
				"birth_place": "Jakarta",
				"fullname": "Full Name",
				"firstname": "First Name ",
				"middlename": "basuki",
				"lastname": "Last Name",
				"nickname": "Nick name",
				"salutation": "BPK",
				"gender_id": "2",
				"address": null,
				"rt": "099",
				"rw": "099",
				"city_id": "24",
				"zip": "123456",
				"created": "2016-12-14 18:05:05",
				"identity_name": null,
				"gender_name": "PEREMPUAN",
				"city_name": "Kabupaten Asahan",
				"home_phone_1": "karlina@jsm.co.id.id",
				"home_phone_2": null,
				"home_phone_3": null,
				"hand_phone_1": "081123123213",
				"hand_phone_2": "081123123213",
				"hand_phone_3": "068957687586789545345435453",
				"email_1": null,
				"email_2": "karlina@yahoo.com",
				"email_3": null,
				"no_member": null
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
 *  @apiDescription Read by Customers ID
 *  @api {get} /customers/:id Read by Customers ID
 *  @apiName getDetail
 *  @apiGroup Customers
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
 *  @apiUse CustomersData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482224859,
		"execution_time": 1,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"id": "1",
			"identity_type_id": "3",
			"identity_number": "12345678",
			"birth_date": "2016-11-24",
			"birth_place": "JAKARTA",
			"fullname": "hundaina",
			"firstname": "basuki cahaya purnama",
			"middlename": "FULAN",
			"lastname": "KHAIDIR",
			"nickname": null,
			"salutation": "BPK",
			"gender_id": "2",
			"address": null,
			"rt": null,
			"rw": null,
			"city_id": "1",
			"zip": null,
			"created": "2016-12-16 13:46:29"
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