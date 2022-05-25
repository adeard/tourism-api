<?php

use Apfelbox\FileDownload\FileDownload;

class PaymentConfirmationsController extends AppController
{

	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->table = 'payment_confirmations';
		$this->view_table = 'view_payment_confirmations';
		$this->attachment = $this->ci->get('globalSettings')['attachment'];
	}

	/**
	 *  update method
	 *  update ticket statuses data by id
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
		];

		$column_date = [
            'create_date'
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

		$result = $this->parentGetAll($this->view_table, $clause);

		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}

	/**
	 *  create method
	 *  create new ticket attachments data
	 */
	public function create($request, $response)
	{
		$data_temp = $request->getParsedBody();
		$column = $this->checkColumn($this->db['database']['dbname'], $this->table);
		
		if (empty($data_temp)) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}
		
		// if (!isset($data_temp['tourism_id'])) {
		// 	$handler = $this->ci->get('badRequestHandler');
		// 	return $handler($request, $response);
		// }
		
		if (isset($_FILES['file']) === false) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}
		
		$path = $this->attachment['payment_confirmation'];

		// create directory if not exist
		// if (!is_dir($path)) {
		// 	mkdir($path, 0777);
		// }
		
		$storage = new \Upload\Storage\FileSystem($path, true); // overwrite file with the same name and extension
		
		$file = new \Upload\File('file', $storage);

		$new_filename = $file->getName().'-'.date('YmdHis');
		
		if (strlen($file->getName()) > 200) {
			$filename = substr($file->getName(), 0, 200);
			$new_filename = $filename.'-'.date('YmdHis');
		}
		
		$file->setName($new_filename);
		
		// Validate file upload
		// Allowed mimetype: https://www.sitepoint.com/web-foundations/mime-types-summary-list/
		$allowed_type = [
			'audio/basic',
			'video/msvideo',
			'video/avi',
			'video/x-msvideo',
			'video/mpeg',
			'video/3gpp',
			'video/quicktime',
			'video/mp4',
			'image/bmp',
			'application/x-bzip2',
			'text/css',
			'application/xml-dtd',
			'application/msword',
			'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
			'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
			'application/ecmascript',
			'image/gif',
			'application/x-gzip',
			'application/mac-binhex40',
			'text/html',
			'application/java-archive',
			'image/jpeg',
			'application/x-javascript',
			'audio/x-midi',
			'audio/mpeg',
			'audio/vorbis',
			'application/ogg',
			'application/pdf',
			'application/x-perl',
			'image/png',
			'application/vnd.openxmlformats-officedocument.presentationml.template',
			'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
			'application/vnd.ms-powerpointtd>',
			'application/vnd.openxmlformats-officedocument.presentationml.presentation',
			'application/postscript',
			'audio/x-pn-realaudio',
			'audio/vnd.rn-realaudio',
			'audio/x-pn-realaudio',
			'audio/vnd.rn-realaudio',
			'application/rdf',
			'application/rdf+xml',
			'application/rtf',
			'text/sgml',
			'application/x-stuffit',
			'application/vnd.openxmlformats-officedocument.presentationml.slide',
			'image/svg+xml',
			'application/x-shockwave-flash',
			'application/x-tar',
			'image/tiff',
			'text/tab-separated-values',
			'text/plain',
			'audio/wav',
			'audio/x-wav',
			'application/vnd.ms-excel.addin.macroEnabled.12',
			'application/vnd.ms-excel',
			'application/vnd.ms-excel.sheet.binary.macroEnabled.12',
			'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
			'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
			'application/xml',
			'application/zip',
			'application/x-compressed-zip',
			'audio/mp4',
			'application/mp4'
		];
			
		$file->addValidations([
			// Add mimetype validation
			new \Upload\Validation\Mimetype($allowed_type),

			// Ensure file is no larger than 5M (use "B", "K", M", or "G")
			new \Upload\Validation\Size('10M')
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
			
			unset($data_temp['id']);
			$data_temp['filename'] = $file_data['name'];
			$data_temp['path'] = $path;
			// $data_temp['file_size'] = $file_data['size'];
            // $data_temp['mime_type'] = $file_data['mime'];
		
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
		} catch (\Exception $e) {
			$errors = $file->getErrors();
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response, $errors[0]);
		}
	}


	/**
	 *  download method
	 *  download ticket attachment by given id
	 */
	public function download($request, $response, $args)
	{
		$id = $args['id'];
		
		$attachment = $this->con->prepare("SELECT * FROM ".$this->table." WHERE id = ? LIMIT 1");
		$attachment->execute([$id]);
		$count = $attachment->rowCount();
		
		if ($count == 0) {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}
		
		$data = $attachment->fetch(PDO::FETCH_ASSOC);
		
		try {
			$fileDownload = FileDownload::createFromFilePath($data['path'].'/'.$data['filename']);
			$fileDownload->sendDownload($data['filename']);
		} catch (\Exception $e) {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}
	}

	/**
	 *  getDetail method
	 *  get ticket attachment detail by given id
	 */
	public function getDetail($request, $response, $args)
	{
		$id = $args['id'];
		
		$ticket_attachment = $this->con->prepare("SELECT * FROM ".$this->table." WHERE id = ? LIMIT 1");
		$ticket_attachment->execute([$id]);
		$count = $ticket_attachment->rowCount();
		
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
		$result['data'] = $ticket_attachment->fetch(PDO::FETCH_ASSOC);
					
		return $response->withJson($result)
				->withHeader('Content-Type', 'application/json');
	}
	
	/**
	 *  delete method
	 *  delete ticket attachment
	 */
	public function delete($request, $response, $args)
	{
		$id = $args['id'];
		
		$ticket_attachment = $this->con->prepare("SELECT * FROM ".$this->table." WHERE id = ? LIMIT 1");
		$ticket_attachment->execute([$id]);
		$count = $ticket_attachment->rowCount();

		if ($count == 0) {
			$handler = $this->ci->get('notFoundHandler');
			return $handler($request, $response);
		}
		
		$deleted = $this->parentDelete($this->table, ['id' => $id]);
        $path = $this->attachment['payment_confirmation'].'/'.$file['filename'];
		
		$delete_file = unlink($path);
		
		if ($delete_file) {
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