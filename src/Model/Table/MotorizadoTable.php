<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Motorizado Model
 *
 * @method \App\Model\Entity\Motorizado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Motorizado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Motorizado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Motorizado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Motorizado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Motorizado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Motorizado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Motorizado findOrCreate($search, callable $callback = null, $options = [])
 */
class MotorizadoTable extends Table
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

        $this->setTable('motorizado');
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
            ->scalar('letra')
            ->maxLength('letra', 1)
            ->requirePresence('letra', 'create')
            ->notEmptyString('letra');

        $validator
            ->scalar('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        $validator
            ->scalar('nombre')
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('placa')
            ->requirePresence('placa', 'create')
            ->notEmptyString('placa');

        $validator
            ->scalar('telefono')
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('correo')
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo');

        $validator
            ->boolean('estatus')
            ->allowEmptyString('estatus');

        $validator
            ->scalar('nota')
            ->allowEmptyString('nota');

        return $validator;
    }
}
