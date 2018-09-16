<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Documentacion Controller
 *
 * @property \App\Model\Table\DocumentacionTable $Documentacion
 *
 * @method \App\Model\Entity\Documentacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentacionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $documentacion = $this->paginate($this->Documentacion);

        $this->set(compact('documentacion'));
    }

    /**
     * View method
     *
     * @param string|null $id Documentacion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentacion = $this->Documentacion->get($id, [
            'contain' => []
        ]);

        $this->set('documentacion', $documentacion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentacion = $this->Documentacion->newEntity();
        if ($this->request->is('post')) {
            $documentacion = $this->Documentacion->patchEntity($documentacion, $this->request->getData());
            if ($this->Documentacion->save($documentacion)) {
                $this->Flash->success(__('The documentacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentacion could not be saved. Please, try again.'));
        }
        $this->set(compact('documentacion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Documentacion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentacion = $this->Documentacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentacion = $this->Documentacion->patchEntity($documentacion, $this->request->getData());
            if ($this->Documentacion->save($documentacion)) {
                $this->Flash->success(__('The documentacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentacion could not be saved. Please, try again.'));
        }
        $this->set(compact('documentacion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Documentacion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentacion = $this->Documentacion->get($id);
        if ($this->Documentacion->delete($documentacion)) {
            $this->Flash->success(__('The documentacion has been deleted.'));
        } else {
            $this->Flash->error(__('The documentacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
