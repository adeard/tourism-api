<?php

use Apfelbox\FileDownload\FileDownload;

class UserAttachmentsController extends AppController
{

	public function __construct(Slim\Container $ci)
	{
		parent::__construct($ci);
		$this->table = 'users';
		$this->attachment = $this->ci->get('globalSettings')['attachment'];
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
		
		if (!isset($data_temp['user_id'])) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}

		if (!isset($data_temp['attachment_category_id'])) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}
		
		if (!is_numeric($data_temp['user_id']) || isset($_FILES['file']) === false) {
			$handler = $this->ci->get('badRequestHandler');
			return $handler($request, $response);
		}
		
		if ($data_temp['attachment_category_id'] == 1) {
			$path = $this->attachment['photo_user'].$data_temp['user_id'];
		} elseif ($data_temp['attachment_category_id'] == 2) {
			$path = $this->attachment['photo_cover_user'].$data_temp['user_id'];
		}

		// create directory if not exist
		if (!is_dir($path)) {
			mkdir($path, 0777);
		}
		
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

			$data_put = [];
			
			if ($data_temp['attachment_category_id'] == 1) {
				$data_put['photo_profile'] = $file_data['name'];
			} elseif ($data_temp['attachment_category_id'] == 2) {
				$data_put['photo_cover'] = $file_data['name'];
			}


			$inserted = $this->parentUpdate($this->table, $data_put, ['id' => $data_temp['user_id']]);

			if ($inserted) {
				$result = [];
				$result['request_time'] = $this->request_time;
				$result['execution_time'] = executionTime($this->request_time);
				$result['response_code'] = 201;
				$result['status'] = 'success';
				$result['data'] = [
					'id' => $data_temp['user_id'],
					'path' => $path
				];
				
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
		
        $file = $ticket_attachment->fetch(PDO::FETCH_ASSOC);
        if ($file['attachment_category_id'] == 1) {
            $path = $this->attachment['photo_user'].$file['user_id'].'/'.$file['filename'];
        }
		
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