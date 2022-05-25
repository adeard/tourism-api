<?php

/**
 *  @apiDefine VoiceMailData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {String} data.channel
 *  @apiSuccess {String} data.unique_id
 *  @apiSuccess {String} data.phone_number
 *  @apiSuccess {Number} data.call_state_id
 *  @apiSuccess {Number} data.call_status_id
 *  @apiSuccess {Number} data.call_status_detail_id
 *  @apiSuccess {String} data.call_date
 *  @apiSuccess {String} data.ivr_date
 *  @apiSuccess {String} data.queue_date
 *  @apiSuccess {String} data.leave_date
 *  @apiSuccess {String} data.transfer_date
 *  @apiSuccess {String} data.hangup_date
 *  @apiSuccess {String} data.pickup_date
 *  @apiSuccess {String} data.dropcall_date
 *  @apiSuccess {String} data.talk_time
 *  @apiSuccess {Number} data.user_id
 *  @apiSuccess {String} data.extension
 *  @apiSuccess {String} data.host_address
 *  @apiSuccess {String} data.filename
 *  @apiSuccess {String} data.contact_name
 *  @apiSuccess {Number} data.contact_type_id
 *  @apiSuccess {Number} data.customer_id
 *  @apiSuccess {String} data.note
 */
 
/**
 *  @apiDefine VoiceMailData
 *  @apiParam {Number} direction_id
 *  @apiParam {String} channel
 *  @apiParam {String} unique_id
 *  @apiParam {String} phone_number
 *  @apiParam {Number} call_state_id
 *  @apiParam {Number} call_status_id
 *  @apiParam {Number} call_status_detail_id
 *  @apiParam {String} call_date
 *  @apiParam {String} ivr_date
 *  @apiParam {String} queue_date
 *  @apiParam {String} leave_date
 *  @apiParam {String} transfer_date
 *  @apiParam {String} hangup_date
 *  @apiParam {String} pickup_date
 *  @apiParam {String} dropcall_date
 *  @apiParam {String} talk_time
 *  @apiParam {Number} user_id
 *  @apiParam {String} extension
 *  @apiParam {String} host_address
 *  @apiParam {String} filename
 *  @apiParam {String} contact_name
 *  @apiParam {Number} contact_type_id
 *  @apiParam {Number} customer_id
 *  @apiParam {String} note
 */
 
/**
 *  @apiVersion 1.0.0
 *  @apiDescription Booking
 *  @api {put} /voice_mails/booking Booking
 *  @apiName updateBooking
 *  @apiGroup Voice Mail
 *
 *  @apiParam {Number} user_id
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