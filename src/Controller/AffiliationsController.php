<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Affiliations Controller
 *
 * @property \App\Model\Table\AffiliationsTable $Affiliations
 *
 * @method \App\Model\Entity\Affiliation[] paginate($object = null, array $settings = [])
 */
class AffiliationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Convents', 'ReligiousOrders']
        ];
        $affiliations = $this->paginate($this->Affiliations);

        $this->set(compact('affiliations'));
        $this->set('_serialize', ['affiliations']);
    }

    /**
     * View method
     *
     * @param string|null $id Affiliation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $affiliation = $this->Affiliations->get($id, [
            'contain' => ['Convents', 'ReligiousOrders']
        ]);

        $this->set('affiliation', $affiliation);
        $this->set('_serialize', ['affiliation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $affiliation = $this->Affiliations->newEntity();
        if ($this->request->is('post')) {
            $affiliation = $this->Affiliations->patchEntity($affiliation, $this->request->getData());
            if ($this->Affiliations->save($affiliation)) {
                $this->Flash->success(__('The affiliation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The affiliation could not be saved. Please, try again.'));
        }
        $convents = $this->Affiliations->Convents->find('list', ['limit' => 200]);
        $religiousOrders = $this->Affiliations->ReligiousOrders->find('list', ['limit' => 200]);
        $this->set(compact('affiliation', 'convents', 'religiousOrders'));
        $this->set('_serialize', ['affiliation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Affiliation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $affiliation = $this->Affiliations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $affiliation = $this->Affiliations->patchEntity($affiliation, $this->request->getData());
            if ($this->Affiliations->save($affiliation)) {
                $this->Flash->success(__('The affiliation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The affiliation could not be saved. Please, try again.'));
        }
        $convents = $this->Affiliations->Convents->find('list', ['limit' => 200]);
        $religiousOrders = $this->Affiliations->ReligiousOrders->find('list', ['limit' => 200]);
        $this->set(compact('affiliation', 'convents', 'religiousOrders'));
        $this->set('_serialize', ['affiliation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Affiliation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $affiliation = $this->Affiliations->get($id);
        if ($this->Affiliations->delete($affiliation)) {
            $this->Flash->success(__('The affiliation has been deleted.'));
        } else {
            $this->Flash->error(__('The affiliation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
