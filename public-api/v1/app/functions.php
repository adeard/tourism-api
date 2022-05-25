<?php 
// Functions

/**
 *  createLog method
 *  create log for every request (input request info to .log file)
 *  @param string $targetFile
 */
function createLog($targetFile) 
{
	$headers = '';

	foreach (getallheaders() as $name => $value) {
		$headers .= "$name: $value\n";
	}

	$data = sprintf(
		"%s \n%s %s %s %s\nHTTP headers:\n%s",
		date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']),
		getClientIp(),
		$_SERVER['REQUEST_METHOD'],
		$_SERVER['REQUEST_URI'],
		$_SERVER['SERVER_PROTOCOL'],
		$headers
	);

	$data .= "Request body:\n";
	
	file_put_contents(
		$targetFile,
		$data . file_get_contents('php://input') . "\n========================================\n",
		FILE_APPEND // always update (not replace)
	);
}

/**
 *  getClientIp method
 *  get client's IP Address from request
 *  @return string $ipaddress
 */
function getClientIp() 
{
	$ipaddress = '';
	if (getenv('HTTP_CLIENT_IP'))
		$ipaddress = getenv('HTTP_CLIENT_IP');
	else if(getenv('HTTP_X_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	else if(getenv('HTTP_X_FORWARDED'))
		$ipaddress = getenv('HTTP_X_FORWARDED');
	else if(getenv('HTTP_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_FORWARDED_FOR');
	else if(getenv('HTTP_FORWARDED'))
	   $ipaddress = getenv('HTTP_FORWARDED');
	else if(getenv('REMOTE_ADDR'))
		$ipaddress = getenv('REMOTE_ADDR');
	else
		$ipaddress = 'UNKNOWN';
	return $ipaddress;
}

/**
 *  filterParamString method
 *  filter get parameter value for safe sql query
 *  @param string $value
 *  @return string $result
 */
function filterParamString($value) 
{
	$result = preg_replace("/[^a-zA-Z0-9 +]+/", "", $value);
	
	return $result;
}

/**
 *  filterParamNumber method
 *  filter get parameter value for safe sql query
 *  @param string $value
 *  @return string $result
 */
function filterParamNumber($value) 
{
	$result = preg_replace("/[^0-9]+/", "", $value);
	
	return $result;
}

/**
 *  executionTime method
 *  count request execution time (in seconds)
 *  @param int $request_time
 *  @return int $time
 */
function executionTime($request_time) 
{
	$time = ((time() - $request_time) % 86400) % 60;
	
	return $time;
}