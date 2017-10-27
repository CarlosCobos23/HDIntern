<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Itemcategories Model
 *
 * @property \App\Model\Table\ItemcategoriesTable|\Cake\ORM\Association\BelongsTo $ParentItemcategories
 * @property \App\Model\Table\ItemcategoriesTable|\Cake\ORM\Association\HasMany $ChildItemcategories
 * @property \App\Model\Table\ItemsTable|\Cake\ORM\Association\HasMany $Items
 * @property \App\Model\Table\LayoutcategoriesTable|\Cake\ORM\Association\HasMany $Layoutcategories
 *
 * @method \App\Model\Entity\Itemcategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Itemcategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Itemcategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Itemcategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Itemcategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Itemcategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Itemcategory findOrCreate($search, callable $callback = null, $options = [])
 */
class ItemcategoriesTable extends Table
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

        $this->setTable('itemcategories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('ParentItemcategories', [
            'className' => 'Itemcategories',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildItemcategories', [
            'className' => 'Itemcategories',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Items', [
            'foreignKey' => 'itemcategory_id'
        ]);
        $this->hasMany('Layoutcategories', [
            'foreignKey' => 'itemcategory_id'
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
            ->scalar('name')
            ->allowEmpty('name');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentItemcategories'));

        return $rules;
    }
}
