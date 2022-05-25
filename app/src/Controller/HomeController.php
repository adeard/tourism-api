<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class HomeController extends AppController
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
		$allowed_method = [

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
		$Destination = $this->req('GET', '/tourism?tourism_approval_status=2&sort=DESC')->json['data'];
		
		$this->set(compact('Destination'));
	}
}
