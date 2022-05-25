<?php

/**
 *  @apiDefine MonitoringCallCountData
 *  @apiSuccess {Number} data.IncomingCall
 *  @apiSuccess {Number} data.AnswerCall
 *  @apiSuccess {Number} data.AbandoneCall
 *  @apiSuccess {Number} data.AbandoneIvr
 *  @apiSuccess {Number} data.IvrCall
 *  @apiSuccess {Number} data.QueueCall
 */
 
/**
 *  @apiDefine MonitoringCallDurationData
 *  @apiSuccess {String} data.ASA
 *  @apiSuccess {String} data.AAT_ivr
 *  @apiSuccess {String} data.AAT
 *  @apiSuccess {String} data.AHT
 *  @apiSuccess {Number} data.AbandoneRate
 *  @apiSuccess {Number} data.AnswerRate
 *  @apiSuccess {Number} data.ServiceLevel
 */

/**
 *  @apiDefine CallData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {String} data.channel
 *  @apiSuccess {String} data.unique_id
 *  @apiSuccess {String} data.dnid
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
 *  @apiSuccess {String} data.after_call_work
 *  @apiSuccess {String} data.hold_time
 *  @apiSuccess {String} data.mute_time
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
 *  @apiDefine CallDurationsData
 *  @apiSuccess {String} data.call_date
 *  @apiSuccess {String} data.call_hour
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {String} data.talk_time
 *  @apiSuccess {String} data.speed_answer
 *  @apiSuccess {String} data.after_call_work
 *  @apiSuccess {String} data.hold_time
 *  @apiSuccess {String} data.mute_time
 */
 
/**
 *  @apiDefine CallReportInboundData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {String} data.channel
 *  @apiSuccess {String} data.unique_id
 *  @apiSuccess {String} data.dnid
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
 *  @apiSuccess {String} data.after_call_work
 *  @apiSuccess {String} data.hold_time
 *  @apiSuccess {String} data.mute_time
 *  @apiSuccess {Number} data.user_id
 *  @apiSuccess {String} data.extension
 *  @apiSuccess {String} data.host_address
 *  @apiSuccess {String} data.filename
 *  @apiSuccess {Number} data.inbound_media_id
 *  @apiSuccess {Number} data.inbound_media_record_id
 *  @apiSuccess {String} data.contact_name
 *  @apiSuccess {Number} data.contact_type_id
 *  @apiSuccess {Number} data.customer_id
 *  @apiSuccess {String} data.note
 *  @apiSuccess {String} data.call_hour
 *  @apiSuccess {String} data.ivr_duration
 *  @apiSuccess {String} data.queue_duration
 *  @apiSuccess {String} data.talk_duration
 *  @apiSuccess {String} data.speed_answer_duration
 *  @apiSuccess {String} data.username
 *  @apiSuccess {String} data.direction_name
 *  @apiSuccess {String} data.call_state_name
 *  @apiSuccess {String} data.call_status_name
 *  @apiSuccess {String} data.call_status_detail_name
 *  @apiSuccess {String} data.contact_type_name
 *  @apiSuccess {String} data.customer_fullname
 *  @apiSuccess {String} data.inbound_type_1
 *  @apiSuccess {String} data.inbound_type_2
 *  @apiSuccess {String} data.inbound_type_3
 *  @apiSuccess {String} data.inbound_type_4
 *  @apiSuccess {String} data.inbound_type_5
 *  @apiSuccess {String} data.inbound_type_6
 *  @apiSuccess {String} data.inbound_type_7
 *  @apiSuccess {String} data.inbound_type_8
 *  @apiSuccess {String} data.inbound_type_9
 *  @apiSuccess {String} data.inbound_type_10
 *  @apiSuccess {String} data.inbound_type_11
 *  @apiSuccess {String} data.inbound_type_12
 *  @apiSuccess {String} data.inbound_type_13
 *  @apiSuccess {String} data.inbound_type_14
 *  @apiSuccess {String} data.inbound_type_15
 *  @apiSuccess {String} data.inbound_type_16
 *  @apiSuccess {String} data.inbound_type_17
 *  @apiSuccess {String} data.inbound_type_18
 *  @apiSuccess {String} data.inbound_type_19
 *  @apiSuccess {String} data.inbound_type_20
 *  @apiSuccess {String} data.product_1
 *  @apiSuccess {String} data.product_2
 *  @apiSuccess {String} data.product_3
 *  @apiSuccess {String} data.product_4
 *  @apiSuccess {String} data.product_5
 *  @apiSuccess {String} data.product_6
 *  @apiSuccess {String} data.product_7
 *  @apiSuccess {String} data.product_8
 *  @apiSuccess {String} data.product_9
 *  @apiSuccess {String} data.product_10
 *  @apiSuccess {String} data.product_11
 *  @apiSuccess {String} data.product_12
 *  @apiSuccess {String} data.product_13
 *  @apiSuccess {String} data.product_14
 *  @apiSuccess {String} data.product_15
 *  @apiSuccess {String} data.product_16
 *  @apiSuccess {String} data.product_17
 *  @apiSuccess {String} data.product_18
 *  @apiSuccess {String} data.product_19
 *  @apiSuccess {String} data.product_20
 *  @apiSuccess {String} data.product_21
 *  @apiSuccess {String} data.product_22
 *  @apiSuccess {String} data.product_23
 *  @apiSuccess {String} data.product_24
 *  @apiSuccess {String} data.product_25
 */
 
/**
 *  @apiDefine CallReportInboundHourlyData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {String} data.date
 *  @apiSuccess {String} data.hour
 *  @apiSuccess {Number} data.total_call
 *  @apiSuccess {Number} data.answered
 *  @apiSuccess {Number} data.abandon
 *  @apiSuccess {Number} data.disconnect_on_ivr
 *  @apiSuccess {Number} data.disconnect_on_queue
 *  @apiSuccess {Number} data.disconnect_on_agent
 *  @apiSuccess {Number} data.disconnect_on_voicemail
 *  @apiSuccess {String} data.talk_duration
 *  @apiSuccess {String} data.hold_duration
 *  @apiSuccess {String} data.mute_duration
 *  @apiSuccess {String} data.speed_answer
 *  @apiSuccess {String} data.after_call_work
 *  @apiSuccess {Number} data.connected
 *  @apiSuccess {Number} data.unconnected
 *  @apiSuccess {String} data.request_time
 *  @apiSuccess {String} data.key_field
 *  @apiSuccess {Number} data.inbound_type_1
 *  @apiSuccess {Number} data.inbound_type_2
 *  @apiSuccess {Number} data.inbound_type_3
 *  @apiSuccess {Number} data.inbound_type_4
 *  @apiSuccess {Number} data.inbound_type_5
 *  @apiSuccess {Number} data.inbound_type_6
 *  @apiSuccess {Number} data.inbound_type_7
 *  @apiSuccess {Number} data.inbound_type_8
 *  @apiSuccess {Number} data.inbound_type_9
 *  @apiSuccess {Number} data.inbound_type_10
 *  @apiSuccess {Number} data.inbound_type_11
 *  @apiSuccess {Number} data.inbound_type_12
 *  @apiSuccess {Number} data.inbound_type_13
 *  @apiSuccess {Number} data.inbound_type_14
 *  @apiSuccess {Number} data.inbound_type_15
 *  @apiSuccess {Number} data.inbound_type_16
 *  @apiSuccess {Number} data.inbound_type_17
 *  @apiSuccess {Number} data.inbound_type_18
 *  @apiSuccess {Number} data.inbound_type_19
 *  @apiSuccess {Number} data.inbound_type_20
 */
 
/**
 *  @apiDefine CallReportOutboundData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {String} data.channel
 *  @apiSuccess {String} data.unique_id
 *  @apiSuccess {String} data.dnid
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
 *  @apiSuccess {String} data.after_call_work
 *  @apiSuccess {String} data.hold_time
 *  @apiSuccess {String} data.mute_time
 *  @apiSuccess {Number} data.user_id
 *  @apiSuccess {String} data.extension
 *  @apiSuccess {String} data.host_address
 *  @apiSuccess {String} data.filename
 *  @apiSuccess {Number} data.inbound_media_id
 *  @apiSuccess {Number} data.inbound_media_record_id
 *  @apiSuccess {String} data.contact_name
 *  @apiSuccess {Number} data.contact_type_id
 *  @apiSuccess {Number} data.customer_id
 *  @apiSuccess {String} data.note
 *  @apiSuccess {String} data.call_hour
 *  @apiSuccess {String} data.ivr_duration
 *  @apiSuccess {String} data.queue_duration
 *  @apiSuccess {String} data.talk_duration
 *  @apiSuccess {String} data.speed_answer_duration
 *  @apiSuccess {String} data.username
 *  @apiSuccess {String} data.direction_name
 *  @apiSuccess {String} data.call_state_name
 *  @apiSuccess {String} data.call_status_name
 *  @apiSuccess {String} data.call_status_detail_name
 *  @apiSuccess {String} data.contact_type_name
 *  @apiSuccess {String} data.customer_fullname
 *  @apiSuccess {String} data.outbound_type_1
 *  @apiSuccess {String} data.outbound_type_2
 *  @apiSuccess {String} data.outbound_type_3
 *  @apiSuccess {String} data.outbound_type_4
 *  @apiSuccess {String} data.outbound_type_5
 *  @apiSuccess {String} data.outbound_type_6
 *  @apiSuccess {String} data.outbound_type_7
 *  @apiSuccess {String} data.outbound_type_8
 *  @apiSuccess {String} data.outbound_type_9
 *  @apiSuccess {String} data.outbound_type_10
 *  @apiSuccess {String} data.outbound_type_11
 *  @apiSuccess {String} data.outbound_type_12
 *  @apiSuccess {String} data.outbound_type_13
 *  @apiSuccess {String} data.outbound_type_14
 *  @apiSuccess {String} data.outbound_type_15
 *  @apiSuccess {String} data.outbound_type_16
 *  @apiSuccess {String} data.outbound_type_17
 *  @apiSuccess {String} data.outbound_type_18
 *  @apiSuccess {String} data.outbound_type_19
 *  @apiSuccess {String} data.outbound_type_20
 *  @apiSuccess {String} data.product_1
 *  @apiSuccess {String} data.product_2
 *  @apiSuccess {String} data.product_3
 *  @apiSuccess {String} data.product_4
 *  @apiSuccess {String} data.product_5
 *  @apiSuccess {String} data.product_6
 *  @apiSuccess {String} data.product_7
 *  @apiSuccess {String} data.product_8
 *  @apiSuccess {String} data.product_9
 *  @apiSuccess {String} data.product_10
 *  @apiSuccess {String} data.product_11
 *  @apiSuccess {String} data.product_12
 *  @apiSuccess {String} data.product_13
 *  @apiSuccess {String} data.product_14
 *  @apiSuccess {String} data.product_15
 *  @apiSuccess {String} data.product_16
 *  @apiSuccess {String} data.product_17
 *  @apiSuccess {String} data.product_18
 *  @apiSuccess {String} data.product_19
 *  @apiSuccess {String} data.product_20
 *  @apiSuccess {String} data.product_21
 *  @apiSuccess {String} data.product_22
 *  @apiSuccess {String} data.product_23
 *  @apiSuccess {String} data.product_24
 *  @apiSuccess {String} data.product_25
 */
 
