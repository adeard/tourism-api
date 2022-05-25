<?php

class ServerController extends AppController
{
	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);	
	}
	
	/**
	 *  getTime method
	 *  get database server time
	 */
	public function getTime($request, $response)
	{		
		$time = $this->con->prepare("SELECT NOW() AS server_time");
		$time->execute();
		$count = $time->rowCount();
		
		$result = [];
		$result['request_time'] = $this->request_time;
		$result['execution_time'] = executionTime($this->request_time);
		$result['response_code'] = 200;
		$result['status'] = 'success';
		$result['total_data'] = $count;
		$result['data'] = $time->fetch(PDO::FETCH_ASSOC);
					
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
}
