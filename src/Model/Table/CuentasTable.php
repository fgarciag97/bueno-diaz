<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cuentas Model
 *
 * @method \App\Model\Entity\Cuenta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cuenta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cuenta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cuenta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cuenta saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cuenta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cuenta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cuenta findOrCreate($search, callable $callback = null, $options = [])
 */
class CuentasTable extends Table
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

        $this->setTable('cuentas');
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
            ->integer('banco')
            ->requirePresence('banco', 'create')
            ->notEmptyString('banco');

        $validator
            ->scalar('numero_cuenta')
            ->allowEmptyString('numero_cuenta');

        $validator
            ->scalar('tipo_cuenta')
            ->allowEmptyString('tipo_cuenta');

        $validator
            ->scalar('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        $validator
            ->scalar('responsable')
            ->allowEmptyString('responsable');

        $validator
            ->scalar('telefono')
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('correo')
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo');

        $validator
            ->integer('id_usuario')
            ->requirePresence('id_usuario', 'create')
            ->notEmptyString('id_usuario');

        return $validator;
    }
}
