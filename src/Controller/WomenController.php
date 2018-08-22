<?php
namespace App\Controller;

use App\Controller\AppController;

class WomenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
      $keyword = $this->request->query('keyword');
      if (!empty($keyword)) {
	$this->paginate = [
			   //			   'conditions'=>['name LIKE'=>'%'.$keyword.'%']
			   'conditions' => [
					    'OR' => [
						     'name LIKE'=>'%'.$keyword.'%',
						     'name_english LIKE'=>'%'.$keyword.'%',
						     'name_spanish LIKE'=>'%'.$keyword.'%',
						     'name_portuguese LIKE'=>'%'.$keyword.'%',
						     'name_other LIKE'=>'%'.$keyword.'%',
						     ]
					    ]
			   ];
      }
        $women = $this->paginate($this->Women);

        $this->set(compact('women'));
        $this->set('_serialize', ['women']);
    }

    /**
     * View method
     *
     * @param string|null $id Woman id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $woman = $this->Women->get($id, [
					 'contain' => ['Roles', 'Portraits', 'Convents','ArchitecturalStyles']
        ]);

        $this->set('woman', $woman);
        $this->set('_serialize', ['woman']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $woman = $this->Women->newEntity();
        if ($this->request->is('post')) {
            $woman = $this->Women->patchEntity($woman, $this->request->getData());
            if ($this->Women->save($woman)) {
                $this->Flash->success(__('The woman has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The woman could not be saved. Please, try again.'));
        }
        $convents = $this->Women->Convents->find('list', ['limit' => 200]);
        $this->set(compact('woman', 'convents'));
        $this->set('_serialize', ['woman']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Woman id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $woman = $this->Women->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $woman = $this->Women->patchEntity($woman, $this->request->getData());
            if ($this->Women->save($woman)) {
                $this->Flash->success(__('The woman has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The woman could not be saved. Please, try again.'));
        }
        $this->set(compact('woman', 'convents'));
        $this->set('_serialize', ['woman']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Woman id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $woman = $this->Women->get($id);
        if ($this->Women->delete($woman)) {
            $this->Flash->success(__('The woman has been deleted.'));
        } else {
            $this->Flash->error(__('The woman could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