/**
 *  @apiDefine CallReportOutboundHourlyData
 *  @apiSuccess {Number} data.id
 *  @apiSuccess {Number} data.direction_id
 *  @apiSuccess {String} data.date
 *  @apiSuccess {String} data.hour
 *  @apiSuccess {Number} data.total_call
 *  @apiSuccess {Number} data.answered
 *  @apiSuccess {Number} data.abandon
 *  @apiSuccess {Number} data.disconnect_on_ivr
 *  @apiSuccess {Number} data.disconnect_on_queue
 *  @apiSuccess {Number} data.disconnect_on_agent
 *  @apiSuccess {Number} data.disconnect_on_voicemail
 *  @apiSuccess {String} data.talk_duration
 *  @apiSuccess {String} data.hold_duration
 *  @apiSuccess {String} data.mute_duration
 *  @apiSuccess {String} data.speed_answer
 *  @apiSuccess {String} data.after_call_work
 *  @apiSuccess {Number} data.connected
 *  @apiSuccess {Number} data.unconnected
 *  @apiSuccess {String} data.request_time
 *  @apiSuccess {String} data.key_field
 *  @apiSuccess {Number} data.outbound_type_1
 *  @apiSuccess {Number} data.outbound_type_2
 *  @apiSuccess {Number} data.outbound_type_3
 *  @apiSuccess {Number} data.outbound_type_4
 *  @apiSuccess {Number} data.outbound_type_5
 *  @apiSuccess {Number} data.outbound_type_6
 *  @apiSuccess {Number} data.outbound_type_7
 *  @apiSuccess {Number} data.outbound_type_8
 *  @apiSuccess {Number} data.outbound_type_9
 *  @apiSuccess {Number} data.outbound_type_10
 *  @apiSuccess {Number} data.outbound_type_11
 *  @apiSuccess {Number} data.outbound_type_12
 *  @apiSuccess {Number} data.outbound_type_13
 *  @apiSuccess {Number} data.outbound_type_14
 *  @apiSuccess {Number} data.outbound_type_15
 *  @apiSuccess {Number} data.outbound_type_16
 *  @apiSuccess {Number} data.outbound_type_17
 *  @apiSuccess {Number} data.outbound_type_18
 *  @apiSuccess {Number} data.outbound_type_19
 *  @apiSuccess {Number} data.outbound_type_20
 */

/**
 *  @apiDefine CallReportInboundDailyData
 *  @apiSuccess {String} data.date
 *  @apiSuccess {Number} data.total_call
 *  @apiSuccess {Number} data.answered
 *  @apiSuccess {Number} data.abandon
 *  @apiSuccess {Number} data.disconnect_on_ivr
 *  @apiSuccess {Number} data.disconnect_on_queue
 *  @apiSuccess {Number} data.disconnect_on_agent
 *  @apiSuccess {Number} data.disconnect_on_voicemail
 *  @apiSuccess {String} data.talk_duration
 *  @apiSuccess {String} data.hold_duration
 *  @apiSuccess {String} data.mute_duration
 *  @apiSuccess {String} data.speed_answer
 *  @apiSuccess {String} data.after_call_work
 *  @apiSuccess {Number} data.connected
 *  @apiSuccess {Number} data.unconnected
 *  @apiSuccess {Number} data.inbound_type_1
 *  @apiSuccess {Number} data.inbound_type_2
 *  @apiSuccess {Number} data.inbound_type_3
 *  @apiSuccess {Number} data.inbound_type_4
 *  @apiSuccess {Number} data.inbound_type_5
 *  @apiSuccess {Number} data.inbound_type_6
 *  @apiSuccess {Number} data.inbound_type_7
 *  @apiSuccess {Number} data.inbound_type_8
 *  @apiSuccess {Number} data.inbound_type_9
 *  @apiSuccess {Number} data.inbound_type_10
 *  @apiSuccess {Number} data.inbound_type_11
 *  @apiSuccess {Number} data.inbound_type_12
 *  @apiSuccess {Number} data.inbound_type_13
 *  @apiSuccess {Number} data.inbound_type_14
 *  @apiSuccess {Number} data.inbound_type_15
 *  @apiSuccess {Number} data.inbound_type_16
 *  @apiSuccess {Number} data.inbound_type_17
 *  @apiSuccess {Number} data.inbound_type_18
 *  @apiSuccess {Number} data.inbound_type_19
 *  @apiSuccess {Number} data.inbound_type_20
 */
 
/**
 *  @apiDefine CallReportOutboundDailyData
 *  @apiSuccess {String} data.date
 *  @apiSuccess {Number} data.total_call
 *  @apiSuccess {String} data.talk_duration
 *  @apiSuccess {String} data.hold_duration
 *  @apiSuccess {String} data.mute_duration
 *  @apiSuccess {Number} data.connected
 *  @apiSuccess {Number} data.unconnected
 *  @apiSuccess {Number} data.outbound_type_1
 *  @apiSuccess {Number} data.outbound_type_2
 *  @apiSuccess {Number} data.outbound_type_3
 *  @apiSuccess {Number} data.outbound_type_4
 *  @apiSuccess {Number} data.outbound_type_5
 *  @apiSuccess {Number} data.outbound_type_6
 *  @apiSuccess {Number} data.outbound_type_7
 *  @apiSuccess {Number} data.outbound_type_8
 *  @apiSuccess {Number} data.outbound_type_9
 *  @apiSuccess {Number} data.outbound_type_10
 *  @apiSuccess {Number} data.outbound_type_11
 *  @apiSuccess {Number} data.outbound_type_12
 *  @apiSuccess {Number} data.outbound_type_13
 *  @apiSuccess {Number} data.outbound_type_14
 *  @apiSuccess {Number} data.outbound_type_15
 *  @apiSuccess {Number} data.outbound_type_16
 *  @apiSuccess {Number} data.outbound_type_17
 *  @apiSuccess {Number} data.outbound_type_18
 *  @apiSuccess {Number} data.outbound_type_19
 *  @apiSuccess {Number} data.outbound_type_20
 */
 
/**
 *  @apiDefine MonitoringCallCountDataParam
 *  @apiParam {Number} IncomingCall
 *  @apiParam {Number} AnswerCall
 *  @apiParam {Number} AbandoneCall
 *  @apiParam {Number} AbandoneIvr
 *  @apiParam {Number} IvrCall
 *  @apiParam {Number} QueueCall
 */
 
/**
 *  @apiDefine MonitoringCallDurationDataParam
 *  @apiParam {String} ASA
 *  @apiParam {String} AAT_ivr
 *  @apiParam {String} AAT
 *  @apiParam {String} AHT
 *  @apiParam {Number} AbandoneRate
 *  @apiParam {Number} AnswerRate
 *  @apiParam {Number} ServiceLevel
 */
 
/**
 *  @apiDefine CallDataParam
 *  @apiParam {Number} direction_id
 *  @apiParam {String} channel
 *  @apiParam {String} unique_id
 *  @apiParam {String} dnid
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
 *  @apiParam {String} after_call_work
 *  @apiParam {String} hold_time
 *  @apiParam {String} mute_time
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
 *  @apiDefine CallDurationsDataParam
 *  @apiParam {String} call_date
 *  @apiParam {String} call_hour
 *  @apiParam {Number} direction_id
 *  @apiParam {String} talk_time
 *  @apiParam {String} speed_answer
 *  @apiParam {String} after_call_work
 *  @apiParam {String} hold_time
 *  @apiParam {String} mute_time
 */
 
