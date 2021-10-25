<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarritoProductosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarritoProductosTable Test Case
 */
class CarritoProductosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarritoProductosTable
     */
    public $CarritoProductos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CarritoProductos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CarritoProductos') ? [] : ['className' => CarritoProductosTable::class];
        $this->CarritoProductos = TableRegistry::getTableLocator()->get('CarritoProductos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CarritoProductos);

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
