<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Branchgroups Controller
 *
 * @property \App\Model\Table\BranchgroupsTable $Branchgroups
 *
 * @method \App\Model\Entity\Branchgroup[] paginate($object = null, array $settings = [])
 */
class BranchgroupsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $branchgroups = $this->paginate($this->Branchgroups);

        $this->set(compact('branchgroups'));
        $this->set('_serialize', ['branchgroups']);
    }

    /**
     * View method
     *
     * @param string|null $id Branchgroup id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $branchgroup = $this->Branchgroups->get($id, [
            'contain' => ['Branches']
        ]);

        $this->set('branchgroup', $branchgroup);
        $this->set('_serialize', ['branchgroup']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $branchgroup = $this->Branchgroups->newEntity();
        if ($this->request->is('post')) {
            $branchgroup = $this->Branchgroups->patchEntity($branchgroup, $this->request->getData());
            if ($this->Branchgroups->save($branchgroup)) {
                $this->Flash->success(__('The branchgroup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The branchgroup could not be saved. Please, try again.'));
        }
        $this->set(compact('branchgroup'));
        $this->set('_serialize', ['branchgroup']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Branchgroup id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $branchgroup = $this->Branchgroups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $branchgroup = $this->Branchgroups->patchEntity($branchgroup, $this->request->getData());
            if ($this->Branchgroups->save($branchgroup)) {
                $this->Flash->success(__('The branchgroup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The branchgroup could not be saved. Please, try again.'));
        }
        $this->set(compact('branchgroup'));
        $this->set('_serialize', ['branchgroup']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Branchgroup id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $branchgroup = $this->Branchgroups->get($id);
        if ($this->Branchgroups->delete($branchgroup)) {
            $this->Flash->success(__('The branchgroup has been deleted.'));
        } else {
            $this->Flash->error(__('The branchgroup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
