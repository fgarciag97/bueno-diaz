<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tasas Model
 *
 * @method \App\Model\Entity\Tasa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tasa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tasa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tasa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tasa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tasa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tasa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tasa findOrCreate($search, callable $callback = null, $options = [])
 */
class TasasTable extends Table
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

        $this->setTable('tasas');
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
            ->date('fecha')
            ->allowEmptyDate('fecha');

        $validator
            ->decimal('monto')
            ->requirePresence('monto', 'create')
            ->notEmptyString('monto');

        return $validator;
    }
}
