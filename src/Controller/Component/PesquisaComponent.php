<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Datasource\ConnectionManager;

class PesquisaComponent extends Component {

    function search($table) {
        $pesquisa = $this->request->getQueryParams();




        if (empty($pesquisa['page']) == true) {


            if (count($pesquisa) > 0) {
                $paginate = ['conditions' => [$table . '.' . $pesquisa['coluna'] . " LIKE '%" . $pesquisa['pesquisa'] . "%'"]];
                return $paginate;
            } else {
                $paginate = ['conditions' => [$table . '.id is not null']];
                return $paginate;
            }
        } else {
            $retorno = ['teste'];
            return $retorno;
        }
    }

}
