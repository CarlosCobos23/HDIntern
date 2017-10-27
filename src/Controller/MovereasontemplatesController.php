<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Movereasontemplates Controller
 *
 * @property \App\Model\Table\MovereasontemplatesTable $Movereasontemplates
 *
 * @method \App\Model\Entity\Movereasontemplate[] paginate($object = null, array $settings = [])
 */
class MovereasontemplatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Movereasons']
        ];
        $movereasontemplates = $this->paginate($this->Movereasontemplates);

        $this->set(compact('movereasontemplates'));
        $this->set('_serialize', ['movereasontemplates']);
    }

    /**
     * View method
     *
     * @param string|null $id Movereasontemplate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movereasontemplate = $this->Movereasontemplates->get($id, [
            'contain' => ['Users', 'Movereasons']
        ]);

        $this->set('movereasontemplate', $movereasontemplate);
        $this->set('_serialize', ['movereasontemplate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movereasontemplate = $this->Movereasontemplates->newEntity();
        if ($this->request->is('post')) {
            $movereasontemplate = $this->Movereasontemplates->patchEntity($movereasontemplate, $this->request->getData());
            if ($this->Movereasontemplates->save($movereasontemplate)) {
                $this->Flash->success(__('The movereasontemplate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movereasontemplate could not be saved. Please, try again.'));
        }
        $users = $this->Movereasontemplates->Users->find('list', ['limit' => 200]);
        $movereasons = $this->Movereasontemplates->Movereasons->find('list', ['limit' => 200]);
        $this->set(compact('movereasontemplate', 'users', 'movereasons'));
        $this->set('_serialize', ['movereasontemplate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Movereasontemplate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movereasontemplate = $this->Movereasontemplates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movereasontemplate = $this->Movereasontemplates->patchEntity($movereasontemplate, $this->request->getData());
            if ($this->Movereasontemplates->save($movereasontemplate)) {
                $this->Flash->success(__('The movereasontemplate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movereasontemplate could not be saved. Please, try again.'));
        }
        $users = $this->Movereasontemplates->Users->find('list', ['limit' => 200]);
        $movereasons = $this->Movereasontemplates->Movereasons->find('list', ['limit' => 200]);
        $this->set(compact('movereasontemplate', 'users', 'movereasons'));
        $this->set('_serialize', ['movereasontemplate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Movereasontemplate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movereasontemplate = $this->Movereasontemplates->get($id);
        if ($this->Movereasontemplates->delete($movereasontemplate)) {
            $this->Flash->success(__('The movereasontemplate has been deleted.'));
        } else {
            $this->Flash->error(__('The movereasontemplate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
