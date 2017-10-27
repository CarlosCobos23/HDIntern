<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ticketimpacts Controller
 *
 * @property \App\Model\Table\TicketimpactsTable $Ticketimpacts
 *
 * @method \App\Model\Entity\Ticketimpact[] paginate($object = null, array $settings = [])
 */
class TicketimpactsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ticketimpacts = $this->paginate($this->Ticketimpacts);

        $this->set(compact('ticketimpacts'));
        $this->set('_serialize', ['ticketimpacts']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticketimpact id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketimpact = $this->Ticketimpacts->get($id, [
            'contain' => ['Tickets']
        ]);

        $this->set('ticketimpact', $ticketimpact);
        $this->set('_serialize', ['ticketimpact']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketimpact = $this->Ticketimpacts->newEntity();
        if ($this->request->is('post')) {
            $ticketimpact = $this->Ticketimpacts->patchEntity($ticketimpact, $this->request->getData());
            if ($this->Ticketimpacts->save($ticketimpact)) {
                $this->Flash->success(__('The ticketimpact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketimpact could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketimpact'));
        $this->set('_serialize', ['ticketimpact']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticketimpact id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketimpact = $this->Ticketimpacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketimpact = $this->Ticketimpacts->patchEntity($ticketimpact, $this->request->getData());
            if ($this->Ticketimpacts->save($ticketimpact)) {
                $this->Flash->success(__('The ticketimpact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticketimpact could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketimpact'));
        $this->set('_serialize', ['ticketimpact']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticketimpact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketimpact = $this->Ticketimpacts->get($id);
        if ($this->Ticketimpacts->delete($ticketimpact)) {
            $this->Flash->success(__('The ticketimpact has been deleted.'));
        } else {
            $this->Flash->error(__('The ticketimpact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
