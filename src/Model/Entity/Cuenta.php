<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cuenta Entity
 *
 * @property int $id
 * @property int $banco
 * @property string|null $numero_cuenta
 * @property string|null $tipo_cuenta
 * @property string $cedula
 * @property string|null $responsable
 * @property string $telefono
 * @property string $correo
 * @property int $id_usuario
 */
class Cuenta extends Entity
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
        'banco' => true,
        'numero_cuenta' => true,
        'tipo_cuenta' => true,
        'cedula' => true,
        'responsable' => true,
        'telefono' => true,
        'correo' => true,
        'id_usuario' => true
    ];
}
