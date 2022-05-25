<?php

class InboundTypesController extends AppController
{
	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->table = 'inbound_types';
	}

	/**
	 *	getAll method
	 *	get all inbound type
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

		$result = $this->parentGetAll($this->table, $clause, ['is_active = 1']);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
}
