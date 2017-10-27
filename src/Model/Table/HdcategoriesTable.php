<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hdcategories Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $ParentHdcategories
 * @property \App\Model\Table\ArticlesTable|\Cake\ORM\Association\HasMany $Articles
 * @property |\Cake\ORM\Association\HasMany $ChildHdcategories
 * @property |\Cake\ORM\Association\HasMany $Hdtemplate
 * @property \App\Model\Table\TicketsTable|\Cake\ORM\Association\HasMany $Tickets
 *
 * @method \App\Model\Entity\Hdcategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hdcategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hdcategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hdcategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hdcategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hdcategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hdcategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class HdcategoriesTable extends Table
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

        $this->setTable('hdcategories');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Tree');

        $this->belongsTo('ParentHdcategories', [
            'className' => 'Hdcategories',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Articles', [
            'foreignKey' => 'hdcategory_id'
        ]);
        $this->hasMany('ChildHdcategories', [
            'className' => 'Hdcategories',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Hdtemplate', [
            'foreignKey' => 'hdcategory_id'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'hdcategory_id'
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
            ->scalar('title')
            ->allowEmpty('title');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentHdcategories'));

        return $rules;
    }
}