/**
 *  @apiDefine CallReportInboundDataParam
 *  @apiParam {Number} direction_id
 *  @apiParam {String} channel
 *  @apiParam {String} unique_id
 *  @apiParam {String} dnid
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
 *  @apiParam {String} after_call_work
 *  @apiParam {String} hold_time
 *  @apiParam {String} mute_time
 *  @apiParam {Number} user_id
 *  @apiParam {String} extension
 *  @apiParam {String} host_address
 *  @apiParam {String} filename
 *  @apiParam {Number} inbound_media_id
 *  @apiParam {Number} inbound_media_record_id
 *  @apiParam {String} contact_name
 *  @apiParam {Number} contact_type_id
 *  @apiParam {Number} customer_id
 *  @apiParam {String} note
 *  @apiParam {String} call_hour
 *  @apiParam {String} ivr_duration
 *  @apiParam {String} queue_duration
 *  @apiParam {String} talk_duration
 *  @apiParam {String} speed_answer_duration
 *  @apiParam {String} username
 *  @apiParam {String} direction_name
 *  @apiParam {String} call_state_name
 *  @apiParam {String} call_status_name
 *  @apiParam {String} call_status_detail_name
 *  @apiParam {String} contact_type_name
 *  @apiParam {String} customer_fullname
 *  @apiParam {String} inbound_type_1
 *  @apiParam {String} inbound_type_2
 *  @apiParam {String} inbound_type_3
 *  @apiParam {String} inbound_type_4
 *  @apiParam {String} inbound_type_5
 *  @apiParam {String} inbound_type_6
 *  @apiParam {String} inbound_type_7
 *  @apiParam {String} inbound_type_8
 *  @apiParam {String} inbound_type_9
 *  @apiParam {String} inbound_type_10
 *  @apiParam {String} inbound_type_11
 *  @apiParam {String} inbound_type_12
 *  @apiParam {String} inbound_type_13
 *  @apiParam {String} inbound_type_14
 *  @apiParam {String} inbound_type_15
 *  @apiParam {String} inbound_type_16
 *  @apiParam {String} inbound_type_17
 *  @apiParam {String} inbound_type_18
 *  @apiParam {String} inbound_type_19
 *  @apiParam {String} inbound_type_20
 *  @apiParam {String} product_1
 *  @apiParam {String} product_2
 *  @apiParam {String} product_3
 *  @apiParam {String} product_4
 *  @apiParam {String} product_5
 *  @apiParam {String} product_6
 *  @apiParam {String} product_7
 *  @apiParam {String} product_8
 *  @apiParam {String} product_9
 *  @apiParam {String} product_10
 *  @apiParam {String} product_11
 *  @apiParam {String} product_12
 *  @apiParam {String} product_13
 *  @apiParam {String} product_14
 *  @apiParam {String} product_15
 *  @apiParam {String} product_16
 *  @apiParam {String} product_17
 *  @apiParam {String} product_18
 *  @apiParam {String} product_19
 *  @apiParam {String} product_20
 *  @apiParam {String} product_21
 *  @apiParam {String} product_22
 *  @apiParam {String} product_23
 *  @apiParam {String} product_24
 *  @apiParam {String} product_25
 */
 
/**
 *  @apiDefine CallReportInboundHourlyDataParam
 *  @apiParam {Number} direction_id
 *  @apiParam {String} date
 *  @apiParam {String} hour
 *  @apiParam {Number} total_call
 *  @apiParam {Number} answered
 *  @apiParam {Number} abandon
 *  @apiParam {Number} disconnect_on_queue
 *  @apiParam {Number} disconnect_on_agent
 *  @apiParam {Number} disconnect_on_voicemail
 *  @apiParam {String} talk_duration
 *  @apiParam {String} hold_duration
 *  @apiParam {String} mute_duration
 *  @apiParam {String} speed_answer
 *  @apiParam {String} after_call_work
 *  @apiParam {Number} connected
 *  @apiParam {Number} unconnected
 *  @apiParam {String} request_time
 *  @apiParam {String} key_field
 *  @apiParam {Number} inbound_type_1
 *  @apiParam {Number} inbound_type_2
 *  @apiParam {Number} inbound_type_3
 *  @apiParam {Number} inbound_type_4
 *  @apiParam {Number} inbound_type_5
 *  @apiParam {Number} inbound_type_6
 *  @apiParam {Number} inbound_type_7
 *  @apiParam {Number} inbound_type_8
 *  @apiParam {Number} inbound_type_9
 *  @apiParam {Number} inbound_type_10
 *  @apiParam {Number} inbound_type_11
 *  @apiParam {Number} inbound_type_12
 *  @apiParam {Number} inbound_type_13
 *  @apiParam {Number} inbound_type_14
 *  @apiParam {Number} inbound_type_15
 *  @apiParam {Number} inbound_type_16
 *  @apiParam {Number} inbound_type_17
 *  @apiParam {Number} inbound_type_18
 *  @apiParam {Number} inbound_type_19
 *  @apiParam {Number} inbound_type_20
 */
 
/**
 *  @apiDefine CallReportOutboundDataParam
 *  @apiParam {Number} id
 *  @apiParam {Number} direction_id
 *  @apiParam {String} channel
 *  @apiParam {String} unique_id
 *  @apiParam {String} dnid
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
 *  @apiParam {String} after_call_work
 *  @apiParam {String} hold_time
 *  @apiParam {String} mute_time
 *  @apiParam {Number} user_id
 *  @apiParam {String} extension
 *  @apiParam {String} host_address
 *  @apiParam {String} filename
 *  @apiParam {Number} inbound_media_id
 *  @apiParam {Number} inbound_media_record_id
 *  @apiParam {String} contact_name
 *  @apiParam {Number} contact_type_id
 *  @apiParam {Number} customer_id
 *  @apiParam {String} note
 *  @apiParam {String} call_hour
 *  @apiParam {String} ivr_duration
 *  @apiParam {String} queue_duration
 *  @apiParam {String} talk_duration
 *  @apiParam {String} speed_answer_duration
 *  @apiParam {String} username
 *  @apiParam {String} direction_name
 *  @apiParam {String} call_state_name
 *  @apiParam {String} call_status_name
 *  @apiParam {String} call_status_detail_name
 *  @apiParam {String} contact_type_name
 *  @apiParam {String} customer_fullname
 *  @apiParam {String} outbound_type_1
 *  @apiParam {String} outbound_type_2
 *  @apiParam {String} outbound_type_3
 *  @apiParam {String} outbound_type_4
 *  @apiParam {String} outbound_type_5
 *  @apiParam {String} outbound_type_6
 *  @apiParam {String} outbound_type_7
 *  @apiParam {String} outbound_type_8
 *  @apiParam {String} outbound_type_9
 *  @apiParam {String} outbound_type_10
 *  @apiParam {String} outbound_type_11
 *  @apiParam {String} outbound_type_12
 *  @apiParam {String} outbound_type_13
 *  @apiParam {String} outbound_type_14
 *  @apiParam {String} outbound_type_15
 *  @apiParam {String} outbound_type_16
 *  @apiParam {String} outbound_type_17
 *  @apiParam {String} outbound_type_18
 *  @apiParam {String} outbound_type_19
 *  @apiParam {String} outbound_type_20
 *  @apiParam {String} product_1
 *  @apiParam {String} product_2
 *  @apiParam {String} product_3
 *  @apiParam {String} product_4
 *  @apiParam {String} product_5
 *  @apiParam {String} product_6
 *  @apiParam {String} product_7
 *  @apiParam {String} product_8
 *  @apiParam {String} product_9
 *  @apiParam {String} product_10
 *  @apiParam {String} product_11
 *  @apiParam {String} product_12
 *  @apiParam {String} product_13
 *  @apiParam {String} product_14
 *  @apiParam {String} product_15
 *  @apiParam {String} product_16
 *  @apiParam {String} product_17
 *  @apiParam {String} product_18
 *  @apiParam {String} product_19
 *  @apiParam {String} product_20
 *  @apiParam {String} product_21
 *  @apiParam {String} product_22
 *  @apiParam {String} product_23
 *  @apiParam {String} product_24
 *  @apiParam {String} product_25
 */

/**
 *  @apiDefine CallReportOutboundHourlyDataParam
 *  @apiParam {Number} direction_id
 *  @apiParam {String} date
 *  @apiParam {String} hour
 *  @apiParam {Number} total_call
 *  @apiParam {Number} answered
 *  @apiParam {Number} abandon
 *  @apiParam {Number} disconnect_on_ivr
 *  @apiParam {Number} disconnect_on_queue
 *  @apiParam {Number} disconnect_on_agent
 *  @apiParam {Number} disconnect_on_voicemail
 *  @apiParam {String} talk_duration
 *  @apiParam {String} hold_duration
 *  @apiParam {String} mute_duration
 *  @apiParam {String} speed_answer
 *  @apiParam {String} after_call_work
 *  @apiParam {Number} connected
 *  @apiParam {Number} unconnected
 *  @apiParam {String} request_time
 *  @apiParam {String} key_field
 *  @apiParam {Number} outbound_type_1
 *  @apiParam {Number} outbound_type_2
 *  @apiParam {Number} outbound_type_3
 *  @apiParam {Number} outbound_type_4
 *  @apiParam {Number} outbound_type_5
 *  @apiParam {Number} outbound_type_6
 *  @apiParam {Number} outbound_type_7
 *  @apiParam {Number} outbound_type_8
 *  @apiParam {Number} outbound_type_9
 *  @apiParam {Number} outbound_type_10
 *  @apiParam {Number} outbound_type_11
 *  @apiParam {Number} outbound_type_12
 *  @apiParam {Number} outbound_type_13
 *  @apiParam {Number} outbound_type_14
 *  @apiParam {Number} outbound_type_15
 *  @apiParam {Number} outbound_type_16
 *  @apiParam {Number} outbound_type_17
 *  @apiParam {Number} outbound_type_18
 *  @apiParam {Number} outbound_type_19
 *  @apiParam {Number} outbound_type_20
 */
 
/**
 *  @apiDefine CallReportInboundDailyDataParam
 *  @apiParam {String} date
 *  @apiParam {Number} total_call
 *  @apiParam {Number} answered
 *  @apiParam {Number} abandon
 *  @apiParam {Number} disconnect_on_ivr
 *  @apiParam {Number} disconnect_on_queue
 *  @apiParam {Number} disconnect_on_agent
 *  @apiParam {Number} disconnect_on_voicemail
 *  @apiParam {String} talk_duration
 *  @apiParam {String} hold_duration
 *  @apiParam {String} mute_duration
 *  @apiParam {String} speed_answer
 *  @apiParam {String} after_call_work
 *  @apiParam {Number} connected
 *  @apiParam {Number} unconnected
 *  @apiParam {Number} inbound_type_1
 *  @apiParam {Number} inbound_type_2
 *  @apiParam {Number} inbound_type_3
 *  @apiParam {Number} inbound_type_4
 *  @apiParam {Number} inbound_type_5
 *  @apiParam {Number} inbound_type_6
 *  @apiParam {Number} inbound_type_7
 *  @apiParam {Number} inbound_type_8
 *  @apiParam {Number} inbound_type_9
 *  @apiParam {Number} inbound_type_10
 *  @apiParam {Number} inbound_type_11
 *  @apiParam {Number} inbound_type_12
 *  @apiParam {Number} inbound_type_13
 *  @apiParam {Number} inbound_type_14
 *  @apiParam {Number} inbound_type_15
 *  @apiParam {Number} inbound_type_16
 *  @apiParam {Number} inbound_type_17
 *  @apiParam {Number} inbound_type_18
 *  @apiParam {Number} inbound_type_19
 *  @apiParam {Number} inbound_type_20
 */
 
