<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TblSaidasProdutosFixture
 *
 */
class TblSaidasProdutosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'saida_produto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'saida_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'produto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'saida_produto_quantidade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_SaidaProduto_Produto' => ['type' => 'index', 'columns' => ['produto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['saida_produto_id'], 'length' => []],
            'IDX_SaidaProduto_Unico' => ['type' => 'unique', 'columns' => ['saida_id', 'produto_id'], 'length' => []],
            'FK_SaidaProduto_Produto' => ['type' => 'foreign', 'columns' => ['produto_id'], 'references' => ['tbl_produtos', 'produto_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_SaidaProduto_Saida' => ['type' => 'foreign', 'columns' => ['saida_id'], 'references' => ['tbl_saidas', 'saida_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'saida_produto_id' => 1,
                'saida_id' => 1,
                'produto_id' => 1,
                'saida_produto_quantidade' => 1
            ],
        ];
        parent::init();
    }
}
