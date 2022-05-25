<?php

/**
 *  @apiVersion 1.0.0
 *  @apiDescription Index
 *  @api {get} / Index
 *  @apiName index
 *  @apiGroup Index
 *
 *  @apiSuccess {String} Api_Name Api Name
 *  @apiSuccess {String} Description Api Description
 *  @apiSuccess {String} Version Api Version
 *
 *  @apiSuccessExample {json} Success-Response:
    HTTP/1.1 200 OK
    {
        "Api Name": "Synergix Public API",
        "Description": "Provide service data for Desktop, Mobile, and Web App.",
        "Version": "1.0"
    }
 *
 *  @apiUse ClientError
 *  @apiUse ServerError
 */