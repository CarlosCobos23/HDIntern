<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ticketsfiles Controller
 *
 * @property \App\Model\Table\TicketsfilesTable $Ticketsfiles
 *
 * @method \App\Model\Entity\Ticketsfile[] paginate($object = null, array $settings = [])
 */
class TicketsfilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tickets']
        ];
        $ticketsfiles = $this->paginate($this->Ticketsfiles);

        $this->set(compact('ticketsfiles'));
        $this->set('_serialize', ['ticketsfiles']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticketsfile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketsfile = $this->Ticketsfiles->get($id, [
            'contain' => ['Tickets']
        ]);

        $this->set('ticketsfile', $ticketsfile);
        $this->set('_serialize', ['ticketsfile']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketsfile = $this->Ticketsfiles->newEntity();
        if ($this->request->is('post')) {
            $ticketsfile = $this->Ticketsfiles->patchEntity($ticketsfile, $this->request->getData());
            if ($this->Ticketsfiles->save($ticketsfile)) {
                $this->Flash->success(__('The ticketsfile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketsfile could not be saved. Please, try again.'));
        }
        $tickets = $this->Ticketsfiles->Tickets->find('list', ['limit' => 200]);
        $this->set(compact('ticketsfile', 'tickets'));
        $this->set('_serialize', ['ticketsfile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticketsfile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketsfile = $this->Ticketsfiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketsfile = $this->Ticketsfiles->patchEntity($ticketsfile, $this->request->getData());
            if ($this->Ticketsfiles->save($ticketsfile)) {
                $this->Flash->success(__('The ticketsfile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketsfile could not be saved. Please, try again.'));
        }
        $tickets = $this->Ticketsfiles->Tickets->find('list', ['limit' => 200]);
        $this->set(compact('ticketsfile', 'tickets'));
        $this->set('_serialize', ['ticketsfile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticketsfile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketsfile = $this->Ticketsfiles->get($id);
        if ($this->Ticketsfiles->delete($ticketsfile)) {
            $this->Flash->success(__('The ticketsfile has been deleted.'));
        } else {
            $this->Flash->error(__('The ticketsfile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
