<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AportesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AportesTable Test Case
 */
class AportesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AportesTable
     */
    public $Aportes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aportes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Aportes') ? [] : ['className' => AportesTable::class];
        $this->Aportes = TableRegistry::getTableLocator()->get('Aportes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aportes);

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
