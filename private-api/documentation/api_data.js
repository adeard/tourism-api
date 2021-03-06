define({ "api": [
  {
    "version": "1.0.0",
    "description": "<p>Create New Call Data</p>",
    "type": "post",
    "url": "/calls",
    "title": "Create",
    "name": "create",
    "group": "Calls",
    "success": {
      "fields": {
        "Success 201": [
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": "<p>ID of created data</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 201 Created\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 201,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": 12\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/calls.php",
    "groupTitle": "Calls",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/calls"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "direction_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "channel",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "unique_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone_number",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "call_state_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "call_status_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "call_status_detail_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "call_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ivr_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "queue_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "leave_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "transfer_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "hangup_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pickup_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "dropcall_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "talk_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "extension",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "host_address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "filename",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "contact_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "contact_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "note",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get All</p>",
    "type": "get",
    "url": "/calls",
    "title": "Get All",
    "name": "getAll",
    "group": "Calls",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "direction_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "channel",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "unique_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone_number",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "call_state_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "call_status_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "call_status_detail_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "call_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ivr_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "queue_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "leave_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "transfer_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "hangup_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pickup_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "dropcall_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "talk_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "extension",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "host_address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "filename",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "contact_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "contact_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "note",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.direction_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.channel",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.unique_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.phone_number",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.call_state_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.call_status_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.call_status_detail_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.call_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ivr_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.queue_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.leave_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.transfer_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.hangup_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.pickup_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.dropcall_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.talk_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.user_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.extension",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.host_address",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.filename",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.contact_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.contact_type_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.customer_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.note",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 125,\n\t\"data\": [\n\t\t{\n\t\t\t\"id\": \"6\",\n\t\t\t\"direction_id\": \"1\",\n\t\t\t\"channel\": \"SIP/8787-00000033\",\n\t\t\t\"unique_id\": \"1477386177.51\",\n\t\t\t\"phone_number\": \"8787\",\n\t\t\t\"call_state_id\": \"23\",\n\t\t\t\"call_status_id\": null,\n\t\t\t\"call_status_detail_id\": null,\n\t\t\t\"call_date\": null,\n\t\t\t\"ivr_date\": \"2016-10-25 16:01:06\",\n\t\t\t\"queue_date\": \"2016-10-25 16:04:53\",\n\t\t\t\"leave_date\": \"2016-10-26 16:42:00\",\n\t\t\t\"transfer_date\": \"2016-10-26 16:42:57\",\n\t\t\t\"hangup_date\": \"2016-10-25 16:04:55\",\n\t\t\t\"pickup_date\": null,\n\t\t\t\"dropcall_date\": null,\n\t\t\t\"talk_time\": null,\n\t\t\t\"user_id\": \"2\",\n\t\t\t\"extension\": \"3\",\n\t\t\t\"host_address\": null,\n\t\t\t\"filename\": null,\n\t\t\t\"contact_name\": null,\n\t\t\t\"contact_type_id\": null,\n\t\t\t\"customer_id\": null,\n\t\t\t\"note\": null\n\t\t},\n\t\t{\n\t\t\t\"id\": \"7\",\n\t\t\t\"direction_id\": \"1\",\n\t\t\t\"channel\": \"SIP/8787-00000033\",\n\t\t\t\"unique_id\": \"1477386177.51\",\n\t\t\t\"phone_number\": \"8787\",\n\t\t\t\"call_state_id\": \"23\",\n\t\t\t\"call_status_id\": null,\n\t\t\t\"call_status_detail_id\": null,\n\t\t\t\"call_date\": null,\n\t\t\t\"ivr_date\": \"2016-10-25 16:01:06\",\n\t\t\t\"queue_date\": \"2016-10-25 16:04:53\",\n\t\t\t\"leave_date\": \"2016-10-26 16:42:00\",\n\t\t\t\"transfer_date\": \"2016-10-26 16:42:57\",\n\t\t\t\"hangup_date\": \"2016-10-25 16:04:55\",\n\t\t\t\"pickup_date\": null,\n\t\t\t\"dropcall_date\": null,\n\t\t\t\"talk_time\": null,\n\t\t\t\"user_id\": \"2\",\n\t\t\t\"extension\": \"3\",\n\t\t\t\"host_address\": null,\n\t\t\t\"filename\": null,\n\t\t\t\"contact_name\": null,\n\t\t\t\"contact_type_id\": null,\n\t\t\t\"customer_id\": null,\n\t\t\t\"note\": null\n\t\t}\n\t]\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/calls.php",
    "groupTitle": "Calls",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/calls"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get call data by given unique ID</p>",
    "type": "get",
    "url": "/calls/:unique_id/unique",
    "title": "Read by unique ID",
    "name": "getDetailUnique",
    "group": "Calls",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "unique_id",
            "description": "<p>Call unique ID</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Count total data</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.direction_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.channel",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.unique_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.phone_number",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.call_state_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.call_status_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.call_status_detail_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.call_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ivr_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.queue_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.leave_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.transfer_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.hangup_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.pickup_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.dropcall_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.talk_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.user_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.extension",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.host_address",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.filename",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.contact_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.contact_type_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.customer_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.note",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 1,\n\t\"data\": {\n\t\t\"id\": \"6\",\n\t\t\"direction_id\": \"1\",\n\t\t\"channel\": \"SIP/8787-00000033\",\n\t\t\"unique_id\": \"1477386177.51\",\n\t\t\"phone_number\": \"8787\",\n\t\t\"call_state_id\": \"23\",\n\t\t\"call_status_id\": null,\n\t\t\"call_status_detail_id\": null,\n\t\t\"call_date\": null,\n\t\t\"ivr_date\": \"2016-10-25 16:01:06\",\n\t\t\"queue_date\": \"2016-10-25 16:04:53\",\n\t\t\"leave_date\": \"2016-10-26 16:42:00\",\n\t\t\"transfer_date\": \"2016-10-26 16:42:57\",\n\t\t\"hangup_date\": \"2016-10-25 16:04:55\",\n\t\t\"pickup_date\": null,\n\t\t\"dropcall_date\": null,\n\t\t\"talk_time\": null,\n\t\t\"user_id\": \"2\",\n\t\t\"extension\": \"3\",\n\t\t\"host_address\": null,\n\t\t\"filename\": null,\n\t\t\"contact_name\": null,\n\t\t\"contact_type_id\": null,\n\t\t\"customer_id\": null,\n\t\t\"note\": null\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/calls.php",
    "groupTitle": "Calls",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/calls/:unique_id/unique"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get longest Call on queue</p>",
    "type": "get",
    "url": "/calls/longest_queue",
    "title": "Longest Queue",
    "name": "getLongestQueue",
    "group": "Calls",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Count total data</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.direction_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.channel",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.unique_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.phone_number",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.call_state_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.call_status_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.call_status_detail_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.call_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ivr_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.queue_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.leave_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.transfer_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.hangup_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.pickup_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.dropcall_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.talk_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.user_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.extension",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.host_address",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.filename",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.contact_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.contact_type_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.customer_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.note",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 1,\n\t\"data\": {\n\t\t\"id\": \"6\",\n\t\t\"direction_id\": \"1\",\n\t\t\"channel\": \"SIP/8787-00000033\",\n\t\t\"unique_id\": \"1477386177.51\",\n\t\t\"phone_number\": \"8787\",\n\t\t\"call_state_id\": \"23\",\n\t\t\"call_status_id\": null,\n\t\t\"call_status_detail_id\": null,\n\t\t\"call_date\": null,\n\t\t\"ivr_date\": \"2016-10-25 16:01:06\",\n\t\t\"queue_date\": \"2016-10-25 16:04:53\",\n\t\t\"leave_date\": \"2016-10-26 16:42:00\",\n\t\t\"transfer_date\": \"2016-10-26 16:42:57\",\n\t\t\"hangup_date\": \"2016-10-25 16:04:55\",\n\t\t\"pickup_date\": null,\n\t\t\"dropcall_date\": null,\n\t\t\"talk_time\": null,\n\t\t\"user_id\": \"2\",\n\t\t\"extension\": \"3\",\n\t\t\"host_address\": null,\n\t\t\"filename\": null,\n\t\t\"contact_name\": null,\n\t\t\"contact_type_id\": null,\n\t\t\"customer_id\": null,\n\t\t\"note\": null\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/calls.php",
    "groupTitle": "Calls",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/calls/longest_queue"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Monitoring</p>",
    "type": "get",
    "url": "/calls/monitoring",
    "title": "Monitoring",
    "name": "getMonitoring",
    "group": "Calls",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.incoming_call",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.asa",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.aat_ivr",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.aat",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.aht",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.abandone_rate",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.answer_rate",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.service_level",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1485147540,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 1,\n\t\"data\": {\n\t\t\"incoming_call\": \"3\",\n\t\t\"asa\": \"00:00:20\",\n\t\t\"aat_ivr\": \"00:00:11\",\n\t\t\"aat\": \"00:00:00\",\n\t\t\"aht\": \"00:00:20\",\n\t\t\"abandone_rate\": \"66.6667\",\n\t\t\"answer_rate\": \"33.3333\",\n\t\t\"service_level\": \"0.0300\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/calls.php",
    "groupTitle": "Calls",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/calls/monitoring"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get Total Monitoring Call Count</p>",
    "type": "get",
    "url": "/view_monitoring_call_count",
    "title": "Get Total Monitoring Call Count",
    "name": "getMonitoringCallCount",
    "group": "Calls",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Basis access authorization token</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Header-Example:",
          "content": "Authorization: BearereyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0",
          "type": "json"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "IncomingCall",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "IncomingCall",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "AnswerCall",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "AbandoneCall",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "AbandoneIvr",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "IvrCall",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "QueueCall",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.IncomingCall",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.AnswerCall",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.AbandoneCall",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.AbandoneIvr",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.IvrCall",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.QueueCall",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"request_time\": 1485486434,\n    \"execution_time\": 0,\n    \"response_code\": 200,\n    \"status\": \"success\",\n    \"total_data\": 1,\n    \"data\": [\n        {\n            \"IncomingCall\": \"0\",\n            \"AnswerCall\": \"0\",\n            \"AbandoneCall\": \"0\",\n            \"AbandoneIvr\": \"0\",\n            \"IvrCall\": \"0\",\n            \"QueueCall\": \"0\"\n        }\n    ],\n    \"paging\": {\n        \"current\": 1,\n        \"next\": 1,\n        \"previuos\": 1,\n        \"first\": 1,\n        \"last\": 1\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/calls.php",
    "groupTitle": "Calls",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/view_monitoring_call_count"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get Total Monitoring Call Duration</p>",
    "type": "get",
    "url": "/view_monitoring_call_duration",
    "title": "Get Total Monitoring Call Duration",
    "name": "getMonitoringCallDuration",
    "group": "Calls",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Basis access authorization token</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Header-Example:",
          "content": "Authorization: BearereyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0",
          "type": "json"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "ASA",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ASA",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "AAT_ivr",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "AAT",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "AHT",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "AbandoneRate",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "AnswerRate",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "ServiceLevel",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ASA",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.AAT_ivr",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.AAT",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.AHT",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.AbandoneRate",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.AnswerRate",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.ServiceLevel",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"request_time\": 1485487374,\n    \"execution_time\": 0,\n    \"response_code\": 200,\n    \"status\": \"success\",\n    \"total_data\": 1,\n    \"data\": [\n        {\n            \"ASA\": \"00:00:00\",\n            \"AAT_ivr\": \"00:00:00\",\n            \"AAT\": \"00:00:00\",\n            \"AHT\": \"00:00:00\",\n            \"AbandoneRate\": null,\n            \"AnswerRate\": null,\n            \"ServiceLevel\": \"0.0000\"\n        }\n    ],\n    \"paging\": {\n        \"current\": 1,\n        \"next\": 1,\n        \"previuos\": 1,\n        \"first\": 1,\n        \"last\": 1\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/calls.php",
    "groupTitle": "Calls",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/view_monitoring_call_duration"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Update call data by given unique ID</p>",
    "type": "put",
    "url": "/calls/:param_unique_id/unique",
    "title": "Update by unique ID",
    "name": "updateUnique",
    "group": "Calls",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "param_unique_id",
            "description": "<p>Call Unique ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "direction_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "channel",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "unique_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone_number",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "call_state_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "call_status_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "call_status_detail_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "call_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ivr_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "queue_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "leave_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "transfer_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "hangup_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pickup_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "dropcall_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "talk_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "extension",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "host_address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "filename",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "contact_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "contact_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "note",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.unique_id",
            "description": "<p>unique ID of created data</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"unique_id\": \"1234.567\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/calls.php",
    "groupTitle": "Calls",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/calls/:param_unique_id/unique"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Create</p>",
    "type": "post",
    "url": "/customer_types",
    "title": "Create",
    "name": "create",
    "group": "Customer_Types",
    "success": {
      "fields": {
        "Success 201": [
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 201 Created\n{\n\t\"request_time\": 1481884440,\n\t\"execution_time\": 0,\n\t\"response_code\": 201,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"1\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/customer_types.php",
    "groupTitle": "Customer_Types",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/customer_types"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "sort",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Delete</p>",
    "type": "delete",
    "url": "/customer_types/:id",
    "title": "Delete",
    "name": "delete",
    "group": "Customer_Types",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1481884440,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"1\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/customer_types.php",
    "groupTitle": "Customer_Types",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/customer_types/:id"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get All</p>",
    "type": "get",
    "url": "/customer_types/active",
    "title": "Get All",
    "name": "getAll",
    "group": "Customer_Types",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.sort",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.code",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_default",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_active",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"request_time\": 1482133301,\n    \"execution_time\": 0,\n    \"response_code\": 200,\n    \"status\": \"success\",\n    \"total_data\": 2,\n    \"data\": [\n        {\n            \"id\": \"1\",\n            \"sort\": \"1\",\n            \"code\": null,\n            \"name\": \"INDIVIDUAL\",\n            \"info\": null,\n            \"is_default\": \"0\",\n            \"is_active\": \"1\"\n        },\n        {\n            \"id\": \"2\",\n            \"sort\": \"2\",\n            \"code\": null,\n            \"name\": \"COMPANY\",\n            \"info\": null,\n            \"is_default\": \"0\",\n            \"is_active\": \"1\"\n        }\n    ],\n    \"paging\": {\n        \"current\": 1,\n        \"next\": 1,\n        \"previuos\": 1,\n        \"first\": 1,\n        \"last\": 1\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/customer_types.php",
    "groupTitle": "Customer_Types",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/customer_types/active"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Read by Customer Types ID</p>",
    "type": "get",
    "url": "/customer_types/:id/active",
    "title": "Read by Customer Types ID",
    "name": "getDetail",
    "group": "Customer_Types",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.sort",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.code",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_default",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_active",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"request_time\": 1485415336,\n    \"execution_time\": 0,\n    \"response_code\": 200,\n    \"status\": \"success\",\n    \"total_data\": 1,\n    \"data\": {\n        \"id\": \"2\",\n        \"sort\": \"2\",\n        \"code\": null,\n        \"name\": \"COMPANY\",\n        \"info\": null,\n        \"is_default\": \"0\",\n        \"is_active\": \"1\"\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/customer_types.php",
    "groupTitle": "Customer_Types",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/customer_types/:id/active"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Update</p>",
    "type": "put",
    "url": "/customer_types/:id",
    "title": "Update",
    "name": "update",
    "group": "Customer_Types",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1482122824,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"3\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/customer_types.php",
    "groupTitle": "Customer_Types",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/customer_types/:id"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "sort",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Create New Email Attachment Data</p>",
    "type": "post",
    "url": "/attachments",
    "title": "Create",
    "name": "create",
    "group": "Email_Attachments",
    "success": {
      "fields": {
        "Success 201": [
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": "<p>ID of created data</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 201 Created\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 201,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": 12\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/email_attachments.php",
    "groupTitle": "Email_Attachments",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/attachments"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "email_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "path",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "filename",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get Email Attachment by given Email ID</p>",
    "type": "get",
    "url": "/emails/:email_id/attachments",
    "title": "Read by Email ID",
    "name": "getByEmail",
    "group": "Email_Attachments",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_id",
            "description": "<p>Email ID</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Count total data</p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.email_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.path",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.filename",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 3,\n\t\"data\": [\n\t\t{\n\t\t\t\"id\": \"3\",\n\t\t\t\"email_id\": \"2\",\n\t\t\t\"path\": \"678\",\n\t\t\t\"filename\": \"test\"\n\t\t},\n\t\t{\n\t\t\t\"id\": \"4\",\n\t\t\t\"email_id\": \"2\",\n\t\t\t\"path\": null,\n\t\t\t\"filename\": \"coba\"\n\t\t},\n\t\t{\n\t\t\t\"id\": \"8\",\n\t\t\t\"email_id\": \"2\",\n\t\t\t\"path\": \"path\",\n\t\t\t\"filename\": \"file\"\n\t\t}\n\t],\n\t\"paging\": {\n\t\t\"current\": 1,\n\t\t\"next\": 1,\n\t\t\"previuos\": 1,\n\t\t\"first\": 1,\n\t\t\"last\": 1\n\t}\t\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/email_attachments.php",
    "groupTitle": "Email_Attachments",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/emails/:email_id/attachments"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get Email data by given Email Status ID and status Complete</p>",
    "type": "get",
    "url": "/email_statuses/:email_status_id/emails/is_complete",
    "title": "Ready to send",
    "name": "checkEmail",
    "group": "Emails",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "email_status_id",
            "description": "<p>Email Status ID</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Count total data</p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.mail_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.subject",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.email_from",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.email_to",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.email_cc",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.email_bcc",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.content",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.content_html",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.mail_error_info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.email_status_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_complete",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.created",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.direction_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.user_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.contact_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.contact_type_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.customer_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 1,\n\t\"data\": [\n\t\t{\n\t\t\t\"id\": \"6\",\n\t\t\t\"direction_id\": \"2\",\n\t\t\t\"sms_status_id\": \"2\",\n\t\t\t\"queue_time\": \"0000-00-00 00:00:00\",\n\t\t\t\"process_time\": null,\n\t\t\t\"read_time\": \"0000-00-00 00:00:00\",\n\t\t\t\"message\": \"message\",\n\t\t\t\"recipient\": null,\n\t\t\t\"reference\": null,\n\t\t\t\"delivery_report\": null,\n\t\t\t\"delivery_code\": null,\n\t\t\t\"delivery_status\": null,\n\t\t\t\"delivery_time\": null,\n\t\t\t\"sender\": \"087777\",\n\t\t\t\"replied\": null,\n\t\t\t\"reply_id\": null,\n\t\t\t\"user_id\": null,\n\t\t\t\"contact_name\": \"contact name\",\n\t\t\t\"contact_type_id\": \"0\",\n\t\t\t\"customer_id\": null\n\t\t}\n\t],\n\t\"paging\": {\n\t\t\"current\": 1,\n\t\t\"next\": 1,\n\t\t\"previuos\": 1,\n\t\t\"first\": 1,\n\t\t\"last\": 1\n\t}\t\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/emails.php",
    "groupTitle": "Emails",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/email_statuses/:email_status_id/emails/is_complete"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Create New Email Data</p>",
    "type": "post",
    "url": "/emails",
    "title": "Create",
    "name": "create",
    "group": "Emails",
    "success": {
      "fields": {
        "Success 201": [
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": "<p>ID of created data</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 201 Created\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 201,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"12\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/emails.php",
    "groupTitle": "Emails",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/emails"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mail_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "subject",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_from",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_to",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_cc",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_bcc",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "content",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "content_html",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mail_error_info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "email_status_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_complete",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "created",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "direction_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "contact_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "contact_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get All</p>",
    "type": "get",
    "url": "/emails",
    "title": "Get All",
    "name": "getAll",
    "group": "Emails",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mail_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "subject",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_from",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_to",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_cc",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_bcc",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "content",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "content_html",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mail_error_info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "email_status_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_complete",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "created",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "direction_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "contact_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "contact_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Count total data</p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.mail_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.subject",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.email_from",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.email_to",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.email_cc",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.email_bcc",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.content",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.content_html",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.mail_error_info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.email_status_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_complete",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.created",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.direction_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.user_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.contact_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.contact_type_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.customer_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 1,\n\t\"data\": [\n\t\t{\n\t\t\t\"id\": \"6\",\n\t\t\t\"direction_id\": \"2\",\n\t\t\t\"sms_status_id\": \"2\",\n\t\t\t\"queue_time\": \"0000-00-00 00:00:00\",\n\t\t\t\"process_time\": null,\n\t\t\t\"read_time\": \"0000-00-00 00:00:00\",\n\t\t\t\"message\": \"message\",\n\t\t\t\"recipient\": null,\n\t\t\t\"reference\": null,\n\t\t\t\"delivery_report\": null,\n\t\t\t\"delivery_code\": null,\n\t\t\t\"delivery_status\": null,\n\t\t\t\"delivery_time\": null,\n\t\t\t\"sender\": \"087777\",\n\t\t\t\"replied\": null,\n\t\t\t\"reply_id\": null,\n\t\t\t\"user_id\": null,\n\t\t\t\"contact_name\": \"contact name\",\n\t\t\t\"contact_type_id\": \"0\",\n\t\t\t\"customer_id\": null\n\t\t}\n\t],\n\t\"paging\": {\n\t\t\"current\": 1,\n\t\t\"next\": 1,\n\t\t\"previuos\": 1,\n\t\t\"first\": 1,\n\t\t\"last\": 1\n\t}\t\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/emails.php",
    "groupTitle": "Emails",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/emails"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Update Email by given ID</p>",
    "type": "put",
    "url": "/emails/:id",
    "title": "Update",
    "name": "update",
    "group": "Emails",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Email ID</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mail_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "subject",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_from",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_to",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_cc",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email_bcc",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "content",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "content_html",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mail_error_info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "email_status_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_complete",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "created",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "direction_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "contact_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "contact_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.id",
            "description": "<p>User ID</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"12\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/emails.php",
    "groupTitle": "Emails",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/emails/:id"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Create New Facebook Data</p>",
    "type": "post",
    "url": "/facebooks",
    "title": "Create",
    "name": "create",
    "group": "Facebooks",
    "success": {
      "fields": {
        "Success 201": [
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": "<p>ID of created data</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 201 Created\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 201,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"12\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/facebooks.php",
    "groupTitle": "Facebooks",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/facebooks"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.feature_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.parent_feature_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.from_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.from_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.to_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.to_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.status_type",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.type",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.message",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.link",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.total_like",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.comment_count",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.total_comment",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.me_like",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.post_like",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.error_info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.attempt",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.created",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.insert_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.direction_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.user_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.contact_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.contact_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.customer_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.facebook_status_id",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get All</p>",
    "type": "get",
    "url": "/facebooks",
    "title": "Get All",
    "name": "getAll",
    "group": "Facebooks",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.feature_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.parent_feature_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.from_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.from_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.to_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.to_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.status_type",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.type",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.message",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.link",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.total_like",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.comment_count",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.total_comment",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.me_like",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.post_like",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.error_info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.attempt",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.created",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.insert_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.direction_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.user_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.contact_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.contact_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.customer_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.facebook_status_id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.feature_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.parent_feature_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.from_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.from_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.to_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.to_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.status_type",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.type",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.message",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.link",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.total_like",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.comment_count",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.total_comment",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.me_like",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.post_like",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.error_info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.attempt",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.created",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.insert_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.direction_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.user_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.contact_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.contact_type_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.customer_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.facebook_status_id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "\tHTTP/1.1 200 OK\n\t{\n        \"request_time\": 1481874688,\n        \"execution_time\": 0,\n        \"response_code\": 200,\n        \"status\": \"success\",\n        \"total_data\": 2,\n        \"data\": [\n            {\n                \"id\": \"1\",\n                \"feature_id\": \"1\",\n                \"parent_feature_id\": \"1\",\n                \"from_id\": \"1\",\n                \"from_name\": \"test_from_name\",\n                \"to_id\": \"2\",\n                \"to_name\": \"test_to_name\",\n                \"status_type\": \"test_status_type\",\n                \"type\": \"test_type\",\n                \"message\": \"test_message\",\n                \"link\": \"test_link\",\n                \"total_like\": \"1\",\n                \"comment_count\": \"1\",\n                \"total_comment\": \"1\",\n                \"me_like\": \"1\",\n                \"post_like\": \"1\",\n                \"error_info\": \"test_error_info\",\n                \"attempt\": \"1\",\n                \"created\": \"2016-12-08 12:55:41\",\n                \"insert_date\": \"2016-12-08 12:55:41\",\n                \"direction_id\": \"1\",\n                \"user_id\": \"1\",\n                \"contact_name\": \"test_contact_name\",\n                \"contact_type_id\": \"1\",\n                \"customer_id\": \"1\",\n                \"facebook_status_id\": \"1\"\n            },\n            {\n                \"id\": \"4\",\n                \"feature_id\": \"1\",\n                \"parent_feature_id\": null,\n                \"from_id\": null,\n                \"from_name\": null,\n                \"to_id\": null,\n                \"to_name\": null,\n                \"status_type\": \"single\",\n                \"type\": null,\n                \"message\": \"bchsdbjdsnchdnv cidcsds\",\n                \"link\": null,\n                \"total_like\": \"0\",\n                \"comment_count\": \"0\",\n                \"total_comment\": \"0\",\n                \"me_like\": \"0\",\n                \"post_like\": \"0\",\n                \"error_info\": null,\n                \"attempt\": \"1\",\n                \"created\": \"2016-12-09 09:55:51\",\n                \"insert_date\": \"2016-12-01 09:55:51\",\n                \"direction_id\": \"2\",\n                \"user_id\": \"19\",\n                \"contact_name\": \"bchscdhdbcj\",\n                \"contact_type_id\": null,\n                \"customer_id\": null,\n                \"facebook_status_id\": \"1\"\n            }\n        ]\n\t}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/facebooks.php",
    "groupTitle": "Facebooks",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/facebooks"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Update Facebook by given ID</p>",
    "type": "put",
    "url": "/facebooks/:id",
    "title": "Update",
    "name": "update",
    "group": "Facebooks",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Facebook ID from database</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.feature_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.parent_feature_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.from_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.from_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.to_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.to_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.status_type",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.type",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.message",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.link",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.total_like",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.comment_count",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.total_comment",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.me_like",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.post_like",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.error_info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.attempt",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.created",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.insert_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.direction_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.user_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "data.contact_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.contact_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.customer_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "data.facebook_status_id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.id",
            "description": "<p>User ID</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"12\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/facebooks.php",
    "groupTitle": "Facebooks",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/facebooks/:id"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Create</p>",
    "type": "post",
    "url": "/filters",
    "title": "Create",
    "name": "create",
    "group": "Filters",
    "success": {
      "fields": {
        "Success 201": [
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 201 Created\n{\n\t\"request_time\": 1481884440,\n\t\"execution_time\": 0,\n\t\"response_code\": 201,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"1\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/filters.php",
    "groupTitle": "Filters",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/filters"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "sort",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "field",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Delete</p>",
    "type": "delete",
    "url": "/filters/:id",
    "title": "Delete",
    "name": "delete",
    "group": "Filters",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1481884440,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"1\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/filters.php",
    "groupTitle": "Filters",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/filters/:id"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get All</p>",
    "type": "get",
    "url": "/filters/active",
    "title": "Get All",
    "name": "getAll",
    "group": "Filters",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "field",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.sort",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.code",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.type_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.field",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_default",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_active",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"request_time\": 1482133301,\n    \"execution_time\": 0,\n    \"response_code\": 200,\n    \"status\": \"success\",\n    \"total_data\": 2,\n    \"data\": [\n        {\n            \"id\": \"1\",\n            \"sort\": null,\n            \"code\": null,\n            \"type_id\": \"0\",\n            \"name\": \"Phone Number\",\n            \"field\": \"phone_number\",\n            \"info\": null,\n            \"is_default\": \"0\",\n            \"is_active\": \"1\"\n        },\n        {\n            \"id\": \"2\",\n            \"sort\": null,\n            \"code\": null,\n            \"type_id\": \"1\",\n            \"name\": \"Calll State\",\n            \"field\": \"call_state_id\",\n            \"info\": \"call_states/active\",\n            \"is_default\": \"0\",\n            \"is_active\": \"1\"\n        }\n    ],\n    \"paging\": {\n        \"current\": 1,\n        \"next\": 1,\n        \"previuos\": 1,\n        \"first\": 1,\n        \"last\": 1\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/filters.php",
    "groupTitle": "Filters",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/filters/active"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Read by Filters ID</p>",
    "type": "get",
    "url": "/filters/:id/active",
    "title": "Read by Filters ID",
    "name": "getDetail",
    "group": "Filters",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.sort",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.code",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.type_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.field",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_default",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_active",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"request_time\": 1485414784,\n    \"execution_time\": 0,\n    \"response_code\": 200,\n    \"status\": \"success\",\n    \"total_data\": 1,\n    \"data\": {\n        \"id\": \"2\",\n        \"sort\": null,\n        \"code\": null,\n        \"type_id\": \"1\",\n        \"name\": \"Calll State\",\n        \"field\": \"call_state_id\",\n        \"info\": \"call_states/active\",\n        \"is_default\": \"0\",\n        \"is_active\": \"1\"\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/filters.php",
    "groupTitle": "Filters",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/filters/:id/active"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Update</p>",
    "type": "put",
    "url": "/filters/:id",
    "title": "Update",
    "name": "update",
    "group": "Filters",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1482122824,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"3\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/filters.php",
    "groupTitle": "Filters",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/filters/:id"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "sort",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "field",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get All</p>",
    "type": "get",
    "url": "/inbound_types/active",
    "title": "Get All",
    "name": "getAll",
    "group": "Inbound_Types",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.sort",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.code",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.parent_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_default",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_active",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1482133301,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 2,\n\t\"data\": [\n\t\t{\n\t\t\t\"id\": \"1\",\n\t\t\t\"sort\": \"1\",\n\t\t\t\"code\": null,\n\t\t\t\"parent_id\": null,\n\t\t\t\"name\": \"Inquiry\",\n\t\t\t\"info\": null,\n\t\t\t\"is_default\": \"0\",\n\t\t\t\"is_active\": \"1\"\n\t\t},\n\t\t{\n\t\t\t\"id\": \"2\",\n\t\t\t\"sort\": \"2\",\n\t\t\t\"code\": null,\n\t\t\t\"parent_id\": null,\n\t\t\t\"name\": \"Complain produk\",\n\t\t\t\"info\": null,\n\t\t\t\"is_default\": \"0\",\n\t\t\t\"is_active\": \"1\"\n\t\t}\n\t],\n\t\"paging\": {\n\t\t\"current\": 1,\n\t\t\"next\": 1,\n\t\t\"previuos\": 1,\n\t\t\"first\": 1,\n\t\t\"last\": 1\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/inbound_types.php",
    "groupTitle": "Inbound_Types",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/inbound_types/active"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get All</p>",
    "type": "get",
    "url": "/media_inbound_types",
    "title": "Get All",
    "name": "getAll",
    "group": "Media_Inbound_Types",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "media_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "media_record_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "inbound_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "created",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "media_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "inbound_type_name",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.media_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.media_record_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.inbound_type_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.created",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_active",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.media_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.inbound_type_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1482133301,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 2,\n\t\"data\": [\n\t\t{\n\t\t\t\"id\": \"1\",\n\t\t\t\"media_id\": \"2\",\n\t\t\t\"media_record_id\": \"63\",\n\t\t\t\"inbound_type_id\": \"2\",\n\t\t\t\"created\": \"2016-12-15 19:36:59\",\n\t\t\t\"is_active\": \"1\",\n\t\t\t\"media_name\": \"SMS\",\n\t\t\t\"inbound_type_name\": \"Complain produk\"\n\t\t},\n\t\t{\n\t\t\t\"id\": \"2\",\n\t\t\t\"media_id\": \"2\",\n\t\t\t\"media_record_id\": \"63\",\n\t\t\t\"inbound_type_id\": \"1\",\n\t\t\t\"created\": \"2016-12-15 19:36:59\",\n\t\t\t\"is_active\": \"1\",\n\t\t\t\"media_name\": \"SMS\",\n\t\t\t\"inbound_type_name\": \"Inquiry\"\n\t\t}\n\t],\n\t\"paging\": {\n\t\t\"current\": 1,\n\t\t\"next\": 1,\n\t\t\"previuos\": 1,\n\t\t\"first\": 1,\n\t\t\"last\": 1\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/media_inbound_types.php",
    "groupTitle": "Media_Inbound_Types",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/media_inbound_types"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get Total Media Unread</p>",
    "type": "get",
    "url": "/medias/unread",
    "title": "Get Total Unread",
    "name": "unread",
    "group": "Medias",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "media_id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Count total data</p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.media_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.total",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1482393958,\n\t\"execution_time\": 1,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 3,\n\t\"data\": [\n\t\t{\n\t\t\t\"media_id\": \"2\",\n\t\t\t\"total\": \"1\"\n\t\t},\n\t\t{\n\t\t\t\"media_id\": \"3\",\n\t\t\t\"total\": \"0\"\n\t\t},\n\t\t{\n\t\t\t\"media_id\": \"5\",\n\t\t\t\"total\": \"0\"\n\t\t}\n\t]\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/medias.php",
    "groupTitle": "Medias",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/medias/unread"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Create</p>",
    "type": "post",
    "url": "/report_filters",
    "title": "Create",
    "name": "create",
    "group": "Report_Filters",
    "success": {
      "fields": {
        "Success 201": [
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 201 Created\n{\n\t\"request_time\": 1481884440,\n\t\"execution_time\": 0,\n\t\"response_code\": 201,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"1\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/report_filters.php",
    "groupTitle": "Report_Filters",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/report_filters"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "sort",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Delete</p>",
    "type": "delete",
    "url": "/report_filters/:id",
    "title": "Delete",
    "name": "delete",
    "group": "Report_Filters",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1481884440,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"1\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/report_filters.php",
    "groupTitle": "Report_Filters",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/report_filters/:id"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get All</p>",
    "type": "get",
    "url": "/report_filters/active",
    "title": "Get All",
    "name": "getAll",
    "group": "Report_Filters",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.sort",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.code",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_default",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_active",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"request_time\": 1482133301,\n    \"execution_time\": 0,\n    \"response_code\": 200,\n    \"status\": \"success\",\n    \"total_data\": 2,\n    \"data\": [\n        {\n            \"id\": \"1\",\n            \"report_id\": \"1\",\n            \"filter_id\": \"1\",\n            \"is_default\": \"0\",\n            \"is_active\": \"1\"\n        },\n        {\n            \"id\": \"2\",\n            \"report_id\": \"1\",\n            \"filter_id\": \"2\",\n            \"is_default\": \"0\",\n            \"is_active\": \"1\"\n        }\n    ],\n     \"paging\": {\n        \"current\": 1,\n        \"next\": 1,\n        \"previuos\": 1,\n        \"first\": 1,\n        \"last\": 1\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/report_filters.php",
    "groupTitle": "Report_Filters",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/report_filters/active"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Read by Report Filters ID</p>",
    "type": "get",
    "url": "/report_filters/:id/active",
    "title": "Read by Report Filters ID",
    "name": "getDetail",
    "group": "Report_Filters",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.sort",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.code",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_default",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_active",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"request_time\": 1485413388,\n    \"execution_time\": 2,\n    \"response_code\": 200,\n    \"status\": \"success\",\n    \"total_data\": 1,\n    \"data\": {\n        \"id\": \"2\",\n        \"report_id\": \"1\",\n        \"filter_id\": \"2\",\n        \"is_default\": \"0\",\n        \"is_active\": \"1\"\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/report_filters.php",
    "groupTitle": "Report_Filters",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/report_filters/:id/active"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Update</p>",
    "type": "put",
    "url": "/report_filters/:id",
    "title": "Update",
    "name": "update",
    "group": "Report_Filters",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1482122824,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"3\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/report_filters.php",
    "groupTitle": "Report_Filters",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/report_filters/:id"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "sort",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Create</p>",
    "type": "post",
    "url": "/reports",
    "title": "Create",
    "name": "create",
    "group": "Reports",
    "success": {
      "fields": {
        "Success 201": [
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 201 Created\n{\n\t\"request_time\": 1481884440,\n\t\"execution_time\": 0,\n\t\"response_code\": 201,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"1\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/reports.php",
    "groupTitle": "Reports",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/reports"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "sort",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Delete</p>",
    "type": "delete",
    "url": "/reports/:id",
    "title": "Delete",
    "name": "delete",
    "group": "Reports",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1481884440,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"1\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/reports.php",
    "groupTitle": "Reports",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/reports/:id"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get All</p>",
    "type": "get",
    "url": "/reports/active",
    "title": "Get All",
    "name": "getAll",
    "group": "Reports",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.sort",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.code",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_default",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_active",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"request_time\": 1482133301,\n    \"execution_time\": 0,\n    \"response_code\": 200,\n    \"status\": \"success\",\n    \"total_data\": 2,\n    \"data\": [\n        {\n            \"id\": \"1\",\n            \"sort\": null,\n            \"code\": null,\n            \"name\": \"CALL INBOUND DETAIL\",\n            \"info\": null,\n            \"is_default\": \"0\",\n            \"is_active\": \"1\"\n        },\n        {\n            \"id\": \"2\",\n            \"sort\": null,\n            \"code\": null,\n            \"name\": \"CALL INBOUND HOURLY\",\n            \"info\": null,\n            \"is_default\": \"0\",\n            \"is_active\": \"1\"\n        }\n    ],\n    \"paging\": {\n        \"current\": 1,\n        \"next\": 1,\n        \"previuos\": 1,\n        \"first\": 1,\n        \"last\": 1\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/reports.php",
    "groupTitle": "Reports",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/reports/active"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Read by Reports ID</p>",
    "type": "get",
    "url": "/reports/:id/active",
    "title": "Read by Reports ID",
    "name": "getDetail",
    "group": "Reports",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.sort",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.code",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.info",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_default",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_active",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"request_time\": 1485414033,\n    \"execution_time\": 1,\n    \"response_code\": 200,\n    \"status\": \"success\",\n    \"total_data\": 1,\n    \"data\": {\n        \"id\": \"2\",\n        \"sort\": null,\n        \"code\": null,\n        \"name\": \"CALL INBOUND HOURLY\",\n        \"info\": null,\n        \"is_default\": \"0\",\n        \"is_active\": \"1\"\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/reports.php",
    "groupTitle": "Reports",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/reports/:id/active"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Update</p>",
    "type": "put",
    "url": "/reports/:id",
    "title": "Update",
    "name": "update",
    "group": "Reports",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1482122824,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"3\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/reports.php",
    "groupTitle": "Reports",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/reports/:id"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "sort",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "info",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_default",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_active",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get Server Time</p>",
    "type": "get",
    "url": "/server/time",
    "title": "Get Server Time",
    "name": "getTime",
    "group": "Server",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "time",
            "description": "<p>Sever Time</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1482403664,\n\t\"execution_time\": 0,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 1,\n\t\"data\": {\n\t\t\"server_time\": \"2016-12-22 17:45:53\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/server.php",
    "groupTitle": "Server",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/server/time"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get Sms Archive by Direction ID &amp; Email Status ID</p>",
    "type": "get",
    "url": "/directions/:direction_id/sms_statuses/:sms_status_id/sms_archives",
    "title": "Read by Direction ID & Email Status ID",
    "name": "getByDirectionStatus",
    "group": "Sms_Archive",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "direction_id",
            "description": "<p>Direction ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "sms_status_id",
            "description": "<p>Sms Status ID</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Count total data</p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.direction_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.sms_status_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.queue_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.process_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.read_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.message",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.recipient",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.reference",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.delivery_report",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.delivery_code",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.delivery_status",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.delivery_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.sender",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.replied",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.reply_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.user_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.inbound_media_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.inbound_media_record_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.contact_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.contact_type_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.customer_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 1,\n\t\"data\": [\n\t\t{\n\t\t\t\"id\": \"6\",\n\t\t\t\"direction_id\": \"2\",\n\t\t\t\"sms_status_id\": \"2\",\n\t\t\t\"queue_time\": \"0000-00-00 00:00:00\",\n\t\t\t\"process_time\": null,\n\t\t\t\"read_time\": \"0000-00-00 00:00:00\",\n\t\t\t\"message\": \"message\",\n\t\t\t\"recipient\": null,\n\t\t\t\"reference\": null,\n\t\t\t\"delivery_report\": null,\n\t\t\t\"delivery_code\": null,\n\t\t\t\"delivery_status\": null,\n\t\t\t\"delivery_time\": null,\n\t\t\t\"sender\": \"087777\",\n\t\t\t\"replied\": null,\n\t\t\t\"reply_id\": null,\n\t\t\t\"user_id\": null,\n\t\t\t\"contact_name\": \"contact name\",\n\t\t\t\"contact_type_id\": \"0\",\n\t\t\t\"customer_id\": null\n\t\t}\n\t],\n\t\"paging\": {\n\t\t\"current\": 1,\n\t\t\"next\": 1,\n\t\t\"previuos\": 1,\n\t\t\"first\": 1,\n\t\t\"last\": 1\n\t}\t\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/sms_archives.php",
    "groupTitle": "Sms_Archive",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/directions/:direction_id/sms_statuses/:sms_status_id/sms_archives"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Update Sms Archive by given ID</p>",
    "type": "put",
    "url": "/sms_archives/:id",
    "title": "Update",
    "name": "update",
    "group": "Sms_Archive",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Sms Archive ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "username",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "level_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_activity_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "department_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "fullname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "firstname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "middlename",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "lastname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nickname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "salutation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mobile",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pbx_inbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pbx_outbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_inbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_outbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_inbound_pwd",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_outbound_pwd",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "picture",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gender",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "religion_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "expiry_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "birth_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "join_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "current_unique_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_booked",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_enable",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_delete",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "last_activity_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "host_address",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": "<p>Sms Archive ID</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": 4\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/sms_archives.php",
    "groupTitle": "Sms_Archive",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/sms_archives/:id"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get SMS needs to be send</p>",
    "type": "get",
    "url": "/sms_pending/ready",
    "title": "Ready to send",
    "name": "checkSms",
    "group": "Sms_Pending",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Count total data</p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.direction_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.sms_status_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.queue_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.process_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.read_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.message",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.recipient",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.reference",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.delivery_report",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.delivery_code",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.delivery_status",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.delivery_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.sender",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.replied",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.reply_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.user_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.inbound_media_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.inbound_media_record_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.contact_name",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.contact_type_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.customer_id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 1,\n\t\"data\": [\n\t\t{\n\t\t\t\"id\": \"9\",\n\t\t\t\"recipient\": null,\n\t\t\t\"message\": \"tes aja kok\",\n\t\t\t\"sms_date\": \"2010-10-17\",\n\t\t\t\"sms_time\": \"09:25:12\"\n\t\t}\n\t]\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/sms_pending.php",
    "groupTitle": "Sms_Pending",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/sms_pending/ready"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Create New Sms Pending Data</p>",
    "type": "post",
    "url": "/sms_pending",
    "title": "Create",
    "name": "create",
    "group": "Sms_Pending",
    "success": {
      "fields": {
        "Success 201": [
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": "<p>ID of created data</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 201 Created\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 201,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"12\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/sms_pending.php",
    "groupTitle": "Sms_Pending",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/sms_pending"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "direction_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "sms_status_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "queue_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "process_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "read_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "recipient",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "reference",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "delivery_report",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "delivery_code",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "delivery_status",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "delivery_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "sender",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "replied",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "reply_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "inbound_media_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "inbound_media_record_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "contact_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "contact_type_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Delete SMS Pending data by ID</p>",
    "type": "delete",
    "url": "/sms_pending/:id",
    "title": "Delete",
    "name": "delete",
    "group": "Sms_Pending",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Sms Pending ID</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": "<p>ID of deleted data</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"9\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/sms_pending.php",
    "groupTitle": "Sms_Pending",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/sms_pending/:id"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Send Message to Socket.io's event</p>",
    "type": "post",
    "url": "/sockets",
    "title": "Send",
    "name": "create",
    "group": "Sockets",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "event",
            "description": "<p>Socket.io's event</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Event's message</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.event",
            "description": "<p>Socket.io's event</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.message",
            "description": "<p>Event's message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 Created\n{\n\t\"request_time\": 1482388575,\n\t\"execution_time\": 1,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 1,\n\t\"data\": {\n\t\t\"event\": \"event_name\",\n\t\t\"message\": \"message content\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/sockets.php",
    "groupTitle": "Sockets",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/sockets"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get All</p>",
    "type": "get",
    "url": "/users",
    "title": "Get All",
    "name": "getAll",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "username",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "level_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_activity_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "department_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "fullname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "firstname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "middlename",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "lastname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nickname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "salutation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mobile",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pbx_inbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pbx_outbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_inbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_outbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_inbound_pwd",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_outbound_pwd",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "picture",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gender",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "religion_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "expiry_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "birth_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "join_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "current_unique_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_booked",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_enable",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_delete",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "last_activity_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "host_address",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.username",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.password",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.level_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.user_activity_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.department_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.fullname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.firstname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.middlename",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.lastname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.nickname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.salutation",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.email",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.mobile",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.phone",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.address",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.pbx_inbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.pbx_outbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_inbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_outbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_inbound_pwd",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_outbound_pwd",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.picture",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.gender",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.religion_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.expiry_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.birth_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.join_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.current_unique_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_booked",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_enable",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_delete",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.last_activity_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.host_address",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "\tHTTP/1.1 200 OK\n\t{\n        \"request_time\": 1481874688,\n        \"execution_time\": 0,\n        \"response_code\": 200,\n        \"status\": \"success\",\n        \"total_data\": 2,\n        \"data\": [\n\t\t\t{\n\t\t\t\t\"id\": \"1\",\n\t\t\t\t\"username\": \"admin\",\n\t\t\t\t\"password\": \"21232f297a57a5a743894a0e4a801fc3\",\n\t\t\t\t\"user_level_id\": \"1\",\n\t\t\t\t\"user_activity_id\": \"1\",\n\t\t\t\t\"department_id\": \"6\",\n\t\t\t\t\"fullname\": \"sentosa\",\n\t\t\t\t\"firstname\": \"sunari\",\n\t\t\t\t\"middlename\": \"sunari\",\n\t\t\t\t\"lastname\": null,\n\t\t\t\t\"nickname\": null,\n\t\t\t\t\"salutation\": \"coba\",\n\t\t\t\t\"email\": null,\n\t\t\t\t\"mobile\": null,\n\t\t\t\t\"phone\": null,\n\t\t\t\t\"address\": null,\n\t\t\t\t\"pbx_inbound\": null,\n\t\t\t\t\"pbx_outbound\": null,\n\t\t\t\t\"ext_inbound\": null,\n\t\t\t\t\"ext_outbound\": null,\n\t\t\t\t\"ext_inbound_pwd\": null,\n\t\t\t\t\"ext_outbound_pwd\": null,\n\t\t\t\t\"picture\": null,\n\t\t\t\t\"gender\": null,\n\t\t\t\t\"religion_id\": null,\n\t\t\t\t\"expiry_date\": null,\n\t\t\t\t\"birth_date\": null,\n\t\t\t\t\"join_date\": null,\n\t\t\t\t\"current_unique_id\": null,\n\t\t\t\t\"is_booked\": \"0\",\n\t\t\t\t\"is_enable\": \"1\",\n\t\t\t\t\"is_delete\": \"0\",\n\t\t\t\t\"last_activity_time\": \"2017-01-17 15:09:26\",\n\t\t\t\t\"last_event_id\": \"6319\",\n\t\t\t\t\"host_address\": null,\n\t\t\t\t\"user_level_name\": \"CSR\",\n\t\t\t\t\"user_activity_name\": \"OFFLINE\",\n\t\t\t\t\"department_name\": \"Call Center ATI\"\n\t\t\t},\n\t\t\t{\n\t\t\t\t\"id\": \"3\",\n\t\t\t\t\"username\": \"adil\",\n\t\t\t\t\"password\": \"5c3bea5d394835b2af9d2cfd632147f8\",\n\t\t\t\t\"user_level_id\": \"3\",\n\t\t\t\t\"user_activity_id\": \"1\",\n\t\t\t\t\"department_id\": \"6\",\n\t\t\t\t\"fullname\": \"Adil\",\n\t\t\t\t\"firstname\": \"aaa\",\n\t\t\t\t\"middlename\": null,\n\t\t\t\t\"lastname\": null,\n\t\t\t\t\"nickname\": null,\n\t\t\t\t\"salutation\": \"coba\",\n\t\t\t\t\"email\": null,\n\t\t\t\t\"mobile\": null,\n\t\t\t\t\"phone\": null,\n\t\t\t\t\"address\": null,\n\t\t\t\t\"pbx_inbound\": null,\n\t\t\t\t\"pbx_outbound\": null,\n\t\t\t\t\"ext_inbound\": null,\n\t\t\t\t\"ext_outbound\": null,\n\t\t\t\t\"ext_inbound_pwd\": null,\n\t\t\t\t\"ext_outbound_pwd\": null,\n\t\t\t\t\"picture\": null,\n\t\t\t\t\"gender\": null,\n\t\t\t\t\"religion_id\": null,\n\t\t\t\t\"expiry_date\": null,\n\t\t\t\t\"birth_date\": null,\n\t\t\t\t\"join_date\": null,\n\t\t\t\t\"current_unique_id\": null,\n\t\t\t\t\"is_booked\": \"0\",\n\t\t\t\t\"is_enable\": \"1\",\n\t\t\t\t\"is_delete\": \"0\",\n\t\t\t\t\"last_activity_time\": \"2016-12-19 14:28:34\",\n\t\t\t\t\"last_event_id\": \"2819\",\n\t\t\t\t\"host_address\": null,\n\t\t\t\t\"user_level_name\": \"SPV\",\n\t\t\t\t\"user_activity_name\": \"OFFLINE\",\n\t\t\t\t\"department_name\": \"Call Center ATI\"\n\t\t\t}\n        ]\n\t}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/users.php",
    "groupTitle": "Users",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/users"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get booked user</p>",
    "type": "get",
    "url": "/user_activities/:user_activity_id/users/:current_unique_id/booking",
    "title": "Read booked user",
    "name": "getBookUser",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "user_activity_id",
            "description": "<p>User Activity ID</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "current_unique_id",
            "description": "<p>User unique ID</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Count total data</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.username",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.password",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.level_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.user_activity_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.department_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.fullname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.firstname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.middlename",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.lastname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.nickname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.salutation",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.email",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.mobile",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.phone",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.address",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.pbx_inbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.pbx_outbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_inbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_outbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_inbound_pwd",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_outbound_pwd",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.picture",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.gender",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.religion_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.expiry_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.birth_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.join_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.current_unique_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_booked",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_enable",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_delete",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.last_activity_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.host_address",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 1,\n\t\"data\": {\n\t\t\"id\": \"4\",\n\t\t\"username\": \"vian\",\n\t\t\"password\": \"2ceefdecaeaba09fd7d342302d91debf\",\n\t\t\"level_id\": \"1\",\n\t\t\"user_activity_id\": \"2\",\n\t\t\"department_id\": \"1\",\n\t\t\"fullname\": \"admin test\",\n\t\t\"firstname\": null,\n\t\t\"middlename\": null,\n\t\t\"lastname\": null,\n\t\t\"nickname\": null,\n\t\t\"salutation\": null,\n\t\t\"email\": null,\n\t\t\"mobile\": null,\n\t\t\"phone\": null,\n\t\t\"address\": null,\n\t\t\"pbx_inbound\": null,\n\t\t\"pbx_outbound\": null,\n\t\t\"ext_inbound\": \"7878\",\n\t\t\"ext_outbound\": null,\n\t\t\"ext_inbound_pwd\": null,\n\t\t\"ext_outbound_pwd\": null,\n\t\t\"picture\": null,\n\t\t\"gender\": null,\n\t\t\"religion_id\": null,\n\t\t\"expiry_date\": null,\n\t\t\"birth_date\": null,\n\t\t\"join_date\": null,\n\t\t\"current_unique_id\": \"1478074285.368\",\n\t\t\"is_booked\": \"0\",\n\t\t\"is_enable\": \"1\",\n\t\t\"is_delete\": \"0\",\n\t\t\"last_activity_time\": \"2016-10-26 14:18:16\",\n\t\t\"host_address\": null\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/users.php",
    "groupTitle": "Users",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/user_activities/:user_activity_id/users/:current_unique_id/booking"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get User by User Activity ID</p>",
    "type": "get",
    "url": "/user_activities/:user_activity_id/users",
    "title": "Read by User Activity ID",
    "name": "getByUserActivity",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "user_activity_id",
            "description": "<p>User Activity ID</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "id",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "total_data",
            "description": "<p>Count total data</p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.username",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.password",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.level_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.user_activity_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.department_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.fullname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.firstname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.middlename",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.lastname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.nickname",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.salutation",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.email",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.mobile",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.phone",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.address",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.pbx_inbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.pbx_outbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_inbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_outbound",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_inbound_pwd",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.ext_outbound_pwd",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.picture",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.gender",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.religion_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.expiry_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.birth_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.join_date",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.current_unique_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_booked",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_enable",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.is_delete",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.last_activity_time",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.host_address",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"total_data\": 1,\n\t\"data\": [\n\t\t{\n\t\t\t\"id\": \"4\",\n\t\t\t\"username\": \"vian\",\n\t\t\t\"password\": \"2ceefdecaeaba09fd7d342302d91debf\",\n\t\t\t\"level_id\": \"1\",\n\t\t\t\"user_activity_id\": \"2\",\n\t\t\t\"department_id\": \"1\",\n\t\t\t\"fullname\": \"admin test\",\n\t\t\t\"firstname\": null,\n\t\t\t\"middlename\": null,\n\t\t\t\"lastname\": null,\n\t\t\t\"nickname\": null,\n\t\t\t\"salutation\": null,\n\t\t\t\"email\": null,\n\t\t\t\"mobile\": null,\n\t\t\t\"phone\": null,\n\t\t\t\"address\": null,\n\t\t\t\"pbx_inbound\": null,\n\t\t\t\"pbx_outbound\": null,\n\t\t\t\"ext_inbound\": \"7878\",\n\t\t\t\"ext_outbound\": null,\n\t\t\t\"ext_inbound_pwd\": null,\n\t\t\t\"ext_outbound_pwd\": null,\n\t\t\t\"picture\": null,\n\t\t\t\"gender\": null,\n\t\t\t\"religion_id\": null,\n\t\t\t\"expiry_date\": null,\n\t\t\t\"birth_date\": null,\n\t\t\t\"join_date\": null,\n\t\t\t\"current_unique_id\": \"1478074285.368\",\n\t\t\t\"is_booked\": \"0\",\n\t\t\t\"is_enable\": \"1\",\n\t\t\t\"is_delete\": \"0\",\n\t\t\t\"last_activity_time\": \"2016-10-26 14:18:16\",\n\t\t\t\"host_address\": null\n\t\t}\n\t],\n\t\"paging\": {\n\t\t\"current\": 1,\n\t\t\"next\": 1,\n\t\t\"previuos\": 1,\n\t\t\"first\": 1,\n\t\t\"last\": 1\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/users.php",
    "groupTitle": "Users",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/user_activities/:user_activity_id/users"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Get Total Monitoring User Count</p>",
    "type": "get",
    "url": "/view_monitoring_user_count",
    "title": "Get Total Monitoring User Count",
    "name": "getMonitoringUserCount",
    "group": "Users",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Basis access authorization token</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Header-Example:",
          "content": "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0ODE3ODUwMTcsImp0aSI6IllBV3QxNUhMcmZ3Z29TdCtrc3FuRExCemJidUdYaGFoSU5DWnAxanFYWFE9IiwiaXNzIjoiOjoxIiwibmJmIjoxNDgxNzg1MDE4LCJleHAiOjE0ODE3ODY4MTgsImRhdGEiOnsidXNlcm5hbWUiOiJhZGlsIiwicGFzc3dvcmQiOiI4ZDU0MWY5Njc2NGZlYzQ4NmIzNTRjNGFkMjA4MzJjZmJkMzQxZGZjIiwiaXAiOiI6OjEifX0.eo52dbrRTbXs81OmjCQOKE0EnJAy4F-Pw_3UfcBh4e0",
          "type": "json"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order",
            "defaultValue": "ttl_login",
            "description": "<p>Order by data field name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "allowedValues": [
              "\"asc\"",
              "\"desc\""
            ],
            "optional": false,
            "field": "sort",
            "defaultValue": "asc",
            "description": "<p>(asc, desc)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "limit",
            "defaultValue": "20",
            "description": "<p>Limit data</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>Page number</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "ttl_login",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "NOT_AVAILABLE",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "READY_IN",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "BREAK",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "READY_MEDIA",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "READY_OUT",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "PAPERWORK",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "ONLINE_IN",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "ONLINE_OUT",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.ttl_login",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.NOT_AVAILABLE",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.READY_IN",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.BREAK",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.READY_MEDIA",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.READY_OUT",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.PAPERWORK",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.ONLINE_IN",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.ONLINE_OUT",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "paging",
            "description": "<p>Data paging (can be set from uri parameter 'page' &amp; 'limit'. ex: '<b>?page=1&amp;limit=10</b>')</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.current",
            "description": "<p>Current page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.next",
            "description": "<p>Next page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.previuos",
            "description": "<p>Previous page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.first",
            "description": "<p>First page</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "paging.last",
            "description": "<p>Last page</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"request_time\": 1485488097,\n    \"execution_time\": 0,\n    \"response_code\": 200,\n    \"status\": \"success\",\n    \"total_data\": 1,\n    \"data\": [\n        {\n            \"ttl_login\": \"6\",\n            \"NOT_AVAILABLE\": \"3\",\n            \"READY_IN\": \"3\",\n            \"BREAK\": \"3\",\n            \"READY_MEDIA\": \"2\",\n            \"READY_OUT\": \"2\",\n            \"PAPERWORK\": \"0\",\n            \"ONLINE_IN\": \"3\",\n            \"ONLINE_OUT\": \"2\"\n        }\n    ],\n    \"paging\": {\n        \"current\": 1,\n        \"next\": 1,\n        \"previuos\": 1,\n        \"first\": 1,\n        \"last\": 1\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/users.php",
    "groupTitle": "Users",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/view_monitoring_user_count"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Update User Data</p>",
    "type": "put",
    "url": "/users/:id",
    "title": "Update",
    "name": "update",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>User ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "username",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "level_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_activity_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "department_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "fullname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "firstname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "middlename",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "lastname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nickname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "salutation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mobile",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pbx_inbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pbx_outbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_inbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_outbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_inbound_pwd",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_outbound_pwd",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "picture",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gender",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "religion_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "expiry_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "birth_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "join_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "current_unique_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_booked",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_enable",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_delete",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "last_activity_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "host_address",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": "<p>User ID</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": 4\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/users.php",
    "groupTitle": "Users",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/users/:id"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Update process to book user</p>",
    "type": "put",
    "url": "/user_activities/:user_activity_id/users/booking",
    "title": "Book user",
    "name": "updateBookUser",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "user_activity_id",
            "description": "<p>User Activity ID</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "current_unique_id",
            "description": "<p>Current unique ID</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.current_unique_id",
            "description": "<p>unique ID</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"current_unique_id\": \"1478075060.376\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/users.php",
    "groupTitle": "Users",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/user_activities/:user_activity_id/users/booking"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Update user data by given unique ID</p>",
    "type": "put",
    "url": "/users/:param_current_unique_id/unique",
    "title": "Update by unique ID",
    "name": "updateUnique",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "param_current_unique_id",
            "description": "<p>Users unique ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "username",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "level_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_activity_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "department_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "fullname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "firstname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "middlename",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "lastname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nickname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "salutation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mobile",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pbx_inbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pbx_outbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_inbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_outbound",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_inbound_pwd",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ext_outbound_pwd",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "picture",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gender",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "religion_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "expiry_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "birth_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "join_date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "current_unique_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_booked",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_enable",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "is_delete",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "last_activity_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "host_address",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(200 = OK)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Response data</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data.current_unique_id",
            "description": "<p>User unique ID</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 200,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"current_unique_id\": \"123.456\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/routes/users.php",
    "groupTitle": "Users",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/users/:param_current_unique_id/unique"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 404-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 404,\n\t\"status\": \"error\",\n\t\"message\": \"Not Found\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "version": "1.0.0",
    "description": "<p>Booking</p>",
    "type": "put",
    "url": "/voice_mails/booking",
    "title": "Booking",
    "name": "updateBooking",
    "group": "Voice_Mail",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 201": [
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(201 = Created)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "String",
            "optional": false,
            "field": "total_data",
            "description": "<p>Response total resource data <b>(success)</b></p>"
          },
          {
            "group": "Success 201",
            "type": "Object[]",
            "optional": false,
            "field": "data",
            "description": "<p>Response data (Array of Object)</p>"
          },
          {
            "group": "Success 201",
            "type": "Number",
            "optional": false,
            "field": "data.id",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 201 Created\n{\n\t\"request_time\": 1481884440,\n\t\"execution_time\": 0,\n\t\"response_code\": 201,\n\t\"status\": \"success\",\n\t\"data\": {\n\t\t\"id\": \"1\"\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "v1/app/docs/voice_mails.php",
    "groupTitle": "Voice_Mail",
    "sampleRequest": [
      {
        "url": "http://192.168.0.223/synergix-amstad/private-api/v1/voice_mails/booking"
      }
    ],
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 4xx",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(400 = Bad Request, 401 = Unauthorized, 403 = Frobidden, 404 = Not Found, 405 = Method Not Allowed)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(error)</b></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ],
        "Error 500": [
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "request_time",
            "description": "<p>Request time (timestamp)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "execution_time",
            "description": "<p>Request execution time (in seconds)</p>"
          },
          {
            "group": "Error 500",
            "type": "Number",
            "optional": false,
            "field": "response_code",
            "description": "<p>Response Code <b>(500)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "status",
            "description": "<p>Response status <b>(fail)</b></p>"
          },
          {
            "group": "Error 500",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Error Message</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error 400-Response:",
          "content": "HTTP/1.1 400 Bad Request\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 400,\n\t\"status\": \"error\",\n\t\"message\": \"Bad Request\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 401 Unauthorized\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 401,\n\t\"status\": \"error\",\n\t\"message\": \"Unauthorized\"\n}",
          "type": "json"
        },
        {
          "title": "Error 401-Response:",
          "content": "HTTP/1.1 403 Forbidden\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 403,\n\t\"status\": \"error\",\n\t\"message\": \"Forbidden\"\n}",
          "type": "json"
        },
        {
          "title": "Error 500-Response:",
          "content": "HTTP/1.1 500 Internal Server Error\n{\n\t\"request_time\": 1478958162,\n\t\"execution_time\": 21,\n\t\"response_code\": 500,\n\t\"status\": \"fail\",\n\t\"message\": \"Internal Server Error\"\n}",
          "type": "json"
        }
      ]
    }
  }
] });
