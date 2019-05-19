<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sets Controller
 *
 * @property \App\Model\Table\SetsTable $Sets
 *
 * @method \App\Model\Entity\Set[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SetsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Exercises', 'Workouts']
        ];
        $sets = $this->paginate($this->Sets);

        $this->set(compact('sets'));
    }

    /**
     * View method
     *
     * @param string|null $id Set id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $set = $this->Sets->get($id, [
            'contain' => ['Exercises', 'Workouts']
        ]);

        $this->set('set', $set);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $set = $this->Sets->newEntity();
        if ($this->request->is('post')) {
            $set = $this->Sets->patchEntity($set, $this->request->getData());
            if ($this->Sets->save($set)) {
                $this->Flash->success(__('The set has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The set could not be saved. Please, try again.'));
        }
        $exercises = $this->Sets->Exercises->find('list', ['limit' => 200]);
        $workouts = $this->Sets->Workouts->find('list', ['limit' => 200]);
        $this->set(compact('set', 'exercises', 'workouts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Set id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $set = $this->Sets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $set = $this->Sets->patchEntity($set, $this->request->getData());
            if ($this->Sets->save($set)) {
                $this->Flash->success(__('The set has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The set could not be saved. Please, try again.'));
        }
        $exercises = $this->Sets->Exercises->find('list', ['limit' => 200]);
        $workouts = $this->Sets->Workouts->find('list', ['limit' => 200]);
        $this->set(compact('set', 'exercises', 'workouts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Set id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $set = $this->Sets->get($id);
        if ($this->Sets->delete($set)) {
            $this->Flash->success(__('The set has been deleted.'));
        } else {
            $this->Flash->error(__('The set could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
