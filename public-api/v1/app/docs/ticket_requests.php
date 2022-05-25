<?php

/**
 *  @apiDefine TicketRequestsData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.ticket_request_no
 *  @apiSuccess {String} data.customer_name
 *  @apiSuccess {String} data.phone_number
 *  @apiSuccess {String} data.handphone
 *  @apiSuccess {Number} data.department_id
 *  @apiSuccess {String} data.ticket_cc
 *  @apiSuccess {Number} data.ticket_category_id
 *  @apiSuccess {Number} data.ticket_subcategory_id
 *  @apiSuccess {Number} data.ticket_status_id
 *  @apiSuccess {Number} data.province_id
 *  @apiSuccess {Number} data.ticket_priority_id
 *  @apiSuccess {String} data.email
 *  @apiSuccess {Number} data.city_id
 *  @apiSuccess {Number} data.customer_type_id
 *  @apiSuccess {Number} data.company_name
 *  @apiSuccess {Number} data.company_type_id
 *  @apiSuccess {String} data.address
 *  @apiSuccess {String} data.ticket_detail
 *  @apiSuccess {String} data.ticket_solution
 *  @apiSuccess {Number} data.product_type_id
 *  @apiSuccess {Number} data.product_id
 *  @apiSuccess {String} data.electrical_power
 *  @apiSuccess {String} data.product_capacity
 *  @apiSuccess {String} data.product_serial_number
 *  @apiSuccess {String} data.purchase_date
 *  @apiSuccess {Number} data.problem_code_after_id
 *  @apiSuccess {Number} data.problem_code_before_id
 *  @apiSuccess {String} data.install_status
 *  @apiSuccess {String} data.install_operation_status
 *  @apiSuccess {String} data.install_date
 *  @apiSuccess {Number} data.install_location_id
 *  @apiSuccess {Number} data.ticket_purchase_status_id
 *  @apiSuccess {String} data.trx_ticket_no
 *  @apiSuccess {String} data.trx_invoice_no
 *  @apiSuccess {String} data.technician
 *  @apiSuccess {Number} data.trx_spare_part_price
 *  @apiSuccess {Number} data.trx_survey_price
 *  @apiSuccess {Number} data.trx_install_price
 *  @apiSuccess {Number} data.trx_transport_price
 *  @apiSuccess {Number} data.trx_service_price
 *  @apiSuccess {Number} data.trx_discount_price
 *  @apiSuccess {Number} data.trx_total_price
 *  @apiSuccess {Number} data.warranty_status_id
 *  @apiSuccess {Number} data.actual_warranty_status_id
 *  @apiSuccess {Number} data.create_user_id
 *  @apiSuccess {String} data.create_date
 *  @apiSuccess {Number} data.ticket_repair_status_id
 *  @apiSuccess {Number} data.trx_transaction_price
 *  @apiSuccess {String} data.sla
 */
 
