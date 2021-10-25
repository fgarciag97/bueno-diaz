<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CarritoProducto Entity
 *
 * @property int $id
 * @property int|null $id_carrito
 * @property int $id_producto
 * @property int $cantidad
 * @property float $precio
 */
class CarritoProducto extends Entity
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
        'id_carrito' => true,
        'id_producto' => true,
        'cantidad' => true,
        'precio' => true
    ];
}
