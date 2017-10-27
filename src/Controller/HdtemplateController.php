<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hdtemplate Controller
 *
 * @property \App\Model\Table\HdtemplateTable $Hdtemplate
 *
 * @method \App\Model\Entity\Hdtemplate[] paginate($object = null, array $settings = [])
 */
class HdtemplateController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Hdcategories']
        ];
        $hdtemplate = $this->paginate($this->Hdtemplate);

        $this->set(compact('hdtemplate'));
        $this->set('_serialize', ['hdtemplate']);
    }

    /**
     * View method
     *
     * @param string|null $id Hdtemplate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hdtemplate = $this->Hdtemplate->get($id, [
            'contain' => ['Hdcategories']
        ]);

        $this->set('hdtemplate', $hdtemplate);
        $this->set('_serialize', ['hdtemplate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hdtemplate = $this->Hdtemplate->newEntity();
        if ($this->request->is('post')) {
            $hdtemplate = $this->Hdtemplate->patchEntity($hdtemplate, $this->request->getData());
            if ($this->Hdtemplate->save($hdtemplate)) {
                $this->Flash->success(__('The hdtemplate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hdtemplate could not be saved. Please, try again.'));
        }
        $hdcategories = $this->Hdtemplate->Hdcategories->find('list', ['limit' => 200]);
        $this->set(compact('hdtemplate', 'hdcategories'));
        $this->set('_serialize', ['hdtemplate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hdtemplate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hdtemplate = $this->Hdtemplate->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hdtemplate = $this->Hdtemplate->patchEntity($hdtemplate, $this->request->getData());
            if ($this->Hdtemplate->save($hdtemplate)) {
                $this->Flash->success(__('The hdtemplate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hdtemplate could not be saved. Please, try again.'));
        }
        $hdcategories = $this->Hdtemplate->Hdcategories->find('list', ['limit' => 200]);
        $this->set(compact('hdtemplate', 'hdcategories'));
        $this->set('_serialize', ['hdtemplate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hdtemplate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hdtemplate = $this->Hdtemplate->get($id);
        if ($this->Hdtemplate->delete($hdtemplate)) {
            $this->Flash->success(__('The hdtemplate has been deleted.'));
        } else {
            $this->Flash->error(__('The hdtemplate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
