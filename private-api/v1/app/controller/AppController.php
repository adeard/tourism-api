<?php

class AppController
{ 
	protected $ci; //get slim container
	protected $db; //database name
	protected $con; //connection
	protected $table; //table name
	protected $request_time; //request time for response data
	
	/**
	 *  __construct method
	 *  variable initialization
	 *  @param Slim\Container $ci
	 */
	public function __construct($ci)
	{
		$this->ci = $ci;
		$this->db = $this->ci->get('globalSettings');
		$this->con = $this->dbconnect();
		$this->request_time = $_SERVER['REQUEST_TIME'];	
	}
	
	/**
	 *  dbconnect method
	 *  database connection using pdo
	 */
    public function dbconnect()
    {		
		$con = new PDO("mysql:host=".$this->db['database']['host'].";dbname=".$this->db['database']['dbname'].";charset=utf8", $this->db['database']['username'], $this->db['database']['password']);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $con;
    }
	
	/**
	 *  checkColumn method
	 *  check table column
	 *  @param string $db, string $table 
	 *  @return array $column
	 */
	public function checkColumn($db, $table)
	{
		$schema = $this->dbconnect()->prepare("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = ? AND TABLE_NAME = ?");
		$schema->execute([$db, $table]);
		
		$column = [];
		while ($row = $schema->fetch(PDO::FETCH_ASSOC)) {
			$column[] = $row['COLUMN_NAME'];
		}
		
		return $column;	
	}
	
	/**
	 *  parentCheck method
	 *  check data from table
	 *  @param string $table, array $condition
	 *  @return bool $count
	 */
	public function parentCheck($table, $condition = [])
	{	
		$cond = '';
		
		if (!empty($condition)) {
			$i = 1;
			
			foreach ($condition as $key => $value) {
				if ($i == 1) {
					$cond .= $key." = '".addslashes($value)."'"; 
				} else {
					$cond .= " AND ".$key." = '".addslashes($value)."'";
				}
				
				$i++;
			}
		}
		
		$check = $this->con->prepare("SELECT COUNT(*) FROM ".$table." WHERE ".$cond);
		$check->execute();
		$count = $check->fetchColumn();
		
    	return $count;
	}
	
	/**
	 *  parentGetAll method
	 *  get all data from table
	 *  @param string $table, array $clause, array $condition
	 *  @return array $result
	 */
	public function parentGetAll($table, $clause = [], $condition = [])
	{
		$query = "SELECT * FROM ".$table." ORDER BY ".$clause['order']." ".$clause['sort'];		
		$cond = '';
		
		if (!empty($condition)) {
			$i = 1;
			
			foreach ($condition as $c) {
				if ($i == 1) {
					$cond .= $c; 
				} else {
					$cond .= " AND ".$c;
				}
				
				$i++;
			}
			
			$query = "SELECT * FROM ".$table." WHERE ".$cond." ORDER BY ".$clause['order']." ".$clause['sort'];
		}
		
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
		
		$count = "SELECT COUNT(*) FROM ".$table;
		
		if (!empty($condition)) {
			$count = "SELECT COUNT(*) FROM ".$table." WHERE ".$cond;
		}
		
		$total = $this->con->query($count)->fetchColumn();
		
		$data_temp = [];
		
		while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
			//$data_temp[] = array_map('utf8_encode', $row);
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
		
		return $result;
	}
	
	/**
	 *  parentInsert method
	 *  insert data to table
	 *  @param string $table, array $data
	 *  @return bool $inserted
	 */
	public function parentInsert($table, $data = [])
	{
		$time_char = ['\'CURRENT_TIMESTAMP()\'', '\'NOW()\''];
		$null_char = ['\'NULL\''];
		$data_temp = '';
		
		if (!empty($data)) {
			$i = 1;
			
			foreach ($data as $key => $value) {
				if ($i == 1) {
					if ($value == '') {
						$data_temp .= $key." = 'NULL'";
					} else {
						$data_temp .= $key." = '".addslashes($value)."'"; 
					}
				} else {
					if ($value == '') {
						$data_temp .= ", ".$key." = 'NULL'";
					} else {
						$data_temp .= ", ".$key." = '".addslashes($value)."'";
					}
				}
				
				$i++;
			}
		}
		
		$data = str_replace($time_char, 'NOW()', $data_temp);
		$data = str_replace($null_char, 'NULL', $data);

		$query = $this->con->prepare("INSERT INTO ".$table." SET ".$data);
		$query->execute();
		
		$inserted = $query->rowCount();
		
		return $inserted;
	}
	
	/**
	 *  parentUpdate method
	 *  update data to table
	 *  @param string $table, array $data, array $condition
	 *  @return bool $updated
	 */
	public function parentUpdate($table, $data = [], $condition = [])
	{
		$time_char = ['\'CURRENT_TIMESTAMP()\'', '\'NOW()\''];
		$null_char = ['\'NULL\''];
		$data_temp = '';
		$cond = '';
		
		if (!empty($data)) {
			$i = 1;
			
			foreach ($data as $key => $value) {
				if ($i == 1) {
					if ($value == '') {
						$data_temp .= $key." = 'NULL'";
					} else {
						$data_temp .= $key." = '".addslashes($value)."'"; 
					}
				} else {
					if ($value == '') {
						$data_temp .= ", ".$key." = 'NULL'";
					} else {
						$data_temp .= ", ".$key." = '".addslashes($value)."'";
					}
				}
				
				$i++;
			}
		}
		
		if (!empty($condition)) {
			$i = 1;
			
			foreach ($condition as $key => $value) {
				if ($i == 1) {
					$cond .= $key." = '".addslashes($value)."'"; 
				} else {
					$cond .= " AND ".$key." = '".addslashes($value)."'";
				}
				
				$i++;
			}
		}
		
		$data = str_replace($time_char, 'NOW()', $data_temp);
		$data = str_replace($null_char, 'NULL', $data);

		$query = $this->con->prepare("UPDATE ".$table." SET ".$data." WHERE ".$cond);
		$updated = $query->execute();

		return $updated;
	}
	
	/**
	 *  function parentDelete
	 *  delete data from table
	 *  @param string $table, array $condition
	 *  @return bool $deleted
	 */
	public function parentDelete($table, $condition = [])
	{
		$cond = '';
		
		if (!empty($condition)) {
			$i = 1;
			
			foreach ($condition as $key => $value) {
				if ($i == 1) {
					$cond .= $key." = '".addslashes($value)."'"; 
				} else {
					$cond .= " AND ".$key." = '".addslashes($value)."'";
				}
				
				$i++;
			}
		}

		$query = $this->con->prepare("DELETE FROM ".$table." WHERE ".$cond);
		$query->execute();
		
		$deleted = $query->rowCount();

		return $deleted;
	}
	
}
