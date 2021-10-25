<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TasasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TasasTable Test Case
 */
class TasasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TasasTable
     */
    public $Tasas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tasas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tasas') ? [] : ['className' => TasasTable::class];
        $this->Tasas = TableRegistry::getTableLocator()->get('Tasas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tasas);

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
