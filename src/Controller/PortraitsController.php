<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Portraits Controller
 *
 * @property \App\Model\Table\PortraitsTable $Portraits
 *
 * @method \App\Model\Entity\Portrait[] paginate($object = null, array $settings = [])
 */
class PortraitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Women']
        ];
        $portraits = $this->paginate($this->Portraits);

        $this->set(compact('portraits'));
        $this->set('_serialize', ['portraits']);
    }

    /**
     * View method
     *
     * @param string|null $id Portrait id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $portrait = $this->Portraits->get($id, [
            'contain' => ['Women']
        ]);

        $this->set('portrait', $portrait);
        $this->set('_serialize', ['portrait']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $portrait = $this->Portraits->newEntity();
        if ($this->request->is('post')) {
            $portrait = $this->Portraits->patchEntity($portrait, $this->request->getData());
            if ($this->Portraits->save($portrait)) {
                $this->Flash->success(__('The portrait has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The portrait could not be saved. Please, try again.'));
        }
        $women = $this->Portraits->Women->find('list', ['limit' => 200]);
        $this->set(compact('portrait', 'women'));
        $this->set('_serialize', ['portrait']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Portrait id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $portrait = $this->Portraits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $portrait = $this->Portraits->patchEntity($portrait, $this->request->getData());
            if ($this->Portraits->save($portrait)) {
                $this->Flash->success(__('The portrait has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The portrait could not be saved. Please, try again.'));
        }
        $women = $this->Portraits->Women->find('list', ['limit' => 200]);
        $this->set(compact('portrait', 'women'));
        $this->set('_serialize', ['portrait']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Portrait id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $portrait = $this->Portraits->get($id);
        if ($this->Portraits->delete($portrait)) {
            $this->Flash->success(__('The portrait has been deleted.'));
        } else {
            $this->Flash->error(__('The portrait could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
