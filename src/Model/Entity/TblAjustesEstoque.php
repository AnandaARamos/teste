<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TblAjustesEstoque Entity
 *
 * @property int $ajuste_id
 * @property string $ajuste_tipo
 * @property \Cake\I18n\FrozenTime $ajuste_datahora
 * @property string $ajuste_motivo
 * @property int|null $produto_id
 * @property int|null $ajuste_quantidade
 *
 * @property \App\Model\Entity\TblProduto $tbl_produto
 */
class TblAjustesEstoque extends Entity
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
        'ajuste_tipo' => true,
        'ajuste_datahora' => true,
        'ajuste_motivo' => true,
        'produto_id' => true,
        'ajuste_quantidade' => true,
        'tbl_produto' => true
    ];
}
