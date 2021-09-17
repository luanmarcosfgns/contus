<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Contas Controller
 *
 * @property \App\Model\Table\ContasTable $Contas
 * @method \App\Model\Entity\Conta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContasController extends AppController
{
      private function ismy($periodo_id){
        $this->loadComponent('SQL');
      
      $ismy= $this->SQL->selectwhere('select 1 as meu from periodos where  user_id= :user_id and id= :id',[':user_id'=>$_SESSION['Auth']['id'],':id'=>$periodo_id])[0]['meu'];    
           
       
        return $ismy;
     
        
      }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index($periodo_id=null)
    {
	
	if(is_numeric($periodo_id)){
        $this->paginate = [
            'contain' => ['Periodos'],
        ];
        $contas = $this->paginate($this->Contas,['conditions'=>[ 'Contas.user_id='.$_SESSION['Auth']['id'].' and  periodo_id="' .$periodo_id.'" ']]);
	 $this->loadComponent('SQL');
	 $_SESSION['totalrecebido']=$this->SQL->selectwhere('select sum(valor)as valor from contas where  user_id= :user and tipo="R"  and  periodo_id= :periodo_id',[':user'=>$_SESSION['Auth']['id'] ,':periodo_id'=>$periodo_id])[0]['valor'];
	$_SESSION['totaldevido']=$this->SQL->selectwhere('select sum(valor)as valor from contas where user_id= :user and tipo="P"  and  periodo_id= :periodo_id',[':user'=>$_SESSION['Auth']['id'],':periodo_id'=>$periodo_id])[0]['valor'];
	 $periodo_id=$this->SQL->selectwhere('select id,concat(id,"-",nome," | Inicio: ",inicio, " | Fim: ",fim)as nome from periodos where  user_id= :user',[':user'=>$_SESSION['Auth']['id']]);
	
	 foreach ($periodo_id as $row) {
	 $options[$row['id']]=$row['nome'];
	 }
	 $_SESSION['periodo_id']=$options;
	
	
	}else if ($periodo_id==null){
	    $this->loadComponent('SQL');
	   $periodo_id=$this->SQL->selectwhere('select min(id)as id from periodos where  user_id= :user',[':user'=>$_SESSION['Auth']['id']])[0]['id'];
	   return $this->redirect(['action' => 'index',$periodo_id]);
	}
	
	
        $this->set(compact('contas'));
    }

    /**
     * View method
     *
     * @param string|null $id Conta id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null,$periodo_id)
    {
         if($this->ismy($periodo_id)==1){
        $conta = $this->Contas->get($id, [
            'contain' => ['Periodos'],
        ]);

        $this->set(compact('conta'));
        }else{
                  $this->Flash->error(__('Erro'));
               return $this->redirect(['action' => 'index',$periodo_id]);
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($periodo_id)
    {
        if($this->ismy($periodo_id)==1){
        $conta = $this->Contas->newEmptyEntity();
        if ($this->request->is('post')) {
	    $data=$this->request->getData();
		$data['user_id']=$_SESSION['Auth']['id'];
			$data['periodo_id']=$periodo_id;
            $conta = $this->Contas->patchEntity($conta, $data);
            echo $this->request->getData('periodo_id');
            if ($this->Contas->save($conta)) {
                $this->Flash->success(__('✅ Salvo'));

                return $this->redirect(['action' => 'index',$periodo_id]);
            }else{
            $this->Flash->error(__('❌ Erro'));
            }
        }
        $periodos = $this->Contas->Periodos->find('list', ['limit' => 200]);
        $this->set(compact('conta', 'periodos'));
       
    }else{
                  $this->Flash->error(__('❌ Erro'));
               return $this->redirect(['action' => 'index',$periodo_id]);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Conta id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null,$periodo_id)
    {
        if($this->ismy($periodo_id)==1){
        $conta = $this->Contas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
	    $data=$this->request->getData();
		$data['user_id']=$_SESSION['Auth']['id'];
			$data['periodo_id']=$periodo_id;
            $conta = $this->Contas->patchEntity($conta, $data);
            if ($this->Contas->save($conta)) {
                $this->Flash->success(__('✅ Salvo'));

                return $this->redirect(['action' => 'index',$periodo_id]);
            }else{
            $this->Flash->error(__('❌Erro '));
            }
        }
        $periodos = $this->Contas->Periodos->find('list', ['limit' => 200]);
        $this->set(compact('conta', 'periodos'));
        }else{
                  $this->Flash->error(__('❌ Erro'));
               return $this->redirect(['action' => 'index',$periodo_id]);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Conta id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null,$periodo_id)
    {
        if($this->ismy($periodo_id)==1){
        $this->request->allowMethod(['post', 'delete']);
	
        $conta = $this->Contas->get($id);
        if ($this->Contas->delete($conta)) {
            $this->Flash->success(__('✅ Apagado'));
        } else {
            $this->Flash->error(__('❌ Erro'));
        }

        return $this->redirect(['action' => 'index',$periodo_id]);
        }else{
            $this->Flash->error(__('Erro'));
               return $this->redirect(['action' => 'index',$periodo_id]);
        }
    }
}
