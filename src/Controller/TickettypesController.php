<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tickettypes Controller
 *
 * @property \App\Model\Table\TickettypesTable $Tickettypes *
 * @method \App\Model\Entity\Tickettype[] paginate($object = null, array $settings = [])
 */
class TickettypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tickettypes = $this->paginate($this->Tickettypes);

        $this->set(compact('tickettypes'));
        $this->set('_serialize', ['tickettypes']);

    }

    /**
     * View method
     *
     * @param string|null $id Tickettype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tickettype = $this->Tickettypes->get($id, [
            'contain' => ['Tickets']
        ]);



        $this->set('tickettype', $tickettype);
        $this->set('_serialize', ['tickettype']);
        
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tickettype = $this->Tickettypes->newEntity();
        if ($this->request->is('post')) {
            $tickettype = $this->Tickettypes->patchEntity($tickettype, $this->request->getData());
            if ($this->Tickettypes->save($tickettype)) {
                $this->Flash->success(__('The tickettype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tickettype could not be saved. Please, try again.'));
        }
        $this->set(compact('tickettype'));
        $this->set('_serialize', ['tickettype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tickettype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tickettype = $this->Tickettypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tickettype = $this->Tickettypes->patchEntity($tickettype, $this->request->getData());
            if ($this->Tickettypes->save($tickettype)) {
                $this->Flash->success(__('The tickettype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tickettype could not be saved. Please, try again.'));
        }
        $this->set(compact('tickettype'));
        $this->set('_serialize', ['tickettype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tickettype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tickettype = $this->Tickettypes->get($id);
        if ($this->Tickettypes->delete($tickettype)) {
            $this->Flash->success(__('The tickettype has been deleted.'));
        } else {
            $this->Flash->error(__('The tickettype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
