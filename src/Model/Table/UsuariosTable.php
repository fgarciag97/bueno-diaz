<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosTable extends Table
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

        $this->setTable('usuarios');
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
            ->integer('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        $validator
            ->scalar('letra')
            ->maxLength('letra', 1)
            ->requirePresence('letra', 'create')
            ->notEmptyString('letra');

        $validator
            ->scalar('nombres')
            ->requirePresence('nombres', 'create')
            ->notEmptyString('nombres');

        $validator
            ->scalar('correo')
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo');

        $validator
            ->scalar('password')
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('movil')
            ->allowEmptyString('movil');

        $validator
            ->scalar('fijo')
            ->allowEmptyString('fijo');

        $validator
            ->scalar('direccion')
            ->allowEmptyString('direccion');

        $validator
            ->date('fecha_registro')
            ->requirePresence('fecha_registro', 'create')
            ->notEmptyDate('fecha_registro');

        $validator
            ->integer('privilegio')
            ->requirePresence('privilegio', 'create')
            ->notEmptyString('privilegio');

        $validator
            ->boolean('estatus')
            ->allowEmptyString('estatus');

        $validator
            ->scalar('nota')
            ->allowEmptyString('nota');

         $validator
            ->scalar('placa')
            ->allowEmptyString('placa');

            $validator
            ->scalar('password2')
            ->allowEmptyString('password2');

            $validator
            ->scalar('apellidos')
            ->allowEmptyString('apellidos');

            $validator
            ->scalar('city')
            ->allowEmptyString('city');

            $validator
            ->scalar('state')
            ->allowEmptyString('state');

            $validator
            ->scalar('code')
            ->allowEmptyString('code');

            $validator
            ->scalar('movil2')
            ->allowEmptyString('movil2');

            $validator
            ->scalar('company')
            ->allowEmptyString('company');

            $validator
            ->scalar('condiciones')
            ->allowEmptyString('condiciones');
            //nuevo jf
          //  ->add('correo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
          //  ->add('company', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
            //fin
        return $validator;
    }
}
