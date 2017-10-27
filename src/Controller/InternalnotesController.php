<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Internalnotes Controller
 *
 * @property \App\Model\Table\InternalnotesTable $Internalnotes
 *
 * @method \App\Model\Entity\Internalnote[] paginate($object = null, array $settings = [])
 */
class InternalnotesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tickets', 'Users']
        ];
        $internalnotes = $this->paginate($this->Internalnotes);

        $this->set(compact('internalnotes'));
        $this->set('_serialize', ['internalnotes']);
    }

    /**
     * View method
     *
     * @param string|null $id Internalnote id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internalnote = $this->Internalnotes->get($id, [
            'contain' => ['Tickets', 'Users']
        ]);

        $this->set('internalnote', $internalnote);
        $this->set('_serialize', ['internalnote']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $internalnote = $this->Internalnotes->newEntity();
        if ($this->request->is('post')) {
            $internalnote = $this->Internalnotes->patchEntity($internalnote, $this->request->getData());
            if ($this->Internalnotes->save($internalnote)) {
                $this->Flash->success(__('The internalnote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internalnote could not be saved. Please, try again.'));
        }
        $tickets = $this->Internalnotes->Tickets->find('list', ['limit' => 200]);
        $users = $this->Internalnotes->Users->find('list', ['limit' => 200]);
        $this->set(compact('internalnote', 'tickets', 'users'));
        $this->set('_serialize', ['internalnote']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Internalnote id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $internalnote = $this->Internalnotes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internalnote = $this->Internalnotes->patchEntity($internalnote, $this->request->getData());
            if ($this->Internalnotes->save($internalnote)) {
                $this->Flash->success(__('The internalnote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internalnote could not be saved. Please, try again.'));
        }
        $tickets = $this->Internalnotes->Tickets->find('list', ['limit' => 200]);
        $users = $this->Internalnotes->Users->find('list', ['limit' => 200]);
        $this->set(compact('internalnote', 'tickets', 'users'));
        $this->set('_serialize', ['internalnote']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Internalnote id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internalnote = $this->Internalnotes->get($id);
        if ($this->Internalnotes->delete($internalnote)) {
            $this->Flash->success(__('The internalnote has been deleted.'));
        } else {
            $this->Flash->error(__('The internalnote could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
