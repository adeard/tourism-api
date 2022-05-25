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

class ExportController extends AppController
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
			'ticket'
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
	public function tickets()
	{
		$user_id = $this->request->session()->read('Auth.User.id');
		$user_level = $this->request->session()->read('Auth.User.user_level_id');

    $start_date = $this->request->query('start_date_ticket');
    $end_date = $this->request->query('end_date_ticket');
    $ticket_no = $this->request->query('no_ticket');

    $param_columns = compact(
			'ticket_no'
    );
        
    $current_date = date('Y-m-d');

		$start_check = strtotime($start_date);
		$end_check = strtotime($end_date);
		
    $query_params = [];
    $query_params[] = 'start='.$start_check.'&end='.$end_check;

    foreach ($param_columns as $key=>$value) {
			if (!empty($value)) {
				$query_params[] = $key.'='.$value;
			}
		}
        
    $parameter = implode('&', $query_params);

		$TicketsTmp = $this->req('GET', '/tickets?'.$parameter.'&limit=1')->json;
		$Tickets = $this->req('GET', '/tickets?'.$parameter.'&limit='.$TicketsTmp['total_data'])->json;

    $this->set(compact('Tickets'));
	}

}
