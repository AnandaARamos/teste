<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TblSaidasProduto Entity
 *
 * @property int $saida_produto_id
 * @property int $saida_id
 * @property int $produto_id
 * @property int $saida_produto_quantidade
 *
 * @property \App\Model\Entity\TblSaida $tbl_saida
 * @property \App\Model\Entity\TblProduto $tbl_produto
 */
class TblSaidasProduto extends Entity
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
        'saida_id' => true,
        'produto_id' => true,
        'saida_produto_quantidade' => true,
        'tbl_saida' => true,
        'tbl_produto' => true
    ];
}
