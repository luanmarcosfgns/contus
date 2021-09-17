<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Periodo Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property \Cake\I18n\FrozenDate $inicio
 * @property \Cake\I18n\FrozenDate $fim
 * @property int $user_id
 *
 * @property \App\Model\Entity\Conta[] $contas
 */
class Periodo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'descricao' => true,
        'inicio' => true,
        'fim' => true,
        'user_id' => true,
        'contas' => true,
    ];
}
