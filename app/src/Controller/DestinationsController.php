<?php
namespace App\Controller;

use App\Controller\SecurityController;
use App\Controller\AppController;
use App\View\Helper\PagingInfoHelper;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Network\Http\Client;
use Cake\Network\Http\FormData;
use Cake\View\Helper\UrlHelper;

class DestinationsController extends AppController
{

  public function beforeFilter(\Cake\Event\Event $event)
	{
		date_default_timezone_set('Asia/Jakarta');

		$allowed_method = [
			'index',
			'getCountries',
			'getProvinces',
			'getCities',
			'getContinents',
			'detail',
			'calculatingTicket'
		];

		$this->Auth->allow($allowed_method);
	}

	/**
	 * isAuthorized method
	 * filter the actions that are always allowed when user login
	 * @param array $user
	 * @return bool
	 */
	public function isAuthorized($user)
	{
		$action = $this->request->params['action'];
		$allowed_method = [
			'add',
			'saveDestination',
			'saveTicket',
			'checkInTicket',
			'uploadAttachments',
			'deleteAttachments',
			'updateTourism'
		];

		if (in_array($action, $allowed_method)) {
			return true;
		}

		$this->Flash->error('You\'re not worthy.');
	}

	/**
	 *  index method
	 *  dashboard page
	 */
	public function index()
	{

		$PagingInfo = new PagingInfoHelper(new \Cake\View\View());
		$Url = new UrlHelper(new \Cake\View\View());
		$session = $this->request->session();
		$limit = 10;

		$sort = $this->request->query('sort');
		$page = $this->request->query('page');
		$continent_id = $this->request->query('continent');
		$country_id = $this->request->query('country');
		$province_id = $this->request->query('province');
		$city_id = $this->request->query('cities');
		$name = $this->request->query('tourism_name');

		$param_columns = compact(
			'continent_id',
			'country_id',
			'province_id',
			'city_id',
			'name'
		);

		$query_params = ['limit='.$limit];
		$query_params[] = 'sort=desc';
		$query_params[] = 'tourism_approval_status=2';

		foreach ($param_columns as $key=>$value) {
			if (!empty($value)) {
				$query_params[] = $key.'='.$value;
			}
		}	

		if (is_numeric($page)) {
			$query_params[] = 'page='.$page;
		}

		$parameter = implode('&', $query_params);

		$response = $this->req('GET', '/tourism?'.$parameter)->json;

		$tickets = [];
		$paging = [];
		$paginate = '';

		if ($response['response_code'] == 200) {
			$Destination = $response['data'];
			$paging = $PagingInfo->data($response['total_data'], $limit, $response['paging']['current']);
			$paginate = $PagingInfo->paginate($limit, $response['paging']['current'], $response['total_data'], $response['paging']['last'], $Url->build([
				'controller' => 'Destinations', 'action' => 'index','?' => [
					'sort' => $sort,
					'continent' => $continent_id,
					'country' => $country_id,
					'province' => $province_id,
					'cities' => $city_id,
					'tourism_name' => $name
				]
			]));
		}
		
		$this->set(compact('Destination', 'paging', 'paginate'));
	}

	public function detail($id)
	{
		$Tourism = $this->req('GET', '/tourism/'.$id)->json['data'];
		$Attachment = $this->req('GET', '/tourism/'.$id.'/tourism_attachments')->json['data'];

		$this->set(compact('Tourism', 'Attachment'));
	}

	public function getCountries()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$total_data = $this->req('GET', '/countries/'.$data['id'].'/continent?limit=1')->json['total_data'];
		$postDestinationAccount = $this->req('GET', '/countries/'.$data['id'].'/continent?limit='.$total_data)->json;

