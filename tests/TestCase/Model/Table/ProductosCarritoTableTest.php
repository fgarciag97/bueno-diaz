<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductosCarritoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductosCarritoTable Test Case
 */
class ProductosCarritoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductosCarritoTable
     */
    public $ProductosCarrito;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProductosCarrito'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProductosCarrito') ? [] : ['className' => ProductosCarritoTable::class];
        $this->ProductosCarrito = TableRegistry::getTableLocator()->get('ProductosCarrito', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductosCarrito);

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
