<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Stockmoves Controller
 *
 * @property \App\Model\Table\StockmovesTable $Stockmoves
 *
 * @method \App\Model\Entity\Stockmove[] paginate($object = null, array $settings = [])
 */
class StockmovesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Warehouses', 'Movereasons', 'Shippers', 'Users']
        ];
        $stockmoves = $this->paginate($this->Stockmoves);

        $this->set(compact('stockmoves'));
        $this->set('_serialize', ['stockmoves']);
    }

    /**
     * View method
     *
     * @param string|null $id Stockmove id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stockmove = $this->Stockmoves->get($id, [
            'contain' => ['Warehouses', 'Movereasons', 'Shippers', 'Users', 'StockmovesDetails']
        ]);

        $this->set('stockmove', $stockmove);
        $this->set('_serialize', ['stockmove']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stockmove = $this->Stockmoves->newEntity();
        if ($this->request->is('post')) {
            $stockmove = $this->Stockmoves->patchEntity($stockmove, $this->request->getData());
            if ($this->Stockmoves->save($stockmove)) {
                $this->Flash->success(__('The stockmove has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stockmove could not be saved. Please, try again.'));
        }
        $warehouses = $this->Stockmoves->Warehouses->find('list', ['limit' => 200]);
        $movereasons = $this->Stockmoves->Movereasons->find('list', ['limit' => 200]);
        $shippers = $this->Stockmoves->Shippers->find('list', ['limit' => 200]);
        $users = $this->Stockmoves->Users->find('list', ['limit' => 200]);
        $this->set(compact('stockmove', 'warehouses', 'movereasons', 'shippers', 'users'));
        $this->set('_serialize', ['stockmove']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Stockmove id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stockmove = $this->Stockmoves->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stockmove = $this->Stockmoves->patchEntity($stockmove, $this->request->getData());
            if ($this->Stockmoves->save($stockmove)) {
                $this->Flash->success(__('The stockmove has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stockmove could not be saved. Please, try again.'));
        }
        $warehouses = $this->Stockmoves->Warehouses->find('list', ['limit' => 200]);
        $movereasons = $this->Stockmoves->Movereasons->find('list', ['limit' => 200]);
        $shippers = $this->Stockmoves->Shippers->find('list', ['limit' => 200]);
        $users = $this->Stockmoves->Users->find('list', ['limit' => 200]);
        $this->set(compact('stockmove', 'warehouses', 'movereasons', 'shippers', 'users'));
        $this->set('_serialize', ['stockmove']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stockmove id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stockmove = $this->Stockmoves->get($id);
        if ($this->Stockmoves->delete($stockmove)) {
            $this->Flash->success(__('The stockmove has been deleted.'));
        } else {
            $this->Flash->error(__('The stockmove could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
