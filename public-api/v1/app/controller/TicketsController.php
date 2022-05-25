<?php

class TicketsController extends AppController
{
	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->table = 'tickets';
		$this->view_table = 'view_tickets';
		$this->view_report = 'view_ticket_report';
		$this->view_ticket_surveys = 'view_ticket_surveys';
		$this->view_ticket_user = 'view_tickets_by_user';
		$this->view_ticket_user_admin = 'view_tickets_by_user_admin';
		$this->view_ticket_checkout_user = 'view_tickets_checkout_by_user';
		$this->view_ticket_invoice_user = 'view_tickets_invoice_by_user';
		$this->view_ticket_by_ticket_no = 'view_tickets_by_ticket_no';
		$this->view_ticket_by_id = 'view_tickets_by_id';
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
		$clause['department_ticket'] = '';
		$clause['create_user_id'] = '';
		
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

		$column_like = [];

		$column_date = [
			'create_date',
			'success_date'
		];

		$column_in_set = [
			'user_admin_id'
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
		
		if (is_numeric($clause['department_ticket'])) {
				$table_condition[] = '(department_id = '.$clause['department_ticket'].' OR FIND_IN_SET('.$clause['department_ticket'].', cc_department_id) OR create_department_id = '.$clause['department_ticket'].')';			
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

	public function getDetailByTicketNo($request, $response, $args)
	{
		$id = $args['ticket_no'];

		$ticket_id = $this->con->prepare("SET @ticket_no = ".$id);
		$ticket_id->execute();
		
		$ticket = $this->con->prepare("SELECT * FROM ".$this->view_ticket_by_ticket_no);
		$ticket->execute([$id]);
		$count = $ticket->rowCount();
		
		if ($count == 0) {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}

		$data_temp = [];

		while ($row = $ticket->fetch(PDO::FETCH_ASSOC)) {
			$data_temp[] = array_map('utf8_encode', $row);
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

	public function getTicketsByUser($request, $response, $args)
	{
		$id = $args['user_id'];

		$ticket_id = $this->con->prepare("SET @user_id = ".$id);
		$ticket_id->execute();
		
		$ticket = $this->con->prepare("SELECT * FROM ".$this->view_ticket_user);
		$ticket->execute([$id]);
		$count = $ticket->rowCount();
		
		if ($count == 0) {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}

		$data_temp = [];

		while ($row = $ticket->fetch(PDO::FETCH_ASSOC)) {
			$data_temp[] = array_map('utf8_encode', $row);
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

	public function getTicketsByUserAdmin($request, $response, $args)
	{
		$id = $args['user_id'];

		$ticket_id = $this->con->prepare("SET @user_id = ".$id);
		$ticket_id->execute();
		
		$ticket = $this->con->prepare("SELECT * FROM ".$this->view_ticket_user_admin);
		$ticket->execute([$id]);
		$count = $ticket->rowCount();
		
		if ($count == 0) {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}

		$data_temp = [];

		while ($row = $ticket->fetch(PDO::FETCH_ASSOC)) {
			$data_temp[] = array_map('utf8_encode', $row);
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

	public function getTicketsCheckoutByUser($request, $response, $args)
	{
		$id = $args['user_id'];

		$ticket_id = $this->con->prepare("SET @user_id = ".$id);
		$ticket_id->execute();
		
		$ticket = $this->con->prepare("SELECT * FROM ".$this->view_ticket_checkout_user);
		$ticket->execute([$id]);
		$count = $ticket->rowCount();
		
		if ($count == 0) {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}

		$data_temp = [];

		while ($row = $ticket->fetch(PDO::FETCH_ASSOC)) {
			$data_temp[] = array_map('utf8_encode', $row);
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

	public function getTicketsInvoiceByUser($request, $response, $args)
	{
		$id = $args['user_id'];

		$ticket_id = $this->con->prepare("SET @user_id = ".$id);
		$ticket_id->execute();
		
		$ticket = $this->con->prepare("SELECT * FROM ".$this->view_ticket_invoice_user);
		$ticket->execute([$id]);
		$count = $ticket->rowCount();
		
		if ($count == 0) {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}

		$data_temp = [];

		while ($row = $ticket->fetch(PDO::FETCH_ASSOC)) {
			$data_temp[] = array_map('utf8_encode', $row);
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
		$clause['department_ticket'] = '';
		
		foreach ($params as $key => $value) {
			if (!empty($value)) {
				$clause[$key] = $value;
			}
		}
		
		if (!in_array($clause['order'], $column) || !is_numeric($clause['limit']) || !is_numeric($clause['page']) || !in_array(strtoupper($clause['sort']), $sort)) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response, 'Invalid Parameter');
		}
		
		$table_condition = [];

		$column_like = [
			'ticket_no',
			'create_by',
			'open_by',
			'process_by',
			'done_by',
			'close_by',
			'cancel_by',
			'tiket_details',
			'ticket_solutions',
			'fullname',
			'handphone',
			'product'
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
		
		if (is_numeric($clause['department_ticket'])) {
			$table_condition[] = '(department_id = '.$clause['department_ticket'].' OR FIND_IN_SET('.$clause['department_ticket'].', cc_department_id))';
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

		$ticket_id = $this->con->prepare("SET @ticket_id = ".$id);
		$ticket_id->execute();
		
		$ticket = $this->con->prepare("SELECT * FROM ".$this->view_ticket_by_id);
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
			/*** end notification ***/
			
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
	 *  survey method
	 *  get ticket with survey data
	 */
	public function getSurvey($request, $response)
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
		$clause['department_ticket'] = '';
		$clause['create_user_id'] = '';
		
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
			'ticket_no',
			'customer_fullname'
		];

		$column_date = [
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
		
		if (is_numeric($clause['department_ticket'])) {
			if (is_numeric($clause['create_user_id'])) {
				$table_condition[] = '(dispatcher_department_id = '.$clause['department_ticket'].' OR assign_department_id = '.$clause['department_ticket'].' OR FIND_IN_SET('.$clause['department_ticket'].', cc_department_id) OR create_user_id = '.$clause['create_user_id'].')';
				$clause['create_user_id'] = '';
			} else {
				$table_condition[] = '(dispatcher_department_id = '.$clause['department_ticket'].' OR assign_department_id = '.$clause['department_ticket'].' OR FIND_IN_SET('.$clause['department_ticket'].', cc_department_id))';			
			}
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
		
		$table_condition[] = 'is_survey = 1';
		
		$column = ['id', 'ticket_no', 'ticket_category_id', 'ticket_category', 'ticket_status_id', 'ticket_status', 'create_date', 'ticket_survey_date', 'ticket_survey_remark', 'customer_fullname', 'customer_home_phone', 'customer_handphone', 'customer_office_phone', 'department'];
		//$result = $this->parentGetAll($this->view_table, $clause, $table_condition, $column);
		
		$column_query = '';
		$i = 1;
		
		foreach ($column as $value) {
			if ($i == 1) {
				$column_query .= $value;
			} else {
				$column_query .= ', '.$value;
			}
			
			$i++;
		}
		
		$query = "SELECT ".$column_query." FROM ".$this->view_table." ORDER BY ".$clause['order']." ".$clause['sort'];
		
		$condition_query = '';
		$i = 1;
		
		foreach ($table_condition as $c) {
			if ($i == 1) {
				$condition_query .= $c; 
			} else {
				$condition_query .= " AND ".$c;
			}
			
			$i++;
		}
		
		$query = "SELECT ".$column_query." FROM ".$this->view_table." WHERE ".$condition_query." ORDER BY ".$clause['order']." ".$clause['sort'];

		if (!empty($clause['limit'])) {
			$offset = ($clause['limit'] * $clause['page']) - $clause['limit'];
			
			if (is_numeric($offset) && $offset >= 0) {
				$query .= " LIMIT ".$clause['limit']." OFFSET ".$offset;
			} else {
				$query .= " LIMIT ".$clause['limit'];
			}
		}
		
		$data = $this->con->prepare($query);
		$data->execute();		
		
		$count = "SELECT COUNT(*) FROM ".$this->view_table;
		
		if (!empty($table_condition)) {
			$count = "SELECT COUNT(*) FROM ".$this->view_table." WHERE ".$condition_query;
		}
		
		$total = $this->con->query($count)->fetchColumn();
		
		$data_temp = [];
		
		while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
			$sub_query = 'SELECT question_id, question, answer FROM '.$this->view_ticket_surveys.' WHERE ticket_id ='.$row['id'];
			$sub_data = $this->con->prepare($sub_query);
			$sub_data->execute();
			
			while ($sub_row = $sub_data->fetch(PDO::FETCH_ASSOC)) {
				$row['survey'][] = $sub_row;
			}

			$data_temp[] = $row;
		}
				
		if (!empty($clause['limit'])) {
			$page_last = ceil($total/$clause['limit']);
			$page_first = 1;
			$page_current = (int)$clause['page'];
			$page_next = $page_current + 1;
			$page_previous = $page_current - 1;
		}
		
		$result = [];
		$result['request_time'] = $this->request_time;
		$result['execution_time'] = executionTime($this->request_time);
		$result['response_code'] = 200;
		$result['status'] = 'success';
		$result['total_data'] = (int) $total;
		$result['data'] = $data_temp;
		
		if (!empty($clause['limit'])) {
			$result['paging'] = [
				'current' => $page_current,
				'next' => ($page_next <= $page_last) ? $page_next : $page_current,
				'previuos' => ($page_previous > 0) ? $page_previous : 1,
				'first' => $page_first,
				'last' => ($page_last > 0) ? $page_last : 1,
			];
		}
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	public function delete($request, $response, $args)
	{
		$id = $args['id'];

		$check = $this->parentCheck($this->table, ['id' => $id]);

    	if ($check == 0) {
    		$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
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
	
}
