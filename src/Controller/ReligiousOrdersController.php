<?php
namespace App\Controller;

use App\Controller\AppController;

class ReligiousOrdersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $religiousOrders = $this->paginate($this->ReligiousOrders);

        $this->set(compact('religiousOrders'));
        $this->set('_serialize', ['religiousOrders']);
    }

    /**
     * View method
     *
     * @param string|null $id Religious Order id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $religiousOrder = $this->ReligiousOrders->get($id, [
            'contain' => []
        ]);

        $this->set('religiousOrder', $religiousOrder);
        $this->set('_serialize', ['religiousOrder']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $religiousOrder = $this->ReligiousOrders->newEntity();
        if ($this->request->is('post')) {
            $religiousOrder = $this->ReligiousOrders->patchEntity($religiousOrder, $this->request->getData());
            if ($this->ReligiousOrders->save($religiousOrder)) {
                $this->Flash->success(__('The religious order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The religious order could not be saved. Please, try again.'));
        }
        $this->set(compact('religiousOrder'));
        $this->set('_serialize', ['religiousOrder']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Religious Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $religiousOrder = $this->ReligiousOrders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $religiousOrder = $this->ReligiousOrders->patchEntity($religiousOrder, $this->request->getData());
            if ($this->ReligiousOrders->save($religiousOrder)) {
                $this->Flash->success(__('The religious order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The religious order could not be saved. Please, try again.'));
        }
        $this->set(compact('religiousOrder'));
        $this->set('_serialize', ['religiousOrder']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Religious Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $religiousOrder = $this->ReligiousOrders->get($id);
        if ($this->ReligiousOrders->delete($religiousOrder)) {
            $this->Flash->success(__('The religious order has been deleted.'));
        } else {
            $this->Flash->error(__('The religious order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
