<?php

require_once __DIR__ .'/../controller/MediaInboundTypesController.php';

/**
 *  @apiDefine MediaInboundTypesData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.media_id
 *  @apiSuccess {Number} data.media_record_id
 *  @apiSuccess {Number} data.inbound_type_id
 *  @apiSuccess {String} data.created
 *  @apiSuccess {Number} data.is_active
 *  @apiSuccess {String} data.media_name
 *  @apiSuccess {String} data.inbound_type_name
 */
 
/**
 *  @apiDefine MediaInboundTypesDataParam
 *  @apiParam {Number} media_id
 *  @apiParam {Number} media_record_id
 *  @apiParam {Number} inbound_type_id
 *  @apiParam {String} created
 *  @apiParam {Number} is_active
 *  @apiParam {String} media_name
 *  @apiParam {String} inbound_type_name
 */
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All
 *  @api {get} /media_inbound_types Get All
 *  @apiName getAll
 *  @apiGroup Media Inbound Types
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse MediaInboundTypesDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse MediaInboundTypesData
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
				"media_id": "2",
				"media_record_id": "63",
				"inbound_type_id": "2",
				"created": "2016-12-15 19:36:59",
				"is_active": "1",
				"media_name": "SMS",
				"inbound_type_name": "Complain produk"
			},
			{
				"id": "2",
				"media_id": "2",
				"media_record_id": "63",
				"inbound_type_id": "1",
				"created": "2016-12-15 19:36:59",
				"is_active": "1",
				"media_name": "SMS",
				"inbound_type_name": "Inquiry"
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
$app->get('/media_inbound_types', 'MediaInboundTypesController:getAll');