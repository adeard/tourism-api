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

class CartController extends AppController
{

  public function beforeFilter(\Cake\Event\Event $event)
	{
		date_default_timezone_set('Asia/Jakarta');

		$allowed_method = [
			
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
			'index',
			'delete',
			'checkout',
			'invoice'
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
		$user_id = $this->request->session()->read('Auth.User.id');
		$Tickets = $this->req('GET', '/users/'.$user_id.'/tickets/checkout')->json;
		
		$this->set(compact('Tickets'));
  	}
    
  	public function delete($id)
	{
		
		if (!empty($id)) {
				$response = $this->req('DELETE', '/tickets/'.$id)->json;
			if ($response['response_code'] == 200) {
				$this->Flash->success('Ticket berhasil dihapus.');
			} else {
				$this->Flash->error('There was an error. Please try again.');
			}
		}

		return $this->redirect($this->referer());
	}
	
	public function checkout($user_id)
	{
		$data = $this->request->data();
		$getTicket = $this->req('GET', '/users/'.$user_id.'/tickets/checkout')->json;
		if ($getTicket['response_code'] == 200) {
			foreach ($getTicket['data'] as $tickets) {

				$data_update = [
					'is_checkout' => 1,
					'ticket_no' => date('ymd').str_pad($tickets['tourism_id'], 3, 0, STR_PAD_LEFT).str_pad($user_id, 3, 0, STR_PAD_LEFT).str_pad($tickets['id'], 3, 0, STR_PAD_LEFT),
					'ticket_status_id' => 3
				];
				$putTicket = $this->req('PUT', '/tickets/'.$tickets['id'], $data_update)->json;

			}
		}

		return $this->redirect(['action' => 'invoice', $user_id]);
	}

	public function invoice($user_id)
	{
		$data = $this->request->data();

		$TicketCheckout = $this->req('GET', '/users/'.$user_id.'/tickets/invoices')->json;
		$DestinationAccount = $this->req('GET', '/destination_accounts/active')->json;
		$Users = $this->req('GET', '/users/'.$user_id)->json;
		
		$this->set(compact('DestinationAccount', 'TicketCheckout', 'Users'));
	}

}
