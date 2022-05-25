<?php

/**
 *  @apiDefine UserData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.username
 *  @apiSuccess {Number} data.user_level_id
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
 *  @apiDefine ViewUserData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.username
 *  @apiSuccess {Number} data.user_level_id
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
 *  @apiSuccess {String} data.user_level_name
 *  @apiSuccess {String} data.user_activity_name
 *  @apiSuccess {String} data.department_name
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
 *  @apiDefine UserUploadDataParam
 *  @apiParam {String} picture
 *  @apiParam {String} user_id
 */
 
/**
 *  @apiDefine UserDataParam
 *  @apiParam {Number} username
 *  @apiParam {String} password
 *  @apiParam {Number} user_level_id
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
 *  @apiDefine ViewUserDataParam
 *  @apiParam {Number} username
 *  @apiParam {Number} user_level_id
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
 *  @apiParam {String} user_level_name
 *  @apiParam {String} user_activity_name
 *  @apiParam {String} department_name
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Login User (Request Token)
 *  @api {post} /users/token Login
 *  @apiName login
 *  @apiGroup Users
 *
 *  @apiParam {Number} username
 *  @apiParam {String} password
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Object} data Response data
 *  @apiSuccess {Number} data.id ID of logged in user
 *  @apiSuccess {Number} data.token token for header authorization on service request
 *  @apiSuccess {Number} data.expire token expire date & time
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 2,
		"response_code": 200,
		"status": "success",
		"data": {
			"id": "1",
		        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE4Nzg0NDgsImp0aSI6IkE1UmcrSk5saGt6MzE4bnVuMjFPdHdFM1FiK2NCcDJydFE1OERuclRLaTA9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxODc4NDQ5LCJleHAiOjE0ODE4ODAyNDksImRhdGEiOnsidXNlcm5hbWUiOiJhZG1pbiIsInBhc3N3b3JkIjoiOTBiOWFhN2UyNWY4MGNmNGY2NGU5OTBiNzhhOWZjNWViZDZjZWNhZCIsImlwIjoiOjoxIn19.w3JR8-EWiYtiEi-gTv9PI8tNPtb9gYz2g7gUHeOdmds",
		        "expire": "2016-12-16 16:24:09"
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
 *  @apiDescription Upload
 *  @api {post} /users/picture Upload
 *  @apiName upload
 *  @apiGroup Users
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse UserUploadDataParam
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
 *  @apiDescription Get Picture by User ID
 *  @api {get} /users/:id/picture Get Picture by User ID
 *  @apiName getPhoto
 *  @apiGroup Users
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
     		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
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
 *  @apiDescription Get All
 *  @api {get} /users Get All
 *  @apiName getAll
 *  @apiGroup Users
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
 *  @apiUse UserData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1478958162,
        "execution_time": 21,
        "response_code": 201,
        "status": "success",
        "total_data": 11,
        "data": [
            {
                "id": "4",
                "username": "vian",
                "user_level_id": "2",
                "user_activity_id": "1",
                "department_id": "22",
                "fullname": "Novian Hendrianto",
                "firstname": "vian",
                "middlename": null,
                "lastname": null,
                "nickname": null,
                "salutation": null,
                "email": null,
                "mobile": null,
                "phone": null,
                "address": null,
                "pbx_inbound": "192.168.3.15",
                "pbx_outbound": "192.168.3.15",
                "ext_inbound": "8686",
                "ext_outbound": "8686",
                "ext_inbound_pwd": "ext8686",
                "ext_outbound_pwd": "ext8686",
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
                "last_activity_time": "2017-01-10 13:12:45",
                "last_event_id": "5223",
                "host_address": null
            },
            {
                "id": "5",
                "username": "lina",
                "user_level_id": "1",
                "user_activity_id": "2",
                "department_id": "22",
                "fullname": "Lina",
                "firstname": null,
                "middlename": null,
                "lastname": null,
                "nickname": null,
                "salutation": null,
                "email": null,
                "mobile": null,
                "phone": null,
                "address": null,
                "pbx_inbound": "192.168.3.15",
                "pbx_outbound": "192.168.3.15",
                "ext_inbound": "2002",
                "ext_outbound": "2002",
                "ext_inbound_pwd": "ext2002",
                "ext_outbound_pwd": "ext2002",
                "picture": null,
                "gender": null,
                "religion_id": null,
                "expiry_date": null,
                "birth_date": null,
                "join_date": "2016-11-22",
                "current_unique_id": null,
                "is_booked": "0",
                "is_enable": "1",
                "is_delete": "0",
                "last_activity_time": "2017-01-10 14:11:47",
                "last_event_id": "5258",
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
 *  @apiUse ClientErrorUnauthorized
 *  @apiUse ClientErrorForbidden
 *  @apiUse ServerError
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All Enable
 *  @api {get} /users/enable Get All Enable
 *  @apiName getAllEnable
 *  @apiGroup Users
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
 *  @apiUse UserData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
     HTTP/1.1 200 OK
     {
         "request_time": 1478958162,
         "execution_time": 21,
         "response_code": 201,
         "status": "success",
         "total_data": 11,
         "data": [
             {
                 "id": "4",
                 "username": "vian",
                 "user_level_id": "2",
                 "user_activity_id": "1",
                 "department_id": "22",
                 "fullname": "Novian Hendrianto",
                 "firstname": "vian",
                 "middlename": null,
                 "lastname": null,
                 "nickname": null,
                 "salutation": null,
                 "email": null,
                 "mobile": null,
                 "phone": null,
                 "address": null,
                 "pbx_inbound": "192.168.3.15",
                 "pbx_outbound": "192.168.3.15",
                 "ext_inbound": "8686",
                 "ext_outbound": "8686",
                 "ext_inbound_pwd": "ext8686",
                 "ext_outbound_pwd": "ext8686",
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
                 "last_activity_time": "2017-01-10 13:12:45",
                 "last_event_id": "5223",
                 "host_address": null
             },
             {
                 "id": "5",
                 "username": "lina",
                 "user_level_id": "1",
                 "user_activity_id": "2",
                 "department_id": "22",
                 "fullname": "Lina",
                 "firstname": null,
                 "middlename": null,
                 "lastname": null,
                 "nickname": null,
                 "salutation": null,
                 "email": null,
                 "mobile": null,
                 "phone": null,
                 "address": null,
                 "pbx_inbound": "192.168.3.15",
                 "pbx_outbound": "192.168.3.15",
                 "ext_inbound": "2002",
                 "ext_outbound": "2002",
                 "ext_inbound_pwd": "ext2002",
                 "ext_outbound_pwd": "ext2002",
                 "picture": null,
                 "gender": null,
                 "religion_id": null,
                 "expiry_date": null,
                 "birth_date": null,
                 "join_date": "2016-11-22",
                 "current_unique_id": null,
                 "is_booked": "0",
                 "is_enable": "1",
                 "is_delete": "0",
                 "last_activity_time": "2017-01-10 14:11:47",
                 "last_event_id": "5258",
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
 *  @apiUse ClientErrorUnauthorized
 *  @apiUse ClientErrorForbidden
 *  @apiUse ServerError
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

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All User Escort
 *  @api {get} /users/user_escort Get All User Escort
 *  @apiName getUserEscort
 *  @apiGroup Users
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse UserDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse UserData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1481882007,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"total_data": 2,
		"data": [
		  	{
				"id": "1",
				"username": "admin",
				"user_level_id": "200",
				"user_activity_id": "3",
				"department_id": "22",
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
				"last_activity_time": "2016-11-23 09:29:52",
				"last_event_id": "2309",
				"host_address": null,
				"user_level_name": "CSR",
				"user_activity_name": "READY IN",
				"department_name": "CALL CENTER"
			},
			{
				"id": "15",
				"username": "lina",
				"user_level_id": "1",
				"user_activity_id": "14",
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
				"pbx_inbound": "192.168.3.15",
				"pbx_outbound": "192.168.3.15",
				"ext_inbound": "2002",
				"ext_outbound": "2002",
				"ext_inbound_pwd": "ext2002",
				"ext_outbound_pwd": "ext2002",
				"picture": null,
				"gender": null,
				"religion_id": null,
				"expiry_date": null,
				"birth_date": null,
				"join_date": "2016-11-22",
				"current_unique_id": null,
				"is_booked": "0",
				"is_enable": "1",
				"is_delete": "0",
				"last_activity_time": "2016-10-26 14:18:16",
				"last_event_id": "2232",
				"host_address": null,
				"user_level_name": "CSR",
				"user_activity_name": "PAPERWORK",
				"department_name": "SALES"
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
 *  @apiDescription Create
 *  @api {post} /users Create
 *  @apiName create
 *  @apiGroup Users
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse UserDataParam
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
			"id": "24"
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
 *  @apiDescription Read by User ID
 *  @api {get} /users/:id Read by User ID
 *  @apiName getDetail
 *  @apiGroup Users
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
 *  @apiUse UserData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1481885074,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"id": "1",
			"username": "admin",
			"user_level_id": "200",
			"user_activity_id": "1",
			"department_id": "22",
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
			"last_activity_time": "2016-11-23 09:29:52",
			"last_event_id": "2336",
			"host_address": null
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
 *  @apiDescription Read by Unique ID
 *  @api {get} /users/:unique_id/unique Read by Unique ID
 *  @apiName getDetailUnique
 *  @apiGroup Users
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
 *  @apiUse UserData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482115840,
		"execution_time": 28,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"id": "1",
			"username": "admin",
			"user_level_id": "1",
			"user_activity_id": "1",
			"department_id": "1",
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
			"current_unique_id": "1",
			"is_booked": "0",
			"is_enable": "1",
			"is_delete": "0",
			"last_activity_time": "2016-11-23 09:29:52",
			"last_event_id": "2336",
			"host_address": null
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
 *  @apiDescription Update
 *  @api {put} /users/:id Update
 *  @apiName update
 *  @apiGroup Users
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse UserDataParam
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
		"request_time": 1482115840,
		"execution_time": 28,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
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
 *  @apiDescription Update Password
 *  @api {put} /users/password/:id Update Password
 *  @apiName updatePassword
 *  @apiGroup Users
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} old_password old_password
 *  @apiParam {String} new_password new_password
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
		"request_time": 1482115840,
		"execution_time": 28,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
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
  *  @apiDescription Get All View Users
  *  @api {get} /view_users Get All View Users
  *  @apiName getViewUsers
  *  @apiGroup Users
  *
  * 	@apiHeader {String} Authorization Basis access authorization token
  * 	@apiHeaderExample Header-Example:
   		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
  *
  *  @apiParam {String} order="id" Order by data field name
  *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
  *  @apiParam {Number} limit=20 Limit data
  *  @apiParam {Number} page=1 Page number
  *  @apiUse ViewUserDataParam
  *
  *  @apiSuccess {Number} request_time Request time (timestamp)
  *  @apiSuccess {Number} execution_time Request execution time (in seconds)
  *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
  *  @apiSuccess {String} status Response status <b>(success)</b>
  *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
  *  @apiSuccess {Object[]} data Response data (Array of Object)
  *  @apiUse ViewUserData
  *  @apiUse Paging
  *
  *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1478958162,
        "execution_time": 21,
        "response_code": 201,
        "status": "success",
        "total_data": 11,
        "data": [
            {
                "id": "1",
                "username": "admin",
                "user_level_id": "1",
                "user_activity_id": "1",
                "department_id": "22",
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
                "last_activity_time": "2017-01-11 13:22:21",
                "last_event_id": "5555",
                "host_address": null,
                "user_level_name": "CSR",
                "user_activity_name": "OFFLINE",
                "department_name": "CALL CENTER"
            },
            {
                "id": "3",
                "username": "adil",
                "user_level_id": "3",
                "user_activity_id": "1",
                "department_id": "22",
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
                "department_name": "CALL CENTER"
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