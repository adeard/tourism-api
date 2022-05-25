<?php

require_once __DIR__ .'/../controller/UsersController.php';

/**
 *  @apiDefine UserData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.username
 *  @apiSuccess {String} data.password
 *  @apiSuccess {Number} data.level_id
 *  @apiSuccess {Number} data.user_activity_id
 *  @apiSuccess {Number} data.department_id
 *  @apiSuccess {String} data.fullname
 *  @apiSuccess {String} data.firstname
 *  @apiSuccess {String} data.middlename
 *  @apiSuccess {String} data.lastname
 *  @apiSuccess {String} data.nickname
 *  @apiSuccess {String} data.salutation
 *  @apiSuccess {String} data.email
 *  @apiSuccess {String} data.mobile
 *  @apiSuccess {String} data.phone
 *  @apiSuccess {String} data.address
 *  @apiSuccess {String} data.pbx_inbound
 *  @apiSuccess {String} data.pbx_outbound
 *  @apiSuccess {String} data.ext_inbound
 *  @apiSuccess {String} data.ext_outbound
 *  @apiSuccess {String} data.ext_inbound_pwd
 *  @apiSuccess {String} data.ext_outbound_pwd
 *  @apiSuccess {String} data.picture
 *  @apiSuccess {String} data.gender
 *  @apiSuccess {Number} data.religion_id
 *  @apiSuccess {String} data.expiry_date
 *  @apiSuccess {String} data.birth_date
 *  @apiSuccess {String} data.join_date
 *  @apiSuccess {String} data.current_unique_id
 *  @apiSuccess {Number} data.is_booked
 *  @apiSuccess {Number} data.is_enable
 *  @apiSuccess {Number} data.is_delete
 *  @apiSuccess {String} data.last_activity_time
 *  @apiSuccess {String} data.host_address
 */
 
