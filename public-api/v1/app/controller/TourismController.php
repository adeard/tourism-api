<?php

class TourismController extends AppController
{
	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->table = 'tourism';
		$this->view_table = 'view_tourism';
	}

	/**
	*	getAll method
	*	get all provinces data
	**/
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
            'name',
            'address',
		];

		$column_date = [
            'create_date',
            'update_date',
            'approve_date'
        ];

		$column_in_set = [];

		foreach ($clause as $key => $value) {
			if (in_array($key, $column)) {
				if (!empty($value)) {
					if (in_array($key, $column_like)) {
						$table_condition[] = $key.' LIKE "%'.$value.'%"';
					} elseif (in_array($key, $column_in_set)) {
						$table_condition[] = 'FIND_IN_SET('.$value.','.$key.')';
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

		$result = $this->parentGetAll($this->view_table, $clause, $table_condition);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	*	create method
	*	create new provinces data
	**/
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
		}
	}

	/**
	*	update method
	*	update provinces data by give id
	**/
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

	/**
	*	delete method
	*	delete provinces data by give id
	**/
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
}
