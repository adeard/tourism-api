<?php

require_once __DIR__ .'/../controller/FacebooksController.php';

/**
 *  @apiDefine FacebookData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {String} data.feature_id
 *  @apiSuccess {String} data.parent_feature_id
 *  @apiSuccess {String} data.from_id
 *  @apiSuccess {String} data.from_name
 *  @apiSuccess {String} data.to_id
 *  @apiSuccess {String} data.to_name
 *  @apiSuccess {String} data.status_type
 *  @apiSuccess {String} data.type
 *  @apiSuccess {String} data.message
 *  @apiSuccess {String} data.link
 *  @apiSuccess {Number} data.total_like
 *  @apiSuccess {Number} data.comment_count
 *  @apiSuccess {Number} data.total_comment
 *  @apiSuccess {Number} data.me_like
 *  @apiSuccess {Number} data.post_like
 *  @apiSuccess {String} data.error_info
 *  @apiSuccess {Number} data.attempt
 *  @apiSuccess {String} data.created
 *  @apiSuccess {String} data.insert_date
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {Number} data.user_id
 *  @apiSuccess {String} data.contact_name
 *  @apiSuccess {Number} data.contact_type_id
 *  @apiSuccess {Number} data.customer_id
 *  @apiSuccess {Number} data.facebook_status_id
 */

/**
 *  @apiDefine FacebookDataParam
 *  @apiParam {String} data.feature_id
 *  @apiParam {String} data.parent_feature_id
 *  @apiParam {String} data.from_id
 *  @apiParam {String} data.from_name
 *  @apiParam {String} data.to_id
 *  @apiParam {String} data.to_name
 *  @apiParam {String} data.status_type
 *  @apiParam {String} data.type
 *  @apiParam {String} data.message
 *  @apiParam {String} data.link
 *  @apiParam {Number} data.total_like
 *  @apiParam {Number} data.comment_count
 *  @apiParam {Number} data.total_comment
 *  @apiParam {Number} data.me_like
 *  @apiParam {Number} data.post_like
 *  @apiParam {String} data.error_info
 *  @apiParam {Number} data.attempt
 *  @apiParam {String} data.created
 *  @apiParam {String} data.insert_date
 *  @apiParam {Number} data.direction_id
 *  @apiParam {Number} data.user_id
 *  @apiParam {String} data.contact_name
 *  @apiParam {Number} data.contact_type_id
 *  @apiParam {Number} data.customer_id
 *  @apiParam {Number} data.facebook_status_id
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All
 *  @api {get} /facebooks Get All
 *  @apiName getAll
 *  @apiGroup Facebooks
 *  
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse FacebookDataParam
 *  
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Number} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse FacebookData
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
                "feature_id": "1",
                "parent_feature_id": "1",
                "from_id": "1",
                "from_name": "test_from_name",
                "to_id": "2",
                "to_name": "test_to_name",
                "status_type": "test_status_type",
                "type": "test_type",
                "message": "test_message",
                "link": "test_link",
                "total_like": "1",
                "comment_count": "1",
                "total_comment": "1",
                "me_like": "1",
                "post_like": "1",
                "error_info": "test_error_info",
                "attempt": "1",
                "created": "2016-12-08 12:55:41",
                "insert_date": "2016-12-08 12:55:41",
                "direction_id": "1",
                "user_id": "1",
                "contact_name": "test_contact_name",
                "contact_type_id": "1",
                "customer_id": "1",
                "facebook_status_id": "1"
            },
            {
                "id": "4",
                "feature_id": "1",
                "parent_feature_id": null,
                "from_id": null,
                "from_name": null,
                "to_id": null,
                "to_name": null,
                "status_type": "single",
                "type": null,
                "message": "bchsdbjdsnchdnv cidcsds",
                "link": null,
                "total_like": "0",
                "comment_count": "0",
                "total_comment": "0",
                "me_like": "0",
                "post_like": "0",
                "error_info": null,
                "attempt": "1",
                "created": "2016-12-09 09:55:51",
                "insert_date": "2016-12-01 09:55:51",
                "direction_id": "2",
                "user_id": "19",
                "contact_name": "bchscdhdbcj",
                "contact_type_id": null,
                "customer_id": null,
                "facebook_status_id": "1"
            }
        ]
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ServerError
 */
$app->get('/facebooks', '\FacebooksController:getAll');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create New Facebook Data
 *  @api {post} /facebooks Create
 *  @apiName create
 *  @apiGroup Facebooks
 *  
 *  @apiUse FacebookDataParam
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
			"id": "12"
		}
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ServerError
 */
$app->post('/facebooks', '\FacebooksController:create');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Update Facebook by given ID
 *  @api {put} /facebooks/:id Update
 *  @apiName update
 *  @apiGroup Facebooks
 *  
 *  @apiParam {Number} id Facebook ID from database
 *  @apiUse FacebookDataParam
 *  
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(200 = OK)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {Object} data Response data
 *  @apiSuccess {String} data.id User ID
 *  
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"data": {
			"id": "12"
		}
	}
 *  
 *  @apiUse ClientError
 *  @apiUse ClientErrorBadRequest
 *  @apiUse ClientErrorNotFound
 *  @apiUse ServerError
 */
$app->put('/facebooks/{id}', '\FacebooksController:update');