/**
 *  @apiDefine UserDataParam
 *  @apiParam {Number} username
 *  @apiParam {String} password
 *  @apiParam {Number} level_id
 *  @apiParam {Number} user_activity_id
 *  @apiParam {Number} department_id
 *  @apiParam {String} fullname
 *  @apiParam {String} firstname
 *  @apiParam {String} middlename
 *  @apiParam {String} lastname
 *  @apiParam {String} nickname
 *  @apiParam {String} salutation
 *  @apiParam {String} email
 *  @apiParam {String} mobile
 *  @apiParam {String} phone
 *  @apiParam {String} address
 *  @apiParam {String} pbx_inbound
 *  @apiParam {String} pbx_outbound
 *  @apiParam {String} ext_inbound
 *  @apiParam {String} ext_outbound
 *  @apiParam {String} ext_inbound_pwd
 *  @apiParam {String} ext_outbound_pwd
 *  @apiParam {String} picture
 *  @apiParam {String} gender
 *  @apiParam {Number} religion_id
 *  @apiParam {String} expiry_date
 *  @apiParam {String} birth_date
 *  @apiParam {String} join_date
 *  @apiParam {String} current_unique_id
 *  @apiParam {Number} is_booked
 *  @apiParam {Number} is_enable
 *  @apiParam {Number} is_delete
 *  @apiParam {String} last_activity_time
 *  @apiParam {String} host_address
 */
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get User by User Activity ID
 *  @api {get} /user_activities/:user_activity_id/users Read by User Activity ID
 *  @apiName getByUserActivity
 *  @apiGroup Users
 *
 *  @apiParam {String} user_activity_id User Activity ID
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Number} total_data Count total data
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse UserData
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
				"id": "4",
				"username": "vian",
				"password": "2ceefdecaeaba09fd7d342302d91debf",
				"level_id": "1",
				"user_activity_id": "2",
				"department_id": "1",
				"fullname": "admin test",
				"firstname": null,
				"middlename": null,
				"lastname": null,
				"nickname": null,
				"salutation": null,
				"email": null,
				"mobile": null,
				"phone": null,
				"address": null,
				"pbx_inbound": null,
				"pbx_outbound": null,
				"ext_inbound": "7878",
				"ext_outbound": null,
				"ext_inbound_pwd": null,
				"ext_outbound_pwd": null,
				"picture": null,
				"gender": null,
				"religion_id": null,
				"expiry_date": null,
				"birth_date": null,
				"join_date": null,
				"current_unique_id": "1478074285.368",
				"is_booked": "0",
				"is_enable": "1",
				"is_delete": "0",
				"last_activity_time": "2016-10-26 14:18:16",
				"host_address": null
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
$app->get('/user_activities/{user_activity_id:[0-9]+}/users', '\UsersController:getByUserActivity');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Update User Data
 *  @api {put} /users/:id Update
 *  @apiName update
 *  @apiGroup Users
 *
 *  @apiParam {Number} id User ID
 *  @apiUse UserDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Object} data Response data
 *  @apiSuccess {Number} data.id User ID
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
$app->put('/users/{id:[0-9]+}', '\UsersController:update');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Update user data by given unique ID
 *  @api {put} /users/:param_current_unique_id/unique Update by unique ID
 *  @apiName updateUnique
 *  @apiGroup Users
 *
 *  @apiParam {String} param_current_unique_id Users unique ID
 *  @apiUse UserDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Object} data Response data
 *  @apiSuccess {String} data.current_unique_id User unique ID
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"data": {
			"current_unique_id": "123.456"
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ClientErrorNotFound
 *  @apiUse ServerError
 */
$app->put('/users/{current_unique_id}/unique', '\UsersController:updateUnique');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Update process to book user
 *  @api {put} /user_activities/:user_activity_id/users/booking Book user
 *  @apiName updateBookUser
 *  @apiGroup Users
 *
 *  @apiParam {String} user_activity_id User Activity ID
 *  @apiParam {String} current_unique_id Current unique ID
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Object} data Response data
 *  @apiSuccess {String} data.current_unique_id unique ID
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"data": {
			"current_unique_id": "1478075060.376"
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ServerError
 */
$app->put('/user_activities/{user_activity_id:[0-9]+}/users/booking', '\UsersController:updateBookUser');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get booked user
 *  @api {get} /user_activities/:user_activity_id/users/:current_unique_id/booking Read booked user
 *  @apiName getBookUser
 *  @apiGroup Users
 *
 *  @apiParam {String} user_activity_id User Activity ID
 *  @apiParam {String} current_unique_id User unique ID
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Number} total_data Count total data
 *  @apiSuccess {Object} data Response data
 *  @apiUse UserData
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
			"id": "4",
			"username": "vian",
			"password": "2ceefdecaeaba09fd7d342302d91debf",
			"level_id": "1",
			"user_activity_id": "2",
			"department_id": "1",
			"fullname": "admin test",
			"firstname": null,
			"middlename": null,
			"lastname": null,
			"nickname": null,
			"salutation": null,
			"email": null,
			"mobile": null,
			"phone": null,
			"address": null,
			"pbx_inbound": null,
			"pbx_outbound": null,
			"ext_inbound": "7878",
			"ext_outbound": null,
			"ext_inbound_pwd": null,
			"ext_outbound_pwd": null,
			"picture": null,
			"gender": null,
			"religion_id": null,
			"expiry_date": null,
			"birth_date": null,
			"join_date": null,
			"current_unique_id": "1478074285.368",
			"is_booked": "0",
			"is_enable": "1",
			"is_delete": "0",
			"last_activity_time": "2016-10-26 14:18:16",
			"host_address": null
		}
	}
 *
 *  @apiUse ClientError
 *  @apiUse ServerError
 */
