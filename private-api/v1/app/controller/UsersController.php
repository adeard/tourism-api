<?php

class UsersController extends AppController
{
	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->table = 'users';
		$this->table_view = 'view_user_all';
		$this->table_view_monitoring_user_count = 'view_monitoring_user_count';
	}
	
	/**
	 *  getMonitoringUserCount method
	 *  get total monitoring user count data
	 */
	public function getMonitoringUserCount($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->table_view_monitoring_user_count);
		$column = array_diff($column, ['password']);

		$sort = ['ASC', 'DESC'];
		
		$clause = [];
		$clause['order'] = 'ttl_login';
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

		$column_like = [];

		$column_date = [];
		
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
		
		$result = $this->parentGetAll($this->table_view_monitoring_user_count, $clause, $table_condition, $column);
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
	/**
	 *  getAll method
	 *  get all user
	 */
	public function getAll($request, $response, $args)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->table_view);
		$sort = ['ASC', 'DESC'];
		
		$clause = [];
		$clause['order'] = 'id';
		$clause['sort'] = 'ASC';
		$clause['limit'] = 0;
		$clause['page'] = 1;
		
		foreach ($column as $key => $value) {
			$clause[$value] = '';
		}
		
		foreach ($params as $key => $value) {
			if (!empty($value)) {
				$clause[$key] = $value;
			}
		}
		
		unset($clause['id']);
		
		if (!in_array($clause['order'], $column) || !is_numeric($clause['limit']) || !is_numeric($clause['page']) || !in_array(strtoupper($clause['sort']), $sort)) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}
		
		$table_condition = [];

		$column_like = [
			'fullname',
			'firstname',
			'middlename',
			'lastname',
			'nickname',
			'salutation',
			'mobile',
			'phone',
			'address'
		];

		$column_date = [
			'expiry_date',
			'birth_date',
			'join_date',
			'last_activity_time'
		];

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
		
		$result = $this->parentGetAll($this->table_view, $clause, $table_condition);
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
	/**
	 *  getDetail method
	 *  get user detail by given id
	 */
	public function getDetail($request, $response, $args)
	{
		$id = $args['id'];

		$user = $this->con->prepare("SELECT * FROM ".$this->table." WHERE id = ? LIMIT 1");
		$user->execute([$id]);
		$count = $user->rowCount();
		
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
		$result['data'] = $user->fetch(PDO::FETCH_ASSOC);
		
		unset($result['data']['password']);
					
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
	/**
	 *  getByUserActivity method
	 *  get user by given user_activity_id
	 */
	public function getByUserActivity($request, $response, $args)
	{
		$params = $request->getQueryParams();
		$user_activity_id = $args['user_activity_id'];
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
		
		$result = $this->parentGetAll($this->table, $clause, ['user_activity_id ='.$user_activity_id]);
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
	/**
	 *  update method
	 *  update user data by given id
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
					if ($key == 'password') {
						$data[$key] = md5($value);
					} else {
						$data[$key] = $value;
					}
				}
			}
		}
		
		$check = $this->parentCheck($this->table, ['id' => $id]);
		
		if ($check == 0) {
    		$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
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
	 *  updateUnique method
	 *  update user by current_unique_id
	 */
	public function updateUnique($request, $response, $args)
	{
		$current_unique_id = $args['current_unique_id'];
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
		
		$check = $this->parentCheck($this->table, ['current_unique_id' => $current_unique_id]);
		
		if ($check == 0) {
    		$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
    	}
		
		$updated = $this->parentUpdate($this->table, $data_temp, ['current_unique_id' => $current_unique_id]);
		
		if ($updated) {
			$result = [];
			$result['request_time'] = $this->request_time;
			$result['execution_time'] = executionTime($this->request_time);
			$result['response_code'] = 200;
			$result['status'] = 'success';
			$result['data'] = ['current_unique_id' => $current_unique_id];
			
			return $response->withJson($result)
					->withHeader('Content-Type', 'application/json')
					->withStatus(200);
		} else {
			$handler = $this->ci->get('errorHandler');
			return $handler($request, $response);
		}
	}
	
	/**
	 *  updateBookUser method
	 *  book user
	 */
	public function updateBookUser($request, $response, $args)
	{
		$user_activity_id = $args['user_activity_id'];
		$data_temp = $request->getParsedBody();
		
		$data = [];
		$data['current_unique_id'] = null;

		foreach ($data_temp as $key => $value) {
			$data[$key] = $value;
		}
		
		$users = $this->con->prepare("UPDATE ".$this->table." SET current_unique_id = ?, is_booked = 1 WHERE user_activity_id = ? AND is_booked = 0 ORDER BY last_activity_time ASC LIMIT 1");
		$updated = $users->execute([$data['current_unique_id'], $user_activity_id]);

		if ($updated) {
			$result = [];
			$result['request_time'] = $this->request_time;
			$result['execution_time'] = executionTime($this->request_time);
			$result['response_code'] = 200;
			$result['status'] = 'success';
			$result['total_data'] = $users->rowCount();
			$result['data'] = ['current_unique_id' => $data['current_unique_id']];
			
			return $response->withJson($result)
					->withHeader('Content-Type', 'application/json')
					->withStatus(200);
		} else {
			$handler = $this->ci->get('errorHandler');
			return $handler($request, $response);
		}
	}
	
	/**
	 *  getBookUser method
	 *  get booked user
	 */
	public function getBookUser($request, $response, $args)
	{
		$params = $request->getQueryParams();
		$user_activity_id = $args['user_activity_id'];
		$current_unique_id = $args['current_unique_id'];
		
		$param = [];
		$param['order'] = 'id';
		$param['limit'] = 20;
		
		foreach ($params as $key => $value) {
			if (!empty($value)) {
				$param[$key] = $value;
			}
		}
		
		$users = $this->con->prepare("SELECT * FROM ".$this->table." WHERE user_activity_id = ? AND is_booked = 1 AND current_unique_id = ?");
		$users->execute([$user_activity_id, $current_unique_id]);
		
		$result = [];
		$result['request_time'] = $this->request_time;
		$result['execution_time'] = executionTime($this->request_time);
		$result['response_code'] = 200;
		$result['status'] = 'success';
		$result['total_data'] = $users->rowCount();
		$result['data'] = $users->fetch(PDO::FETCH_ASSOC);
					
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
}
