<?php
namespace App\Controller;

use App\Controller\SecurityController;
use Cake\Event\Event;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class SettingsController extends AppController
{
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
			'index',
			'approveDestinationConfirmations',
			'addDestinationAccounts',
			'addCountries',
			'addProvinces',
			'addCities',
			'getDestinationAccounts',
			'getDestinationConfirmations',
			'getDetailDestinations',
			'getDetailDestinationAccounts',
			'getCountries',
			'getProvinces',
			'getPaymentConfirmations',
			'getTickets',
			'getUsers',
			'getFeedback',
			'getDestinations',
			'editRegionData',
			'editDestinationAccounts',
			'deleteDestinationAccounts',
			'deleteRegionData',
			'processPayment'
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
	}

	public function addDestinationAccounts()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$data_post = [
			'bank_account' => $data['bank_account'],
			'account_number' => $data['account_number'],
			'account_fullname' => $data['account_fullname'],
			'created_at' => date('Y-m-d H:i:s'),
			'is_active' => 1,
		];

		if ($data['is_active'] == 'false') {
			$data_post['is_active'] = 0;
		}

		$postDestinationAccount = $this->req('POST', '/destination_accounts', $data_post)->json;

		echo json_encode($postDestinationAccount);
		exit();
	}

	public function getDestinationAccounts()
	{
		$this->autoRender = false;

		$getDestinationAccount = $this->req('GET', '/destination_accounts/active')->json;

		echo json_encode($getDestinationAccount);
		exit();
	}

	public function getDetailDestinationAccounts()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$getDetailDestinationAccount = $this->req('GET', '/destination_accounts/'.$data['id'])->json;

		echo json_encode($getDetailDestinationAccount);
		exit();
	}

	public function editDestinationAccounts()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$data_put = [
			'bank_account' => $data['bank_account'],
			'account_number' => $data['account_number'],
			'account_fullname' => $data['account_fullname'],
			'is_active' => 1,
		];

		if ($data['is_active'] == 'false') {
			$data_put['is_active'] = 0;
		}

		$putDestinationAccount = $this->req('PUT', '/destination_accounts/'.$data['destination_account_id'], $data_put)->json;

		echo json_encode($putDestinationAccount);
	}

	public function deleteDestinationAccounts()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$deleteDestinationAccount = $this->req('DELETE', '/destination_accounts/'.$data['id'])->json;

		echo json_encode($deleteDestinationAccount);
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

	public function getTickets()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$start = strtotime($data['start_date']);
		$end = strtotime($data['finish_date']);

		$param_columns = compact(
			'start',
			'end'
		);

		foreach ($param_columns as $key=>$value) {
			if (!empty($value)) {
				$query_params[] = $key.'='.$value;
			}
		}	

		$parameter = implode('&', $query_params);


		$total_data = $this->req('GET', '/tickets?limit=1&'.$parameter)->json['total_data'];
		$getTickets = $this->req('GET', '/tickets?limit='.$total_data.'&'.$parameter)->json;

		echo json_encode($getTickets);
		exit();
	}

	public function getUsers()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$total_data = $this->req('GET', '/users?limit=1')->json['total_data'];
		$getUsers = $this->req('GET', '/users?limit='.$total_data)->json;

		echo json_encode($getUsers);
		exit();
	}

	public function getFeedback()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$total_data = $this->req('GET', '/customer_feedback?limit=1')->json['total_data'];
		$getCustomerFeedback = $this->req('GET', '/customer_feedback?limit='.$total_data)->json;

		echo json_encode($getCustomerFeedback);
		exit();
	}

	public function addCountries()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$data_post = [
			'name' => $data['country_name'],
			'continent_id' => $data['continent_id']
		];

		$checkCountries = $this->req('GET', '/countries?name='.$data_post['name'])->json;
		if (!empty($checkCountries['data'])) {
			echo "negara sudah tersedia";
			exit();
		}

		$postCountries = $this->req('POST', '/countries', $data_post)->json;
		if ($postCountries['response_code'] == 201) {
			$getContinent = $this->req('GET', '/continents/'.$data_post['continent_id'])->json;
			$totalCountries = $getContinent['data']['total_countries'] + 1;
			$putContinent = $this->req('PUT', '/continents/'.$data_post['continent_id'], ['total_countries' => $totalCountries])->json;
			if ($putContinent['response_code'] == 200) {
				echo "success";
			}
		}
	}

	public function addProvinces()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$data_post = [
			'name' => $data['province_name'],
			'country_id' => $data['country_id']
		];

		$checkProvinces = $this->req('GET', '/provinces?name='.$data_post['name'])->json;
		if (!empty($checkProvinces['data'])) {
			echo "error";
			exit();
		}

		$postProvinces = $this->req('POST', '/provinces', $data_post)->json;
		if ($postProvinces['response_code'] == 201) {
			echo "success";
		}
	}

	public function addCities()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$data_post = [
			'name' => $data['cities_name'],
			'province_id' => $data['province_id']
		];

		$checkCities = $this->req('GET', '/cities?name='.$data_post['name'])->json;
		if (!empty($checkCities['data'])) {
			echo "error";
			exit();
		}

		$postCities = $this->req('POST', '/cities', $data_post)->json;
		if ($postCities['response_code'] == 201) {
			echo "success";
		}
	}

	public function editRegionData()
	{
		$this->autoRender = false;
		$data = $this->request->data();
		$data_put = [
			'name' => $data['update_name']
		];

		if ($data['update_category'] == 'region') {
			$putResult = $this->req('PUT', '/countries/'.$data['update_id'], $data_put)->json;
		}

		if ($data['update_category'] == 'province') {
			$putResult = $this->req('PUT', '/provinces/'.$data['update_id'], $data_put)->json;
		}

		if ($data['update_category'] == 'city') {
			$putResult = $this->req('PUT', '/cities/'.$data['update_id'], $data_put)->json;
		}

		if ($putResult['response_code'] == 200) {
			echo "success";
		}
	}

	public function deleteRegionData()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		if ($data['delete_category'] == 'region') {
			$deleteResult = $this->req('DELETE', '/countries/'.$data['delete_id'])->json;
		}

		if ($data['delete_category'] == 'province') {
			$deleteResult = $this->req('DELETE', '/provinces/'.$data['delete_id'])->json;
		}

		if ($data['delete_category'] == 'city') {
			$deleteResult = $this->req('DELETE', '/cities/'.$data['delete_id'])->json;
		}

		if ($deleteResult['response_code'] == 200) {
			echo "success";
		}
	}

	public function getDestinationConfirmations()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$getDestinationConfirmation = $this->req('GET', '/tourism?tourism_approval_status=1')->json;

		echo json_encode($getDestinationConfirmation);
		exit();
	}

	public function getDetailDestinations()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$getDetailDestinations = $this->req('GET', '/tourism/'.$data['id'])->json;

		echo json_encode($getDetailDestinations);
		exit();
	}

	public function approveDestinationConfirmations()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$data_post = [
			'username' => $data['admin_username'],
			'password' => $data['admin_username'],
			'fullname' => ucwords($data['admin_username']),
			'phone_number' => $data['admin_phone'],
			'email' => $data['admin_email'],
			'user_level_id' => 1
		];

		$postUsers = $this->req('POST', '/users', $data_post)->json;
		if($postUsers['response_code'] == 201){
			$data_put = [
				'tourism_approval_status' => 2,
				'price' => $data['price'],
				'user_admin_id' => $postUsers['data']['id'],
				'approve_date' => date('Y-m-d H:i:s'),
				'approve_user_id' => $this->request->session()->read('Auth.User.id')
			];
	
			$putDestinationConfirmation = $this->req('PUT', '/tourism/'.$data['tourism_id'], $data_put)->json;
			
			echo json_encode($putDestinationConfirmation);
			exit();
		}
	}

	public function getPaymentConfirmations()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$PaymentConfirmation = $this->req('GET', '/payment_confirmations')->json['data'];
			
		echo json_encode($PaymentConfirmation);
		exit();
	}

	public function processPayment()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$PaymentConfirmation = $this->req('GET', '/payment_confirmations/'.$data['id'])->json;
		if ($PaymentConfirmation['response_code'] == 200) {
			$Ticket = $this->req('GET', '/tickets/'.$PaymentConfirmation['data']['ticket_id'])->json;
			$data_put = [];
			if ($data['status'] == 1) {
				$data_put = [
					'is_paid' => 1,
					'ticket_status_id' => 5
				];
			}

			if ($data['status'] == 2) {
				$data_put = [
					'is_reject' => 1,
					'ticket_status_id' => 6
				];
			}

			$Ticket = $this->req('PUT', '/tickets/'.$PaymentConfirmation['data']['ticket_id'], $data_put)->json;
			if ($Ticket['response_code'] == 200) {
				$result = $this->req('PUT', '/payment_confirmations/'.$data['id'], ['status' => 'verifikasi'])->json;
				
				echo json_encode($result);
				exit;
			}
		}

	}

	public function getDestinations()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$Tourism = $this->req('GET', '/tourism?continent_id='.$data['id'])->json;

		echo json_encode($Tourism);
		exit;
	}

}
