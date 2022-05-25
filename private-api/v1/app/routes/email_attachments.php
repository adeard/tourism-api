<?php

require_once __DIR__ .'/../controller/EmailAttachmentsController.php';

/**
 *  @apiDefine AttachmentData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.email_id
 *  @apiSuccess {String} data.path
 *  @apiSuccess {String} data.filename
 */

/**
 *  @apiDefine AttachmentDataParam
 *  @apiParam {Number} email_id
 *  @apiParam {String} path
 *  @apiParam {String} filename
 */
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get Email Attachment by given Email ID
 *  @api {get} /emails/:email_id/attachments Read by Email ID
 *  @apiName getByEmail
 *  @apiGroup Email Attachments
 *  
 *  @apiParam {String} email_id Email ID
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
 *  @apiUse AttachmentData
 *  @apiUse Paging
 *  
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1478958162,
		"execution_time": 21,
		"response_code": 200,
		"status": "success",
		"total_data": 3,
		"data": [
			{
				"id": "3",
				"email_id": "2",
				"path": "678",
				"filename": "test"
			},
			{
				"id": "4",
				"email_id": "2",
				"path": null,
				"filename": "coba"
			},
			{
				"id": "8",
				"email_id": "2",
				"path": "path",
				"filename": "file"
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
$app->get('/emails/{email_id:[0-9]+}/attachments', '\EmailAttachmentsController:getByEmail');

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create New Email Attachment Data
 *  @api {post} /attachments Create
 *  @apiName create
 *  @apiGroup Email Attachments
 *  
 *  @apiUse AttachmentDataParam
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
$app->post('/attachments', '\EmailAttachmentsController:create');
