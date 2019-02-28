<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblProdutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblProdutosTable Test Case
 */
class TblProdutosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblProdutosTable
     */
    public $TblProdutos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('TblProdutos') ? [] : ['className' => TblProdutosTable::class];
        $this->TblProdutos = TableRegistry::getTableLocator()->get('TblProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblProdutos);

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
}
