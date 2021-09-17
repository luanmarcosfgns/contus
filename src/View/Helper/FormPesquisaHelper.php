<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Datasource\ConnectionManager;

class FormPesquisaHelper extends Helper {

    public $helpers = ['Helper'];

    public function procurar($tabela) {

        $conn = ConnectionManager::get('default');
        $row = $conn->execute("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE  TABLE_NAME = '$tabela';")->fetchAll();


        for ($i = 0; $i < count($row); $i++) {
            $coluna[$row[$i][0]] = $row[$i][0];
        }
        $control = "<select name='coluna'>";

        foreach ($coluna as $linha) {
            $control = $control . '<option>' . $linha . '</option>';
        }

        $control = $control . '</select>';
        echo "<panel >
                    <form  action='/cwsfiscalis/$tabela/'  method='get'>
                     <input  name='pesquisa'type='text' class='input-search' alt='pesquisa' placeholder='Buscar nesta lista' />

$control
<br>
<br>
<input type='submit' value='Achar' class='btn btn-primary'>


                    </form>


                    </panel>

  <br>
"


        ;
    }

}
