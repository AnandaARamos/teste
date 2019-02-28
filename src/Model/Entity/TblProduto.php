<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TblProduto Entity
 *
 * @property int $produto_id
 * @property string $produto_descricao
 * @property int $produto_quantidade_estoque
 */
class TblProduto extends Entity
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
        'produto_descricao' => true,
        'produto_quantidade_estoque' => true
    ];
}
