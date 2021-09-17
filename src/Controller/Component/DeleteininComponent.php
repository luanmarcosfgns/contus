<?php
namespace App\Controller\Component;
use  Cake\Controller\Component;

class DeleteininComponent extends Component{
    
   
    
    public function deleteinin($objeto){
        

      $this->request->allowMethod(['post', 'delete']);
            $data = $this->request->getData('ids');
            
            foreach ($data as $datas) {
              $this->$objeto->deleteAll(['id'=>$datas]);
            }
             $this->Flash->success(__('Registros Apagado com sucesso'));
            return $this->redirect(['action' => 'index']);
    
    
}



}
