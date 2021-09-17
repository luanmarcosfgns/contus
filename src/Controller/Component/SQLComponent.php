<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Datasource\ConnectionManager;

class SQLComponent extends Component {

    public function select($sql) {
        $sql = strtolower($sql);
        $conn = ConnectionManager::get('default');
        return $conn->execute($sql)->fetchAll('assoc');
    }

    public function selectwhere($select, $where) {
        $select = strtolower($select);

        $conn = ConnectionManager::get('default');
        return $conn->execute($select, $where)->fetchAll('assoc');
    }

    public function insert($tabela, $colunas) {
        try {
            $conn = ConnectionManager::get('default');
            for ($i = 1; $i <= array_count($tabela); $i++) {
                $conn->execute("insert into $tabela[$i]  values($colunas[$i])");
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
