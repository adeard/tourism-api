<?php

class GendersController extends AppController {

	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->table = 'genders';
	}

	/**
	 *  getAll method
	 *  get all holiday data
	 */
   public function getAll($request, $response)
 	{
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

    $column = array_diff($column, ['sort']);

 		unset($clause['id']);

    $table_condition = [];

 		$column_like = ['name'];

 		foreach ($clause as $key => $value) {
 			if (in_array($key, $column)) {
 				if (!empty($value)) {
 					if (in_array($key, $column_like)) {
 						$table_condition[] = $key.' LIKE "%'.$value.'%"';
 					} else {
 						$table_condition[] = $key.' = "'.$value.'"';
 					}
 				}
 			}
 		}

 		$result = $this->parentGetAll($this->table, $clause, $table_condition);

 		return $response->withJson($result)
 				->withHeader('Content-Type', 'application/json');
 	}


	/**
	 *  getDetail method
	 *  get detail holiday by given id
	 */
	public function getDetail($request, $response, $args)
	{
		$id = $args['id'];

		$genders = $this->con->prepare("SELECT * FROM ".$this->table." WHERE id = ? ");
		$genders->execute([$id]);
		$count = $genders->rowCount();

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
		$result['data'] = $genders->fetch(PDO::FETCH_ASSOC);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	 *  create method
	 *  create new holiday data
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
		}
	}

	/**
	 *  update method
	 *  update holiday data by given id
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

	/**
	 *  delete method
	 *  delete holiday data by given id
	 */
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
