<?php

/**
 *  @apiDefine TicketsData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {String} data.ticket_no
 *  @apiSuccess {Number} data.ticket_request_id
 *  @apiSuccess {String} data.ticket_cc
 *  @apiSuccess {Number} data.department_id
 *  @apiSuccess {Number} data.ticket_category_id
 *  @apiSuccess {Number} data.ticket_subcategory_id
 *  @apiSuccess {Number} data.ticket_priority_id
 *  @apiSuccess {Number} data.ticket_status_id
 *  @apiSuccess {Number} data.ticket_detail_status_id
 *  @apiSuccess {Number} data.ticket_purchase_status_id
 *  @apiSuccess {Number} data.sla
 *  @apiSuccess {String} data.create_date
 *  @apiSuccess {String} data.create_by
 *  @apiSuccess {String} data.open_date
 *  @apiSuccess {String} data.open_by
 *  @apiSuccess {String} data.process_date
 *  @apiSuccess {String} data.process_by
 *  @apiSuccess {String} data.done_date
 *  @apiSuccess {String} data.done_by
 *  @apiSuccess {String} data.close_date
 *  @apiSuccess {String} data.close_by
 *  @apiSuccess {String} data.cancel_date
 *  @apiSuccess {String} data.cancel_by
 *  @apiSuccess {String} data.ticket_details
 *  @apiSuccess {String} data.ticket_solutions
 *  @apiSuccess {Number} data.product_type_id
 *  @apiSuccess {Number} data.product_id
 *  @apiSuccess {Number} data.customer_id
 *  @apiSuccess {Number} data.province_id
 *  @apiSuccess {Number} data.customer_product_id
 *  @apiSuccess {Number} data.warranty_status_id
 *  @apiSuccess {Number} data.actual_warranty_status_id
 *  @apiSuccess {Number} data.problem_code_after_id
 *  @apiSuccess {Number} data.problem_code_before_id
 *  @apiSuccess {Number} data.ticket_repair_status_id
 *  @apiSuccess {String} data.install_status
 *  @apiSuccess {String} data.install_operation_status
 *  @apiSuccess {String} data.install_date
 *  @apiSuccess {Number} data.install_location_id
 *  @apiSuccess {String} data.trx_ticket_no
 *  @apiSuccess {String} data.trx_invoice_no
 *  @apiSuccess {String} data.technician
 *  @apiSuccess {Number} data.trx_spare_part_price
 *  @apiSuccess {Number} data.trx_survey_price
 *  @apiSuccess {Number} data.trx_install_price
 *  @apiSuccess {Number} data.trx_transport_price
 *  @apiSuccess {Number} data.trx_service_price
 *  @apiSuccess {Number} data.trx_transaction_price
 *  @apiSuccess {Number} data.trx_total_price
 *  @apiSuccess {Number} data.trx_discount_price
 *  @apiSuccess {Number} data.is_over_sla
 */
 