$app->get('/user_activities/{user_activity_id:[0-9]+}/users/{current_unique_id}/booking', '\UsersController:getBookUser');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All
 *  @api {get} /users Get All
 *  @apiName getAll
 *  @apiGroup Users
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse UserDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Number} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse UserData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
        "request_time": 1481874688,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 2,
        "data": [
			{
				"id": "1",
				"username": "admin",
				"password": "21232f297a57a5a743894a0e4a801fc3",
				"user_level_id": "1",
				"user_activity_id": "1",
				"department_id": "6",
				"fullname": "sentosa",
				"firstname": "sunari",
				"middlename": "sunari",
				"lastname": null,
				"nickname": null,
				"salutation": "coba",
				"email": null,
				"mobile": null,
				"phone": null,
				"address": null,
				"pbx_inbound": null,
				"pbx_outbound": null,
				"ext_inbound": null,
				"ext_outbound": null,
				"ext_inbound_pwd": null,
				"ext_outbound_pwd": null,
				"picture": null,
				"gender": null,
				"religion_id": null,
				"expiry_date": null,
				"birth_date": null,
				"join_date": null,
				"current_unique_id": null,
				"is_booked": "0",
				"is_enable": "1",
				"is_delete": "0",
				"last_activity_time": "2017-01-17 15:09:26",
				"last_event_id": "6319",
				"host_address": null,
				"user_level_name": "CSR",
				"user_activity_name": "OFFLINE",
				"department_name": "Call Center ATI"
			},
			{
				"id": "3",
				"username": "adil",
				"password": "5c3bea5d394835b2af9d2cfd632147f8",
				"user_level_id": "3",
				"user_activity_id": "1",
				"department_id": "6",
				"fullname": "Adil",
				"firstname": "aaa",
				"middlename": null,
				"lastname": null,
				"nickname": null,
				"salutation": "coba",
				"email": null,
				"mobile": null,
				"phone": null,
				"address": null,
				"pbx_inbound": null,
				"pbx_outbound": null,
				"ext_inbound": null,
				"ext_outbound": null,
				"ext_inbound_pwd": null,
				"ext_outbound_pwd": null,
				"picture": null,
				"gender": null,
				"religion_id": null,
				"expiry_date": null,
				"birth_date": null,
				"join_date": null,
				"current_unique_id": null,
				"is_booked": "0",
				"is_enable": "1",
				"is_delete": "0",
				"last_activity_time": "2016-12-19 14:28:34",
				"last_event_id": "2819",
				"host_address": null,
				"user_level_name": "SPV",
				"user_activity_name": "OFFLINE",
				"department_name": "Call Center ATI"
			}
        ]
	}
 *
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ServerError
 */
$app->get('/users', '\UsersController:getAll');

$app->get('/users/{id:[0-9]+}', '\UsersController:getDetail');

/**
 *  @apiDefine MonitoringUserCountData
 *  @apiSuccess {Number} data.ttl_login
 *  @apiSuccess {Number} data.NOT_AVAILABLE
 *  @apiSuccess {Number} data.READY_IN
 *  @apiSuccess {Number} data.BREAK
 *  @apiSuccess {Number} data.READY_MEDIA
 *  @apiSuccess {Number} data.READY_OUT
 *  @apiSuccess {Number} data.PAPERWORK
 *  @apiSuccess {Number} data.ONLINE_IN
 *  @apiSuccess {Number} data.ONLINE_OUT
 */
 
/**
 *  @apiDefine MonitoringUserCountDataParam
 *  @apiParam {Number} ttl_login
 *  @apiParam {Number} NOT_AVAILABLE
 *  @apiParam {Number} READY_IN
 *  @apiParam {Number} BREAK
 *  @apiParam {Number} READY_MEDIA
 *  @apiParam {Number} READY_OUT
 *  @apiParam {Number} PAPERWORK
 *  @apiParam {Number} ONLINE_IN
 *  @apiParam {Number} ONLINE_OUT
 */
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get Total Monitoring User Count
 *  @api {get} /view_monitoring_user_count Get Total Monitoring User Count
 *  @apiName getMonitoringUserCount
 *  @apiGroup Users
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="ttl_login" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse MonitoringUserCountDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse MonitoringUserCountData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1485488097,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 1,
        "data": [
            {
                "ttl_login": "6",
                "NOT_AVAILABLE": "3",
                "READY_IN": "3",
                "BREAK": "3",
                "READY_MEDIA": "2",
                "READY_OUT": "2",
                "PAPERWORK": "0",
                "ONLINE_IN": "3",
                "ONLINE_OUT": "2"
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
 
$app->get('/view_monitoring_user_count', '\UsersController:getMonitoringUserCount');