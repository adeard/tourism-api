<?php

class SmsArchivesController extends AppController
{
	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->table = 'sms_archive';
	}

	public function getByDirectionStatus($request, $response, $args)
	{
		$direction_id = $args['direction_id'];
		$sms_status_id = $args['sms_status_id'];
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->table);
		$sort = ['ASC', 'DESC'];
		
		$clause = [];
		$clause['order'] = 'id';
		$clause['sort'] = 'ASC';
		$clause['limit'] = 20;
		$clause['page'] = 1;
		
		foreach ($params as $key => $value) {
			if (!empty($value)) {
				$clause[$key] = $value;		
			}
		}
		
		if (!in_array($clause['order'], $column) || !is_numeric($clause['limit']) || !is_numeric($clause['page']) || !in_array(strtoupper($clause['sort']), $sort)) {
			$handler = $this->ci->get('badRequestHandler'); 
			return $handler($request, $response);
		}
		
		$result = $this->parentGetAll($this->table, $clause, ['direction_id = '.$direction_id, 'sms_status_id = '.$sms_status_id]);
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	 *  update method
	 *  update sms archive data by given 'id'
	 */
	public function update($request, $response, $args)
	{		
		$id = $args['id'];
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

		$check = $this->parentCheck($this->table, ['id' => $id]);
		
    	if ($check == 0) {
    		$handler = $this->ci->get('notFoundHandler'); 
			return $handler($request, $response);
    	}
		
		$updated = $this->parentUpdate($this->table, $data_temp, ['id' => $id]);
		
		if ($updated) {
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
	
}
