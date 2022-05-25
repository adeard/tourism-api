<?php

class CallsController extends AppController
{
    public function __construct(Slim\Container $ci)
    {
		parent::__construct($ci);
		$this->table = 'calls';
		$this->view_table_inbound = 'view_report_call_inbound_detail';
		$this->view_table_outbound = 'view_report_call_outbound_detail';
        $this->view_table_monitoring_call_count = 'view_monitoring_call_count';
		$this->view_table_monitoring_call_duration = 'view_monitoring_call_duration';
    }
    
    /**
	 *  getMonitoringCallDuration method
	 *  get total monitoring call duration data
	 */
	public function getMonitoringCallDuration($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->view_table_monitoring_call_duration);
		$sort = ['ASC', 'DESC'];

		$clause = [];
		$clause['order'] = 'ASA';
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
		
		$result = $this->parentGetAll($this->view_table_monitoring_call_duration, $clause, $table_condition);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
	/**
	 *  getMonitoringCallCount method
	 *  get total monitoring call count data
	 */
	public function getMonitoringCallCount($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->view_table_monitoring_call_count);
		$sort = ['ASC', 'DESC'];

		$clause = [];
		$clause['order'] = 'IncomingCall';
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
		
		$result = $this->parentGetAll($this->view_table_monitoring_call_count, $clause, $table_condition);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	 *  getAll method
	 *  get all call data
	 */
	public function getAll($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->table);
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
			'filename',
			'contact_name',
			'note'
		];

		$column_date = [
			'call_date',
			'ivr_date',
			'queue_date',
			'leave_date',
			'transfer_date',
			'hangup_date',
			'pickup_date',
			'dropcall_date',
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
						if ($value == 'null') {
							$table_condition[] = $key.' IS '.$value;
						} else {
							$table_condition[] = $key.' = "'.$value.'"';
						}
					}
				}
			}
		}
		
		$result = $this->parentGetAll($this->table, $clause, $table_condition);
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
	/**
	 *  getMonitoring method
	 *  get call monitoring data
	 */
	public function getMonitoring($request, $response)
	{
		$call = $this->con->prepare("
			SELECT
			(SELECT COUNT(id) FROM calls WHERE DATE(ivr_date) = CURDATE()) AS incoming_call,
			(SELECT IFNULL(TIME_FORMAT(SEC_TO_TIME(AVG(TIME_TO_SEC(talk_time))),'%H:%i:%s'),'00:00:00') FROM calls WHERE call_status_id = 12 AND DATE(ivr_date) = CURDATE()) AS asa,
			(SELECT IFNULL(TIME_FORMAT(SEC_TO_TIME(avg(TIME_TO_SEC(TIMEDIFF(hangup_date, ivr_date)))),'%H:%i:%s'),'00:00:00') FROM calls WHERE call_status_detail_id = 3 AND call_status_id = 13 AND DATE(ivr_date) = CURDATE()) AS aat_ivr,
			(SELECT IFNULL(TIME_FORMAT(SEC_TO_TIME(avg(TIME_TO_SEC(talk_time))),'%H:%i:%s'),'00:00:00') FROM calls WHERE call_status_id = 13 AND DATE(ivr_date) = CURDATE()) AS aat,
			(SELECT IFNULL(TIME_FORMAT(SEC_TO_TIME(AVG(TIME_TO_SEC(talk_time)) + AVG(after_call_work)),'%H:%i:%s'),'00:00:00') FROM calls WHERE call_status_id = 12 AND DATE(ivr_date) = CURDATE()) AS aht,
			(SELECT COUNT(id) FROM calls WHERE call_status_id = 13 AND DATE(ivr_date) = CURDATE()) / (SELECT COUNT(id) FROM calls WHERE DATE(ivr_date) = CURDATE()) * 100 AS abandone_rate,
			(SELECT COUNT(id) FROM calls WHERE call_status_id = 12 AND DATE(ivr_date) = CURDATE()) / (SELECT COUNT(id) FROM calls WHERE DATE(ivr_date) = CURDATE()) * 100 AS answer_rate,
			(SELECT COUNT(id) FROM calls WHERE call_status_id = 12 AND DATE(ivr_date) = CURDATE() AND TIMEDIFF(queue_date, transfer_date) <= '00:00:20') * (SELECT COUNT(id) FROM calls WHERE DATE(ivr_date) = CURDATE()) / 100 AS service_level
		");
		$call->execute();
		$count = $call->rowCount();
		
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
		$result['data'] = $call->fetch(PDO::FETCH_ASSOC);
					
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	 *  create method
	 *  create new call data
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

	/**
	 *  updateUnique method
	 *  update call data by given 'unique_id'
	 */
	public function updateUnique($request, $response, $args)
	{
		$unique_id = $args['unique_id'];
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

		$check = $this->parentCheck($this->table, ['unique_id' => $unique_id]);
		
    	if ($check == 0) {
    		$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
    	}
		
		$updated = $this->parentUpdate($this->table, $data_temp, ['unique_id' => $unique_id]);
		
		if ($updated) {
			$result = [];
			$result['request_time'] = $this->request_time;
			$result['execution_time'] = executionTime($this->request_time);
			$result['response_code'] = 200;
			$result['status'] = 'success';
			$result['data'] = ['unique_id' => $unique_id];
			
			return $response->withJson($result)
					->withHeader('Content-Type', 'application/json')
					->withStatus(200);
		} else {
			$handler = $this->ci->get('errorHandler');
			return $handler($request, $response);
		}
	}
	
	/**
	 *  getDetailUnique method
	 *  get call data by given 'unique_id'
	 */
	public function getDetailUnique($request, $response, $args)
	{
		$unique_id = $args['unique_id'];

		$call = $this->con->prepare("SELECT * FROM ".$this->table." WHERE unique_id = ? LIMIT 1");
		$call->execute([$unique_id]);
		$count = $call->rowCount();
		
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
		$result['data'] = $call->fetch(PDO::FETCH_ASSOC);
					
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	 *  getLongestQueue method
	 *  get longest queue on call
	 */
	public function getLongestQueue($request, $response)
	{
		$call = $this->con->prepare("SELECT * FROM ".$this->table." WHERE call_state_id = 2 AND call_status_id IS NULL ORDER BY queue_date LIMIT 1");
		$call->execute();
		$count = $call->rowCount();
		
		$result = [];
		$result['request_time'] = $this->request_time;
		$result['execution_time'] = executionTime($this->request_time);
		$result['response_code'] = 200;
		$result['status'] = 'success';
		$result['total_data'] = $count;
		$result['data'] = $call->fetch(PDO::FETCH_ASSOC);
					
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
}
