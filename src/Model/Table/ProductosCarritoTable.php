<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductosCarrito Model
 *
 * @method \App\Model\Entity\ProductosCarrito get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductosCarrito newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductosCarrito[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductosCarrito|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductosCarrito saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductosCarrito patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductosCarrito[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductosCarrito findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductosCarritoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('productos_carrito');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('id_carrito')
            ->allowEmptyString('id_carrito');

        $validator
            ->integer('id_producto')
            ->requirePresence('id_producto', 'create')
            ->notEmptyString('id_producto');

        $validator
            ->integer('cantidad')
            ->notEmptyString('cantidad');

        return $validator;
    }
}
