<?php

class SmsPendingController extends AppController 
{
    public function __construct(Slim\Container $ci)
    {
		parent::__construct($ci);
		$this->table = 'sms_pending';
    }

	/**
	 *  create method
	 *  create new sms_pending data
	 */
    public function create($request, $response, $args)
    {
		$data_temp = $request->getParsedBody();
		$protected_columns = ['id'];
		$column = $this->checkColumn($this->db['database']['dbname'], $this->table);
		
		if (empty($data_temp)) {
			$handler = $this->ci->get('badRequestHandler'); 
			return $handler($request, $response);
		}
		
		foreach ($data_temp as $key => $value) {
			if (!in_array($key, $column) || in_array($key, $protected_columns)) {
				$handler = $this->ci->get('badRequestHandler'); 
				return $handler($request, $response);
			}
		}

		$inserted = $this->parentInsert($this->table, $data_temp);
		
		if ($inserted) {
			$result = [];
			$result['request_time'] = $this->request_time;
			$result['execution_time'] = executionTime($this->request_time);
			$result['response_code'] = 201;
			$result['status'] = 'success';
			$result['data'] = ['id' => $this->con->lastInsertId()];
			
			return $response->withJson($result)
					->withHeader('Content-Type', 'application/json')
					->withStatus(201);
		} else {
			$handler = $this->ci->get('errorHandler'); 
			return $handler($request, $response);
		}	
    }

	/**
	 *  delete method
	 *  delete data from sms_pending
	 */
    public function delete($request, $response, $args)
    {
		$id = $args['id'];
		
		$check = $this->parentCheck($this->table, ['id' => $id]);
		
		if ($check == 0) {
			$handler = $this->ci->get('notFoundHandler'); 
			return $handler($request, $response, 'User not exist');			
		}
		
		$deleted = $this->parentDelete($this->table, ['id' => $id]);

		if ($deleted) {
			$result = [];
			$result['request_time'] = $this->request_time;
			$result['execution_time'] = executionTime($this->request_time);
			$result['response_code'] = 200;
			$result['status'] = 'success';
			$result['data'] = ['id' => $id];
			
			return $response->withJson($result)
					->withHeader('Content-Type', 'application/json')
					->withStatus(200);
		} else {
			$handler = $this->ci->get('errorHandler'); 
			return $handler($request, $response);
		}						
    }

	/**
	 *  readyList method
	 *  get sms needs to be sent
	 */
	public function readyList($request, $response, $args)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->table);
		
		$param = [];
		$param['order'] = 'id';
		$param['limit'] = 20;
		
		foreach ($params as $key => $value) {
			if (!empty($value)) {
				$param[$key] = $value;		
			}
		}
		
		if (!in_array($param['order'], $column) || !is_numeric($param['limit'])) {
			$handler = $this->ci->get('badRequestHandler'); 
			return $handler($request, $response);
		}
		
		$sms = $this->con->prepare("SELECT id, recipient, message, DATE(queue_time) AS sms_date, TIME(queue_time) AS sms_time FROM ".$this->table." WHERE direction_id = ? AND sms_status_id = ? AND queue_time <= NOW() ORDER BY ".$param['order']." LIMIT ".$param['limit']);
		$sms->execute([2, 3]);
		
		$data = [];
		
		while ($row = $sms->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		
		$result = [];
		$result['request_time'] = $this->request_time;
		$result['execution_time'] = executionTime($this->request_time);
		$result['response_code'] = 200;
		$result['status'] = 'success';
		$result['total_data'] = $sms->rowCount();
		$result['data'] = $data;
					
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

}
