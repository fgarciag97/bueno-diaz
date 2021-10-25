<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movimientos Model
 *
 * @method \App\Model\Entity\Movimiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movimiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Movimiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimiento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento findOrCreate($search, callable $callback = null, $options = [])
 */
class MovimientosTable extends Table
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

        $this->setTable('movimientos');
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
            ->integer('id_producto')
            ->requirePresence('id_producto', 'create')
            ->notEmptyString('id_producto');

        $validator
            ->integer('cantidad')
            ->notEmptyString('cantidad');

        $validator
            ->decimal('precio')
            ->allowEmptyString('precio');

        $validator
            ->date('fecha')
            ->notEmptyDate('fecha');

        $validator
            ->integer('tipo_movimiento')
            ->allowEmptyString('tipo_movimiento');

        $validator
            ->integer('id_carrito')
            ->allowEmptyString('id_carrito');

        return $validator;
    }
}
