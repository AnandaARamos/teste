<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TblRecebimentosProdutosFixture
 *
 */
class TblRecebimentosProdutosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'recebimento_produto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'recebimento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'produto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'recebimento_produto_quantidade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_RecebimentoProduto_Produto' => ['type' => 'index', 'columns' => ['produto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['recebimento_produto_id'], 'length' => []],
            'IDX_RecebimentoProduto_Unico' => ['type' => 'unique', 'columns' => ['recebimento_id', 'produto_id'], 'length' => []],
            'FK_RecebimentoProduto_Produto' => ['type' => 'foreign', 'columns' => ['produto_id'], 'references' => ['tbl_produtos', 'produto_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_RecebimentoProduto_Recebimento' => ['type' => 'foreign', 'columns' => ['recebimento_id'], 'references' => ['tbl_recebimentos', 'recebimento_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'recebimento_produto_id' => 1,
                'recebimento_id' => 1,
                'produto_id' => 1,
                'recebimento_produto_quantidade' => 1
            ],
        ];
        parent::init();
    }
}
