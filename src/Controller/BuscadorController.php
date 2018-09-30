<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\ORM\Query;
use Cake\ORM\Table;
/**
 * Documentacion Controller
 *
 * @property \App\Model\Table\DocumentacionTable $Documentacion
 *
 * @method \App\Model\Entity\Documentacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BuscadorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()  {         
      
    }
    
    //Posible funcion 1 de busqueda
    public function BuscarProyecto1($ParametroNombre) {
    	$TodosProyectos = $This -> Proyectos->find('all');
        $opciones=array('conditions' => array('Proyectos.nombre_proyecto' => $ParametroNombre));
        $ProyectosEncontrados = $this->Proyectos->find('all',$opciones);
        return $ProyectosEncontrados;
    }



}