<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblSaidasProdutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblSaidasProdutosTable Test Case
 */
class TblSaidasProdutosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblSaidasProdutosTable
     */
    public $TblSaidasProdutos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TblSaidasProdutos',
        'app.TblSaidas',
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
        $config = TableRegistry::getTableLocator()->exists('TblSaidasProdutos') ? [] : ['className' => TblSaidasProdutosTable::class];
        $this->TblSaidasProdutos = TableRegistry::getTableLocator()->get('TblSaidasProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblSaidasProdutos);

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
