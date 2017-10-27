<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hdcategories Controller
 *
 * @property \App\Model\Table\HdcategoriesTable $Hdcategories
 *
 * @method \App\Model\Entity\Hdcategory[] paginate($object = null, array $settings = [])
 */
class HdcategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hdcategories = $this->paginate($this->Hdcategories);

        $this->set(compact('hdcategories'));
        $this->set('_serialize', ['hdcategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Hdcategory id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hdcategory = $this->Hdcategories->get($id, [
            'contain' => ['Articles', 'Tickets']
        ]);

        $this->set('hdcategory', $hdcategory);
        $this->set('_serialize', ['hdcategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hdcategory = $this->Hdcategories->newEntity();
        if ($this->request->is('post')) {
            $hdcategory = $this->Hdcategories->patchEntity($hdcategory, $this->request->getData());
            if ($this->Hdcategories->save($hdcategory)) {
                $this->Flash->success(__('The hdcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hdcategory could not be saved. Please, try again.'));
        }
        $this->set(compact('hdcategory'));
        $this->set('_serialize', ['hdcategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hdcategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hdcategory = $this->Hdcategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hdcategory = $this->Hdcategories->patchEntity($hdcategory, $this->request->getData());
            if ($this->Hdcategories->save($hdcategory)) {
                $this->Flash->success(__('The hdcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hdcategory could not be saved. Please, try again.'));
        }
        $this->set(compact('hdcategory'));
        $this->set('_serialize', ['hdcategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hdcategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hdcategory = $this->Hdcategories->get($id);
        if ($this->Hdcategories->delete($hdcategory)) {
            $this->Flash->success(__('The hdcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The hdcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
