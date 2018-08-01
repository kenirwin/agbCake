<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ArchitecturalStyles Controller
 *
 * @property \App\Model\Table\ArchitecturalStylesTable $ArchitecturalStyles
 *
 * @method \App\Model\Entity\ArchitecturalStyle[] paginate($object = null, array $settings = [])
 */
class ArchitecturalStylesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $architecturalStyles = $this->paginate($this->ArchitecturalStyles);

        $this->set(compact('architecturalStyles'));
        $this->set('_serialize', ['architecturalStyles']);
    }

    /**
     * View method
     *
     * @param string|null $id Architectural Style id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $architecturalStyle = $this->ArchitecturalStyles->get($id, [
								    'contain' => ['Roles','Women','Convents']
        ]);

        $this->set('architecturalStyle', $architecturalStyle);
        $this->set('_serialize', ['architecturalStyle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $architecturalStyle = $this->ArchitecturalStyles->newEntity();
        if ($this->request->is('post')) {
            $architecturalStyle = $this->ArchitecturalStyles->patchEntity($architecturalStyle, $this->request->getData());
            if ($this->ArchitecturalStyles->save($architecturalStyle)) {
                $this->Flash->success(__('The architectural style has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The architectural style could not be saved. Please, try again.'));
        }
        $this->set(compact('architecturalStyle'));
        $this->set('_serialize', ['architecturalStyle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Architectural Style id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $architecturalStyle = $this->ArchitecturalStyles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $architecturalStyle = $this->ArchitecturalStyles->patchEntity($architecturalStyle, $this->request->getData());
            if ($this->ArchitecturalStyles->save($architecturalStyle)) {
                $this->Flash->success(__('The architectural style has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The architectural style could not be saved. Please, try again.'));
        }
        $this->set(compact('architecturalStyle'));
        $this->set('_serialize', ['architecturalStyle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Architectural Style id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $architecturalStyle = $this->ArchitecturalStyles->get($id);
        if ($this->ArchitecturalStyles->delete($architecturalStyle)) {
            $this->Flash->success(__('The architectural style has been deleted.'));
        } else {
            $this->Flash->error(__('The architectural style could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
