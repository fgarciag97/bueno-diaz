<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property int $id_usuario
 * @property int $id_grupo
 * @property string $denominacion
 * @property string $descripcion
 * @property float|null $precio
 * @property string|null $photo
 * @property string|null $photo_dir
 */
class Producto extends Entity
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
        'id_grupo' => true,
        'denominacion' => true,
        'descripcion' => true,
        'precio' => true,
        'photo' => true,
        'photo_dir' => false,
        'codigo' => false,
        'promocion' => false,
        'precio_promocion' => false,
        'id_subcategoria' => false,
        'status' => false
    ];
}
