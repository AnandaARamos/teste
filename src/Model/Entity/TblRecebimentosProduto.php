<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TblRecebimentosProduto Entity
 *
 * @property int $recebimento_produto_id
 * @property int $recebimento_id
 * @property int $produto_id
 * @property int $recebimento_produto_quantidade
 *
 * @property \App\Model\Entity\TblRecebimento $tbl_recebimento
 * @property \App\Model\Entity\TblProduto $tbl_produto
 */
class TblRecebimentosProduto extends Entity
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
        'recebimento_id' => true,
        'produto_id' => true,
        'recebimento_produto_quantidade' => true,
        'tbl_recebimento' => true,
        'tbl_produto' => true
    ];
}
