<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Positionbranches Controller
 *
 * @property \App\Model\Table\PositionbranchesTable $Positionbranches
 *
 * @method \App\Model\Entity\Positionbranch[] paginate($object = null, array $settings = [])
 */
class PositionbranchesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Branches', 'Positions']
        ];
        $positionbranches = $this->paginate($this->Positionbranches);

        $this->set(compact('positionbranches'));
        $this->set('_serialize', ['positionbranches']);
    }

    /**
     * View method
     *
     * @param string|null $id Positionbranch id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $positionbranch = $this->Positionbranches->get($id, [
            'contain' => ['Branches', 'Positions', 'Itemcodes', 'Users']
        ]);

        $this->set('positionbranch', $positionbranch);
        $this->set('_serialize', ['positionbranch']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $positionbranch = $this->Positionbranches->newEntity();
        if ($this->request->is('post')) {
            $positionbranch = $this->Positionbranches->patchEntity($positionbranch, $this->request->getData());
            if ($this->Positionbranches->save($positionbranch)) {
                $this->Flash->success(__('The positionbranch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The positionbranch could not be saved. Please, try again.'));
        }
        $branches = $this->Positionbranches->Branches->find('list', ['limit' => 200]);
        $positions = $this->Positionbranches->Positions->find('list', ['limit' => 200]);
        $this->set(compact('positionbranch', 'branches', 'positions'));
        $this->set('_serialize', ['positionbranch']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Positionbranch id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $positionbranch = $this->Positionbranches->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $positionbranch = $this->Positionbranches->patchEntity($positionbranch, $this->request->getData());
            if ($this->Positionbranches->save($positionbranch)) {
                $this->Flash->success(__('The positionbranch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The positionbranch could not be saved. Please, try again.'));
        }
        $branches = $this->Positionbranches->Branches->find('list', ['limit' => 200]);
        $positions = $this->Positionbranches->Positions->find('list', ['limit' => 200]);
        $this->set(compact('positionbranch', 'branches', 'positions'));
        $this->set('_serialize', ['positionbranch']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Positionbranch id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $positionbranch = $this->Positionbranches->get($id);
        if ($this->Positionbranches->delete($positionbranch)) {
            $this->Flash->success(__('The positionbranch has been deleted.'));
        } else {
            $this->Flash->error(__('The positionbranch could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
