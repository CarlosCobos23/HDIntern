<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Statususers Controller
 *
 * @property \App\Model\Table\StatususersTable $Statususers
 *
 * @method \App\Model\Entity\Statususer[] paginate($object = null, array $settings = [])
 */
class StatususersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $statususers = $this->paginate($this->Statususers);

        $this->set(compact('statususers'));
        $this->set('_serialize', ['statususers']);
    }

    /**
     * View method
     *
     * @param string|null $id Statususer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statususer = $this->Statususers->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('statususer', $statususer);
        $this->set('_serialize', ['statususer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statususer = $this->Statususers->newEntity();
        if ($this->request->is('post')) {
            $statususer = $this->Statususers->patchEntity($statususer, $this->request->getData());
            if ($this->Statususers->save($statususer)) {
                $this->Flash->success(__('The statususer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statususer could not be saved. Please, try again.'));
        }
        $this->set(compact('statususer'));
        $this->set('_serialize', ['statususer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Statususer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statususer = $this->Statususers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statususer = $this->Statususers->patchEntity($statususer, $this->request->getData());
            if ($this->Statususers->save($statususer)) {
                $this->Flash->success(__('The statususer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statususer could not be saved. Please, try again.'));
        }
        $this->set(compact('statususer'));
        $this->set('_serialize', ['statususer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Statususer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statususer = $this->Statususers->get($id);
        if ($this->Statususers->delete($statususer)) {
            $this->Flash->success(__('The statususer has been deleted.'));
        } else {
            $this->Flash->error(__('The statususer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
