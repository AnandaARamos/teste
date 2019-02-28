<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblAjustesEstoqueTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblAjustesEstoqueTable Test Case
 */
class TblAjustesEstoqueTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblAjustesEstoqueTable
     */
    public $TblAjustesEstoque;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TblAjustesEstoque',
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
        $config = TableRegistry::getTableLocator()->exists('TblAjustesEstoque') ? [] : ['className' => TblAjustesEstoqueTable::class];
        $this->TblAjustesEstoque = TableRegistry::getTableLocator()->get('TblAjustesEstoque', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblAjustesEstoque);

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
