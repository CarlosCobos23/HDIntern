<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Articlefiles Controller
 *
 * @property \App\Model\Table\ArticlefilesTable $Articlefiles
 *
 * @method \App\Model\Entity\Articlefile[] paginate($object = null, array $settings = [])
 */
class ArticlefilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles']
        ];
        $articlefiles = $this->paginate($this->Articlefiles);

        $this->set(compact('articlefiles'));
        $this->set('_serialize', ['articlefiles']);
    }

    /**
     * View method
     *
     * @param string|null $id Articlefile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articlefile = $this->Articlefiles->get($id, [
            'contain' => ['Articles']
        ]);

        $this->set('articlefile', $articlefile);
        $this->set('_serialize', ['articlefile']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articlefile = $this->Articlefiles->newEntity();
        if ($this->request->is('post')) {
            $articlefile = $this->Articlefiles->patchEntity($articlefile, $this->request->getData());
            if ($this->Articlefiles->save($articlefile)) {
                $this->Flash->success(__('The articlefile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articlefile could not be saved. Please, try again.'));
        }
        $articles = $this->Articlefiles->Articles->find('list', ['limit' => 200]);
        $this->set(compact('articlefile', 'articles'));
        $this->set('_serialize', ['articlefile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Articlefile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articlefile = $this->Articlefiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articlefile = $this->Articlefiles->patchEntity($articlefile, $this->request->getData());
            if ($this->Articlefiles->save($articlefile)) {
                $this->Flash->success(__('The articlefile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articlefile could not be saved. Please, try again.'));
        }
        $articles = $this->Articlefiles->Articles->find('list', ['limit' => 200]);
        $this->set(compact('articlefile', 'articles'));
        $this->set('_serialize', ['articlefile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Articlefile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articlefile = $this->Articlefiles->get($id);
        if ($this->Articlefiles->delete($articlefile)) {
            $this->Flash->success(__('The articlefile has been deleted.'));
        } else {
            $this->Flash->error(__('The articlefile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
