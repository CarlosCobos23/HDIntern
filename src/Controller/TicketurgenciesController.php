<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ticketurgencies Controller
 *
 * @property \App\Model\Table\TicketurgenciesTable $Ticketurgencies
 *
 * @method \App\Model\Entity\Ticketurgency[] paginate($object = null, array $settings = [])
 */
class TicketurgenciesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ticketurgencies = $this->paginate($this->Ticketurgencies);

        $this->set(compact('ticketurgencies'));
        $this->set('_serialize', ['ticketurgencies']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticketurgency id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketurgency = $this->Ticketurgencies->get($id, [
            'contain' => ['Tickets']
        ]);

        $this->set('ticketurgency', $ticketurgency);
        $this->set('_serialize', ['ticketurgency']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketurgency = $this->Ticketurgencies->newEntity();
        if ($this->request->is('post')) {
            $ticketurgency = $this->Ticketurgencies->patchEntity($ticketurgency, $this->request->getData());
            if ($this->Ticketurgencies->save($ticketurgency)) {
                $this->Flash->success(__('The ticketurgency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketurgency could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketurgency'));
        $this->set('_serialize', ['ticketurgency']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticketurgency id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketurgency = $this->Ticketurgencies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketurgency = $this->Ticketurgencies->patchEntity($ticketurgency, $this->request->getData());
            if ($this->Ticketurgencies->save($ticketurgency)) {
                $this->Flash->success(__('The ticketurgency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketurgency could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketurgency'));
        $this->set('_serialize', ['ticketurgency']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticketurgency id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketurgency = $this->Ticketurgencies->get($id);
        if ($this->Ticketurgencies->delete($ticketurgency)) {
            $this->Flash->success(__('The ticketurgency has been deleted.'));
        } else {
            $this->Flash->error(__('The ticketurgency could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
