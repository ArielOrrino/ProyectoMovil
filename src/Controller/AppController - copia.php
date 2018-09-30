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
use Cake\ORM\TableRegistry;

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
        $this->loadComponent('RequestHandler', ['enableBeforeRedirect' => false]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth',[
                                     'authorize' => ['Controller'],
                                     'loginAction' => 
                                     [
                                        'controller' => 'usuarios',
                                        'action' => 'login'
                                     ],
                                     'loginRedirect' => 
                                     [
                                        'controller' => 'pages', 
                                        'action' => 'index'
                                     ],
                                     'logoutRedirect' => 
                                     [
                                        'controller' => 'pages', 
                                        'action' => 'index'
                                     ],
                                     'authenticate' => [
                                        'Form' => [
                                            'fields' => ['username' => 'usuario'],
                                            'userModel' => 'Usuarios',
                                            'finder'=> 'auth'
                                            ]
                                        ],
                                     'storage' => 'Session',
                                     'unauthorizedRedirect' => ['controller' => 'Pages', 'action' => 'display']
                            ]);  

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
     //   $this->loadComponent('Security');
    }

    public function isAuthorized($user) {
        return true;
    }
 

 public function beforeFilter(Event $event)
    {

 //usuario sin loggear

$this->Auth->allow(['index','display','login','home']);

if(in_array($this->request->getParam('controller'),['Usuarios'])){
            if(in_array($this->request->getParam('action'),['add'])){
                $this->Auth->allow(['add']);
      }
    }
if(in_array($this->request->getParam('controller'),['Aportes'])){
            if(in_array($this->request->getParam('action'),['view'])){
                $this->Auth->allow(['view']);
      }
    }
if($this->Auth->user('tipo_usuario') == ''){      
    if(in_array($this->request->getParam('controller'),['Usuarios'])){      
                $this->Auth->deny(['index','delete','edit','view']);
            }
        } 

//usuario admin

if($this->Auth->user('tipo_usuario') == 'A'){            
    $this->Auth->allow(['index','display','login','home','add','delete','edit','view','confirm']);
 }

//usuario común
 
if($this->Auth->user('tipo_usuario') == 'C'){      
    if(in_array($this->request->getParam('controller'),['Usuarios'])){      
                $this->Auth->deny(['index','delete','edit','view']);
            }
 }

 if($this->Auth->user('tipo_usuario') == ''){      
    if(in_array($this->request->getParam('controller'),['Usuarios'])){      
                $this->Auth->deny(['index','delete','edit','view']);
            }
 }

   
            
        
}
 /*   public function beforeFilter(Event $event)
    {
    parent::beforeFilter($event);
    $this->Auth->allow();
    }*/
}
