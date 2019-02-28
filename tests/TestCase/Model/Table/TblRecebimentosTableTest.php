<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblRecebimentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblRecebimentosTable Test Case
 */
class TblRecebimentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblRecebimentosTable
     */
    public $TblRecebimentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TblRecebimentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TblRecebimentos') ? [] : ['className' => TblRecebimentosTable::class];
        $this->TblRecebimentos = TableRegistry::getTableLocator()->get('TblRecebimentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblRecebimentos);

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
