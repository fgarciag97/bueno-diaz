<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property int $cedula
 * @property string $letra
 * @property string $nombres
 * @property string $correo
 * @property string $password
 * @property string|null $movil
 * @property string|null $fijo
 * @property int $id_municipio
 * @property int $id_parroquia
 * @property string|null $direccion
 * @property \Cake\I18n\FrozenDate $fecha_registro
 * @property int $privilegio
 * @property bool|null $estatus
 * @property string|null $nota
 */
class Usuario extends Entity
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
        'cedula' => true,
        'letra' => true,
        'nombres' => true,
        'correo' => true,
        'password' => true,
        'movil' => true,
        'fijo' => true,
        'direccion' => true,
        'fecha_registro' => true,
        'privilegio' => true,
        'estatus' => true,
        'nota' => true,
        'placa' => true,
        'fecha_disponible' => true,
        'disponible' => true,
        'password2' => true,
        'apellidos' => true,
        'city' => true,
        'state' => true,
        'code' => true,
        'movil2' => true,
        'company' => true,
        'condiciones' => true,
        'autenticado' => true,
        'cod_autenticado' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value){
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
