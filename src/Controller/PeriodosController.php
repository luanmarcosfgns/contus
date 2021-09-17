<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Periodos Controller
 *
 * @property \App\Model\Table\PeriodosTable $Periodos
 * @method \App\Model\Entity\Periodo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeriodosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $url_atual=$_SERVER["REQUEST_URI"];
        if(stripos($url_atual, 'index')==false){
             return $this->redirect(['action' => 'index/']);

        }


        $periodos = $this->paginate($this->Periodos,['conditions'=>['Periodos.user_id='.$_SESSION['Auth']['id']]]);

        $this->set(compact('periodos'));

    }

    /**
     * View method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $periodo = $this->Periodos->get($id, [
            'contain' => ['Contas'],
        ]);

        $this->set(compact('periodo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $periodo = $this->Periodos->newEmptyEntity();
        if ($this->request->is('post')) {
	    $data=$this->request->getData();
		$data['user_id']=$_SESSION['Auth']['id'];
            $periodo = $this->Periodos->patchEntity($periodo,$data);
            if ($this->Periodos->save($periodo)) {
                $this->Flash->success(__('✅ Salvo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('❌ Erro'));
        }
        $this->set(compact('periodo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $periodo = $this->Periodos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
	    $data=$this->request->getData();
		$data['user_id']=$_SESSION['Auth']['id'];
            $periodo = $this->Periodos->patchEntity($periodo, $data);
            if ($this->Periodos->save($periodo)) {
                $this->Flash->success(__('✅ Salvo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('❌ Erro'));
        }
        $this->set(compact('periodo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $periodo = $this->Periodos->get($id);
        if ($this->Periodos->delete($periodo)) {
            $this->Flash->success(__('✅ Apagado'));
        } else {
            $this->Flash->error(__('❌ Erro'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
