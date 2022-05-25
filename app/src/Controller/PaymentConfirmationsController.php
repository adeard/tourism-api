<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Network\Http\Client;
use Cake\Network\Http\FormData;

class PaymentConfirmationsController extends AppController
{
	/**
	 *  beforeFilter method
	 *  this function is executed before every action in the controller
	 *  @param Event $event
	 *  @return void
	 */
	public function beforeFilter(\Cake\Event\Event $event)
	{
		$allowed_method = [
			'index'
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
		$allowed_method = [];

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
		if ($this->request->is('post')) {
			$data = $this->request->data();
			$access_token = $this->request->session()->read('Auth.User.token');

			$base_uri = Configure::read('base_uri_data');
			$http = new Client();
			$form_data = new FormData();

			$checkTicket = $this->req('GET', '/tickets/'.$data['ticket_no'].'/ticket_no')->json;
			if ($checkTicket['response_code'] == 404) {
				$this->Flash->error('Nomor Tiket tidak terdaftar');

				return $this->redirect($this->referer());
			}

			$file = $form_data->addFile('file', fopen($data['file']['tmp_name'], 'r'));
			$file->type($data['file']['type']);
			$file->filename($data['file']['name']);

			

			$form_data->add($file);
			$form_data->add('paid_by', $data['paid_by']);
			$form_data->add('status', 'belum terverifikasi');
			$form_data->add('destination_account_id', $data['destination_account']);
			$form_data->add('create_date', date('Y-m-d H:i:s'));

			

			$response = $http->post(
				$base_uri.'/payment_confirmations',
				(string)$form_data,
				['headers' => ['Content-Type' => $form_data->contentType(), 'Authorization' => 'Bearer '.$access_token]]
			);


			$result = $response->json;
			if ($result['response_code'] == 201) {
				$data_put = [
					'payment_confirmation_id' => $result['data']['id'],
					'ticket_status_id' => 4
				];
				$updateTicket = $this->req('PUT', '/tickets/'.$checkTicket['data'][0]['id'], $data_put)->json;
				if ($updateTicket['response_code'] == 200) {
					$this->Flash->success('Berhasil konfirmasi pembayaran.');
				} else {
					$this->Flash->error('Ticket gagal diupdate.');
				}
			} else {
				$this->Flash->error('There was an error. Please try again.');
			}

			return $this->redirect($this->referer());
		}

		$DestinationAccount = $this->req('GET', '/destination_accounts/active')->json;

		$this->set(compact('DestinationAccount'));
	}
}
