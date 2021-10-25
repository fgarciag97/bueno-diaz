<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClasificacionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClasificacionTable Test Case
 */
class ClasificacionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClasificacionTable
     */
    public $Clasificacion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Clasificacion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Clasificacion') ? [] : ['className' => ClasificacionTable::class];
        $this->Clasificacion = TableRegistry::getTableLocator()->get('Clasificacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Clasificacion);

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
