<?php
namespace App\Controller\Efectivale;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Orm\TableRegistry;
use Cake\I18n\I18n;

/**
 * Application Controller Dedicated to API
 **/

//header('Access-Control-Allow-Origin: *');

class AppController extends Controller
{
    public $components = ['Flash', 'Auth', 'Usermgmt.UserAuth'/*, 'Security', 'Csrf'*/];
    public $helpers = ['Usermgmt.UserAuth', 'Usermgmt.Image', 'Form','Usermgmt.Search'];

    //header('Access-Control-Allow-Origin: http://localhost:8100, capacitor://localhost, http://localhost');
    //header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept"); 
    //header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
    }
}