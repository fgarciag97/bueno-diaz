<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MotorizadoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MotorizadoTable Test Case
 */
class MotorizadoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MotorizadoTable
     */
    public $Motorizado;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Motorizado'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Motorizado') ? [] : ['className' => MotorizadoTable::class];
        $this->Motorizado = TableRegistry::getTableLocator()->get('Motorizado', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Motorizado);

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
