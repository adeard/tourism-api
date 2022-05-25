<?php

require_once __DIR__ .'/../controller/InboundTypesController.php';

/**
 *  @apiDefine InboundTypesData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.sort
 *  @apiSuccess {String} data.code
 *  @apiSuccess {String} data.parent_id
 *  @apiSuccess {String} data.name
 *  @apiSuccess {String} data.info
 *  @apiSuccess {Number} data.is_default
 *  @apiSuccess {Number} data.is_active
 */
 
/**
 *  @apiDefine InboundTypesDataParam
 *  @apiParam {Number} sort
 *  @apiParam {String} code
 *  @apiParam {String} parent_id
 *  @apiParam {String} name
 *  @apiParam {String} info
 *  @apiParam {Number} is_default
 *  @apiParam {Number} is_active
 */
 
 /**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All
 *  @api {get} /inbound_types/active Get All
 *  @apiName getAll
 *  @apiGroup Inbound Types
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
 *  @apiUse InboundTypesData
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
				"sort": "1",
				"code": null,
				"parent_id": null,
				"name": "Inquiry",
				"info": null,
				"is_default": "0",
				"is_active": "1"
			},
			{
				"id": "2",
				"sort": "2",
				"code": null,
				"parent_id": null,
				"name": "Complain produk",
				"info": null,
				"is_default": "0",
				"is_active": "1"
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
$app->get('/inbound_types/active', '\InboundTypesController:getAll');