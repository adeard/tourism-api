<?php
namespace App\Controller;

use App\Controller\SecurityController;
use Cake\Event\Event;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Network\Http\Client;
use Cake\Network\Http\FormData;

class UsersController extends AppController
{
	/**
	 *  beforeFilter method
	 *  this function is executed before every action in the controller
	 *  @param Event $event
	 *  @return void
	 */
	public function beforeFilter(\Cake\Event\Event $event)
	{
		date_default_timezone_set('Asia/Jakarta');

		$allowed_method = [
			'index',
			'register',
			'logout',
			'detail'
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
			'updateUserData',
			'dashboard',
			'getCities'
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
		$session = $this->request->session();

		if ($this->request->is(['patch', 'post', 'put'])) {
			$username = $this->request->data('username');
			$password = $this->request->data('password');
			$data = [
				'username' => $username,
				'password' => $password
			];

			$response = $this->req('POST', '/users/token', $data);

			if ($response->json['response_code'] == 200) {
				$result = $response->json;
				$access_token = $result['data']['token'];
				$session->write('Auth.User.token', $access_token);

				sleep(1);

				$response = $this->req('GET', '/users/'.$result['data']['id']);


				if ($response->json['response_code'] == 200) {
					$result = $response->json;
					$is_enable = $result['data']['is_active'];

					if ($is_enable == 1) {
						$this->Auth->setUser($result['data']);

						$Security = new SecurityController;
						$password = $Security->encode($data['password']);

						$session->write('Auth.User.username', $data['username']);
						$session->write('Auth.User.password', $password);
						$session->write('Auth.User.token', $access_token);

						return $this->redirect('/');
					}
				}
			}

			$session->destroy();

			$this->Flash->error('Your username or password is incorrect.');
			return $this->redirect('/');
		}
	}

	public function logout()
	{
		$this->request->session()->destroy();
		$this->Flash->success('You are now logged out.');
		return $this->redirect('/');
	}

	public function register()
	{
		if ($this->request->is(['patch', 'post', 'put'])) {
			$data = $this->request->data();

			if ($data['new_password'] != $data['new_repassword']) {
				$this->Flash->error('Your password and re-password is incorrect.');
				return $this->redirect($this->referer());
			}

			$checkUsername = $this->req('GET', '/users?username='.$data['new_username'])->json;
			if ($checkUsername['total_data'] >= 1) {
				$this->Flash->error('Username already exist !');
				return $this->redirect($this->referer());
			}

			$data_post = [
				'username' => $data['new_username'],
				'password' => $data['new_password'],
				'email' => $data['new_email'],
				'user_level_id' => 2,
				'created_at' => date('Y-m-d H:i:s')
			];

			$postUser = $this->req('POST', '/users', $data_post)->json;
			if ($postUser['response_code'] == 201) {

				// $data_new_user = [
				// 	'account_data' => [
				// 		'username' => $data['new_username'],
				// 		'user_attachment_photo_profile' => '',
				// 		'user_attachment_photo_cover' => '',
				// 		'email' => $data['new_email']
				// 	],
				// 	'profile_data' => [
				// 		'province_id' => '',
				// 		'province' => '',
				// 		'city_id' => '',
				// 		'city' => '',
				// 		'phone_number' => '',
				// 		'address' => '',
				// 		'gender_id' => '',
				// 		'gender' => '',
				// 		'fullname' => '',
				// 		'birth_date' => ''
				// 	]
				// ];

				// $data_post = [
				// 	'user_id' => $postUser['data']['id'],
				// 	'meta_key' => 'user_data',
				// 	'meta_value' => json_encode($data_new_user),
				// 	'created_at' => date('Y-m-d H:i:s')
				// ];

				// // $postUserMeta = $this->req('POST', '/user_metas', $data_post)->json;
				// // if ($postUserMeta['response_code'] == 201) {
					$this->Flash->success('Registration Success');
				// // }else {

				// 	$data = [
				// 		'username' => 'ade',
				// 		'password' => 'ade'
				// 	];
				// 	$response = $this->req('POST', '/users/token', $data);

				// 	if ($response->json['response_code'] == 200) {
				// 		$result = $response->json;
				// 		$access_token = $result['data']['token'];
				// 		$session->write('Auth.User.token', $access_token);

				// 		sleep(1);

				// 		$response = $this->req('GET', '/users/'.$result['data']['id']);


				// 		if ($response->json['response_code'] == 200) {
				// 			$result = $response->json;
				// 			$is_enable = $result['data']['is_active'];

				// 			if ($is_enable == 1) {
				// 				$this->Auth->setUser($result['data']);

				// 				$Security = new SecurityController;
				// 				$password = $Security->encode($data['password']);

				// 				$session->write('Auth.User.username', $data['username']);
				// 				$session->write('Auth.User.password', $password);
				// 				$session->write('Auth.User.token', $access_token);
				// 			}
				// 		}

				// 		$deleteUser = $this->req('DELETE', '/users/'.$postUser['data']['id'])->json;
				// 		$this->Flash->error('Error '.$postUserMeta['message']);
				// 	}

				// }

				return $this->redirect('/users');

			} else {
				$this->Flash->error('Error '.$postUser['message']);
				return $this->redirect($this->referer());
			}
		}
	}

	public function detail()
	{
		$data = $this->request->data();
	}

	public function dashboard()
	{
		$data = $this->request->data();

		$user_id = $this->request->session()->read('Auth.User.id');
		$user_level = $this->request->session()->read('Auth.User.user_level_id');
		$Users = $this->req('GET', '/users/'.$user_id)->json['data'];
		$getProvinces = $this->req('GET', '/provinces/1/countries?limit=40')->json['data'];

		if ($user_level == 1) {
			$Tickets = $this->req('GET', '/users/'.$user_id.'/admin')->json['data'];
		} else {
			$Tickets = $this->req('GET', '/users/'.$user_id.'/tickets')->json['data'];
		}

		$this->set(compact('getProvinces', 'Users', 'Tickets'));
	}

	public function updateUserData()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$access_token = $this->request->session()->read('Auth.User.token');
		$user_id = $this->request->session()->read('Auth.User.id');

		$base_uri = Configure::read('base_uri_data');
		$http = new Client();
		$form_data = new FormData();

		$path_photo_profile = '';
		$path_photo_cover = '';
		$data_put = [];
		$updated_account_data = [];
		$updated_profile_data = [];

		//------------------------update account data----------------------

		if ($data['photo_profile'] != 'undefined' && !empty($data['photo_profile'])) {
			$file_profile = $form_data->addFile('file', fopen($data['photo_profile']['tmp_name'], 'r'));
			$file_profile->type($data['photo_profile']['type']);
			$file_profile->filename($data['photo_profile']['name']);

			$form_data->add($file_profile);
			$form_data->add('user_id', $user_id);
			$form_data->add('attachment_category_id', 1);

			$response = $http->post(
				$base_uri.'/user_attachments',
				(string)$form_data,
				['headers' => ['Content-Type' => $form_data->contentType(), 'Authorization' => 'Bearer '.$access_token]]
			);

			if($response->json['response_code'] != 201) {
				echo json_encode('error upload photo profile');
				exit();
			};
		}

		if ($data['photo_cover'] != 'undefined' && !empty($data['photo_cover'])) {
			$file_cover = $form_data->addFile('file', fopen($data['photo_cover']['tmp_name'], 'r'));
			$file_cover->type($data['photo_cover']['type']);
			$file_cover->filename($data['photo_cover']['name']);

			$form_data->add($file_cover);
			$form_data->add('user_id', $user_id);
			$form_data->add('attachment_category_id', 2);

			$response = $http->post(
				$base_uri.'/user_attachments',
				(string)$form_data,
				['headers' => ['Content-Type' => $form_data->contentType(), 'Authorization' => 'Bearer '.$access_token]]
			);

			if($response->json['response_code'] != 201) {
				echo json_encode('error upload photo cover');
				exit();
			};
		}

		if (!empty($data['email'])) {
			$data_put['email'] = $data['email'];
			$updated_account_data['account_data']['email'];
		}

		//---------------------------------------------------------------


		$data_new_user = [
			'account_data' => [
				'username' => $data['new_username'],
				'user_attachment_photo_profile' => '',
				'user_attachment_photo_cover' => '',
				'email' => $data['new_email']
			],
			'profile_data' => [
				'province_id' => '',
				'province' => '',
				'city_id' => '',
				'city' => '',
				'phone_number' => '',
				'address' => '',
				'gender_id' => '',
				'gender' => '',
				'fullname' => '',
				'birth_date' => ''
			]
		];



		if (!empty($data['fullname'])) {
			$data_put['fullname'] = $data['fullname'];
			$updated_profile_data['profile_data']['fullname'];
		}

		if (!empty($data['birth_date'])) {
			$data_put['birth_date'] = $data['birth_date'];
			$updated_profile_data['profile_data']['birth_date'];
		}

		if (!empty($data['gender_id'])) {
			$data_put['gender_id'] = $data['gender_id'];
			$updated_profile_data['profile_data']['gender_id'];
		}

		if (!empty($data['phone_number'])) {
			$data_put['phone_number'] = $data['phone_number'];
			$updated_profile_data['profile_data']['phone_number'];
		}

		if (!empty($data['address'])) {
			$data_put['address'] = $data['address'];
			$updated_profile_data['profile_data']['address'];
		}

		if (!empty($data['province_id'])) {
			$data_put['province_id'] = $data['province_id'];
			$updated_profile_data['profile_data']['province_id'];
		}

		if (!empty($data['city_id'])) {
			$data_put['city_id'] = $data['city_id'];
			$updated_profile_data['profile_data']['city_id'];
		}

		if (!empty($data_put)) {
			$putUser = $this->req('PUT', '/users/'.$user_id, $data_put)->json;
			if($putUser['response_code'] == 200){

				// if(!empty($updated_account_data) || !empty($updated_profile_data)){
				// 	$getUserMeta = $this->req('GET', '/user_metas/'.$user_id)->json;
				// }

				echo json_encode('success');
			} else {
				echo json_encode('error update user');
			}
		} else {
			echo json_encode('success');
		}

		exit();
	}

	public function getCities()
	{
		$this->autoRender = false;
		$data = $this->request->data();

		$getCities = $this->req('GET', '/province/'.$data['province_id'].'/cities?limit=100')->json;
		echo json_encode($getCities);
	}
}
