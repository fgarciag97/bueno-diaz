<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CarritoProductos Model
 *
 * @method \App\Model\Entity\CarritoProducto get($primaryKey, $options = [])
 * @method \App\Model\Entity\CarritoProducto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CarritoProducto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CarritoProducto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CarritoProducto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CarritoProducto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CarritoProducto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CarritoProducto findOrCreate($search, callable $callback = null, $options = [])
 */
class CarritoProductosTable extends Table
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

        $this->setTable('carrito_productos');
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

        $validator
            ->decimal('precio')
            ->notEmptyString('precio');

        return $validator;
    }
}
