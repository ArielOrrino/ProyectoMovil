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
        $this->loadComponent('Auth',[
                                     'authorize' => ['Controller'],
                                     'loginAction' => 
                                     [
                                        'controller' => 'pages',
                                        'action' => 'login'
                                     ],
                                     'loginRedirect' => 
                                     [
                                        'controller' => 'pages', 
                                        'action' => 'index'
                                     ],
                                     'authenticate' => [
                                        'Form' => [
                                            'fields' => ['username' => "user"],
                                            'userModel' => 'usuarios',
                                            'finder'=> "auth"
                                            ]
                                        ],
                                     'storage' => 'Session',
                                     'unauthorizedRedirect' => ['controller' => 'Pages', 'action' => 'Display']
                            ]);  

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function isAuthorized($user) {
        return true;
    }
 public function beforeFilter(Event $event)
    {
        /*if (in_array($this->request->params['action'],['login','add','delete','index','edit','modal'] )) {
            $this->eventManager()->off($this->Csrf);
        }
        $this->Security->setConfig('unlockedActions', ['index','login','add','delete','edit','modal']);*/
        
        //Rutas

        //usuario sin loggear
        if($this->Auth->user() && $this->request->controller != 'Pages'){
            $id = $this->Auth->user('id_usuarios');
            $usuarios = TableRegistry::get('Usuarios');
            $usuarios->setLastConection($id);
        }
        if(in_array($this->request->getParam('controller'),['Usuarios','Aportes','Documentacion','Proyectos'])){
            if(in_array($this->request->getParam('action'),['index','display'])){
                $this->Auth->allow(['index','display']);
            }
        }
        if(in_array($this->request->getParam('controller'),['Noticias'])){
                $this->Auth->allow(['ver','byuser']);
        }
        $this->Auth->allow(['login','logout','registro']);
        
        //redactor
        if($this->Auth->user()){
            if(in_array($this->request->getParam('controller'),['Post'])){
                $this->Auth->allow(['index']);
            }
            if(in_array($this->request->getParam('controller'),['Noticias'])){
                $this->Auth->allow(['add','edit','delete']);
            }
            if (in_array($this->request->getParam('controller'),['Usuarios'])){
                $this->Auth->allow(['view','edit','panel']);
            }
            $this->Auth->allow(['get']);

        }

       
    }
 /*   public function beforeFilter(Event $event)
    {
    parent::beforeFilter($event);
    $this->Auth->allow();
    }*/
}
