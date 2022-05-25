<?php

class TicketsController extends AppController
{
	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->table = 'tickets';
		$this->view_table = 'view_tickets';
		$this->view_report = 'view_ticket_report';
	}
	
	/**
	 *  getAll method
	 *  get all tickets data
	 */
	public function getAll($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->view_table);

		$sort = ['ASC', 'DESC'];
		
		$clause = [];
		$clause['order'] = 'id';
		$clause['sort'] = 'ASC';
		$clause['limit'] = 20;
		$clause['page'] = 1;
		$clause['lt'] = '';
		$clause['gt'] = '';
		$clause['start'] = '';
		$clause['end'] = '';
		
		foreach ($params as $key => $value) {
			if (!empty($value)) {
				$clause[$key] = $value;
			}
		}
		
		if (!in_array($clause['order'], $column) || !is_numeric($clause['limit']) || !is_numeric($clause['page']) || !in_array(strtoupper($clause['sort']), $sort)) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}
		
		$table_condition = [];

		$column_like = [
			'create_by',
			'open_by',
			'process_by',
			'done_by',
			'close_by',
			'cancel_by',
			'tiket_details',
			'ticket_solutions',
			'technician',
			'customer_fullname',
			'customer_handphone'
		];

		$column_date = [
			'open_date',
			'process_date',
			'done_date',
			'close_date',
			'cancel_date',
			'install_date',
			'create_date'
		];
		
		if (is_numeric($clause['start'])) {
			$start = is_numeric($clause['start']) ? date('Y-m-d', $clause['start']) : date('Y-m-d');
			$end = is_numeric($clause['end']) ? date('Y-m-d', $clause['end']) : date('Y-m-d');
			
			$table_condition = [
				'DATE(create_date) BETWEEN "'.$start.'" AND "'.$end.'"'
			];
		}
		
		if (is_numeric($clause['lt'])) {
			$table_condition[] = 'id < '.$clause['lt'];
		}
		
		if (is_numeric($clause['gt'])) {
			$table_condition[] = 'id > '.$clause['gt'];
		}
		
		foreach ($clause as $key => $value) {
			if (in_array($key, $column)) {
				if (!empty($value)) {
					if (in_array($key, $column_like)) {
						$table_condition[] = $key.' LIKE "%'.$value.'%"';
					} elseif (in_array($key, $column_date)) {
						$date = is_numeric($value) ? date('Y-m-d', $value) : '';
						
						if (!empty($date)) {
							$table_condition[] = 'DATE('.$key.') = "'.$date.'"';
						}
					} else {
						$table_condition[] = $key.' = "'.$value.'"';
					}
				}
			}
		}
		
		$result = $this->parentGetAll($this->view_table, $clause, $table_condition, $column);
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
	/**
	 *  getReport method
	 *  get report ticket
	 */
	public function getReport($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->view_report);

		$sort = ['ASC', 'DESC'];
		
		$clause = [];
		$clause['order'] = 'id';
		$clause['sort'] = 'ASC';
		$clause['limit'] = 20;
		$clause['page'] = 1;
		$clause['start'] = '';
		$clause['end'] = '';
		
		foreach ($params as $key => $value) {
			if (!empty($value)) {
				$clause[$key] = $value;
			}
		}
		
		if (!in_array($clause['order'], $column) || !is_numeric($clause['limit']) || !is_numeric($clause['page']) || !in_array(strtoupper($clause['sort']), $sort)) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}
		
		$table_condition = [];

		$column_like = [
			'create_by',
			'open_by',
			'process_by',
			'done_by',
			'close_by',
			'cancel_by',
			'tiket_details',
			'ticket_solutions',
			'technician'
		];

		$column_date = [
			'open_date',
			'process_date',
			'done_date',
			'close_date',
			'cancel_date',
			'install_date',
			'create_date'
		];
		
		if (is_numeric($clause['start'])) {
			$start = is_numeric($clause['start']) ? date('Y-m-d', $clause['start']) : date('Y-m-d');
			$end = is_numeric($clause['end']) ? date('Y-m-d', $clause['end']) : date('Y-m-d');
			
			$table_condition = [
				'DATE(create_date) BETWEEN "'.$start.'" AND "'.$end.'"'
			];
		}
		
		foreach ($clause as $key => $value) {
			if (in_array($key, $column)) {
				if (!empty($value)) {
					if (in_array($key, $column_like)) {
						$table_condition[] = $key.' LIKE "%'.$value.'%"';
					} elseif (in_array($key, $column_date)) {
						$date = is_numeric($value) ? date('Y-m-d', $value) : '';
						
						if (!empty($date)) {
							$table_condition[] = 'DATE('.$key.') = "'.$date.'"';
						}
					} else {
						$table_condition[] = $key.' = "'.$value.'"';
					}
				}
			}
			
			if ($key == 'lt') {
				if (is_numeric($value)) {
					$table_condition[] = 'id < '.$value;
				}
			}
			
			if ($key == 'gt') {
				if (is_numeric($value)) {
					$table_condition[] = 'id > '.$value;
				}
			}
		}
		
		$result = $this->parentGetAll($this->view_report, $clause, $table_condition, $column);
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
	/**
	 *  getDetail method
	 *  get detail ticket by given id
	 */
	public function getDetail($request, $response, $args)
	{
		$id = $args['id'];
		
		$ticket = $this->con->prepare("SELECT * FROM ".$this->view_table." WHERE id = ? LIMIT 1");
		$ticket->execute([$id]);
		$count = $ticket->rowCount();
		
		if ($count == 0) {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}
		
		$result = [];
		$result['request_time'] = $this->request_time;
		$result['execution_time'] = executionTime($this->request_time);
		$result['response_code'] = 200;
		$result['status'] = 'success';
		$result['total_data'] = $count;
		$result['data'] = $ticket->fetch(PDO::FETCH_ASSOC);
					
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
	/**
	 *  create method
	 *  create new ticket data
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
		
		$data = [];
		
		foreach ($data_temp as $key => $value) {
			if (!in_array($key, $column) || in_array($key, $protected_columns)) {
				$handler = $this->ci->get('badRequestHandler');
				return $handler($request, $response);
			} else {
				if (!empty($value)) {
					$data[$key] = $value;
				}
			}
		}
		
		$inserted = $this->parentInsert($this->table, $data);
		
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
	 *  update method
	 *  update ticket data by given id
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
		
		$data = [];
		
		foreach ($data_temp as $key => $value) {
			if (!in_array($key, $column) || in_array($key, $protected_columns)) {
				$handler = $this->ci->get('badRequestHandler');
				return $handler($request, $response);
			} else {
				if ($value != '') {
					$data[$key] = $value;
				}
			}
		}

		$check = $this->parentCheck($this->table, ['id' => $id]);
		
    	if ($check == 0) {
    		$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
    	}
		
		if (isset($data_temp['ticket_no'])) {
			$check = $this->parentCheck($this->table, ['ticket_no' => $data_temp['ticket_no']]);
			
			if ($check == 1) {
				$handler = $this->ci->get('badRequestHandler');
				return $handler($request, $response, 'Ticket Number already exist');
			}
		}
		
		
		$updated = $this->parentUpdate($this->table, $data, ['id' => $id]);
		
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
	
	/**
	 *  getProcess method
	 *  get all ticket that still on process (open, process, in progress, assign) status
	 */
	public function getProcess($request, $response)
	{	
		$ticket = $this->con->prepare("SELECT * FROM ".$this->view_table." WHERE ticket_status_id NOT IN (1, 2, 5, 6, 7)");
		$ticket->execute();
		$count = $ticket->rowCount();
		
		$data_temp = [];
		
		while ($row = $ticket->fetch(PDO::FETCH_ASSOC)) {
			$data_temp[] = $row;
		}
		
		$result = [];
		$result['request_time'] = $this->request_time;
		$result['execution_time'] = executionTime($this->request_time);
		$result['response_code'] = 200;
		$result['status'] = 'success';
		$result['total_data'] = $count;
		$result['data'] = $data_temp;
					
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
}