/**
 *  @apiDefine TicketsDataParam
 *  @apiParam {String} ticket_no
 *  @apiParam {Number} ticket_request_id
 *  @apiParam {String} ticket_cc
 *  @apiParam {Number} department_id
 *  @apiParam {Number} ticket_category_id
 *  @apiParam {Number} ticket_subcategory_id
 *  @apiParam {Number} ticket_priority_id
 *  @apiParam {Number} ticket_status_id
 *  @apiParam {Number} ticket_detail_status_id
 *  @apiParam {Number} ticket_purchase_status_id
 *  @apiParam {Number} sla
 *  @apiParam {String} create_date
 *  @apiParam {String} create_by
 *  @apiParam {String} open_date
 *  @apiParam {String} open_by
 *  @apiParam {String} process_date
 *  @apiParam {String} process_by
 *  @apiParam {String} done_date
 *  @apiParam {String} done_by
 *  @apiParam {String} close_date
 *  @apiParam {String} close_by
 *  @apiParam {String} cancel_date
 *  @apiParam {String} cancel_by
 *  @apiParam {String} ticket_details
 *  @apiParam {String} ticket_solutions
 *  @apiParam {Number} product_type_id
 *  @apiParam {Number} product_id
 *  @apiParam {Number} customer_id
 *  @apiParam {Number} province_id
 *  @apiParam {Number} customer_product_id
 *  @apiParam {Number} warranty_status_id
 *  @apiParam {Number} actual_warranty_status_id
 *  @apiParam {Number} problem_code_after_id
 *  @apiParam {Number} problem_code_before_id
 *  @apiParam {Number} ticket_repair_status_id
 *  @apiParam {String} install_status
 *  @apiParam {String} install_operation_status
 *  @apiParam {String} install_date
 *  @apiParam {Number} install_location_id
 *  @apiParam {String} trx_ticket_no
 *  @apiParam {String} trx_invoice_no
 *  @apiParam {String} technician
 *  @apiParam {Number} trx_spare_part_price
 *  @apiParam {Number} trx_survey_price
 *  @apiParam {Number} trx_install_price
 *  @apiParam {Number} trx_transport_price
 *  @apiParam {Number} trx_service_price
 *  @apiParam {Number} trx_transaction_price
 *  @apiParam {Number} trx_total_price
 *  @apiParam {Number} trx_discount_price
 *  @apiParam {Number} is_over_sla
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Create
 *  @api {post} /tickets Create
 *  @apiName create
 *  @apiGroup Tickets
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse TicketsDataParam
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
 *  @api {put} /tickets/:id Update
 *  @apiName update
 *  @apiGroup Tickets
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
 		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse TicketsDataParam
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
 *  @apiDescription Get All
 *  @api {get} /tickets Get All
 *  @apiName getAll
 *  @apiGroup Tickets
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse TicketsDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse TicketsData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
  	HTTP/1.1 200 OK
    {
        "request_time": 1488769464,
        "execution_time": 1,
        "response_code": 200,
        "status": "success",
        "total_data": 2,
        "data": [
            {
                "id": "13",
                "ticket_no": "170206000001",
                "ticket_request_id": null,
                "ticket_cc": null,
                "department_id": "3",
                "ticket_category_id": "1",
                "ticket_subcategory_id": "1",
                "ticket_priority_id": "2",
                "ticket_status_id": "3",
                "ticket_detail_status_id": null,
                "ticket_purchase_status_id": null,
                "sla": null,
                "create_date": "2017-02-06 00:00:00",
                "create_by": null,
                "open_date": "2017-02-21 10:28:47",
                "open_by": "47",
                "process_date": null,
                "process_by": null,
                "done_date": null,
                "done_by": null,
                "close_date": null,
                "close_by": null,
                "cancel_date": null,
                "cancel_by": null,
                "ticket_details": null,
                "ticket_solutions": null,
                "product_type_id": null,
                "product_id": null,
                "customer_id": null,
                "customer_product_id": null,
                "warranty_status_id": null,
                "actual_warranty_status_id": null,
                "problem_code_after_id": null,
                "problem_code_before_id": null,
                "ticket_repair_status_id": null,
                "install_status": null,
                "install_operation_status": null,
                "install_date": null,
                "install_location_id": "0",
                "trx_ticket_no": null,
                "trx_invoice_no": null,
                "technician": null,
                "trx_spare_part_price": null,
                "trx_survey_price": null,
                "trx_install_price": null,
                "trx_transport_price": null,
                "trx_service_price": null,
                "trx_transaction_price": null,
                "trx_total_price": null,
                "trx_discount_price": null,
                "is_over_sla": "0",
                "ticket_request_no": null,
                "department": "Service Center ASG",
                "ticket_category": "Beli Sparepart",
                "ticket_subcategory": "Beli Spare Parts untuk stok",
                "ticket_priority": "URGENT",
                "ticket_status": "OPEN",
                "ticket_purchase_status": null,
                "created_user": null,
                "open_user": "ade",
                "process_user": null,
                "done_user": null,
                "close_user": null,
                "cancel_user": null,
                "product_type": null,
                "product": null,
                "warranty_status": null,
                "actual_warranty_status": null,
                "ticket_repair_status": null,
                "install_location": null,
                "problem_code_before": null,
                "problem_code_after": null,
                "customer_fullname": null,
                "customer_address": null,
                "customer_home_phone": null,
                "customer_office_phone": null,
                "customer_handphone": null,
                "customer_email": null,
                "customer_type": null,
                "company_name": null,
                "company_type": null,
                "product_capacity": null,
                "electrical_power": null,
                "product_serial_number": null,
                "purchase_date": null
            },
            {
                "id": "14",
                "ticket_no": "170206000002",
                "ticket_request_id": null,
                "ticket_cc": "4,28,29,30",
                "department_id": "3",
                "ticket_category_id": "5",
                "ticket_subcategory_id": null,
                "ticket_priority_id": "1",
                "ticket_status_id": "2",
                "ticket_detail_status_id": null,
                "ticket_purchase_status_id": "1",
                "sla": "7",
                "create_date": "2017-02-24 13:10:48",
                "create_by": "47",
                "open_date": null,
                "open_by": null,
                "process_date": null,
                "process_by": null,
                "done_date": null,
                "done_by": null,
                "close_date": null,
                "close_by": null,
                "cancel_date": null,
                "cancel_by": null,
                "ticket_details": "update detail",
                "ticket_solutions": "update solution",
                "product_type_id": "3",
                "product_id": "31",
                "customer_id": "20",
                "customer_product_id": null,
                "warranty_status_id": "2",
                "actual_warranty_status_id": "1",
                "problem_code_after_id": null,
                "problem_code_before_id": null,
                "ticket_repair_status_id": null,
                "install_status": null,
                "install_operation_status": null,
                "install_date": null,
                "install_location_id": null,
                "trx_ticket_no": null,
                "trx_invoice_no": null,
                "technician": null,
                "trx_spare_part_price": null,
                "trx_survey_price": null,
                "trx_install_price": null,
                "trx_transport_price": null,
                "trx_service_price": null,
                "trx_transaction_price": null,
                "trx_total_price": null,
                "trx_discount_price": null,
                "is_over_sla": "0",
                "ticket_request_no": null,
                "department": "Service Center ASG",
                "ticket_category": "Workshop Customer Call",
                "ticket_subcategory": null,
                "ticket_priority": "NORMAL",
                "ticket_status": "CREATED",
                "ticket_purchase_status": "PENGGANTIAN",
                "created_user": "ade",
                "open_user": null,
                "process_user": null,
                "done_user": null,
                "close_user": null,
                "cancel_user": null,
                "product_type": "Heat Pump Water Heater",
                "product": "ARI 200 STAB 560 THER MO EU",
                "warranty_status": "tidak garansi",
                "actual_warranty_status": "garansi",
                "ticket_repair_status": null,
                "install_location": null,
                "problem_code_before": null,
                "problem_code_after": null,
                "customer_fullname": "JOHN  KEMON",
                "customer_address": "GDFGDG",
                "customer_home_phone": null,
                "customer_office_phone": null,
                "customer_handphone": "085715325265",
                "customer_email": "mario@jsm.co.id",
                "customer_type": "INDIVIDUAL",
                "company_name": "DFGDG",
                "company_type": "KONSULTAN",
                "product_capacity": null,
                "electrical_power": null,
                "product_serial_number": null,
                "purchase_date": null
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
 *  @apiDescription Get All Reports
 *  @api {get} /tickets/report Get All Reports
 *  @apiName getReport
 *  @apiGroup Tickets
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse TicketsDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse TicketsData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
  	HTTP/1.1 200 OK
    {
        "request_time": 1488769464,
        "execution_time": 1,
        "response_code": 200,
        "status": "success",
        "total_data": 2,
        "data": [
            {
                "id": "13",
                "ticket_no": "170206000001",
                "ticket_request_id": null,
                "ticket_cc": null,
                "department_id": "3",
                "ticket_category_id": "1",
                "ticket_subcategory_id": "1",
                "ticket_priority_id": "2",
                "ticket_status_id": "3",
                "ticket_detail_status_id": null,
                "ticket_purchase_status_id": null,
                "sla": null,
                "create_date": "2017-02-06 00:00:00",
                "create_by": null,
                "open_date": "2017-02-21 10:28:47",
                "open_by": "47",
                "process_date": null,
                "process_by": null,
                "done_date": null,
                "done_by": null,
                "close_date": null,
                "close_by": null,
                "cancel_date": null,
                "cancel_by": null,
                "ticket_details": null,
                "ticket_solutions": null,
                "product_type_id": null,
                "product_id": null,
                "customer_id": null,
                "customer_product_id": null,
                "warranty_status_id": null,
                "actual_warranty_status_id": null,
                "problem_code_after_id": null,
                "problem_code_before_id": null,
                "ticket_repair_status_id": null,
                "install_status": null,
                "install_operation_status": null,
                "install_date": null,
                "install_location_id": "0",
                "trx_ticket_no": null,
                "trx_invoice_no": null,
                "technician": null,
                "trx_spare_part_price": null,
                "trx_survey_price": null,
                "trx_install_price": null,
                "trx_transport_price": null,
                "trx_service_price": null,
                "trx_transaction_price": null,
                "trx_total_price": null,
                "trx_discount_price": null,
                "is_over_sla": "0",
                "ticket_request_no": null,
                "department": "Service Center ASG",
                "ticket_category": "Beli Sparepart",
                "ticket_subcategory": "Beli Spare Parts untuk stok",
                "ticket_priority": "URGENT",
                "ticket_status": "OPEN",
                "ticket_purchase_status": null,
                "created_user": null,
                "open_user": "ade",
                "process_user": null,
                "done_user": null,
                "close_user": null,
                "cancel_user": null,
                "product_type": null,
                "product": null,
                "warranty_status": null,
                "actual_warranty_status": null,
                "ticket_repair_status": null,
                "install_location": null,
                "problem_code_before": null,
                "problem_code_after": null,
                "customer_fullname": null,
                "customer_address": null,
                "customer_home_phone": null,
                "customer_office_phone": null,
                "customer_handphone": null,
                "customer_email": null,
                "customer_type": null,
                "company_name": null,
                "company_type": null,
                "product_capacity": null,
                "electrical_power": null,
                "product_serial_number": null,
                "purchase_date": null,
                "ticket_id": null,
                "part_no_1": null,
                "desc_1": null,
                "qty_1": null,
                "price_1": null,
                "part_no_2": null,
                "desc_2": null,
                "qty_2": null,
                "price_2": null,
                "part_no_3": null,
                "desc_3": null,
                "qty_3": null,
                "price_3": null,
                "part_no_4": null,
                "desc_4": null,
                "qty_4": null,
                "price_4": null,
                "part_no_5": null,
                "desc_5": null,
                "qty_5": null,
                "price_5": null,
                "create_note": " test note ",
                "open_note": "Ticket opened by ade",
                "in_progress_note": null,
                "done_note": null,
                "close_note": null,
                "cancel_note": null
            },
            {
                "id": "14",
                "ticket_no": "170206000002",
                "ticket_request_id": null,
                "ticket_cc": "4,28,29,30",
                "department_id": "3",
                "ticket_category_id": "5",
                "ticket_subcategory_id": null,
                "ticket_priority_id": "1",
                "ticket_status_id": "2",
                "ticket_detail_status_id": null,
                "ticket_purchase_status_id": "1",
                "sla": "7",
                "create_date": "2017-02-24 13:10:48",
                "create_by": "47",
                "open_date": null,
                "open_by": null,
                "process_date": null,
                "process_by": null,
                "done_date": null,
                "done_by": null,
                "close_date": null,
                "close_by": null,
                "cancel_date": null,
                "cancel_by": null,
                "ticket_details": "update detail",
                "ticket_solutions": "update solution",
                "product_type_id": "3",
                "product_id": "31",
                "customer_id": "20",
                "customer_product_id": null,
                "warranty_status_id": "2",
                "actual_warranty_status_id": "1",
                "problem_code_after_id": null,
                "problem_code_before_id": null,
                "ticket_repair_status_id": null,
                "install_status": null,
                "install_operation_status": null,
                "install_date": null,
                "install_location_id": null,
                "trx_ticket_no": null,
                "trx_invoice_no": null,
                "technician": null,
                "trx_spare_part_price": null,
                "trx_survey_price": null,
                "trx_install_price": null,
                "trx_transport_price": null,
                "trx_service_price": null,
                "trx_transaction_price": null,
                "trx_total_price": null,
                "trx_discount_price": null,
                "is_over_sla": "0",
                "ticket_request_no": null,
                "department": "Service Center ASG",
                "ticket_category": "Workshop Customer Call",
                "ticket_subcategory": null,
                "ticket_priority": "NORMAL",
                "ticket_status": "CREATED",
                "ticket_purchase_status": "PENGGANTIAN",
                "created_user": "ade",
                "open_user": null,
                "process_user": null,
                "done_user": null,
                "close_user": null,
                "cancel_user": null,
                "product_type": "Heat Pump Water Heater",
                "product": "ARI 200 STAB 560 THER MO EU",
                "warranty_status": "tidak garansi",
                "actual_warranty_status": "garansi",
                "ticket_repair_status": null,
                "install_location": null,
                "problem_code_before": null,
                "problem_code_after": null,
                "customer_fullname": "JOHN  KEMON",
                "customer_address": "GDFGDG",
                "customer_home_phone": null,
                "customer_office_phone": null,
                "customer_handphone": "085715325265",
                "customer_email": "mario@jsm.co.id",
                "customer_type": "INDIVIDUAL",
                "company_name": "DFGDG",
                "company_type": "KONSULTAN",
                "product_capacity": null,
                "electrical_power": null,
                "product_serial_number": null,
                "purchase_date": null,
                "ticket_id": null,
                "part_no_1": null,
                "desc_1": null,
                "qty_1": null,
                "price_1": null,
                "part_no_2": null,
                "desc_2": null,
                "qty_2": null,
                "price_2": null,
                "part_no_3": null,
                "desc_3": null,
                "qty_3": null,
                "price_3": null,
                "part_no_4": null,
                "desc_4": null,
                "qty_4": null,
                "price_4": null,
                "part_no_5": null,
                "desc_5": null,
                "qty_5": null,
                "price_5": null,
                "create_note": null,
                "open_note": null,
                "in_progress_note": null,
                "done_note": null,
                "close_note": null,
                cancel_note": null
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
  *  @apiDescription Read by Tickets ID
  *  @api {get} /tickets/:id Read by Tickets ID
  *  @apiName getDetail
  *  @apiGroup Tickets
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
  *  @apiUse TicketsData
  *
  *  @apiSuccessExample {json} Success-Response:
 	HTTP/1.1 200 OK
    {
        "request_time": 1488856271,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 1,
        "data": {
            "id": "13",
            "ticket_no": "170206000001",
            "ticket_request_id": null,
            "ticket_cc": null,
            "department_id": "3",
            "ticket_category_id": "1",
            "ticket_subcategory_id": "1",
            "ticket_priority_id": "2",
            "ticket_status_id": "3",
            "ticket_detail_status_id": null,
            "ticket_purchase_status_id": null,
            "sla": null,
            "create_date": "2017-02-06 00:00:00",
            "create_by": null,
            "open_date": "2017-02-21 10:28:47",
            "open_by": "47",
            "process_date": null,
            "process_by": null,
            "done_date": null,
            "done_by": null,
            "close_date": null,
            "close_by": null,
            "cancel_date": null,
            "cancel_by": null,
            "ticket_details": null,
            "ticket_solutions": null,
            "product_type_id": null,
            "product_id": null,
            "customer_id": null,
            "customer_product_id": null,
            "warranty_status_id": null,
            "actual_warranty_status_id": null,
            "problem_code_after_id": null,
            "problem_code_before_id": null,
            "ticket_repair_status_id": null,
            "install_status": null,
            "install_operation_status": null,
            "install_date": null,
            "install_location_id": "0",
            "trx_ticket_no": null,
            "trx_invoice_no": null,
            "technician": null,
            "trx_spare_part_price": null,
            "trx_survey_price": null,
            "trx_install_price": null,
            "trx_transport_price": null,
            "trx_service_price": null,
            "trx_transaction_price": null,
            "trx_total_price": null,
            "trx_discount_price": null,
            "is_over_sla": "0",
            "ticket_request_no": null,
            "department": "Service Center ASG",
            "ticket_category": "Beli Sparepart",
            "ticket_subcategory": "Beli Spare Parts untuk stok",
            "ticket_priority": "URGENT",
            "ticket_status": "OPEN",
            "ticket_purchase_status": null,
            "created_user": null,
            "open_user": "ade",
            "process_user": null,
            "done_user": null,
            "close_user": null,
            "cancel_user": null,
            "product_type": null,
            "product": null,
            "warranty_status": null,
            "actual_warranty_status": null,
            "ticket_repair_status": null,
            "install_location": null,
            "problem_code_before": null,
            "problem_code_after": null,
            "customer_fullname": null,
            "customer_address": null,
            "customer_home_phone": null,
            "customer_office_phone": null,
            "customer_handphone": null,
            "customer_email": null,
            "customer_type": null,
            "company_name": null,
            "company_type": null,
            "product_capacity": null,
            "electrical_power": null,
            "product_serial_number": null,
            "purchase_date": null
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