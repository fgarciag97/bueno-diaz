<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Motorizado Entity
 *
 * @property int $id
 * @property string $letra
 * @property string $cedula
 * @property string $nombre
 * @property string $placa
 * @property string $telefono
 * @property string $correo
 * @property bool|null $estatus
 * @property string|null $nota
 */
class Motorizado extends Entity
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
        'letra' => true,
        'cedula' => true,
        'nombre' => true,
        'placa' => true,
        'telefono' => true,
        'correo' => true,
        'estatus' => true,
        'nota' => true
    ];
}
