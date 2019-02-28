<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblSaidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblSaidasTable Test Case
 */
class TblSaidasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblSaidasTable
     */
    public $TblSaidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TblSaidas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TblSaidas') ? [] : ['className' => TblSaidasTable::class];
        $this->TblSaidas = TableRegistry::getTableLocator()->get('TblSaidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblSaidas);

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
