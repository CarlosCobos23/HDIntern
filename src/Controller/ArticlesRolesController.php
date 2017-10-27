<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ArticlesRoles Controller
 *
 * @property \App\Model\Table\ArticlesRolesTable $ArticlesRoles
 *
 * @method \App\Model\Entity\ArticlesRole[] paginate($object = null, array $settings = [])
 */
class ArticlesRolesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles', 'Roles']
        ];
        $articlesRoles = $this->paginate($this->ArticlesRoles);

        $this->set(compact('articlesRoles'));
        $this->set('_serialize', ['articlesRoles']);
    }

    /**
     * View method
     *
     * @param string|null $id Articles Role id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articlesRole = $this->ArticlesRoles->get($id, [
            'contain' => ['Articles', 'Roles']
        ]);

        $this->set('articlesRole', $articlesRole);
        $this->set('_serialize', ['articlesRole']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articlesRole = $this->ArticlesRoles->newEntity();
        if ($this->request->is('post')) {
            $articlesRole = $this->ArticlesRoles->patchEntity($articlesRole, $this->request->getData());
            if ($this->ArticlesRoles->save($articlesRole)) {
                $this->Flash->success(__('The articles role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articles role could not be saved. Please, try again.'));
        }
        $articles = $this->ArticlesRoles->Articles->find('list', ['limit' => 200]);
        $roles = $this->ArticlesRoles->Roles->find('list', ['limit' => 200]);
        $this->set(compact('articlesRole', 'articles', 'roles'));
        $this->set('_serialize', ['articlesRole']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Articles Role id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articlesRole = $this->ArticlesRoles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articlesRole = $this->ArticlesRoles->patchEntity($articlesRole, $this->request->getData());
            if ($this->ArticlesRoles->save($articlesRole)) {
                $this->Flash->success(__('The articles role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articles role could not be saved. Please, try again.'));
        }
        $articles = $this->ArticlesRoles->Articles->find('list', ['limit' => 200]);
        $roles = $this->ArticlesRoles->Roles->find('list', ['limit' => 200]);
        $this->set(compact('articlesRole', 'articles', 'roles'));
        $this->set('_serialize', ['articlesRole']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Articles Role id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articlesRole = $this->ArticlesRoles->get($id);
        if ($this->ArticlesRoles->delete($articlesRole)) {
            $this->Flash->success(__('The articles role has been deleted.'));
        } else {
            $this->Flash->error(__('The articles role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
