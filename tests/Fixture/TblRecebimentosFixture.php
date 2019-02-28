<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TblRecebimentosFixture
 *
 */
class TblRecebimentosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'recebimento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'recebimento_datahora' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Data / Hora do recebimento', 'precision' => null],
        'recebimento_numero_nota' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Número da nota de recebimento', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['recebimento_id'], 'length' => []],
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
                'recebimento_id' => 1,
                'recebimento_datahora' => '2019-02-28 08:22:14',
                'recebimento_numero_nota' => 1
            ],
        ];
        parent::init();
    }
}
