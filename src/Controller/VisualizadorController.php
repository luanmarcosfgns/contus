<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Visualizador Controller
 *
 * @property \App\Model\Table\VisualizadorTable $Visualizador
 * @method \App\Model\Entity\Visualizador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VisualizadorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $visualizador = $this->paginate($this->Visualizador);

        $this->set(compact('visualizador'));
    }

    /**
     * View method
     *
     * @param string|null $id Visualizador id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visualizador = $this->Visualizador->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('visualizador'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visualizador = $this->Visualizador->newEmptyEntity();
        if ($this->request->is('post')) {
            $visualizador = $this->Visualizador->patchEntity($visualizador, $this->request->getData());
            if ($this->Visualizador->save($visualizador)) {
                $this->Flash->success(__('The visualizador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visualizador could not be saved. Please, try again.'));
        }
        $this->set(compact('visualizador'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Visualizador id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visualizador = $this->Visualizador->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visualizador = $this->Visualizador->patchEntity($visualizador, $this->request->getData());
            if ($this->Visualizador->save($visualizador)) {
                $this->Flash->success(__('The visualizador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visualizador could not be saved. Please, try again.'));
        }
        $this->set(compact('visualizador'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Visualizador id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visualizador = $this->Visualizador->get($id);
        if ($this->Visualizador->delete($visualizador)) {
            $this->Flash->success(__('The visualizador has been deleted.'));
        } else {
            $this->Flash->error(__('The visualizador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
