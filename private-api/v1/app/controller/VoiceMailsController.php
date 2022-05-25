<?php

class VoiceMailsController extends AppController 
{
    public function __construct(Slim\Container $ci)
    {
		parent::__construct($ci);
		$this->table = 'calls';
    }
	
	/**
	 *  updateBooking method
	 *  update voice mail for booking by user id
	 */
	public function updateBooking($request, $response)
	{
		$data_temp = $request->getParsedBody();
		
		if (empty($data_temp)) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}
		
		if (!array_key_exists('user_id', $data_temp)) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}
		
		$query = $this->con->prepare("UPDATE ".$this->table." SET user_id = ".$data_temp['user_id']." WHERE call_state_id = 4 AND call_status_id = 13 AND call_status_detail_id = 29 AND user_id IS NULL ORDER BY call_date ASC LIMIT 1");
		$updated = $query->execute();
		
		if ($updated) {
			$result = [];
			$result['request_time'] = $this->request_time;
			$result['execution_time'] = executionTime($this->request_time);
			$result['response_code'] = 200;
			$result['status'] = 'success';
			$result['data'] = ['user_id' => $data_temp['user_id']];
			
			return $response->withJson($result)
					->withHeader('Content-Type', 'application/json')
					->withStatus(200);
		} else {
			$handler = $this->ci->get('errorHandler');
			return $handler($request, $response);
		}
	}
	
	/**
	 *  getBooking method
	 *  get voice mail by user id
	 */
	public function getBooking($request, $response, $args)
	{
		$user_id = $args['user_id'];

		$clause = [];
		$clause['order'] = 'id';
		$clause['sort'] = 'ASC';
		$clause['limit'] = 0;
		
		$table_condition = [
			'call_state_id = 4',
			'call_status_id = 13',
			'call_status_detail_id = 29',
			'user_id = '.$user_id,
		];		
					
		$result = $this->parentGetAll($this->table, $clause, $table_condition);
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
}
