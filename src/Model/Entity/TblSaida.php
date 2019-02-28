<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TblSaida Entity
 *
 * @property int $saida_id
 * @property \Cake\I18n\FrozenTime $saida_datahora
 * @property int $saida_numero_nota
 */
class TblSaida extends Entity
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
        'saida_datahora' => true,
        'saida_numero_nota' => true
    ];
}
