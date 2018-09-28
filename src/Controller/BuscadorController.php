<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Query;
use Cake\ORM\Table;
/**
 * Aportes Controller
 *
 * @property \App\Model\Table\AportesTable $Aportes
 *
 * @method \App\Model\Entity\Aporte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BuscadorController extends AppController
{


public function index()
{
        
 
$todoslosproyectos = $this->Proyecto->find('all');    
$opciones=array('conditions' => array('Proyecto.nombre_proyecto' => "Proyecto X")) //ejemplo de un proyecto x    
$proyectosencontrados = $this->Proyecto->find('all',$opciones);

//http://developando.com/blog/cakephp-consultas-complejas-base-datos-model/
//Campos BD Proyecto -- 'nombre_proyecto','monto_necesario','fecha_creacion','fecha_finalizado','cantidad_votos' 

}   







}
