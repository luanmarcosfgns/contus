<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\Datasource\ConnectionManager;

/**
 * SQL helper
 */
class SQLHelper extends Helper {

    public function select($sql) {
        $conn = ConnectionManager::get('default');
        return $conn->execute($sql)->fetchAll('assoc');
    }

    public function selectwhere($select, $where) {
        $conn = ConnectionManager::get('default');
        return $conn->execute($select, $where)->fetchAll('assoc');
    }

}
