<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;
use Cake\Core\Configure;
use Dompdf\Options;

/**
 * Tickets Controller
 *
 * @property \App\Model\Table\TicketsTable $Tickets
 *
 * @method \App\Model\Entity\Ticket[] paginate($object = null, array $settings = [])
 */

class TicketsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

     public function initialize()
     {
     	parent::initialize();
     	$this->loadComponent('RequestHandler');
     }

    public function index($id = null)
    {
        if (is_null($id)){
            $this->paginate = [
            'contain' => [  'Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Ticketpriorities', 'Hdcategories']

            ];
            $tickets = $this->paginate($this->Tickets);

        }else{
            $query = $this->Tickets->find('all')->where(['tickettype_id' => $id])
             ->contain(['Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Ticketpriorities', 'Hdcategories'])
             ;

            $this->set('tickets', $this->paginate($query));

        }
        $this->set(compact('tickets'));
        $this->set('_serialize', ['tickets']);
        $this->viewBuilder()->options([
    'pdfConfig' => [
      'orientation' => 'landscape',
      'filename' => 'TicketIndex.pdf'
    ]
   ]);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if ($this->request->is("get")){
             $idTicket = $this->request->query('searchticket');

            if (is_null($id)){
                $id = $idTicket;
            }
            if(is_null($idTicket) && is_null($id)){

                $this->Flash->error(__('El ticket ingresado no existe'));
                return $this->redirect(['action' => 'index']);
            }

             $ticket = $this->Tickets->get($id, [
            'contain' => ['Tickettypes', 'TicketStatuses', 'Sources', 'Itemcodes', 'Users', 'Groups', 'Ticketimpacts', 'Ticketurgencies', 'Ticketpriorities', 'Hdcategories', 'Internalnotes', 'Publicnotes', 'Ticketlogs', 'Ticketsfiles']
            ]);

            $this->viewBuilder()->options([
       	'pdfConfig' => [
       		'orientation' => 'portrait',
       		'filename' => 'Ticket_' . $id . '.pdf'
       	]
       ]);
        }




        $this->set('ticket', $ticket);
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticket = $this->Tickets->newEntity();
        if ($this->request->is('post')) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
        $tickettypes = $this->Tickets->Tickettypes->find('list', ['limit' => 200]);
        $ticketStatuses = $this->Tickets->TicketStatuses->find('list', ['limit' => 200]);
        $sources = $this->Tickets->Sources->find('list', ['limit' => 200]);
        $itemcodes = $this->Tickets->Itemcodes->find('list', ['limit' => 200]);
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $groups = $this->Tickets->Groups->find('list', ['limit' => 200]);
        $ticketimpacts = $this->Tickets->Ticketimpacts->find('list', ['limit' => 200]);
        $ticketurgencies = $this->Tickets->Ticketurgencies->find('list', ['limit' => 200]);
        $ticketpriorities = $this->Tickets->Ticketpriorities->find('list', ['limit' => 200]);
        $hdcategories = $this->Tickets->Hdcategories->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'tickettypes', 'ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities', 'hdcategories'));
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
        $tickettypes = $this->Tickets->Tickettypes->find('list', ['limit' => 200]);
        $ticketStatuses = $this->Tickets->TicketStatuses->find('list', ['limit' => 200]);
        $sources = $this->Tickets->Sources->find('list', ['limit' => 200]);
        $itemcodes = $this->Tickets->Itemcodes->find('list', ['limit' => 200]);
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $groups = $this->Tickets->Groups->find('list', ['limit' => 200]);
        $ticketimpacts = $this->Tickets->Ticketimpacts->find('list', ['limit' => 200]);
        $ticketurgencies = $this->Tickets->Ticketurgencies->find('list', ['limit' => 200]);
        $ticketpriorities = $this->Tickets->Ticketpriorities->find('list', ['limit' => 200]);
        $hdcategories = $this->Tickets->Hdcategories->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'tickettypes', 'ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities', 'hdcategories'));
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success(__('The ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function clonar($id=null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Tickets->newEntity();
            $dataTicket = $this->request->getData();

            $ticket = $this->Tickets->patchEntity($ticket, $dataTicket);
            $ticket->parent_id = $id;
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
        $tickettypes = $this->Tickets->Tickettypes->find('list', ['limit' => 200]);
        $ticketStatuses = $this->Tickets->TicketStatuses->find('list', ['limit' => 200]);
        $sources = $this->Tickets->Sources->find('list', ['limit' => 200]);
        $itemcodes = $this->Tickets->Itemcodes->find('list', ['limit' => 200]);
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $groups = $this->Tickets->Groups->find('list', ['limit' => 200]);
        $ticketimpacts = $this->Tickets->Ticketimpacts->find('list', ['limit' => 200]);
        $ticketurgencies = $this->Tickets->Ticketurgencies->find('list', ['limit' => 200]);
        $ticketpriorities = $this->Tickets->Ticketpriorities->find('list', ['limit' => 200]);
        $hdcategories = $this->Tickets->Hdcategories->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'tickettypes', 'ticketStatuses', 'sources', 'itemcodes', 'users', 'groups', 'ticketimpacts', 'ticketurgencies', 'ticketpriorities', 'hdcategories'));
        $this->set('_serialize', ['ticket']);


    }



    public function changueStateTicket($id=null)
    {
         $ticket = $this->Tickets->get($id, [
            'contain' => []
        ]);
        $ticketlogsTable = TableRegistry::get('Ticketlogs');
        $ticketlog = $ticketlogsTable->newEntity();
        $ticketlog->ticket_id  = $id;
        $ticketlog->user_id = $ticket->user_id;
        $ticketlog->group_id = $ticket->group_id;
        $ticketlog->user_transfer = $ticket->user_id;
        $ticketlog->group_transfer = $ticket->group_id;
        $ticketlog->new_status = $ticket->ticket_status_id;


         if ($this->request->is('get')){
            if ($ticket->tickettype_id == 4) {
                $ticket->tickettype_id = 1;
                $ticketlog->coments = 'CAMBIO DE ESTADO A INCIDENTE';
            }else{
                $ticket->tickettype_id = 4;
                $ticketlog->coments = 'CAMBIO DE ESTADO A SOLICITUD';
            }
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                if ($ticketlogsTable->save($ticketlog)) {
                    $this->Flash->success(__('The ticket has been saved.'));
                    return $this->redirect(['action' => 'view' , $id]);
                }

            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));



         }

    }

      public function print($filename=null)
    {
        $this->viewBuilder()
            ->className('Dompdf.Pdf')
            ->layout('Dompdf.default')
            ->options(['config' => [
                'filename' => $filename,
                'render' => 'browser',
            ]]);
    }


}
