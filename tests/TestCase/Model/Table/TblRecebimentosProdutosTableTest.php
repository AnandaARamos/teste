<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblRecebimentosProdutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblRecebimentosProdutosTable Test Case
 */
class TblRecebimentosProdutosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblRecebimentosProdutosTable
     */
    public $TblRecebimentosProdutos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TblRecebimentosProdutos',
        'app.TblRecebimentos',
        'app.TblProdutos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TblRecebimentosProdutos') ? [] : ['className' => TblRecebimentosProdutosTable::class];
        $this->TblRecebimentosProdutos = TableRegistry::getTableLocator()->get('TblRecebimentosProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblRecebimentosProdutos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
