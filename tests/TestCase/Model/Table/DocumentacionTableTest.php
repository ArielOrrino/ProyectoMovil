<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentacionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentacionTable Test Case
 */
class DocumentacionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentacionTable
     */
    public $Documentacion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.documentacion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Documentacion') ? [] : ['className' => DocumentacionTable::class];
        $this->Documentacion = TableRegistry::getTableLocator()->get('Documentacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Documentacion);

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
