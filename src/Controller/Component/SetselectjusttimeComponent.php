<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Setselectjusttime component
 */
class SetselectjusttimeComponent extends Component {

    function definir($tabela, $palavra) {



        // essa função tornam as autosugestões das fks just time ou seja em tempo real;


        $tabela = str_replace('_id', 's', $tabela);
        $conn = ConnectionManager::get('default');

        $colunasdatabela = $conn->execute("select column_name from information_schema.columns where table_name=:table and column_type not like '%blob%' and column_type <> 'text'", [':table' => $tabela]);


        for ($i = 0; $i < count($colunasdatabela); $i++) {

            $where[$i] = $colunasdatabela[$i][0] . " like '%" . $palavra . "%'";
        }

        $consultapesquisa = implode(' or ', $where);
        return $consultapesquisa;
    }

}
