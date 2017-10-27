<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Publicnotes Controller
 *
 * @property \App\Model\Table\PublicnotesTable $Publicnotes
 *
 * @method \App\Model\Entity\Publicnote[] paginate($object = null, array $settings = [])
 */
class PublicnotesController extends AppController
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
        $publicnotes = $this->paginate($this->Publicnotes);

        $this->set(compact('publicnotes'));
        $this->set('_serialize', ['publicnotes']);
    }

    /**
     * View method
     *
     * @param string|null $id Publicnote id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publicnote = $this->Publicnotes->get($id, [
            'contain' => ['Tickets', 'Users']
        ]);

        $this->set('publicnote', $publicnote);
        $this->set('_serialize', ['publicnote']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publicnote = $this->Publicnotes->newEntity();
        if ($this->request->is('post')) {
            $publicnote = $this->Publicnotes->patchEntity($publicnote, $this->request->getData());
            if ($this->Publicnotes->save($publicnote)) {
                $this->Flash->success(__('The publicnote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publicnote could not be saved. Please, try again.'));
        }
        $tickets = $this->Publicnotes->Tickets->find('list', ['limit' => 200]);
        $users = $this->Publicnotes->Users->find('list', ['limit' => 200]);
        $this->set(compact('publicnote', 'tickets', 'users'));
        $this->set('_serialize', ['publicnote']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Publicnote id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publicnote = $this->Publicnotes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publicnote = $this->Publicnotes->patchEntity($publicnote, $this->request->getData());
            if ($this->Publicnotes->save($publicnote)) {
                $this->Flash->success(__('The publicnote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publicnote could not be saved. Please, try again.'));
        }
        $tickets = $this->Publicnotes->Tickets->find('list', ['limit' => 200]);
        $users = $this->Publicnotes->Users->find('list', ['limit' => 200]);
        $this->set(compact('publicnote', 'tickets', 'users'));
        $this->set('_serialize', ['publicnote']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Publicnote id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publicnote = $this->Publicnotes->get($id);
        if ($this->Publicnotes->delete($publicnote)) {
            $this->Flash->success(__('The publicnote has been deleted.'));
        } else {
            $this->Flash->error(__('The publicnote could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