		echo json_encode($postDestinationAccount);
		exit();
	}

	public function getContinents()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$getContinents = $this->req('GET', '/continents')->json;

		echo json_encode($getContinents);
		exit();
	}

	public function getProvinces()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$total_data = $this->req('GET', '/provinces/'.$data['id'].'/countries?limit=1')->json['total_data'];
		$postDestinationAccount = $this->req('GET', '/provinces/'.$data['id'].'/countries?limit='.$total_data)->json;

		echo json_encode($postDestinationAccount);
		exit();
	}

	public function getCities()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$total_data = $this->req('GET', '/province/'.$data['id'].'/cities?limit=1')->json['total_data'];
		$getCities = $this->req('GET', '/province/'.$data['id'].'/cities?limit='.$total_data)->json;

		echo json_encode($getCities);
		exit();
	}

	public function add()
	{

	}

	public function saveDestination()
	{
		$this->autoRender = false;
		$data = $this->request->data();
		$access_token = $this->request->session()->read('Auth.User.token');
		
		$base_uri = Configure::read('base_uri_data');
		$http = new Client();
		$form_data = new FormData();
		
		$data_post = [
			'name' => $data['name'],
			'tourism_description' => $data['description'],
			'continent_id' => $data['continent'],
			'country_id' => $data['country'],
			'province_id' => $data['province'],
			// 'city_id' => $data['city'],
			'address' => $data['address'],
			'tourism_approval_status' => 1,
			'create_by' => $this->request->session()->read('Auth.User.id'),
			'create_date' => date('Y-m-d H:i:s')
		];

		$postTourism = $this->req('POST', '/tourism', $data_post)->json;
		if ($postTourism['response_code'] == 201) {

			if (!empty($data['photo'])) {
				$file = $form_data->addFile('file', fopen($data['photo']['tmp_name'], 'r'));
				$file->type($data['photo']['type']);
				$file->filename($data['photo']['name']);
	
				$form_data->add($file);
				$form_data->add('tourism_id', $postTourism['data']['id']);
				$form_data->add('create_date', date('Y-m-d H:i:s'));
				$form_data->add('is_photo', 1);

				$response = $http->post(
					$base_uri.'/tourism_attachments/photo',
					(string)$form_data,
					['headers' => ['Content-Type' => $form_data->contentType(), 'Authorization' => 'Bearer '.$access_token]]
				);

				$result_photo = $response->json;
				if ($result_photo['response_code'] != 201) {
					$deleteTourism = $this->req('DELETE', '/tourism/'.$postTourism['data']['id']);

					echo json_encode('error photo attachment');
				} else {
					$data_put = [
						'tourism_attachment_photos' => serialize($result_photo['data']['id']),
						'tourism_attachment_id' => $result_photo['data']['id'] 
					];
					
					$putTourism = $this->req('PUT', '/tourism/'.$postTourism['data']['id'], $data_put)->json;
					if($putTourism['response_code'] == 200) {
						echo json_encode('success');
					}
				}
			}

		} else {
			echo json_encode('error');
		}

	}

	public function calculatingTicket()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$total_price = ($data['adult_ticket']*$data['price_ticket'])+($data['kids_ticket']*$data['price_ticket']);
	
		$result = [
			'total_price_1' => $total_price,
			'total_price_2' => number_format($total_price, 0, ",", ".")
		];

		echo json_encode($result);
	}

	public function saveTicket()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$data_post = [
			'tourism_id' => $data['tourism_id'],
			'user_id' => $this->request->session()->read('Auth.User.id'),
			'total_price' => $data['total_price'],
			'total_ticket' => $data['adult_ticket']+$data['kids_ticket'],
			'ticket_status_id' => 2,
			'create_date' => date('Y-m-d H:i:s')
		];

		$Tickets = $this->req('POST', '/tickets', $data_post)->json;
		if ($Tickets['response_code'] == 201) {
			$this->Flash->success('Tiket berhasil dimasukkan ke dalam keranjang.');
		} else {
			$this->Flash->error('Tiket gagal ditambahkan');
		}

		return $this->redirect($this->referer());
	}

	public function checkInTicket()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$user_id = $this->request->session()->read('Auth.User.id');
		$Tickets = $this->req('GET', '/tickets/'.$data['ticket_no'].'/ticket_no')->json['data'][0];

		$checkUserAdmin = explode(",", $Tickets['user_admin_id']);

		if (in_array($user_id,$checkUserAdmin) && $Tickets['ticket_status_id'] == 5) {
			$data_put = [
				'is_approved' => 1,
				'approve_by' => $user_id,
				'ticket_status_id' => 7,
				'success_date' => date('Y-m-d H:i:s')
			];
			$result = $this->req('PUT', '/tickets/'.$Tickets['id'], $data_put)->json;

			echo json_encode($result);
		} else {
			echo json_encode('');
		}
	
		exit;
	}

	public function uploadAttachments()
	{
		$this->autoRender = false;
		$data = $this->request->data();
		$access_token = $this->request->session()->read('Auth.User.token');
		
		$base_uri = Configure::read('base_uri_data');
		$http = new Client();
		$form_data = new FormData();

		$file = $form_data->addFile('file', fopen($data['upload_file']['tmp_name'], 'r'));
		$file->type($data['upload_file']['type']);
		$file->filename(str_replace(" ","-",$data['upload_file']['name']));

		$form_data->add($file);
		$form_data->add('tourism_id', $data['tourism_id']);
		$form_data->add('create_date', date('Y-m-d H:i:s'));
		$form_data->add('is_photo', 1);

		$response = $http->post(
			$base_uri.'/tourism_attachments/photo',
			(string)$form_data,
			['headers' => ['Content-Type' => $form_data->contentType(), 'Authorization' => 'Bearer '.$access_token]]
		);
		
		$result_photo = $response->json;
		if ($result_photo['response_code'] == 201) {
			echo json_encode("success");
		} else {
			echo json_encode("failed");
		}
	}

	public function deleteAttachments()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$TourismAttachments = $this->req('DELETE', '/tourism_attachments/'.$data['id'])->json;

		echo json_encode($TourismAttachments);
	}

	public function updateTourism()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$data_put = [];

		if (!empty($data['description'])) {
			$data_put['tourism_description'] = $data['description'];
		}

		if (!empty($data['name'])) {
			$data_put['name'] = $data['name'];
		}

		if (!empty($data['address'])) {
			$data_put['address'] = $data['address'];
		}

		if (!empty($data['price'])) {
			$data_put['price'] = $data['price'];
		}

		$result = $this->req('PUT', '/tourism/'.$data['tourism_id'], $data_put)->json;

		echo json_encode($result);
	}
}
