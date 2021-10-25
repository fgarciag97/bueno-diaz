<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductosCarritoFixture
 */
class ProductosCarritoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'productos_carrito';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'id_carrito' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_producto' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cantidad' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'productos_carrito_id_carrito_fkey' => ['type' => 'foreign', 'columns' => ['id_carrito'], 'references' => ['carrito', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'productos_carrito_id_producto_fkey' => ['type' => 'foreign', 'columns' => ['id_producto'], 'references' => ['productos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'id_carrito' => 1,
                'id_producto' => 1,
                'cantidad' => 1
            ],
        ];
        parent::init();
    }
}
