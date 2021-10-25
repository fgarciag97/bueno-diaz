<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CuentasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CuentasTable Test Case
 */
class CuentasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CuentasTable
     */
    public $Cuentas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cuentas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cuentas') ? [] : ['className' => CuentasTable::class];
        $this->Cuentas = TableRegistry::getTableLocator()->get('Cuentas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cuentas);

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
