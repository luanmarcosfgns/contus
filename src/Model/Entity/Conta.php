<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conta Entity
 *
 * @property int $id
 * @property string $nome
 * @property string|null $descricao
 * @property float $valor
 * @property string $tipo
 * @property \Cake\I18n\FrozenDate $vencimento
 * @property \Cake\I18n\FrozenDate|null $pagarei
 * @property int|null $periodo_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Periodo $periodo
 */
class Conta extends Entity
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
        'valor' => true,
        'tipo' => true,
        'vencimento' => true,
        'pagarei' => true,
        'periodo_id' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'periodo' => true,
    ];
}
