<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarritoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarritoTable Test Case
 */
class CarritoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarritoTable
     */
    public $Carrito;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Carrito',
        'app.Productos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Carrito') ? [] : ['className' => CarritoTable::class];
        $this->Carrito = TableRegistry::getTableLocator()->get('Carrito', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Carrito);

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