/**
 *  @apiDefine CallReportOutboundDailyDataParam
 *  @apiParam {String} date
 *  @apiParam {Number} total_call
 *  @apiParam {String} talk_duration
 *  @apiParam {String} hold_duration
 *  @apiParam {String} mute_duration
 *  @apiParam {Number} connected
 *  @apiParam {Number} unconnected
 *  @apiParam {Number} outbound_type_1
 *  @apiParam {Number} outbound_type_2
 *  @apiParam {Number} outbound_type_3
 *  @apiParam {Number} outbound_type_4
 *  @apiParam {Number} outbound_type_5
 *  @apiParam {Number} outbound_type_6
 *  @apiParam {Number} outbound_type_7
 *  @apiParam {Number} outbound_type_8
 *  @apiParam {Number} outbound_type_9
 *  @apiParam {Number} outbound_type_10
 *  @apiParam {Number} outbound_type_11
 *  @apiParam {Number} outbound_type_12
 *  @apiParam {Number} outbound_type_13
 *  @apiParam {Number} outbound_type_14
 *  @apiParam {Number} outbound_type_15
 *  @apiParam {Number} outbound_type_16
 *  @apiParam {Number} outbound_type_17
 *  @apiParam {Number} outbound_type_18
 *  @apiParam {Number} outbound_type_19
 *  @apiParam {Number} outbound_type_20
 */

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Get All
 *  @api {get} /calls Get All
 *  @apiName getAll
 *  @apiGroup Calls
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
 *  @apiUse CallDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482121486,
		"execution_time": 1,
		"response_code": 200,
		"status": "success",
		"total_data": 252,
		"data": [
			{
				"id": "3",
				"direction_id": "1",
				"channel": "889",
				"unique_id": "1477386096.48",
				"dnid": "0809",
				"phone_number": "8787",
				"call_state_id": "5",
				"call_status_id": "2",
				"call_status_detail_id": "0",
				"call_date": null,
				"ivr_date": "2016-10-25 15:59:45",
				"queue_date": null,
				"leave_date": null,
				"transfer_date": null,
				"hangup_date": "2016-10-25 15:59:46",
				"pickup_date": null,
				"dropcall_date": null,
				"talk_time": null,
				"after_call_work": null,
				"hold_time": null,
				"mute_time": null,
				"user_id": null,
				"extension": null,
				"host_address": null,
				"filename": null,
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"note": null
			},
			{
				"id": "4",
				"direction_id": "1",
				"channel": "SIP/8787-00000031",
				"unique_id": "1477386168.49",
				"dnid": null,
				"phone_number": "8787",
				"call_state_id": "8",
				"call_status_id": null,
				"call_status_detail_id": "0",
				"call_date": null,
				"ivr_date": "2016-10-25 16:00:57",
				"queue_date": "2016-10-26 13:54:46",
				"leave_date": "2016-10-25 16:07:49",
				"transfer_date": null,
				"hangup_date": "2016-10-25 16:07:49",
				"pickup_date": null,
				"dropcall_date": null,
				"talk_time": null,
				"after_call_work": null,
				"hold_time": null,
				"mute_time": null,
				"user_id": null,
				"extension": null,
				"host_address": null,
				"filename": null,
				"contact_name": null,
				"contact_type_id": null,
				"customer_id": null,
				"note": null
			}
		],
		"paging": {
			"current": 1,
			"next": 2,
			"previuos": 1,
			"first": 1,
			"last": 13
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
 *  @apiDescription Update by Calls ID
 *  @api {put} /calls/:id Update by Calls ID
 *  @apiName updateById
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CallDataParam
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
 *  @apiDescription Get All Report Inbound
 *  @api {get} /calls/report_inbound Get All Report Inbound
 *  @apiName getReportInbound
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiParam {Number} start Start Date
 *  @apiParam {Number} end End Date
 *  @apiUse CallReportInboundDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallReportInboundData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1482127604,
        "execution_time": 2,
        "response_code": 200,
        "status": "success",
        "total_data": 245,
        "data": [
            {
                "id": "5",
                "direction_id": "1",
                "channel": "SIP/8787-00000032",
                "unique_id": "1477386174.50",
                "dnid": null,
                "phone_number": "8787",
                "call_state_id": "1",
                "call_status_id": null,
                "call_status_detail_id": "0",
                "call_date": "2016-09-01 15:20:29",
                "ivr_date": "2016-10-25 16:01:03",
                "queue_date": null,
                "leave_date": null,
                "transfer_date": null,
                "hangup_date": "2016-10-25 16:01:05",
                "pickup_date": null,
                "dropcall_date": null,
                "talk_time": null,
                "after_call_work": null,
                "hold_time": null,
                "mute_time": null,
                "user_id": null,
                "extension": null,
                "host_address": null,
                "filename": null,
                "inbound_media_id": null,
                "inbound_media_record_id": null,
                "contact_name": null,
                "contact_type_id": null,
                "customer_id": null,
                "note": null,
                "call_hour": "15:00:00",
                "ivr_duration": "00:00:02",
                "queue_duration": null,
                "talk_duration": null,
                "speed_answer_duration": null,
                "username": null,
                "direction_name": "INBOUND",
                "call_state_name": "IVR",
                "call_status_name": null,
                "call_status_detail_name": null,
                "contact_type_name": null,
                "customer_fullname": null,
                "inbound_type_1": "NO",
                "inbound_type_2": "NO",
                "inbound_type_3": "NO",
                "inbound_type_4": "NO",
                "inbound_type_5": "NO",
                "inbound_type_6": "NO",
                "inbound_type_7": "NO",
                "inbound_type_8": "NO",
                "inbound_type_9": "NO",
                "inbound_type_10": "NO",
                "inbound_type_11": "NO",
                "inbound_type_12": "NO",
                "inbound_type_13": "NO",
                "inbound_type_14": "NO",
                "inbound_type_15": "NO",
                "inbound_type_16": "NO",
                "inbound_type_17": "NO",
                "inbound_type_18": "NO",
                "inbound_type_19": "NO",
                "inbound_type_20": "NO",
                "product_1": "NO",
                "product_2": "NO",
                "product_3": "NO",
                "product_4": "NO",
                "product_5": "NO",
                "product_6": "NO",
                "product_7": "NO",
                "product_8": "NO",
                "product_9": "NO",
                "product_10": "NO",
                "product_11": "NO",
                "product_12": "NO",
                "product_13": "NO",
                "product_14": "NO",
                "product_15": "NO",
                "product_16": "NO",
                "product_17": "NO",
                "product_18": "NO",
                "product_19": "NO",
                "product_20": "NO",
                "product_21": "NO",
                "product_22": "NO",
                "product_23": "NO",
                "product_24": "NO",
                "product_25": "NO"
            },
            {
                "id": "7",
                "direction_id": "1",
                "channel": "SIP/8787-00000034",
                "unique_id": "1477386445.52",
                "dnid": null,
                "phone_number": "8787",
                "call_state_id": "1",
                "call_status_id": null,
                "call_status_detail_id": "0",
                "call_date": null,
                "ivr_date": "2016-10-25 16:05:34",
                "queue_date": null,
                "leave_date": null,
                "transfer_date": null,
                "hangup_date": "2016-10-25 16:05:39",
                "pickup_date": null,
                "dropcall_date": null,
                "talk_time": null,
                "after_call_work": null,
                "hold_time": null,
                "mute_time": null,
                "user_id": null,
                "extension": null,
                "host_address": null,
                "filename": null,
                "inbound_media_id": null,
                "inbound_media_record_id": null,
                "contact_name": null,
                "contact_type_id": null,
                "customer_id": null,
                "note": null,
                "call_hour": null,
                "ivr_duration": "00:00:05",
                "queue_duration": null,
                "talk_duration": null,
                "speed_answer_duration": null,
                "username": null,
                "direction_name": "INBOUND",
                "call_state_name": "IVR",
                "call_status_name": null,
                "call_status_detail_name": null,
                "contact_type_name": null,
                "customer_fullname": null,
                "inbound_type_1": "NO",
                "inbound_type_2": "NO",
                "inbound_type_3": "NO",
                "inbound_type_4": "NO",
                "inbound_type_5": "NO",
                "inbound_type_6": "NO",
                "inbound_type_7": "NO",
                "inbound_type_8": "NO",
                "inbound_type_9": "NO",
                "inbound_type_10": "NO",
                "inbound_type_11": "NO",
                "inbound_type_12": "NO",
                "inbound_type_13": "NO",
                "inbound_type_14": "NO",
                "inbound_type_15": "NO",
                "inbound_type_16": "NO",
                "inbound_type_17": "NO",
                "inbound_type_18": "NO",
                "inbound_type_19": "NO",
                "inbound_type_20": "NO",
                "product_1": "NO",
                "product_2": "NO",
                "product_3": "NO",
                "product_4": "NO",
                "product_5": "NO",
                "product_6": "NO",
                "product_7": "NO",
                "product_8": "NO",
                "product_9": "NO",
                "product_10": "NO",
                "product_11": "NO",
                "product_12": "NO",
                "product_13": "NO",
                "product_14": "NO",
                "product_15": "NO",
                "product_16": "NO",
                "product_17": "NO",
                "product_18": "NO",
                "product_19": "NO",
                "product_20": "NO",
                "product_21": "NO",
                "product_22": "NO",
                "product_23": "NO",
                "product_24": "NO",
                "product_25": "NO"
            }
        ],
        "paging": {
            "current": 1,
            "next": 2,
            "previuos": 1,
            "first": 1,
            "last": 13
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
 *  @apiDescription Get All Report Outbound
 *  @api {get} /calls/report_outbound Get All Report Outbound
 *  @apiName getReportOutbound
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiParam {Number} start Start Date
 *  @apiParam {Number} end End Date
 *  @apiUse CallReportOutboundDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallReportOutboundData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1482128366,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 5,
        "data": [
            {
                "id": "197",
                "direction_id": "2",
                "channel": "SIP/8001-00000132",
                "unique_id": "1478074229.364",
                "dnid": null,
                "phone_number": "8001",
                "call_state_id": "3",
                "call_status_id": null,
                "call_status_detail_id": "0",
                "call_date": null,
                "ivr_date": "2016-11-02 15:08:39",
                "queue_date": "2016-11-02 15:08:54",
                "leave_date": "2016-11-02 15:08:55",
                "transfer_date": "2016-11-02 15:08:55",
                "hangup_date": "2016-11-02 15:09:10",
                "pickup_date": null,
                "dropcall_date": null,
                "talk_time": null,
                "after_call_work": null,
                "hold_time": null,
                "mute_time": null,
                "user_id": "2",
                "extension": "7878",
                "host_address": null,
                "filename": null,
                "inbound_media_id": null,
                "inbound_media_record_id": null,
                "contact_name": null,
                "contact_type_id": null,
                "customer_id": null,
                "note": null,
                "call_hour": null,
                "ivr_duration": "00:00:15",
                "queue_duration": "00:00:16",
                "talk_duration": null,
                "username": null,
                "direction_name": "OUTBOUND",
                "call_state_name": "AGENT",
                "call_status_name": null,
                "call_status_detail_name": null,
                "contact_type_name": null,
                "customer_fullname": null,
                "outbound_type_1": "NO",
                "outbound_type_2": "NO",
                "outbound_type_3": "NO",
                "outbound_type_4": "NO",
                "outbound_type_5": "NO",
                "outbound_type_6": "NO",
                "outbound_type_7": "NO",
                "outbound_type_8": "NO",
                "outbound_type_9": "NO",
                "outbound_type_10": "NO",
                "outbound_type_11": "NO",
                "outbound_type_12": "NO",
                "outbound_type_13": "NO",
                "outbound_type_14": "NO",
                "outbound_type_15": "NO",
                "outbound_type_16": "NO",
                "outbound_type_17": "NO",
                "outbound_type_18": "NO",
                "outbound_type_19": "NO",
                "outbound_type_20": "NO",
                "product_1": "NO",
                "product_2": "NO",
                "product_3": "NO",
                "product_4": "NO",
                "product_5": "NO",
                "product_6": "NO",
                "product_7": "NO",
                "product_8": "NO",
                "product_9": "NO",
                "product_10": "NO",
                "product_11": "NO",
                "product_12": "NO",
                "product_13": "NO",
                "product_14": "NO",
                "product_15": "NO",
                "product_16": "NO",
                "product_17": "NO",
                "product_18": "NO",
                "product_19": "NO",
                "product_20": "NO",
                "product_21": "NO",
                "product_22": "NO",
                "product_23": "NO",
                "product_24": "NO",
                "product_25": "NO"
            },
            {
                "id": "198",
                "direction_id": "2",
                "channel": "SIP/7878-00000134",
                "unique_id": "1478074285.368",
                "dnid": null,
                "phone_number": "7878",
                "call_state_id": "3",
                "call_status_id": null,
                "call_status_detail_id": "0",
                "call_date": null,
                "ivr_date": "2016-11-02 15:09:35",
                "queue_date": "2016-11-02 15:09:50",
                "leave_date": "2016-11-02 15:09:51",
                "transfer_date": "2016-11-02 15:09:51",
                "hangup_date": "2016-11-02 15:09:54",
                "pickup_date": null,
                "dropcall_date": null,
                "talk_time": null,
                "after_call_work": null,
                "hold_time": null,
                "mute_time": null,
                "user_id": "4",
                "extension": "8001",
                "host_address": null,
                "filename": null,
                "inbound_media_id": null,
                "inbound_media_record_id": null,
                "contact_name": null,
                "contact_type_id": null,
                "customer_id": null,
                "note": null,
                "call_hour": null,
                "ivr_duration": "00:00:15",
                "queue_duration": "00:00:04",
                "talk_duration": null,
                "username": "vian",
                "direction_name": "OUTBOUND",
                "call_state_name": "AGENT",
                "call_status_name": null,
                "call_status_detail_name": null,
                "contact_type_name": null,
                "customer_fullname": null,
                "outbound_type_1": "NO",
                "outbound_type_2": "NO",
                "outbound_type_3": "NO",
                "outbound_type_4": "NO",
                "outbound_type_5": "NO",
                "outbound_type_6": "NO",
                "outbound_type_7": "NO",
                "outbound_type_8": "NO",
                "outbound_type_9": "NO",
                "outbound_type_10": "NO",
                "outbound_type_11": "NO",
                "outbound_type_12": "NO",
                "outbound_type_13": "NO",
                "outbound_type_14": "NO",
                "outbound_type_15": "NO",
                "outbound_type_16": "NO",
                "outbound_type_17": "NO",
                "outbound_type_18": "NO",
                "outbound_type_19": "NO",
                "outbound_type_20": "NO",
                "product_1": "NO",
                "product_2": "NO",
                "product_3": "NO",
                "product_4": "NO",
                "product_5": "NO",
                "product_6": "NO",
                "product_7": "NO",
                "product_8": "NO",
                "product_9": "NO",
                "product_10": "NO",
                "product_11": "NO",
                "product_12": "NO",
                "product_13": "NO",
                "product_14": "NO",
                "product_15": "NO",
                "product_16": "NO",
                "product_17": "NO",
                "product_18": "NO",
                "product_19": "NO",
                "product_20": "NO",
                "product_21": "NO",
                "product_22": "NO",
                "product_23": "NO",
                "product_24": "NO",
                "product_25": "NO"
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
 *  @apiDescription Update by Unique ID
 *  @api {put} /calls/:unique_id/unique Update by Unique ID
 *  @apiName update
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CallDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiSuccess {String} data.unique_id
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482128766,
		"execution_time": 1,
		"response_code": 200,
		"status": "success",
		"data": {
			"unique_id": "1477386096.48"
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
 *  @apiDescription Read by Unique ID
 *  @api {get} /calls/:unique_id/unique Read by Unique ID
 *  @apiName getDetailCalls
 *  @apiGroup Calls
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
 *  @apiUse CallData
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
	{
		"request_time": 1482129003,
		"execution_time": 0,
		"response_code": 200,
		"status": "success",
		"total_data": 1,
		"data": {
			"id": "3",
			"direction_id": "1",
			"channel": "12345",
			"unique_id": "1477386096.48",
			"dnid": "0809",
			"phone_number": "8787",
			"call_state_id": "5",
			"call_status_id": "2",
			"call_status_detail_id": "0",
			"call_date": null,
			"ivr_date": "2016-10-25 15:59:45",
			"queue_date": null,
			"leave_date": null,
			"transfer_date": null,
			"hangup_date": "2016-10-25 15:59:46",
			"pickup_date": null,
			"dropcall_date": null,
			"talk_time": null,
			"after_call_work": null,
			"hold_time": null,
			"mute_time": null,
			"user_id": null,
			"extension": null,
			"host_address": null,
			"filename": null,
			"contact_name": null,
			"contact_type_id": null,
			"customer_id": null,
			"note": null
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
 *  @apiDescription Create
 *  @api {post} /calls Create
 *  @apiName create
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CallDataParam
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
			"id": "452"
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
 *  @apiDescription Delete
 *  @api {delete} /calls/:id Delete
 *  @apiName delete
 *  @apiGroup Calls
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
			"id": "452"
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
 *  @apiDescription Get All Report Inbound Hourly
 *  @api {get} /calls/report_inbound_hourly Get All Report Inbound Hourly
 *  @apiName getReportInboundHourly
 *  @apiGroup Calls
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
 *  @apiUse CallReportInboundHourlyDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallReportInboundHourlyData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1482121486,
        "execution_time": 1,
        "response_code": 200,
        "status": "success",
        "total_data": 252,
        "data": [
            {
                "id": "1",
                "direction_id": "1",
                "date": "2016-12-29",
                "hour": "10:00:00",
                "total_call": "0",
                "answered": "0",
                "abandon": "0",
                "disconnect_on_ivr": "0",
                "disconnect_on_queue": "0",
                "disconnect_on_agent": "0",
                "disconnect_on_voicemail": "0",
                "talk_duration": "00:00:00",
                "hold_duration": "00:00:00",
                "mute_duration": "00:00:00",
                "speed_answer": "00:00:00",
                "average_speed_answer": "00:00:00",
                "after_call_work": "00:00:00",
                "average_after_call_work": "00:00:00",
                "connected": "0",
                "unconnected": "0",
                "request_time": null,
                "key_field": "2016-12-29_10:00:00",
                "inbound_type_1": "0",
                "inbound_type_2": "0",
                "inbound_type_3": "0",
                "inbound_type_4": "0",
                "inbound_type_5": "0",
                "inbound_type_6": "0",
                "inbound_type_7": "0",
                "inbound_type_8": "0",
                "inbound_type_9": "0",
                "inbound_type_10": "0",
                "inbound_type_11": "0",
                "inbound_type_12": "0",
                "inbound_type_13": "0",
                "inbound_type_14": "0",
                "inbound_type_15": "0",
                "inbound_type_16": "0",
                "inbound_type_17": "0",
                "inbound_type_18": "0",
                "inbound_type_19": "0",
                "inbound_type_20": "0"
            },
            {
                "id": "3",
                "direction_id": "1",
                "date": "2016-12-29",
                "hour": "11:00:00",
                "total_call": "3",
                "answered": "3",
                "abandon": "0",
                "disconnect_on_ivr": "0",
                "disconnect_on_queue": "0",
                "disconnect_on_agent": "0",
                "disconnect_on_voicemail": "0",
                "talk_duration": "00:02:15",
                "hold_duration": "00:00:00",
                "mute_duration": "00:00:00",
                "speed_answer": "00:00:14",
                "after_call_work": "00:00:00",
                "connected": "0",
                "unconnected": "0",
                "request_time": null,
                "key_field": "2016-12-29_11:00:00",
                "inbound_type_1": "0",
                "inbound_type_2": "1",
                "inbound_type_3": "0",
                "inbound_type_4": "1",
                "inbound_type_5": "0",
                "inbound_type_6": "0",
                "inbound_type_7": "1",
                "inbound_type_8": "0",
                "inbound_type_9": "0",
                "inbound_type_10": "1",
                "inbound_type_11": "0",
                "inbound_type_12": "0",
                "inbound_type_13": "0",
                "inbound_type_14": "0",
                "inbound_type_15": "0",
                "inbound_type_16": "0",
                "inbound_type_17": "0",
                "inbound_type_18": "0",
                "inbound_type_19": "0",
                "inbound_type_20": "0"
            }
        ],
        "paging": {
            "current": 1,
            "next": 2,
            "previuos": 1,
            "first": 1,
            "last": 13
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
 *  @apiDescription Get All Report Outbound Hourly
 *  @api {get} /calls/report_outbound_hourly Get All Report Outbound Hourly
 *  @apiName getReportOutboundHourly
 *  @apiGroup Calls
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
 *  @apiUse CallReportOutboundHourlyDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallReportOutboundHourlyData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
	HTTP/1.1 200 OK
    {
        "request_time": 1482121486,
        "execution_time": 1,
        "response_code": 200,
        "status": "success",
        "total_data": 252,
        "data": [
            {
                "id": "2",
                "direction_id": "2",
                "date": "2016-12-29",
                "hour": "10:00:00",
                "total_call": "0",
                "answered": "0",
                "abandon": "0",
                "disconnect_on_ivr": "0",
                "disconnect_on_queue": "0",
                "disconnect_on_agent": "0",
                "disconnect_on_voicemail": "0",
                "talk_duration": "00:00:00",
                "hold_duration": "00:00:00",
                "mute_duration": "00:00:00",
                "speed_answer": "00:00:00",
                "after_call_work": "00:00:00",
                "connected": "0",
                "unconnected": "0",
                "request_time": null,
                "key_field": "2016-12-29_10:00:00",
                "outbound_type_1": "0",
                "outbound_type_2": "0",
                "outbound_type_3": "0",
                "outbound_type_4": "0",
                "outbound_type_5": "0",
                "outbound_type_6": "0",
                "outbound_type_7": "0",
                "outbound_type_8": "0",
                "outbound_type_9": "0",
                "outbound_type_10": "0",
                "outbound_type_11": "0",
                "outbound_type_12": "0",
                "outbound_type_13": "0",
                "outbound_type_14": "0",
                "outbound_type_15": "0",
                "outbound_type_16": "0",
                "outbound_type_17": "0",
                "outbound_type_18": "0",
                "outbound_type_19": "0",
                "outbound_type_20": "0"
            },
            {
                "id": "4",
                "direction_id": "2",
                "date": "2016-12-29",
                "hour": "11:00:00",
                "total_call": "0",
                "answered": "0",
                "abandon": "0",
                "disconnect_on_ivr": "0",
                "disconnect_on_queue": "0",
                "disconnect_on_agent": "0",
                "disconnect_on_voicemail": "0",
                "talk_duration": "00:00:00",
                "hold_duration": "00:00:00",
                "mute_duration": "00:00:00",
                "speed_answer": "00:00:00",
                "after_call_work": "00:00:00",
                "connected": "0",
                "unconnected": "0",
                "request_time": null,
                "key_field": "2016-12-29_11:00:00",
                "outbound_type_1": "0",
                "outbound_type_2": "0",
                "outbound_type_3": "0",
                "outbound_type_4": "0",
                "outbound_type_5": "0",
                "outbound_type_6": "0",
                "outbound_type_7": "0",
                "outbound_type_8": "0",
                "outbound_type_9": "0",
                "outbound_type_10": "0",
                "outbound_type_11": "0",
                "outbound_type_12": "0",
                "outbound_type_13": "0",
                "outbound_type_14": "0",
                "outbound_type_15": "0",
                "outbound_type_16": "0",
                "outbound_type_17": "0",
                "outbound_type_18": "0",
                "outbound_type_19": "0",
                "outbound_type_20": "0"
            }
        ],
        "paging": {
            "current": 1,
            "next": 2,
            "previuos": 1,
            "first": 1,
            "last": 13
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
 *  @apiDescription Get Total Call Durations
 *  @api {get} /calls/durations Get Total Call Durations
 *  @apiName getDuration
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: BearereyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiUse CallDurationsDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallDurationsData
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1482133301,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 1,
        "data": {
            "talk_time": "35:11:31",
            "speed_answer": "0:04:26",
            "after_call_work": "14:29:13",
            "hold_time": "0:09:00",
            "mute_time": "0:01:47"
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
 *  @apiDescription Get Total Monitoring Call Count
 *  @api {get} /view_monitoring_call_count Get Total Monitoring Call Count
 *  @apiName getMonitoringCallCount
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: BearereyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *  @apiParam {String} order="IncomingCall" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=0 Limit data
 *  @apiParam {Number} page=1 Page number
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse MonitoringCallCountData
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1485486434,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 1,
        "data": [
            {
                "IncomingCall": "0",
                "AnswerCall": "0",
                "AbandoneCall": "0",
                "AbandoneIvr": "0",
                "IvrCall": "0",
                "QueueCall": "0"
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
 *  @apiDescription Get Total Monitoring Call Duration
 *  @api {get} /view_monitoring_call_duration Get Total Monitoring Call Duration
 *  @apiName getMonitoringCallDuration
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: BearereyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *  @apiParam {String} order="ASA" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiUse MonitoringCallDurationDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse MonitoringCallDurationData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1485487374,
        "execution_time": 0,
        "response_code": 200,
        "status": "success",
        "total_data": 1,
        "data": [
            {
                "ASA": "00:00:00",
                "AAT_ivr": "00:00:00",
                "AAT": "00:00:00",
                "AHT": "00:00:00",
                "AbandoneRate": null,
                "AnswerRate": null,
                "ServiceLevel": "0.0000"
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
 *  @apiDescription Get Total Call Inbound Hourly Durations
 *  @api {get} /calls/report_inbound_hourly/durations Get Total Call Inbound Hourly Durations
 *  @apiName getDurationInboundHourly
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: BearereyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} start Start Date
 *  @apiParam {String} end End Date
 *  @apiUse CallReportInboundHourlyDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiSuccess {String} data.hour
 *  @apiSuccess {Number} data.total_call
 *  @apiSuccess {Number} data.answered
 *  @apiSuccess {Number} data.abandon
 *  @apiSuccess {Number} data.disconnect_on_ivr
 *  @apiSuccess {Number} data.disconnect_on_queue
 *  @apiSuccess {Number} data.disconnect_on_agent
 *  @apiSuccess {Number} data.disconnect_on_voicemail
 *  @apiSuccess {String} data.talk_duration
 *  @apiSuccess {String} data.hold_duration
 *  @apiSuccess {String} data.mute_duration
 *  @apiSuccess {String} data.speed_answer
 *  @apiSuccess {String} data.average_speed_answer
 *  @apiSuccess {String} data.after_call_work
 *  @apiSuccess {String} data.average_after_call_work
 *  @apiSuccess {Number} data.connected
 *  @apiSuccess {Number} data.unconnected
 *  @apiSuccess {Number} data.inbound_type_1
 *  @apiSuccess {Number} data.inbound_type_2
 *  @apiSuccess {Number} data.inbound_type_3
 *  @apiSuccess {Number} data.inbound_type_4
 *  @apiSuccess {Number} data.inbound_type_5
 *  @apiSuccess {Number} data.inbound_type_6
 *  @apiSuccess {Number} data.inbound_type_7
 *  @apiSuccess {Number} data.inbound_type_8
 *  @apiSuccess {Number} data.inbound_type_9
 *  @apiSuccess {Number} data.inbound_type_10
 *  @apiSuccess {Number} data.inbound_type_11
 *  @apiSuccess {Number} data.inbound_type_12
 *  @apiSuccess {Number} data.inbound_type_13
 *  @apiSuccess {Number} data.inbound_type_14
 *  @apiSuccess {Number} data.inbound_type_15
 *  @apiSuccess {Number} data.inbound_type_16
 *  @apiSuccess {Number} data.inbound_type_17
 *  @apiSuccess {Number} data.inbound_type_18
 *  @apiSuccess {Number} data.inbound_type_19
 *  @apiSuccess {Number} data.inbound_type_20
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
                "hour": "10:00:00",
                "total_call": 0,
                "answered": 0,
                "abandon": 0,
                "disconnect_on_ivr": 0,
                "disconnect_on_queue": 0,
                "disconnect_on_agent": 0,
                "disconnect_on_voicemail": 0,
                "talk_duration": "0:00:00",
                "hold_duration": "0:00:00",
                "mute_duration": "0:00:00",
                "speed_answer": "0:00:00",
                "average_speed_answer": "0:00:00",
                "after_call_work": "0:00:00",
                "average_after_call_work": "0:00:00",
                "connected": 0,
                "unconnected": 0,
                "inbound_type_1": 0,
                "inbound_type_2": 0,
                "inbound_type_3": 0,
                "inbound_type_4": 0,
                "inbound_type_5": 0,
                "inbound_type_6": 0,
                "inbound_type_7": 0,
                "inbound_type_8": 0,
                "inbound_type_9": 0,
                "inbound_type_10": 0,
                "inbound_type_11": 0,
                "inbound_type_12": 0,
                "inbound_type_13": 0,
                "inbound_type_14": 0,
                "inbound_type_15": 0,
                "inbound_type_16": 0,
                "inbound_type_17": 0,
                "inbound_type_18": 0,
                "inbound_type_19": 0,
                "inbound_type_20": 0
            },
            {
                "hour": "11:00:00",
                "total_call": 5,
                "answered": 5,
                "abandon": 0,
                "disconnect_on_ivr": 0,
                "disconnect_on_queue": 0,
                "disconnect_on_agent": 0,
                "disconnect_on_voicemail": 0,
                "talk_duration": "0:03:47",
                "hold_duration": "0:00:11",
                "mute_duration": "0:00:00",
                "speed_answer": "0:00:19",
                "average_speed_answer": "0:00:00",
                "after_call_work": "0:00:00",
                "average_after_call_work": "0:00:00",
                "connected": 0,
                "unconnected": 0,
                "inbound_type_1": 0,
                "inbound_type_2": 1,
                "inbound_type_3": 0,
                "inbound_type_4": 1,
                "inbound_type_5": 0,
                "inbound_type_6": 0,
                "inbound_type_7": 1,
                "inbound_type_8": 0,
                "inbound_type_9": 0,
                "inbound_type_10": 1,
                "inbound_type_11": 0,
                "inbound_type_12": 0,
                "inbound_type_13": 0,
                "inbound_type_14": 0,
                "inbound_type_15": 0,
                "inbound_type_16": 0,
                "inbound_type_17": 0,
                "inbound_type_18": 0,
                "inbound_type_19": 0,
                "inbound_type_20": 0
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
 *  @apiDescription Get Total Call Outbound Hourly Durations
 *  @api {get} /calls/report_outbound_hourly/durations Get Total Call Outbound Hourly Durations
 *  @apiName getDurationOutboundHourly
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: BearereyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} start Start Date
 *  @apiParam {String} end End Date
 *  @apiUse CallReportOutboundHourlyDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiSuccess {String} data.hour
 *  @apiSuccess {Number} data.total_call
 *  @apiSuccess {Number} data.answered
 *  @apiSuccess {Number} data.abandon
 *  @apiSuccess {Number} data.disconnect_on_ivr
 *  @apiSuccess {Number} data.disconnect_on_queue
 *  @apiSuccess {Number} data.disconnect_on_agent
 *  @apiSuccess {Number} data.disconnect_on_voicemail
 *  @apiSuccess {String} data.talk_duration
 *  @apiSuccess {String} data.hold_duration
 *  @apiSuccess {String} data.mute_duration
 *  @apiSuccess {String} data.speed_answer
 *  @apiSuccess {String} data.after_call_work
 *  @apiSuccess {Number} data.connected
 *  @apiSuccess {Number} data.unconnected
 *  @apiSuccess {Number} data.outbound_type_1
 *  @apiSuccess {Number} data.outbound_type_2
 *  @apiSuccess {Number} data.outbound_type_3
 *  @apiSuccess {Number} data.outbound_type_4
 *  @apiSuccess {Number} data.outbound_type_5
 *  @apiSuccess {Number} data.outbound_type_6
 *  @apiSuccess {Number} data.outbound_type_7
 *  @apiSuccess {Number} data.outbound_type_8
 *  @apiSuccess {Number} data.outbound_type_9
 *  @apiSuccess {Number} data.outbound_type_10
 *  @apiSuccess {Number} data.outbound_type_11
 *  @apiSuccess {Number} data.outbound_type_12
 *  @apiSuccess {Number} data.outbound_type_13
 *  @apiSuccess {Number} data.outbound_type_14
 *  @apiSuccess {Number} data.outbound_type_15
 *  @apiSuccess {Number} data.outbound_type_16
 *  @apiSuccess {Number} data.outbound_type_17
 *  @apiSuccess {Number} data.outbound_type_18
 *  @apiSuccess {Number} data.outbound_type_19
 *  @apiSuccess {Number} data.outbound_type_20
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
                "hour": "10:00:00",
                "total_call": 0,
                "answered": 0,
                "abandon": 0,
                "disconnect_on_ivr": 0,
                "disconnect_on_queue": 0,
                "disconnect_on_agent": 0,
                "disconnect_on_voicemail": 0,
                "talk_duration": "0:00:00",
                "hold_duration": "0:00:00",
                "mute_duration": "0:00:00",
                "speed_answer": "0:00:00",
                "after_call_work": "0:00:00",
                "connected": 0,
                "unconnected": 0,
                "outbound_type_1": 0,
                "outbound_type_2": 0,
                "outbound_type_3": 0,
                "outbound_type_4": 0,
                "outbound_type_5": 0,
                "outbound_type_6": 0,
                "outbound_type_7": 0,
                "outbound_type_8": 0,
                "outbound_type_9": 0,
                "outbound_type_10": 0,
                "outbound_type_11": 0,
                "outbound_type_12": 0,
                "outbound_type_13": 0,
                "outbound_type_14": 0,
                "outbound_type_15": 0,
                "outbound_type_16": 0,
                "outbound_type_17": 0,
                "outbound_type_18": 0,
                "outbound_type_19": 0,
                "outbound_type_20": 0
            },
            {
                "hour": "11:00:00",
                "total_call": 2,
                "answered": 0,
                "abandon": 0,
                "disconnect_on_ivr": 0,
                "disconnect_on_queue": 0,
                "disconnect_on_agent": 0,
                "disconnect_on_voicemail": 0,
                "talk_duration": "0:02:12",
                "hold_duration": "0:00:00",
                "mute_duration": "0:00:00",
                "speed_answer": "0:00:00",
                "after_call_work": "0:00:00",
                "connected": 2,
                "unconnected": 0,
                "outbound_type_1": 0,
                "outbound_type_2": 0,
                "outbound_type_3": 1,
                "outbound_type_4": 0,
                "outbound_type_5": 0,
                "outbound_type_6": 0,
                "outbound_type_7": 0,
                "outbound_type_8": 0,
                "outbound_type_9": 0,
                "outbound_type_10": 0,
                "outbound_type_11": 0,
                "outbound_type_12": 0,
                "outbound_type_13": 0,
                "outbound_type_14": 0,
                "outbound_type_15": 0,
                "outbound_type_16": 0,
                "outbound_type_17": 0,
                "outbound_type_18": 0,
                "outbound_type_19": 0,
                "outbound_type_20": 0
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
 *  @apiDescription Get All Report Inbound Daily
 *  @api {get} /calls/report_inbound_daily Get All Report Inbound Daily
 *  @apiName getReportInboundDaily
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="date" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiParam {Number} start Start Date
 *  @apiParam {Number} end End Date
 *
 *  @apiUse CallReportInboundDailyDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallReportInboundDailyData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1482121486,
        "execution_time": 1,
        "response_code": 200,
        "status": "success",
        "total_data": 2,
        "data": [
            {
                "date": "2017-01-05",
                "total_call": "6",
                "answered": "2",
                "abandon": "4",
                "disconnect_on_ivr": "4",
                "disconnect_on_queue": "0",
                "disconnect_on_agent": "0",
                "disconnect_on_voicemail": "0",
                "talk_duration": "00:01:27",
                "hold_duration": "00:00:00",
                "mute_duration": "00:00:00",
                "speed_answer": "00:00:05",
                "after_call_work": "00:01:58",
                "connected": "0",
                "unconnected": "0",
                "inbound_type_1": "0",
                "inbound_type_2": "0",
                "inbound_type_3": "1",
                "inbound_type_4": "0",
                "inbound_type_5": "0",
                "inbound_type_6": "0",
                "inbound_type_7": "0",
                "inbound_type_8": "0",
                "inbound_type_9": "0",
                "inbound_type_10": "0",
                "inbound_type_11": "0",
                "inbound_type_12": "0",
                "inbound_type_13": "0",
                "inbound_type_14": "0",
                "inbound_type_15": "0",
                "inbound_type_16": "0",
                "inbound_type_17": "0",
                "inbound_type_18": "0",
                "inbound_type_19": "0",
                "inbound_type_20": "0"
            },
            {
                "date": "2017-01-06",
                "total_call": "22",
                "answered": "0",
                "abandon": "0",
                "disconnect_on_ivr": "0",
                "disconnect_on_queue": "0",
                "disconnect_on_agent": "0",
                "disconnect_on_voicemail": "0",
                "talk_duration": "00:00:00",
                "hold_duration": "00:00:00",
                "mute_duration": "00:00:00",
                "speed_answer": "00:00:00",
                "after_call_work": "00:00:00",
                "connected": "0",
                "unconnected": "0",
                "inbound_type_1": "0",
                "inbound_type_2": "0",
                "inbound_type_3": "0",
                "inbound_type_4": "0",
                "inbound_type_5": "0",
                "inbound_type_6": "0",
                "inbound_type_7": "0",
                "inbound_type_8": "0",
                "inbound_type_9": "0",
                "inbound_type_10": "0",
                "inbound_type_11": "0",
                "inbound_type_12": "0",
                "inbound_type_13": "0",
                "inbound_type_14": "0",
                "inbound_type_15": "0",
                "inbound_type_16": "0",
                "inbound_type_17": "0",
                "inbound_type_18": "0",
                "inbound_type_19": "0",
                "inbound_type_20": "0"
            }
        ],
        "paging": {
            "current": 1,
            "next": 2,
            "previuos": 1,
            "first": 1,
            "last": 2
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
 *  @apiDescription Get All Report Outbound Daily
 *  @api {get} /calls/report_outbound_daily Get All Report Outbound Daily
 *  @apiName getReportOutboundDaily
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="date" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiParam {Number} start Start Date
 *  @apiParam {Number} end End Date
 *
 *  @apiUse CallReportOutboundDailyDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallReportOutboundDailyData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "request_time": 1482121486,
        "execution_time": 1,
        "response_code": 200,
        "status": "success",
        "total_data": 2,
        "data": [
            {
                "date": "2017-01-05",
                "total_call": "1",
                "talk_duration": "00:00:09",
                "hold_duration": "00:00:00",
                "mute_duration": "00:00:00",
                "connected": "1",
                "unconnected": "0",
                "outbound_type_1": "0",
                "outbound_type_2": "0",
                "outbound_type_3": "0",
                "outbound_type_4": "0",
                "outbound_type_5": "0",
                "outbound_type_6": "0",
                "outbound_type_7": "0",
                "outbound_type_8": "0",
                "outbound_type_9": "0",
                "outbound_type_10": "0",
                "outbound_type_11": "0",
                "outbound_type_12": "0",
                "outbound_type_13": "0",
                "outbound_type_14": "0",
                "outbound_type_15": "0",
                "outbound_type_16": "0",
                "outbound_type_17": "0",
                "outbound_type_18": "0",
                "outbound_type_19": "0",
                "outbound_type_20": "0"
            },
            {
                "date": "2017-01-06",
                "total_call": "1",
                "talk_duration": "00:00:00",
                "hold_duration": "00:00:00",
                "mute_duration": "00:00:00",
                "connected": "1",
                "unconnected": "0",
                "outbound_type_1": "0",
                "outbound_type_2": "0",
                "outbound_type_3": "0",
                "outbound_type_4": "0",
                "outbound_type_5": "0",
                "outbound_type_6": "0",
                "outbound_type_7": "0",
                "outbound_type_8": "0",
                "outbound_type_9": "0",
                "outbound_type_10": "0",
                "outbound_type_11": "0",
                "outbound_type_12": "0",
                "outbound_type_13": "0",
                "outbound_type_14": "0",
                "outbound_type_15": "0",
                "outbound_type_16": "0",
                "outbound_type_17": "0",
                "outbound_type_18": "0",
                "outbound_type_19": "0",
                "outbound_type_20": "0"
            }
        ],
        "paging": {
            "current": 1,
            "next": 2,
            "previuos": 1,
            "first": 1,
            "last": 2
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
 *  @apiDescription Get All Report Outbound Detail
 *  @api {get} /calls/report_outbound_detail Get All Report Outbound Detail
 *  @apiName getReportOutboundDetail
 *  @apiGroup Calls
 *
 * 	@apiHeader {String} Authorization Basis access authorization token
 * 	@apiHeaderExample Header-Example:
  		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0
 *
 *  @apiParam {String} order="id" Order by data field name
 *  @apiParam {String="asc","desc"} sort="asc" (asc, desc)
 *  @apiParam {Number} limit=20 Limit data
 *  @apiParam {Number} page=1 Page number
 *  @apiParam {Number} start Start Date
 *  @apiParam {Number} end End Date
 *  @apiUse CallReportOutboundDataParam
 *
 *  @apiSuccess {Number} request_time Request time (timestamp)
 *  @apiSuccess {Number} execution_time Request execution time (in seconds)
 *  @apiSuccess {Number} response_code Response Code <b>(201 = Created)</b>
 *  @apiSuccess {String} status Response status <b>(success)</b>
 *  @apiSuccess {String} total_data Response total resource data <b>(success)</b>
 *  @apiSuccess {Object[]} data Response data (Array of Object)
 *  @apiUse CallReportOutboundData
 *  @apiUse Paging
 *
 *  @apiSuccessExample {json} Success-Response:
     HTTP/1.1 200 OK
     {
         "request_time": 1482128366,
         "execution_time": 0,
         "response_code": 200,
         "status": "success",
         "total_data": 5,
         "data": [
             {
                 "id": "197",
                 "direction_id": "2",
                 "channel": "SIP/8001-00000132",
                 "unique_id": "1478074229.364",
                 "dnid": null,
                 "phone_number": "8001",
                 "call_state_id": "3",
                 "call_status_id": null,
                 "call_status_detail_id": "0",
                 "call_date": null,
                 "ivr_date": "2016-11-02 15:08:39",
                 "queue_date": "2016-11-02 15:08:54",
                 "leave_date": "2016-11-02 15:08:55",
                 "transfer_date": "2016-11-02 15:08:55",
                 "hangup_date": "2016-11-02 15:09:10",
                 "pickup_date": null,
                 "dropcall_date": null,
                 "talk_time": null,
                 "after_call_work": null,
                 "hold_time": null,
                 "mute_time": null,
                 "user_id": "2",
                 "extension": "7878",
                 "host_address": null,
                 "filename": null,
                 "inbound_media_id": null,
                 "inbound_media_record_id": null,
                 "contact_name": null,
                 "contact_type_id": null,
                 "customer_id": null,
                 "note": null,
                 "call_hour": null,
                 "ivr_duration": "00:00:15",
                 "queue_duration": "00:00:16",
                 "talk_duration": null,
                 "username": null,
                 "direction_name": "OUTBOUND",
                 "call_state_name": "AGENT",
                 "call_status_name": null,
                 "call_status_detail_name": null,
                 "contact_type_name": null,
                 "customer_fullname": null,
                 "outbound_type_1": "NO",
                 "outbound_type_2": "NO",
                 "outbound_type_3": "NO",
                 "outbound_type_4": "NO",
                 "outbound_type_5": "NO",
                 "outbound_type_6": "NO",
                 "outbound_type_7": "NO",
                 "outbound_type_8": "NO",
                 "outbound_type_9": "NO",
                 "outbound_type_10": "NO",
                 "outbound_type_11": "NO",
                 "outbound_type_12": "NO",
                 "outbound_type_13": "NO",
                 "outbound_type_14": "NO",
                 "outbound_type_15": "NO",
                 "outbound_type_16": "NO",
                 "outbound_type_17": "NO",
                 "outbound_type_18": "NO",
                 "outbound_type_19": "NO",
                 "outbound_type_20": "NO",
                 "product_1": "NO",
                 "product_2": "NO",
                 "product_3": "NO",
                 "product_4": "NO",
                 "product_5": "NO",
                 "product_6": "NO",
                 "product_7": "NO",
                 "product_8": "NO",
                 "product_9": "NO",
                 "product_10": "NO",
                 "product_11": "NO",
                 "product_12": "NO",
                 "product_13": "NO",
                 "product_14": "NO",
                 "product_15": "NO",
                 "product_16": "NO",
                 "product_17": "NO",
                 "product_18": "NO",
                 "product_19": "NO",
                 "product_20": "NO",
                 "product_21": "NO",
                 "product_22": "NO",
                 "product_23": "NO",
                 "product_24": "NO",
                 "product_25": "NO"
             },
             {
                 "id": "198",
                 "direction_id": "2",
                 "channel": "SIP/7878-00000134",
                 "unique_id": "1478074285.368",
                 "dnid": null,
                 "phone_number": "7878",
                 "call_state_id": "3",
                 "call_status_id": null,
                 "call_status_detail_id": "0",
                 "call_date": null,
                 "ivr_date": "2016-11-02 15:09:35",
                 "queue_date": "2016-11-02 15:09:50",
                 "leave_date": "2016-11-02 15:09:51",
                 "transfer_date": "2016-11-02 15:09:51",
                 "hangup_date": "2016-11-02 15:09:54",
                 "pickup_date": null,
                 "dropcall_date": null,
                 "talk_time": null,
                 "after_call_work": null,
                 "hold_time": null,
                 "mute_time": null,
                 "user_id": "4",
                 "extension": "8001",
                 "host_address": null,
                 "filename": null,
                 "inbound_media_id": null,
                 "inbound_media_record_id": null,
                 "contact_name": null,
                 "contact_type_id": null,
                 "customer_id": null,
                 "note": null,
                 "call_hour": null,
                 "ivr_duration": "00:00:15",
                 "queue_duration": "00:00:04",
                 "talk_duration": null,
                 "username": "vian",
                 "direction_name": "OUTBOUND",
                 "call_state_name": "AGENT",
                 "call_status_name": null,
                 "call_status_detail_name": null,
                 "contact_type_name": null,
                 "customer_fullname": null,
                 "outbound_type_1": "NO",
                 "outbound_type_2": "NO",
                 "outbound_type_3": "NO",
                 "outbound_type_4": "NO",
                 "outbound_type_5": "NO",
                 "outbound_type_6": "NO",
                 "outbound_type_7": "NO",
                 "outbound_type_8": "NO",
                 "outbound_type_9": "NO",
                 "outbound_type_10": "NO",
                 "outbound_type_11": "NO",
                 "outbound_type_12": "NO",
                 "outbound_type_13": "NO",
                 "outbound_type_14": "NO",
                 "outbound_type_15": "NO",
                 "outbound_type_16": "NO",
                 "outbound_type_17": "NO",
                 "outbound_type_18": "NO",
                 "outbound_type_19": "NO",
                 "outbound_type_20": "NO",
                 "product_1": "NO",
                 "product_2": "NO",
                 "product_3": "NO",
                 "product_4": "NO",
                 "product_5": "NO",
                 "product_6": "NO",
                 "product_7": "NO",
                 "product_8": "NO",
                 "product_9": "NO",
                 "product_10": "NO",
                 "product_11": "NO",
                 "product_12": "NO",
                 "product_13": "NO",
                 "product_14": "NO",
                 "product_15": "NO",
                 "product_16": "NO",
                 "product_17": "NO",
                 "product_18": "NO",
                 "product_19": "NO",
                 "product_20": "NO",
                 "product_21": "NO",
                 "product_22": "NO",
                 "product_23": "NO",
                 "product_24": "NO",
                 "product_25": "NO"
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