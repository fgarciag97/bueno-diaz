<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Movimiento Entity
 *
 * @property int $id
 * @property int $id_producto
 * @property int $cantidad
 * @property float|null $precio
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int|null $tipo_movimiento
 * @property int|null $id_carrito
 */
class Movimiento extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id_producto' => true,
        'cantidad' => true,
        'precio' => true,
        'fecha' => true,
        'tipo_movimiento' => true,
        'id_carrito' => true
    ];
}
