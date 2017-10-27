<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ticketpriorities Controller
 *
 * @property \App\Model\Table\TicketprioritiesTable $Ticketpriorities
 *
 * @method \App\Model\Entity\Ticketpriority[] paginate($object = null, array $settings = [])
 */
class TicketprioritiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ticketpriorities = $this->paginate($this->Ticketpriorities);

        $this->set(compact('ticketpriorities'));
        $this->set('_serialize', ['ticketpriorities']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticketpriority id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketpriority = $this->Ticketpriorities->get($id, [
            'contain' => ['Tickets']
        ]);

        $this->set('ticketpriority', $ticketpriority);
        $this->set('_serialize', ['ticketpriority']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketpriority = $this->Ticketpriorities->newEntity();
        if ($this->request->is('post')) {
            $ticketpriority = $this->Ticketpriorities->patchEntity($ticketpriority, $this->request->getData());
            if ($this->Ticketpriorities->save($ticketpriority)) {
                $this->Flash->success(__('The ticketpriority has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketpriority could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketpriority'));
        $this->set('_serialize', ['ticketpriority']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticketpriority id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketpriority = $this->Ticketpriorities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketpriority = $this->Ticketpriorities->patchEntity($ticketpriority, $this->request->getData());
            if ($this->Ticketpriorities->save($ticketpriority)) {
                $this->Flash->success(__('The ticketpriority has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketpriority could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketpriority'));
        $this->set('_serialize', ['ticketpriority']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticketpriority id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketpriority = $this->Ticketpriorities->get($id);
        if ($this->Ticketpriorities->delete($ticketpriority)) {
            $this->Flash->success(__('The ticketpriority has been deleted.'));
        } else {
            $this->Flash->error(__('The ticketpriority could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
