<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carrito Model
 *
 * @property \App\Model\Table\ProductosTable|\Cake\ORM\Association\BelongsToMany $Productos
 *
 * @method \App\Model\Entity\Carrito get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carrito newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Carrito[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carrito|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carrito saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carrito patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carrito[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carrito findOrCreate($search, callable $callback = null, $options = [])
 */
class CarritoTable extends Table
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

        $this->setTable('carrito');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Productos', [
            'foreignKey' => 'carrito_id',
            'targetForeignKey' => 'producto_id',
            'joinTable' => 'carrito_productos'
        ]);
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
            ->integer('id_usuario')
            ->requirePresence('id_usuario', 'create')
            ->notEmptyString('id_usuario');

        $validator
            ->time('hora')
            ->requirePresence('hora', 'create')
            ->notEmptyTime('hora');

        $validator
            ->date('fecha')
            ->notEmptyDate('fecha');

        $validator
            ->integer('estatus')
            ->notEmptyString('estatus');

        $validator
            ->integer('id_cuenta')
            ->allowEmptyString('id_cuenta');

        $validator
            ->scalar('referencia')
            ->allowEmptyString('referencia');

        $validator
            ->date('fecha_pago')
            ->allowEmptyDate('fecha_pago');

        $validator
            ->scalar('concepto')
            ->allowEmptyString('concepto');

        $validator
            ->scalar('direccion_envio')
            ->allowEmptyString('direccion_envio');

        $validator
            ->scalar('motivo')
            ->allowEmptyString('motivo');

        $validator
            ->date('fecha_asignado')
            ->allowEmptyDate('fecha_asignado');

        $validator
            ->time('hora_asignado')
            ->allowEmptyTime('hora_asignado');

        $validator
            ->date('fecha_remitido')
            ->allowEmptyDate('fecha_remitido');

        $validator
            ->time('hora_remitido')
            ->allowEmptyTime('hora_remitido');

        $validator
            ->date('fecha_entrega')
            ->allowEmptyDate('fecha_entrega');

        $validator
            ->time('hora_entrega')
            ->allowEmptyTime('hora_entrega');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->decimal('monto_bs')
            ->allowEmptyString('monto_bs');

        return $validator;
    }
}
