<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class ContactUsController extends AppController
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
            'index',
            'addFeedback'
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
		
    }
    
    public function addFeedback()
    {
        $this->autoRender = false;
        $data = $this->request->data();

        $data_post = [
            'name' => $data['name'],
            'email' => $data['email'],
			'note' => $data['message'],
			'create_date' => date('Y-m-d')
        ];

        if (!empty($data['user_id_feedback'])) {
            $data_post['user_id'] = $data['user_id_feedback'];
        }

        $CustomerFeedback = $this->req('POST', '/customer_feedback', $data_post)->json;

        echo json_encode($CustomerFeedback);
    }
}
