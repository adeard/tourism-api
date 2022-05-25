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

class TicketsController extends AppController
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
			'detail'
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
	public function detail($id)
	{
        $Tickets = $this->req('GET', '/tickets/'.$id)->json['data'];
        $Users = $this->req('GET', '/users/'.$Tickets['user_id'])->json;

	
		$this->set(compact('Tickets', 'Users'));
    }

}
