<?php
	
class EmailAttachmentsController extends AppController 
{
    public function __construct(Slim\Container $ci)
    {
		parent::__construct($ci);
		$this->table = 'email_attachments';
    }
	
	/**
	 *  getByEmail method
	 *  check attachment email needs to be sent
	 */
	public function getByEmail($request, $response, $args)
	{
		$email_id = $args['email_id'];		
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
		
		$result = $this->parentGetAll($this->table, $clause, ['email_id ='.$email_id]);
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
	/**
	 *  create method
	 *  create new email_attachments data
	 */
	public function create($request, $response)
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
	
}
