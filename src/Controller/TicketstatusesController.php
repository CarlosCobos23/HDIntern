<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ticketstatuses Controller
 *
 * @property \App\Model\Table\TicketstatusesTable $Ticketstatuses
 *
 * @method \App\Model\Entity\Ticketstatus[] paginate($object = null, array $settings = [])
 */
class TicketstatusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ticketstatuses = $this->paginate($this->Ticketstatuses);

        $this->set(compact('ticketstatuses'));
        $this->set('_serialize', ['ticketstatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticketstatus id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketstatus = $this->Ticketstatuses->get($id, [
            'contain' => []
        ]);

        $this->set('ticketstatus', $ticketstatus);
        $this->set('_serialize', ['ticketstatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketstatus = $this->Ticketstatuses->newEntity();
        if ($this->request->is('post')) {
            $ticketstatus = $this->Ticketstatuses->patchEntity($ticketstatus, $this->request->getData());
            if ($this->Ticketstatuses->save($ticketstatus)) {
                $this->Flash->success(__('The ticketstatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketstatus could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketstatus'));
        $this->set('_serialize', ['ticketstatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticketstatus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketstatus = $this->Ticketstatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketstatus = $this->Ticketstatuses->patchEntity($ticketstatus, $this->request->getData());
            if ($this->Ticketstatuses->save($ticketstatus)) {
                $this->Flash->success(__('The ticketstatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketstatus could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketstatus'));
        $this->set('_serialize', ['ticketstatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticketstatus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketstatus = $this->Ticketstatuses->get($id);
        if ($this->Ticketstatuses->delete($ticketstatus)) {
            $this->Flash->success(__('The ticketstatus has been deleted.'));
        } else {
            $this->Flash->error(__('The ticketstatus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
