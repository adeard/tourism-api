<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Network\Http\Client;
use Cake\Network\Http\FormData;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
          'loginAction' => [
            'controller' => 'Users',
            'action' => 'index',
          ],
          'loginRedirect' => [
    				'controller' => 'Home',
    				'action' => 'index'
    			],
          'unauthorizedRedirect' => $this->referer()
        ]);
    }

    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

		    $this->viewBuilder()->theme('Theme');
    }

    public function beforeFilter(\Cake\Event\Event $event)
  	{
  		date_default_timezone_set('Asia/Jakarta');
  	}

    public function req($method, $endpoint, $data = [], $token = false, $trial = 0)
  	{
  		$base_uri = Configure::read('base_uri_data');
  		$request_config = [];
  		$request_config['headers']['User-Agent'] = 'Ticketing-WebApp';

  		if ($token == true) {
  			$http = new Client($request_config);
  			$Security = new SecurityController;

  			$data_user = [
  				'username' => $this->request->session()->read('Auth.User.username'),
  				'password' => $Security->decode($this->request->session()->read('Auth.User.password'))
  			];
  			$response = $http->post($base_uri.'/users/token', $data_user);
  			$result = [];

  			if ($response->json['response_code'] == 200) {
  				$result = $response->json;
  				$this->request->session()->write('Auth.User.token', $result['data']['token']);
  				sleep(1);
  			}
  		}

  		$access_token = $this->request->session()->read('Auth.User.token');

  		if (!empty($access_token)) {
  			$request_config['headers']['Authorization'] = 'Bearer '.$access_token;
  		}

  		$http = new Client($request_config);

  		switch ($method) {
  			case 'GET':
  				$response = $http->get($base_uri.$endpoint);
  				break;
  			case 'POST':
  				$response = $http->post($base_uri.$endpoint, $data);
  				break;
  			case 'PUT':
  				$response = $http->put($base_uri.$endpoint, $data);
  				break;
  			case 'DELETE':
  				$response = $http->delete($base_uri.$endpoint);
  				break;
  			default:
  				$response = (object) ['json' => ['response_code' => 500]];
  		}

  		$attempt = $trial;
  		$attempt++;

  		$success_status = [200, 201];

  		if (!in_array($response->json['response_code'], $success_status) && $attempt <= 3) {
  			$response = $this->req($method, $endpoint, $data, true, $attempt);
              return $response;
  		}

  		return $response;
  	}

    public function reqPrivate($method, $endpoint, $data = [])
  	{
  		$base_uri = Configure::read('base_uri_private');
  		$request_config = [];
  		$request_config['headers']['User-Agent'] = 'Ticketing-WebApp';

  		$http = new Client($request_config);

  		switch ($method) {
  			case 'GET':
  				$response = $http->get($base_uri.$endpoint);
  				break;
  			case 'POST':
  				$response = $http->post($base_uri.$endpoint, $data);
  				break;
  			case 'PUT':
  				$response = $http->put($base_uri.$endpoint, $data);
  				break;
  			case 'DELETE':
  				$response = $http->delete($base_uri.$endpoint);
  				break;
  			default:
  				$response = (object) ['json' => ['response_code' => 500]];
  		}

  		return $response;
  	}

    public function isAuthorized($user)
    {
      // Default deny all
      return false;
    }
}
