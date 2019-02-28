<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TblRecebimento Entity
 *
 * @property int $recebimento_id
 * @property \Cake\I18n\FrozenTime $recebimento_datahora
 * @property int $recebimento_numero_nota
 */
class TblRecebimento extends Entity
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
        'recebimento_datahora' => true,
        'recebimento_numero_nota' => true
    ];
}