/**
 *  @apiDefine TicketRequestsDataParam
 *  @apiParam {Number} id
 *  @apiParam {Number} ticket_request_no
 *  @apiParam {String} customer_name
 *  @apiParam {String} phone_number
 *  @apiParam {String} handphone
 *  @apiParam {Number} department_id
 *  @apiParam {String} ticket_cc
 *  @apiParam {Number} ticket_category_id
 *  @apiParam {Number} ticket_subcategory_id
 *  @apiParam {Number} ticket_status_id
 *  @apiParam {Number} province_id
 *  @apiParam {Number} ticket_priority_id
 *  @apiParam {String} email
 *  @apiParam {Number} city_id
 *  @apiParam {Number} customer_type_id
 *  @apiParam {Number} company_name
 *  @apiParam {Number} company_type_id
 *  @apiParam {String} address
 *  @apiParam {String} ticket_detail
 *  @apiParam {String} ticket_solution
 *  @apiParam {Number} product_type_id
 *  @apiParam {Number} product_id
 *  @apiParam {String} electrical_power
 *  @apiParam {String} product_capacity
 *  @apiParam {String} product_serial_number
 *  @apiParam {String} purchase_date
 *  @apiParam {Number} problem_code_after_id
 *  @apiParam {Number} problem_code_before_id
 *  @apiParam {String} install_status
 *  @apiParam {String} install_operation_status
 *  @apiParam {String} install_date
 *  @apiParam {Number} install_location_id
 *  @apiParam {Number} ticket_purchase_status_id
 *  @apiParam {String} trx_ticket_no
 *  @apiParam {String} trx_invoice_no
 *  @apiParam {String} technician
 *  @apiParam {Number} trx_spare_part_price
 *  @apiParam {Number} trx_survey_price
 *  @apiParam {Number} trx_install_price
 *  @apiParam {Number} trx_transport_price
 *  @apiParam {Number} trx_service_price
 *  @apiParam {Number} trx_discount_price
 *  @apiParam {Number} trx_total_price
 *  @apiParam {Number} warranty_status_id
 *  @apiParam {Number} actual_warranty_status_id
 *  @apiParam {Number} create_user_id
 *  @apiParam {String} create_date
 *  @apiParam {Number} ticket_repair_status_id
 *  @apiParam {Number} trx_transaction_price
 *  @apiParam {String} sla
 */
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create
 *  @api {post} /ticket_requests Create
 *  @apiName create
 *  @apiGroup Ticket Requests
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse TicketRequestsDataParam
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
 *  @api {put} /ticket_requests/:id Update
 *  @apiName update
 *  @apiGroup Ticket Requests
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
 		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse TicketRequestsDataParam
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
 *  @apiDescription Read by Ticket Request ID
 *  @api {get} /ticket_requests/:id Read by Ticket Request ID
 *  @apiName getDetail
 *  @apiGroup Ticket Requests
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
 *  @apiUse TicketRequestsData
 *
 *  @apiSuccessExample {json} Success-Response:
 	HTTP/1.1 200 OK
    {
        "request_time": 1488793535,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 1,
        "data": {
            "id": "11",
            "ticket_request_no": "REQ170208000001",
            "customer_name": "test cust name",
            "phone_number": "2928374923",
            "handphone": "2893327",
            "department_id": "5",
            "ticket_cc": "1,2,3,4,6",
            "ticket_category_id": null,
            "ticket_subcategory_id": null,
            "ticket_status_id": null,
            "ticket_priority_id": null,
            "email": "email",
            "city_id": "9",
            "customer_type_id": null,
            "company_name": null,
            "company_type_id": null,
            "address": "address",
            "ticket_detail": null,
            "ticket_solution": null,
            "product_type_id": null,
            "product_id": null,
            "electrical_power": null,
            "product_capacity": null,
            "product_serial_number": null,
            "purchase_date": null,
            "problem_code_after_id": null,
            "problem_code_before_id": null,
            "install_status": null,
            "install_operation_status": null,
            "install_date": null,
            "install_location_id": "1",
            "ticket_purchase_status_id": null,
            "trx_ticket_no": null,
            "trx_invoice_no": null,
            "technician": null,
            "trx_spare_part_price": null,
            "trx_survey_price": null,
            "trx_install_price": null,
            "trx_transport_price": null,
            "trx_service_price": null,
            "trx_discount_price": null,
            "trx_total_price": null,
            "warranty_status_id": null,
            "actual_warranty_status_id": null,
            "create_user_id": "3",
            "create_date": "2017-02-08 00:00:00",
            "ticket_repair_status_id": null,
            "trx_transaction_price": null,
            "sla": null,
            "department": "Sales ATI",
            "ticket_category": null,
            "ticket_subcategory": null,
            "ticket_status": null,
            "ticket_priority": null,
            "city": "Kabupaten Aceh Tenggara",
            "customer_type": null,
            "company_type": null,
            "install_location": "ATAP DATAR",
            "ticket_purchase_status": null,
            "warranty_status": null,
            "actual_warranty": null,
            "create_user": "adil",
            "ticket_repair_status": null,
            "product": null,
            "product_type": null,
            "problem_code_before": null,
            "problem_code_after": null
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
 *  @apiDescription Get All
 *  @api {get} /ticket_requests Get All
 *  @apiName getAll
 *  @apiGroup Ticket Requests
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse TicketRequestsDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse TicketRequestsData
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
                "id": "11",
                "ticket_request_no": "REQ170208000001",
                "customer_name": "test cust name",
                "phone_number": "2928374923",
                "handphone": "2893327",
                "department_id": "5",
                "ticket_cc": "1,2,3,4,6",
                "ticket_category_id": null,
                "ticket_subcategory_id": null,
                "ticket_status_id": null,
                "ticket_priority_id": null,
                "email": "email",
                "city_id": "9",
                "customer_type_id": null,
                "company_name": null,
                "company_type_id": null,
                "address": "address",
                "ticket_detail": null,
                "ticket_solution": null,
                "product_type_id": null,
                "product_id": null,
                "electrical_power": null,
                "product_capacity": null,
                "product_serial_number": null,
                "purchase_date": null,
                "problem_code_after_id": null,
                "problem_code_before_id": null,
                "install_status": null,
                "install_operation_status": null,
                "install_date": null,
                "install_location_id": "1",
                "ticket_purchase_status_id": null,
                "trx_ticket_no": null,
                "trx_invoice_no": null,
                "technician": null,
                "trx_spare_part_price": null,
                "trx_survey_price": null,
                "trx_install_price": null,
                "trx_transport_price": null,
                "trx_service_price": null,
                "trx_discount_price": null,
                "trx_total_price": null,
                "warranty_status_id": null,
                "actual_warranty_status_id": null,
                "create_user_id": "3",
                "create_date": "2017-02-08 00:00:00",
                "ticket_repair_status_id": null,
                "trx_transaction_price": null,
                "sla": null,
                "department": "Sales ATI",
                "ticket_category": null,
                "ticket_subcategory": null,
                "ticket_status": null,
                "ticket_priority": null,
                "city": "Kabupaten Aceh Tenggara",
                "customer_type": null,
                "company_type": null,
                "install_location": "ATAP DATAR",
                "ticket_purchase_status": null,
                "warranty_status": null,
                "actual_warranty": null,
                "create_user": "adil",
                "ticket_repair_status": null,
                "product": null,
                "product_type": null,
                "problem_code_before": null,
                "problem_code_after": null
            },
            {
                "id": "12",
                "ticket_request_no": "REQ170208000002",
                "customer_name": "test cut name",
                "phone_number": "198723913",
                "handphone": "89732984",
                "department_id": "2",
                "ticket_cc": "1,3,4,5,6,27",
                "ticket_category_id": "1",
                "ticket_subcategory_id": "2",
                "ticket_status_id": "2",
                "ticket_priority_id": "2",
                "email": "email@email.com",
                "city_id": "32",
                "customer_type_id": "1",
                "company_name": "company name",
                "company_type_id": "2",
                "address": "address",
                "ticket_detail": "update request ",
                "ticket_solution": "update request ticket",
                "product_type_id": "1",
                "product_id": "12",
                "electrical_power": "1000",
                "product_capacity": "800",
                "product_serial_number": "123456",
                "purchase_date": "2017-02-08",
                "problem_code_after_id": "1",
                "problem_code_before_id": "1",
                "install_status": "2",
                "install_operation_status": "1",
                "install_date": "2017-02-08",
                "install_location_id": "1",
                "ticket_purchase_status_id": "2",
                "trx_ticket_no": "req170208000002",
                "trx_invoice_no": "test123",
                "technician": "technician name",
                "trx_spare_part_price": "10000",
                "trx_survey_price": "3000",
                "trx_install_price": "2000",
                "trx_transport_price": "10",
                "trx_service_price": "5000",
                "trx_discount_price": null,
                "trx_total_price": "7000",
                "warranty_status_id": "1",
                "actual_warranty_status_id": "1",
                "create_user_id": "3",
                "create_date": "2017-02-08 00:00:00",
                "ticket_repair_status_id": "2",
                "trx_transaction_price": "10000",
                "sla": null,
                "department": "Project Sales ATI",
                "ticket_category": "Beli Sparepart",
                "ticket_subcategory": "Beli Spare Parts untuk Penggantian",
                "ticket_status": "CREATED",
                "ticket_priority": "URGENT",
                "city": "Kabupaten Labuhanbatu Utara",
                "customer_type": "INDIVIDUAL",
                "company_type": "KONTRAKTOR",
                "install_location": "ATAP DATAR",
                "ticket_purchase_status": "PENYEDIAAN",
                "warranty_status": "garansi",
                "actual_warranty": "garansi",
                "create_user": "adil",
                "ticket_repair_status": "MASIH RUSAK",
                "product": "ANDRIS LUX 15 - 350 ID",
                "product_type": "Electric Storage Water Heater",
                "problem_code_before": "Air panas tidak cukup / kurang banyak",
                "problem_code_after": "Air panas tidak cukup / kurang banyak"
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