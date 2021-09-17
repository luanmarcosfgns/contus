<?php
namespace App\Controller\Component;
use  Cake\Controller\Component;

class UploadComponent extends Component{
    
   
    
    public function upload($data=null){
        
        if(!empty($data)){
        
      
        
         
          $arquivo =  $data['nome']['tmp_name'];
     
    //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
    $fp = fopen($arquivo, "r");
 
    //Lê o conteúdo do arquivo aberto.
    $conteudo = fread($fp, filesize($arquivo));
     
    //Fecha o arquivo.
    fclose($fp);
     
    //retorna o conteúdo.
    return $conteudo;
         
         
    }
    
    
    
    
}
}