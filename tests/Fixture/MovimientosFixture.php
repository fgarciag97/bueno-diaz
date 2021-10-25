<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MovimientosFixture
 */
class MovimientosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'id_producto' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cantidad' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'precio' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'default' => '(\'now\'::text)::date', 'null' => false, 'comment' => null, 'precision' => null],
        'tipo_movimiento' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_carrito' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'movimientos_id_carrito_fkey' => ['type' => 'foreign', 'columns' => ['id_carrito'], 'references' => ['carrito', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'movimientos_id_producto_fkey' => ['type' => 'foreign', 'columns' => ['id_producto'], 'references' => ['productos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'movimientos_tipo_movimiento_fkey' => ['type' => 'foreign', 'columns' => ['tipo_movimiento'], 'references' => ['tipos_movimientos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id_producto' => 1,
                'cantidad' => 1,
                'precio' => 1.5,
                'fecha' => '2020-04-16',
                'tipo_movimiento' => 1,
                'id_carrito' => 1
            ],
        ];
        parent::init();
    }
}
