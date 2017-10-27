<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Layoutcategories Controller
 *
 * @property \App\Model\Table\LayoutcategoriesTable $Layoutcategories
 *
 * @method \App\Model\Entity\Layoutcategory[] paginate($object = null, array $settings = [])
 */
class LayoutcategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Itemcategories', 'Layouts']
        ];
        $layoutcategories = $this->paginate($this->Layoutcategories);

        $this->set(compact('layoutcategories'));
        $this->set('_serialize', ['layoutcategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Layoutcategory id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $layoutcategory = $this->Layoutcategories->get($id, [
            'contain' => ['Itemcategories', 'Layouts']
        ]);

        $this->set('layoutcategory', $layoutcategory);
        $this->set('_serialize', ['layoutcategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $layoutcategory = $this->Layoutcategories->newEntity();
        if ($this->request->is('post')) {
            $layoutcategory = $this->Layoutcategories->patchEntity($layoutcategory, $this->request->getData());
            if ($this->Layoutcategories->save($layoutcategory)) {
                $this->Flash->success(__('The layoutcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The layoutcategory could not be saved. Please, try again.'));
        }
        $itemcategories = $this->Layoutcategories->Itemcategories->find('list', ['limit' => 200]);
        $layouts = $this->Layoutcategories->Layouts->find('list', ['limit' => 200]);
        $this->set(compact('layoutcategory', 'itemcategories', 'layouts'));
        $this->set('_serialize', ['layoutcategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Layoutcategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $layoutcategory = $this->Layoutcategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $layoutcategory = $this->Layoutcategories->patchEntity($layoutcategory, $this->request->getData());
            if ($this->Layoutcategories->save($layoutcategory)) {
                $this->Flash->success(__('The layoutcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The layoutcategory could not be saved. Please, try again.'));
        }
        $itemcategories = $this->Layoutcategories->Itemcategories->find('list', ['limit' => 200]);
        $layouts = $this->Layoutcategories->Layouts->find('list', ['limit' => 200]);
        $this->set(compact('layoutcategory', 'itemcategories', 'layouts'));
        $this->set('_serialize', ['layoutcategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Layoutcategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $layoutcategory = $this->Layoutcategories->get($id);
        if ($this->Layoutcategories->delete($layoutcategory)) {
            $this->Flash->success(__('The layoutcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The layoutcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
