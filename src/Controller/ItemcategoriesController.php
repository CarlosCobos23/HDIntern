<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Itemcategories Controller
 *
 * @property \App\Model\Table\ItemcategoriesTable $Itemcategories
 *
 * @method \App\Model\Entity\Itemcategory[] paginate($object = null, array $settings = [])
 */
class ItemcategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentItemcategories']
        ];
        $itemcategories = $this->paginate($this->Itemcategories);

        $this->set(compact('itemcategories'));
        $this->set('_serialize', ['itemcategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Itemcategory id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemcategory = $this->Itemcategories->get($id, [
            'contain' => ['ParentItemcategories', 'ChildItemcategories', 'Items', 'Layoutcategories']
        ]);

        $this->set('itemcategory', $itemcategory);
        $this->set('_serialize', ['itemcategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemcategory = $this->Itemcategories->newEntity();
        if ($this->request->is('post')) {
            $itemcategory = $this->Itemcategories->patchEntity($itemcategory, $this->request->getData());
            if ($this->Itemcategories->save($itemcategory)) {
                $this->Flash->success(__('The itemcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The itemcategory could not be saved. Please, try again.'));
        }
        $parentItemcategories = $this->Itemcategories->ParentItemcategories->find('list', ['limit' => 200]);
        $this->set(compact('itemcategory', 'parentItemcategories'));
        $this->set('_serialize', ['itemcategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Itemcategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemcategory = $this->Itemcategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemcategory = $this->Itemcategories->patchEntity($itemcategory, $this->request->getData());
            if ($this->Itemcategories->save($itemcategory)) {
                $this->Flash->success(__('The itemcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The itemcategory could not be saved. Please, try again.'));
        }
        $parentItemcategories = $this->Itemcategories->ParentItemcategories->find('list', ['limit' => 200]);
        $this->set(compact('itemcategory', 'parentItemcategories'));
        $this->set('_serialize', ['itemcategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Itemcategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemcategory = $this->Itemcategories->get($id);
        if ($this->Itemcategories->delete($itemcategory)) {
            $this->Flash->success(__('The itemcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The itemcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
