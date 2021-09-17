<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\Datasource\ConnectionManager;

/**
 * Menu helper
 */
class DataHelper extends Helper {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    function inputdata($nome, $label, $tabela) {
        $conn = ConnectionManager::get('default');
        $row = $conn->execute("SELECT IS_NULLABLE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'fiscal' AND TABLE_NAME = '$tabela' and  COLUMN_NAME='$nome';")->fetchAll();

        $retorno = "
        <label for = '$nome'>$label</label>

        <input type = 'date' name = '$nome'    id = '$nome' >";

        return $retorno;
    }

    function setinputdata($nome, $label, $tabela, $value) {
        $conn = ConnectionManager::get('default');
        $row = $conn->execute("SELECT IS_NULLABLE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'fiscal' AND TABLE_NAME = '$tabela' and  COLUMN_NAME='$nome';")->fetchAll();
        $date = explode('/', $value);
        $valor = $date[2] . '-' . $date[1] . '-' . $date[0];
        $retorno = "
        <label for = '$nome'>$label</label>

        <input type = 'date' name = '$nome' value='" . $valor . "'  id = '$nome' >";

        return $retorno;
    }

}
