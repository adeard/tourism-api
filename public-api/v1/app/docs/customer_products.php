<?php

/**
 *  @apiDefine CustomerProductsData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.customer_id
 *  @apiSuccess {Number} data.product_id
 *  @apiSuccess {String} data.buying_date
 *  @apiSuccess {Number} data.is_active
 *  @apiSuccess {String} data.created
 */

/**
 *  @apiDefine ViewCustomerProductsData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.customer_id
 *  @apiSuccess {Number} data.product_type_id
 *  @apiSuccess {Number} data.product_id
 *  @apiSuccess {String} data.buying_date
 *  @apiSuccess {Number} data.product_capacity
 *  @apiSuccess {Number} data.electrical_power
 *  @apiSuccess {Number} data.product_serial_number
 *  @apiSuccess {String} data.shop_data
 *  @apiSuccess {String} data.customer_product_idx
 *  @apiSuccess {String} data.created
 *  @apiSuccess {Number} data.is_active
 *  @apiSuccess {String} data.product_type_name
 *  @apiSuccess {String} data.product_name
 */
 
/**
 *  @apiDefine CustomerProductsDataParam
 *  @apiParam {Number} customer_id
 *  @apiParam {Number} product_id
 *  @apiParam {String} buying_date
 *  @apiParam {Number} is_active
 *  @apiParam {String} created
 */
 
/**
 *  @apiDefine ViewCustomerProductsDataParam
 *  @apiParam {Number} customer_id
 *  @apiParam {Number} product_type_id
 *  @apiParam {Number} product_id
 *  @apiParam {String} buying_date
 *  @apiParam {Number} product_capacity
 *  @apiParam {Number} electrical_power
 *  @apiParam {Number} product_serial_number
 *  @apiParam {String} shop_data
 *  @apiParam {String} customer_product_idx
 *  @apiParam {String} created
 *  @apiParam {Number} is_active
 *  @apiParam {String} product_type_name
 *  @apiParam {String} product_name
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create
 *  @api {post} /customer_products Create
 *  @apiName create
 *  @apiGroup Customer Products
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CustomerProductsDataParam
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
 *  @api {put} /customer_products/:id Update
 *  @apiName update
 *  @apiGroup Customer Products
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CustomerProductsDataParam
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
 *  @api {delete} /customer_products/:id Delete
 *  @apiName delete
 *  @apiGroup Customer Products
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
 *  @api {get} /customer_products Get All
 *  @apiName getAll
 *  @apiGroup Customer Products
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse CustomerProductsDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CustomerProductsData
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
				"id": "4",
				"customer_id": "22",
				"product_id": "555",
				"buying_date": "2016-11-24",
				"is_active": "1",
				"created": "2016-11-23 17:17:25",
				"product_capacity": null,
				"product_serial_number": null,
				"shop_data": null
			},
			{
				"id": "6",
				"customer_id": "9",
				"product_id": "110",
				"buying_date": "2016-11-24",
				"is_active": "1",
				"created": "2016-11-24 09:49:45",
				"product_capacity": null,
				"product_serial_number": null,
				"shop_data": null
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
 *  @apiDescription Get All View Customer Products
 *  @api {get} /view_customer_products/active Get All View Customer Products
 *  @apiName getAllViewCustomerProducts
 *  @apiGroup Customer Products
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
  *
  *  @apiParam {String} order="id" Order by data field name
  *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
  *  @apiParam {Number} limit=20 Limit data
  *  @apiParam {Number} page=1 Page number
  *  @apiUse ViewCustomerProductsDataParam
  *
  *  @apiSuccess {Number} request_time Request time (timestamp)
  *  @apiSuccess {Number} execution_time Request execution time (in seconds)
  *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
  *  @apiSuccess {String} status Response status <b>(success)</b>
  *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
  *  @apiSuccess {Object[]} data Response data (Array of Object)
  *  @apiUse ViewCustomerProductsData
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
                "id": "4",
                "customer_id": "22",
                "product_type_id": "1",
                "product_id": "1",
                "buying_date": "2016-11-24",
                "product_capacity": null,
                "electrical_power": null,
                "product_serial_number": null,
                "shop_data": null,
                "customer_product_idx": null,
                "created": "2016-11-23 17:17:25",
                "is_active": "1",
                "product_type_name": "Electric Storage Water Heater",
                "product_name": "KAIROS THERMODIRECT 150/1 TT/TR ULTRA"
            },
            {
                "id": "6",
                "customer_id": "9",
                "product_type_id": "1",
                "product_id": "1",
                "buying_date": "2016-11-24",
                "product_capacity": null,
                "electrical_power": null,
                "product_serial_number": null,
                "shop_data": null,
                "customer_product_idx": null,
                "created": "2016-11-24 09:49:45",
                "is_active": "1",
                "product_type_name": "Electric Storage Water Heater",
                "product_name": "KAIROS THERMODIRECT 150/1 TT/TR ULTRA"
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
 *  @apiDescription Read by Customer Products ID
 *  @api {get} /customer_products/:id Read by Customer Products ID
 *  @apiName getDetail
 *  @apiGroup Customer Products
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
 *  @apiUse CustomerProductsData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482462908,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"id": "4",
			"customer_id": "22",
			"product_id": "555",
			"buying_date": "2016-11-24",
			"is_active": "1",
			"created": "2016-11-23 17:17:25",
			"product_capacity": null,
			"product_serial_number": null,
			"shop_data": null
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