<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Layoutcategories Model
 *
 * @property \App\Model\Table\ItemcategoriesTable|\Cake\ORM\Association\BelongsTo $Itemcategories
 * @property \App\Model\Table\LayoutsTable|\Cake\ORM\Association\BelongsTo $Layouts
 *
 * @method \App\Model\Entity\Layoutcategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Layoutcategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Layoutcategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Layoutcategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Layoutcategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Layoutcategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Layoutcategory findOrCreate($search, callable $callback = null, $options = [])
 */
class LayoutcategoriesTable extends Table
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

        $this->setTable('layoutcategories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Itemcategories', [
            'foreignKey' => 'itemcategory_id'
        ]);
        $this->belongsTo('Layouts', [
            'foreignKey' => 'layout_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->integer('qty')
            ->allowEmpty('qty');

        $validator
            ->integer('compare')
            ->allowEmpty('compare');

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
        $rules->add($rules->existsIn(['itemcategory_id'], 'Itemcategories'));
        $rules->add($rules->existsIn(['layout_id'], 'Layouts'));

        return $rules;
    }
}
