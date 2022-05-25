<?php

class MediasController extends AppController
{
	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->table = 'medias';	
		$this->view_table_unread = 'view_total_unread_media';
	}
	
	/**
	 *  unread method
	 *  get total unread media
	 */
	public function unread($request, $response)
	{
		$params = $request->getQueryParams();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->view_table_unread);
		$sort = ['ASC', 'DESC'];
		
		$clause = [];
		$clause['order'] = 'media_id';
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
		
		unset($clause['media_id']);
		
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
						if ($value == 'null') {
							$table_condition[] = $key.' IS '.$value;
						} else {
							$table_condition[] = $key.' = "'.$value.'"';
						}
					}
				}
			}
		}
		
		$result = $this->parentGetAll($this->view_table_unread, $clause, $table_condition);
		
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');	
	}
	
}
