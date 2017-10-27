<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StockmovesDetails Controller
 *
 * @property \App\Model\Table\StockmovesDetailsTable $StockmovesDetails
 *
 * @method \App\Model\Entity\StockmovesDetail[] paginate($object = null, array $settings = [])
 */
class StockmovesDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stockmoves', 'Items', 'Itemcodes']
        ];
        $stockmovesDetails = $this->paginate($this->StockmovesDetails);

        $this->set(compact('stockmovesDetails'));
        $this->set('_serialize', ['stockmovesDetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Stockmoves Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stockmovesDetail = $this->StockmovesDetails->get($id, [
            'contain' => ['Stockmoves', 'Items', 'Itemcodes']
        ]);

        $this->set('stockmovesDetail', $stockmovesDetail);
        $this->set('_serialize', ['stockmovesDetail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stockmovesDetail = $this->StockmovesDetails->newEntity();
        if ($this->request->is('post')) {
            $stockmovesDetail = $this->StockmovesDetails->patchEntity($stockmovesDetail, $this->request->getData());
            if ($this->StockmovesDetails->save($stockmovesDetail)) {
                $this->Flash->success(__('The stockmoves detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stockmoves detail could not be saved. Please, try again.'));
        }
        $stockmoves = $this->StockmovesDetails->Stockmoves->find('list', ['limit' => 200]);
        $items = $this->StockmovesDetails->Items->find('list', ['limit' => 200]);
        $itemcodes = $this->StockmovesDetails->Itemcodes->find('list', ['limit' => 200]);
        $this->set(compact('stockmovesDetail', 'stockmoves', 'items', 'itemcodes'));
        $this->set('_serialize', ['stockmovesDetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Stockmoves Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stockmovesDetail = $this->StockmovesDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stockmovesDetail = $this->StockmovesDetails->patchEntity($stockmovesDetail, $this->request->getData());
            if ($this->StockmovesDetails->save($stockmovesDetail)) {
                $this->Flash->success(__('The stockmoves detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stockmoves detail could not be saved. Please, try again.'));
        }
        $stockmoves = $this->StockmovesDetails->Stockmoves->find('list', ['limit' => 200]);
        $items = $this->StockmovesDetails->Items->find('list', ['limit' => 200]);
        $itemcodes = $this->StockmovesDetails->Itemcodes->find('list', ['limit' => 200]);
        $this->set(compact('stockmovesDetail', 'stockmoves', 'items', 'itemcodes'));
        $this->set('_serialize', ['stockmovesDetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stockmoves Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stockmovesDetail = $this->StockmovesDetails->get($id);
        if ($this->StockmovesDetails->delete($stockmovesDetail)) {
            $this->Flash->success(__('The stockmoves detail has been deleted.'));
        } else {
            $this->Flash->error(__('The stockmoves detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
