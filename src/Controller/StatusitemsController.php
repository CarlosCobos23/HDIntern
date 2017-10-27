<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Statusitems Controller
 *
 * @property \App\Model\Table\StatusitemsTable $Statusitems
 *
 * @method \App\Model\Entity\Statusitem[] paginate($object = null, array $settings = [])
 */
class StatusitemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $statusitems = $this->paginate($this->Statusitems);

        $this->set(compact('statusitems'));
        $this->set('_serialize', ['statusitems']);
    }

    /**
     * View method
     *
     * @param string|null $id Statusitem id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statusitem = $this->Statusitems->get($id, [
            'contain' => ['Itemcodes']
        ]);

        $this->set('statusitem', $statusitem);
        $this->set('_serialize', ['statusitem']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statusitem = $this->Statusitems->newEntity();
        if ($this->request->is('post')) {
            $statusitem = $this->Statusitems->patchEntity($statusitem, $this->request->getData());
            if ($this->Statusitems->save($statusitem)) {
                $this->Flash->success(__('The statusitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statusitem could not be saved. Please, try again.'));
        }
        $this->set(compact('statusitem'));
        $this->set('_serialize', ['statusitem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Statusitem id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statusitem = $this->Statusitems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statusitem = $this->Statusitems->patchEntity($statusitem, $this->request->getData());
            if ($this->Statusitems->save($statusitem)) {
                $this->Flash->success(__('The statusitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statusitem could not be saved. Please, try again.'));
        }
        $this->set(compact('statusitem'));
        $this->set('_serialize', ['statusitem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Statusitem id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statusitem = $this->Statusitems->get($id);
        if ($this->Statusitems->delete($statusitem)) {
            $this->Flash->success(__('The statusitem has been deleted.'));
        } else {
            $this->Flash->error(__('The statusitem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
