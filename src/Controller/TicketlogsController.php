<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ticketlogs Controller
 *
 * @property \App\Model\Table\TicketlogsTable $Ticketlogs
 *
 * @method \App\Model\Entity\Ticketlog[] paginate($object = null, array $settings = [])
 */
class TicketlogsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tickets', 'Users', 'Groups']
        ];
        $ticketlogs = $this->paginate($this->Ticketlogs);

        $this->set(compact('ticketlogs'));
        $this->set('_serialize', ['ticketlogs']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticketlog id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketlog = $this->Ticketlogs->get($id, [
            'contain' => ['Tickets', 'Users', 'Groups']
        ]);

        $this->set('ticketlog', $ticketlog);
        $this->set('_serialize', ['ticketlog']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketlog = $this->Ticketlogs->newEntity();
        if ($this->request->is('post')) {
            $ticketlog = $this->Ticketlogs->patchEntity($ticketlog, $this->request->getData());
            if ($this->Ticketlogs->save($ticketlog)) {
                $this->Flash->success(__('The ticketlog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketlog could not be saved. Please, try again.'));
        }
        $tickets = $this->Ticketlogs->Tickets->find('list', ['limit' => 200]);
        $users = $this->Ticketlogs->Users->find('list', ['limit' => 200]);
        $groups = $this->Ticketlogs->Groups->find('list', ['limit' => 200]);
        $this->set(compact('ticketlog', 'tickets', 'users', 'groups'));
        $this->set('_serialize', ['ticketlog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticketlog id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketlog = $this->Ticketlogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketlog = $this->Ticketlogs->patchEntity($ticketlog, $this->request->getData());
            if ($this->Ticketlogs->save($ticketlog)) {
                $this->Flash->success(__('The ticketlog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketlog could not be saved. Please, try again.'));
        }
        $tickets = $this->Ticketlogs->Tickets->find('list', ['limit' => 200]);
        $users = $this->Ticketlogs->Users->find('list', ['limit' => 200]);
        $groups = $this->Ticketlogs->Groups->find('list', ['limit' => 200]);
        $this->set(compact('ticketlog', 'tickets', 'users', 'groups'));
        $this->set('_serialize', ['ticketlog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticketlog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketlog = $this->Ticketlogs->get($id);
        if ($this->Ticketlogs->delete($ticketlog)) {
            $this->Flash->success(__('The ticketlog has been deleted.'));
        } else {
            $this->Flash->error(__('The ticketlog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
