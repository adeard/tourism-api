<?php

/**
 *  @apiDefine TicketAttachmentsData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.path
 *  @apiSuccess {String} data.filename
 *  @apiSuccess {String} data.file_size
 *  @apiSuccess {String} data.mime_type
 *  @apiSuccess {String} data.ticket_id
 *  @apiSuccess {String} data.ticket_request_id
 */
 
/**
 *  @apiDefine TicketAttachmentsDataParam
 *  @apiParam {Number} id
 *  @apiParam {String} path
 *  @apiParam {String} filename
 *  @apiParam {Number} file_size
 *  @apiParam {String} mime_type
 *  @apiParam {Number} ticket_id
 *  @apiParam {Number} ticket_request_id
 */
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create
 *  @api {post} /ticket_attachments Create
 *  @apiName create
 *  @apiGroup Ticket Attachments
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {Number} ticket_id ticket_id
 *  @apiParam {String} file file upload (choosen file)<br>'audio/basic',
 <br>'video/msvideo',
 <br>'video/avi',
 <br>'video/x-msvideo',
 <br>'image/bmp',
 <br>'application/x-bzip2',
 <br>'text/css',
 <br>'application/xml-dtd',
 <br>'application/msword',
 <br>'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
 <br>'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
 <br>'application/ecmascript',
 <br>'image/gif',
 <br>'application/x-gzip',
 <br>'application/mac-binhex40',
 <br>'text/html',
 <br>'application/java-archive',
 <br>'image/jpeg',
 <br>'application/x-javascript',
 <br>'audio/x-midi',
 <br>'audio/mpeg',
 <br>'video/mpeg',
 <br>'audio/vorbis',
 <br>'application/ogg',
 <br>'application/pdf',
 <br>'application/x-perl',
 <br>'image/png',
 <br>'application/vnd.openxmlformats-officedocument.presentationml.template',
 <br>'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
 <br>'application/vnd.ms-powerpointtd>',
 <br>'application/vnd.openxmlformats-officedocument.presentationml.presentation',
 <br>'application/postscript',
 <br>'video/quicktime',
 <br>'audio/x-pn-realaudio',
 <br>'audio/vnd.rn-realaudio',
 <br>'audio/x-pn-realaudio',
 <br>'audio/vnd.rn-realaudio',
 <br>'application/rdf',
 <br>'application/rdf+xml',
 <br>'application/rtf',
 <br>'text/sgml',
 <br>'application/x-stuffit',
 <br>'application/vnd.openxmlformats-officedocument.presentationml.slide',
 <br>'image/svg+xml',
 <br>'application/x-shockwave-flash',
 <br>'application/x-tar',
 <br>'image/tiff',
 <br>'text/tab-separated-values',
 <br>'text/plain',
 <br>'audio/wav',
 <br>'audio/x-wav',
 <br>'application/vnd.ms-excel.addin.macroEnabled.12',
 <br>'application/vnd.ms-excel',
 <br>'application/vnd.ms-excel.sheet.binary.macroEnabled.12',
 <br>'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
 <br>'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
 <br>'application/xml',
 <br>'application/zip',
 <br>'application/x-compressed-zip'
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
 *  @apiDescription Create Request
 *  @api {post} /ticket_attachments Create Request
 *  @apiName createRequest
 *  @apiGroup Ticket Attachments
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {Number} ticket_request_id ticket_request_id
 *  @apiParam {String} file file upload (choosen file)<br>'audio/basic',
 <br>'video/msvideo',
 <br>'video/avi',
 <br>'video/x-msvideo',
 <br>'image/bmp',
 <br>'application/x-bzip2',
 <br>'text/css',
 <br>'application/xml-dtd',
 <br>'application/msword',
 <br>'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
 <br>'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
 <br>'application/ecmascript',
 <br>'image/gif',
 <br>'application/x-gzip',
 <br>'application/mac-binhex40',
 <br>'text/html',
 <br>'application/java-archive',
 <br>'image/jpeg',
 <br>'application/x-javascript',
 <br>'audio/x-midi',
 <br>'audio/mpeg',
 <br>'video/mpeg',
 <br>'audio/vorbis',
 <br>'application/ogg',
 <br>'application/pdf',
 <br>'application/x-perl',
 <br>'image/png',
 <br>'application/vnd.openxmlformats-officedocument.presentationml.template',
 <br>'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
 <br>'application/vnd.ms-powerpointtd>',
 <br>'application/vnd.openxmlformats-officedocument.presentationml.presentation',
 <br>'application/postscript',
 <br>'video/quicktime',
 <br>'audio/x-pn-realaudio',
 <br>'audio/vnd.rn-realaudio',
 <br>'audio/x-pn-realaudio',
 <br>'audio/vnd.rn-realaudio',
 <br>'application/rdf',
 <br>'application/rdf+xml',
 <br>'application/rtf',
 <br>'text/sgml',
 <br>'application/x-stuffit',
 <br>'application/vnd.openxmlformats-officedocument.presentationml.slide',
 <br>'image/svg+xml',
 <br>'application/x-shockwave-flash',
 <br>'application/x-tar',
 <br>'image/tiff',
 <br>'text/tab-separated-values',
 <br>'text/plain',
 <br>'audio/wav',
 <br>'audio/x-wav',
 <br>'application/vnd.ms-excel.addin.macroEnabled.12',
 <br>'application/vnd.ms-excel',
 <br>'application/vnd.ms-excel.sheet.binary.macroEnabled.12',
 <br>'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
 <br>'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
 <br>'application/xml',
 <br>'application/zip',
 <br>'application/x-compressed-zip'
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
 *  @api {put} /ticket_attachments/:id Update
 *  @apiName update
 *  @apiGroup Ticket Attachments
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse TicketAttachmentsDataParam
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
 *  @apiDescription Read by Ticket Attachment ID
 *  @api {get} /customers/:id Read by Ticket Attachment ID
 *  @apiName getDetail
 *  @apiGroup Ticket Attachments
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
 *  @apiUse TicketAttachmentsData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
    {
        "request_time": 1488775748,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 1,
        "data": {
            "id": "26",
            "path": "C:/xampp/htdocs/public-api/outbox/12",
            "filename": "2_24293 (1).jpg",
            "file_size": "5799",
            "mime_type": "image/jpeg",
            "ticket_id": "46",
            "ticket_request_id": "12"
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
 *  @apiDescription Download Attachment by Ticket Attachments ID
 *  @api {get} /ticket_attachments/:id/file Download Attachment by Ticket Attachments ID
 *  @apiName download
 *  @apiGroup Ticket Attachments
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
 *  @apiDescription Delete
 *  @api {delete} /ticket_attachments/:id Delete
 *  @apiName delete
 *  @apiGroup Ticket Attachments
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYz4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
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
 *  @apiDescription Get All By Ticket ID
 *  @api {get} /tickets/:ticket_id/ticket_attachments Get All By Ticket ID
 *  @apiName getByTicket
 *  @apiGroup Ticket Attachments
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=0 Limit data
 *  @apiUse TicketAttachmentsDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse TicketAttachmentsData
 *
 *  @apiSuccessExample {json} Success-Response:
 	HTTP/1.1 200 OK
    {
      "request_time": 1488776334,
      "execution_time": 0,
      "response_code": 200,
      "status": "success",
      "total_data": 3,
      "data": [
        {
          "id": "33",
          "filename": "orix ticket.gif",
          "file_size": "62021",
          "mime_type": "image/gif",
          "ticket_id": "87",
          "ticket_request_id": "29"
        },
        {
          "id": "34",
          "filename": "tambah kolom product.jpg",
          "file_size": "383811",
          "mime_type": "image/jpeg",
          "ticket_id": "87",
          "ticket_request_id": "29"
        },
        {
          "id": "35",
          "filename": "2017-02-21_14-14-56.jpg",
          "file_size": "218559",
          "mime_type": "image/jpeg",
          "ticket_id": "87",
          "ticket_request_id": "29"
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
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All By Ticket Request ID
 *  @api {get} /ticket_requests/:ticket_request_id/ticket_attachments Get All By Ticket Request ID
 *  @apiName getByTicketRequest
 *  @apiGroup Ticket Attachments
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=0 Limit data
 *  @apiUse TicketAttachmentsDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse TicketAttachmentsData
 *
 *  @apiSuccessExample {json} Success-Response:
  	HTTP/1.1 200 OK
    {
        "request_time": 1488780396,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 3,
        "data": [
            {
                "id": "33",
                "filename": "orix ticket.gif",
                "file_size": "62021",
                "mime_type": "image/gif",
                "ticket_id": "87",
                "ticket_request_id": "29"
            },
            {
                "id": "34",
                "filename": "tambah kolom product.jpg",
                "file_size": "383811",
                "mime_type": "image/jpeg",
                "ticket_id": "87",
                "ticket_request_id": "29"
            },
            {
                "id": "35",
                "filename": "2017-02-21_14-14-56.jpg",
                "file_size": "218559",
                "mime_type": "image/jpeg",
                "ticket_id": "87",
                "ticket_request_id": "29"
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
 
