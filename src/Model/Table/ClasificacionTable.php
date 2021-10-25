<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clasificacion Model
 *
 * @method \App\Model\Entity\Clasificacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Clasificacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Clasificacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Clasificacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clasificacion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clasificacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Clasificacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Clasificacion findOrCreate($search, callable $callback = null, $options = [])
 */
class ClasificacionTable extends Table
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

        $this->setTable('clasificacion');
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
            ->requirePresence('id_carrito', 'create')
            ->notEmptyString('id_carrito');

        $validator
            ->integer('estrellas')
            ->allowEmptyString('estrellas');

        $validator
            ->scalar('comentario')
            ->allowEmptyString('comentario');

        return $validator;
    }
}
