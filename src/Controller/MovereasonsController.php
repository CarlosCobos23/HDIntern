<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Movereasons Controller
 *
 * @property \App\Model\Table\MovereasonsTable $Movereasons
 *
 * @method \App\Model\Entity\Movereason[] paginate($object = null, array $settings = [])
 */
class MovereasonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $movereasons = $this->paginate($this->Movereasons);

        $this->set(compact('movereasons'));
        $this->set('_serialize', ['movereasons']);
    }

    /**
     * View method
     *
     * @param string|null $id Movereason id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movereason = $this->Movereasons->get($id, [
            'contain' => ['Movereasontemplates', 'Stockmoves']
        ]);

        $this->set('movereason', $movereason);
        $this->set('_serialize', ['movereason']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movereason = $this->Movereasons->newEntity();
        if ($this->request->is('post')) {
            $movereason = $this->Movereasons->patchEntity($movereason, $this->request->getData());
            if ($this->Movereasons->save($movereason)) {
                $this->Flash->success(__('The movereason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movereason could not be saved. Please, try again.'));
        }
        $this->set(compact('movereason'));
        $this->set('_serialize', ['movereason']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Movereason id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movereason = $this->Movereasons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movereason = $this->Movereasons->patchEntity($movereason, $this->request->getData());
            if ($this->Movereasons->save($movereason)) {
                $this->Flash->success(__('The movereason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movereason could not be saved. Please, try again.'));
        }
        $this->set(compact('movereason'));
        $this->set('_serialize', ['movereason']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Movereason id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movereason = $this->Movereasons->get($id);
        if ($this->Movereasons->delete($movereason)) {
            $this->Flash->success(__('The movereason has been deleted.'));
        } else {
            $this->Flash->error(__('The movereason could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
