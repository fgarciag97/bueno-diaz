<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productos Model
 *
 * @method \App\Model\Entity\Producto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Producto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Producto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Producto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Producto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductosTable extends Table
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

        $this->setTable('productos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        @$this->addBehavior('Proffer.Proffer', [
            'photo' => [    // The name of your upload field
                'root' => WWW_ROOT . 'productos', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photo_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'square' => [   // Define the prefix of your thumbnail
                        'w' => 300, // Width
                        'h' => 300, // Height
                        'jpeg_quality'  => 100
                    ]
                ],
                'thumbnailMethod' => 'gd'   // Options are Imagick or Gd
            ]
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
            ->integer('id_grupo')
            ->requirePresence('id_grupo', 'create')
            ->notEmptyString('id_grupo');
            
        $validator
            ->integer('id_subcategoria')
            ->requirePresence('id_subcategoria', 'create')
            ->notEmptyString('id_subcategoria');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->decimal('precio')
            ->allowEmptyString('precio');

        $validator
            ->allowEmptyString('photo');

        $validator
            ->allowEmptyString('codigo');

        $validator
            ->boolean('promocion')
            ->allowEmptyString('promocion');

        $validator
            ->decimal('precio_promocion')
            ->allowEmptyString('precio_promocion');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        return $validator;
    }
}
