<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estatus Model
 *
 * @method \App\Model\Entity\Estatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estatus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estatus findOrCreate($search, callable $callback = null, $options = [])
 */
class EstatusTable extends Table
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

        $this->setTable('estatus');
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
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion')
            ->add('denominacion', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['denominacion']));

        return $rules;
    }
}
