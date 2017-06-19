<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ArchitecturalImages Controller
 *
 * @property \App\Model\Table\ArchitecturalImagesTable $ArchitecturalImages
 *
 * @method \App\Model\Entity\ArchitecturalImage[] paginate($object = null, array $settings = [])
 */
class ArchitecturalImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Convents']
        ];
        $architecturalImages = $this->paginate($this->ArchitecturalImages);

        $this->set(compact('architecturalImages'));
        $this->set('_serialize', ['architecturalImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Architectural Image id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $architecturalImage = $this->ArchitecturalImages->get($id, [
            'contain' => ['Convents']
        ]);

        $this->set('architecturalImage', $architecturalImage);
        $this->set('_serialize', ['architecturalImage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $architecturalImage = $this->ArchitecturalImages->newEntity();
        if ($this->request->is('post')) {
            $architecturalImage = $this->ArchitecturalImages->patchEntity($architecturalImage, $this->request->getData());
            if ($this->ArchitecturalImages->save($architecturalImage)) {
                $this->Flash->success(__('The architectural image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The architectural image could not be saved. Please, try again.'));
        }
        $convents = $this->ArchitecturalImages->Convents->find('list', ['limit' => 200]);
        $this->set(compact('architecturalImage', 'convents'));
        $this->set('_serialize', ['architecturalImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Architectural Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $architecturalImage = $this->ArchitecturalImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $architecturalImage = $this->ArchitecturalImages->patchEntity($architecturalImage, $this->request->getData());
            if ($this->ArchitecturalImages->save($architecturalImage)) {
                $this->Flash->success(__('The architectural image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The architectural image could not be saved. Please, try again.'));
        }
        $convents = $this->ArchitecturalImages->Convents->find('list', ['limit' => 200]);
        $this->set(compact('architecturalImage', 'convents'));
        $this->set('_serialize', ['architecturalImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Architectural Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $architecturalImage = $this->ArchitecturalImages->get($id);
        if ($this->ArchitecturalImages->delete($architecturalImage)) {
            $this->Flash->success(__('The architectural image has been deleted.'));
        } else {
            $this->Flash->error(__('The architectural image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
