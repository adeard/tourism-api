<?php

use Firebase\JWT\JWT as JWT;
use Apfelbox\FileDownload\FileDownload;

class UsersController extends AppController
{
	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->table = 'users';
		$this->view_table_escort = 'view_user_escort';
		$this->view_table = 'view_user_all';
		$this->view_table_monitoring_user_count = 'view_monitoring_user_count';
		$this->photo = $this->ci->get('globalSettings')['attachment'];
		$this->view_report_escort = 'view_report_escort';
		$this->view_technician = 'view_technician_ticket_daily';
	}

	/**
	 *  getMonitoringUserCount method
	 *  get total monitoring user count data
	 */
	public function getReportEscort($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->view_report_escort);

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

		if (is_numeric($clause['start'])) {
			$start = is_numeric($clause['start']) ? date('Y-m-d', $clause['start']) : date('Y-m-d');
			$end = is_numeric($clause['end']) ? date('Y-m-d', $clause['end']) : date('Y-m-d');

			$table_condition = [
				'DATE(activity_date) BETWEEN "'.$start.'" AND "'.$end.'"'
			];
		}

		$column_like = [
			'fullname',
			'user_activity',
			'user_level'
		];

		$column_date = [
			'activity_date',
			'break_time',
			'first_logout',
			'last_logout'
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

		$result = $this->parentGetAll($this->view_report_escort, $clause, $table_condition);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	 *  getMonitoringUserCount method
	 *  get total monitoring user count data
	 */
	public function getMonitoringUserCount($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->view_table_monitoring_user_count);
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

		$result = $this->parentGetAll($this->view_table_monitoring_user_count, $clause, $table_condition, $column);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	 *  getAll method
	 *  get all user data
	 */
	public function getAll($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->view_table);
		$column = array_diff($column, ['password']);

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
			'fullname',
      'firstname',
			'username',
			'email',
			'middlename',
			'firstname',
			'lastname',
			'nickname',
			'salutation',
			'user_level_name',
			'user_activity_name',
			'department_name'
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

		$result = $this->parentGetAll($this->view_table, $clause, $table_condition, $column);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	 *  getTechnician method
	 *  get all user data
	 */
	public function getTechnician($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->view_technician);
		$column = array_diff($column, ['password']);

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
			'fullname',
            'firstname',
			'middlename',
			'firstname',
			'lastname',
			'nickname',
			'salutation',
			'user_level_name',
			'user_activity_name',
			'department_name'
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

		$result = $this->parentGetAll($this->view_technician, $clause, $table_condition, $column);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	 *  getAllEnable method
	 *  get all enable user data
	 */
	public function getAllEnable($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->table);
		$column = array_diff($column, ['password']);

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

		$result = $this->parentGetAll($this->table, $clause, ['is_enable = 1'], $column);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	*	getUserEscort method
	*	get all User Escorts data
	**/
	public function getUserEscort($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->view_table_escort);
		$sort = ['ASC', 'DESC'];

		$clause = [];
		$clause['order'] = 'username';
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
			'fullname',
			'department_name'
		];

		$column_date = [
			'breaktime',
			'first_logout',
			'last_logout'
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

		$result = $this->parentGetAll($this->view_table_escort, $clause, $table_condition);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	*	getViewUsers method
	*	get all Vew User All data
	**/
	public function getViewUsers($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->view_table);
		$column = array_diff($column, ['password']);
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
			'fullname',
			'firstname',
			'middlename',
			'lastname',
			'nickname',
			'address',
			'user_level_name',
			'user_activity_name',
			'department_name'
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

		$result = $this->parentGetAll($this->view_table, $clause, $table_condition, $column);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	 *  login method
	 *  get token from given username & password
	 */
	public function login($request, $response)
	{
		$settings = $this->ci->get('globalSettings');
		$data_temp = $request->getParsedBody();

		$param = [];
		$param['username'] = null;
		$param['password'] = null;

		foreach ($data_temp as $key => $value) {
			$param[$key] = $value;
		}

		if (empty($param['username']) || empty($param['password'])) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}

		$user = $this->con->prepare("SELECT * FROM ".$this->table." WHERE username = ? AND password = ? LIMIT 1");
		$user->execute([$param['username'], md5($param['password'])]);
		$userExists = $user->fetch();

		if ($userExists) {
			$token_id = base64_encode(mcrypt_create_iv(32));
			$issued_at = time();
			$not_before = $issued_at + $settings['jwt']['live'];
			$expire = $not_before + $settings['jwt']['expire'];
			$server_name = $_SERVER['REMOTE_ADDR'];
			$client_ip = getClientIp();
			$user_agent = $_SERVER['HTTP_USER_AGENT'];

			$data = [
				'iat' => $issued_at, // Issued at: time when the token was generated
				'jti' => $token_id, // Json Token Id: an unique identifier for the token
				'iss' => $server_name, // Issuer
				'nbf' => $not_before, // Not before
				'exp' => $expire, // Expire
				'data' => [ // Data related to the signer user
					'username' => $param['username'],
					'password' => sha1(md5($param['password'])),
					'ip' => $client_ip,
					'user_agent' => $user_agent
				]
			];

			$secretKey = base64_decode($settings['jwt']['key']);

			$algorithm = $settings['jwt']['algorithm'];

			$jwt = JWT::encode(
				$data, //Data to be encoded in the JWT
				$secretKey, // The signing key
				$algorithm // Algorithm used to sign the token, see https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40#section-3
			);

			$result = [];
			$result['request_time'] = $this->request_time;
			$result['execution_time'] = executionTime($this->request_time);
			$result['response_code'] = 200;
			$result['status'] = 'success';
			$result['total_data'] = 1;
			$result['data'] = [
				'id' => $userExists['id'],
				'token' => $jwt,
				'expire' => date('Y-m-d H:i:s', $expire)
			];

			return $response->withJson($result)
					->withHeader('Content-Type', 'application/json');
		} else {
			$handler = $this->ci->get('unauthorizedHandler');
			return $handler($request, $response);
		}
	}

	/**
	 *  getDetail method
	 *  get user detail by given id
	 */
	public function getDetail($request, $response, $args)
	{
		$id = $args['id'];

		$user = $this->con->prepare("SELECT * FROM ".$this->view_table." WHERE id = ? LIMIT 1");
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
	 *  getDetailUnique method
	 *  get user detail by given current_unique_id
	 */
	public function getDetailUnique($request, $response, $args)
	{
		$current_unique_id = $args['current_unique_id'];

		$user = $this->con->prepare("SELECT * FROM ".$this->table." WHERE current_unique_id = ? LIMIT 1");
		$user->execute([$current_unique_id]);
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
	 *  updatePassword method
	 *  update user data password by id
	 */
	public function updatePassword($request, $response, $args)
	{
		$id = $args['id'];
		$data_temp = $request->getParsedBody();

		if (!isset($data_temp['old_password']) || !isset($data_temp['new_password'])) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}

		$old_pass = md5($data_temp['old_password']);
		$user = $this->con->prepare("SELECT * FROM ".$this->table." WHERE id = ? AND password = ? LIMIT 1");
		$user->execute([$id, $old_pass]);
		$count = $user->rowCount();

		if ($count == 0) {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}

		$data = [];
		$data['password'] = md5($data_temp['new_password']);

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
	 *  create method
	 *  create new user data
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
					if ($key == 'password') {
						$data[$key] = md5($value);
					} else {
						$data[$key] = $value;
					}
				}
			}
		}

		if (isset($data_temp['username'])) {
			$check = $this->parentCheck($this->table, ['username' => $data_temp['username']]);

			if ($check == 1) {
				$handler = $this->ci->get('badRequestHandler');
				return $handler($request, $response, 'Username already exist');
			}
		}

		if (isset($data_temp['email'])) {
			$check = $this->parentCheck($this->table, ['email' => $data_temp['email']]);

			if ($check == 1) {
				$handler = $this->ci->get('badRequestHandler');
				return $handler($request, $response, 'Email already exist');
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
	 *  upload method
	 *  upload user's photo
	 */
	public function upload($request, $response)
	{
		$data_temp = $request->getParsedBody();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->table);

		if (empty($data_temp)) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}

		if (!isset($data_temp['user_id'])) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}

		if (!is_numeric($data_temp['user_id']) || isset($_FILES['picture']) === false) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}

		$path = $this->photo['user'].$data_temp['user_id'];

		// create directory if not exist
		if (!is_dir($path)) {
			mkdir($path, 0777);
		}

		$storage = new \Upload\Storage\FileSystem($path, true); // overwrite file with the same name and extension

		$file = new \Upload\File('picture', $storage);

		// Validate file upload
		// Allowed mimetype: https://www.sitepoint.com/web-foundations/mime-types-summary-list/
		$allowed_type = [
			'image/bmp',
			'image/gif',
			'image/jpeg',
			'image/png',
			'image/tiff'
		];

		$file->addValidations([
			// Add mimetype validation
			new \Upload\Validation\Mimetype($allowed_type),

			// Ensure file is no larger than 5M (use "B", "K", M", or "G")
			new \Upload\Validation\Size('5M')
		]);

		// Access data about the file that has been uploaded
		$file_data = [
			'name'       => $file->getNameWithExtension(),
			'extension'  => $file->getExtension(),
			'mime'       => $file->getMimetype(),
			'size'       => $file->getSize(),
			'md5'        => $file->getMd5(),
			'dimensions' => $file->getDimensions()
		];

		try {
			$file->upload();

			$user_id = $data_temp['user_id'];
			unset($data_temp['user_id']);
			$data_temp['picture'] = $file_data['name'];

			$inserted = $this->parentUpdate($this->table, $data_temp, ['id' => $user_id]);

			if ($inserted) {
				$result = [];
				$result['request_time'] = $this->request_time;
				$result['execution_time'] = executionTime($this->request_time);
				$result['response_code'] = 201;
				$result['status'] = 'success';
				$result['data'] = ['id' => $user_id];

				return $response->withJson($result)
						->withHeader('Content-Type', 'application/json')
						->withStatus(201);
			} else {
				$handler = $this->ci->get('errorHandler');
				return $handler($request, $response);
			}
		} catch (\Exception $e) {
			$errors = $file->getErrors();
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response, $errors[0]);
		}
	}

	/**
	 *  getPhoto method
	 *  get user's photo
	 */
	public function getPhoto($request, $response, $args)
	{
		$id = $args['id'];

		$email = $this->con->prepare("SELECT * FROM ".$this->table." WHERE id = ? LIMIT 1");
		$email->execute([$id]);
		$count = $email->rowCount();

		if ($count == 0) {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}

		$data = $email->fetch(PDO::FETCH_ASSOC);
		$path = $this->photo['user'].$id;
		$file = $path.'/'.$data['picture'];

		if (file_exists($file)) {
			$size = getimagesize($file);
			$fp = fopen($file, 'rb');

			if ($size and $fp) {
				header('Content-Type: '.$size['mime']);
				header('Content-Length: '.filesize($file));

				fpassthru($fp);
				exit;
			}
		} else {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}
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
