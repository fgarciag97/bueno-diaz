<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carrito Entity
 *
 * @property int $id
 * @property int $id_usuario
 * @property \Cake\I18n\FrozenTime $hora
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $estatus
 * @property int|null $id_cuenta
 * @property string|null $referencia
 * @property \Cake\I18n\FrozenDate|null $fecha_pago
 * @property string|null $concepto
 * @property string|null $direccion_envio
 * @property string|null $motivo
 * @property \Cake\I18n\FrozenDate|null $fecha_asignado
 * @property \Cake\I18n\FrozenTime|null $hora_asignado
 * @property \Cake\I18n\FrozenDate|null $fecha_remitido
 * @property \Cake\I18n\FrozenTime|null $hora_remitido
 * @property \Cake\I18n\FrozenDate|null $fecha_entrega
 * @property \Cake\I18n\FrozenTime|null $hora_entrega
 * @property float|null $monto
 * @property float|null $monto_bs
 *
 * @property \App\Model\Entity\Producto[] $productos
 */
class Carrito extends Entity
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
        'id_usuario' => true,
        'hora' => true,
        'fecha' => true,
        'estatus' => true,
        'id_cuenta' => true,
        'referencia' => true,
        'fecha_pago' => true,
        'concepto' => true,
        'direccion_envio' => true,
        'motivo' => true,
        'fecha_asignado' => true,
        'hora_asignado' => true,
        'fecha_remitido' => true,
        'hora_remitido' => true,
        'fecha_entrega' => true,
        'hora_entrega' => true,
        'monto' => true,
        'monto_bs' => true,
        'productos' => true
    ];
}
