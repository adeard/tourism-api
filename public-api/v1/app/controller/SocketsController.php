<?php

use ElephantIO\Client as Elephant;
use ElephantIO\Engine\SocketIO\Version1X;

class SocketsController extends AppController
{
	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->socket = $this->ci->get('globalSettings')['socket.io'];
	}
	
	/**
	 *  create method
	 *  insert new message to socket.io's event
	 */
	public function create($request, $response)
	{
		$data_temp = $request->getParsedBody();
		$param = [];
		$param['event'] = null;
		$param['message'] = null;
		
		foreach ($data_temp as $key => $value) {
			$param[$key] = $value;		
		}
		
		if (empty($param['event']) || empty($param['message'])) {
			$handler = $this->ci->get('badRequestHandler'); 
			return $handler($request, $response);
		}

		$elephant = new Elephant(new Version1X($this->socket['base_url']));

		$elephant->initialize();
		$elephant->emit($param['event'], [$param['message']]);
		$elephant->close();
		
		$result = [];
		$result['request_time'] = $this->request_time;
		$result['execution_time'] = executionTime($this->request_time);
		$result['response_code'] = 200;
		$result['status'] = 'success';
		$result['total_data'] = 1;
		$result['data'] = [
			'event' => $param['event'],
			'message' => $param['message']
		];
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
}
