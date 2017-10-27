<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hdtemplate Model
 *
 * @property \App\Model\Table\HdcategoriesTable|\Cake\ORM\Association\BelongsTo $Hdcategories
 *
 * @method \App\Model\Entity\Hdtemplate get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hdtemplate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hdtemplate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hdtemplate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hdtemplate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hdtemplate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hdtemplate findOrCreate($search, callable $callback = null, $options = [])
 */
class HdtemplateTable extends Table
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

        $this->setTable('hdtemplate');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Hdcategories', [
            'foreignKey' => 'hdcategory_id',
            'joinType' => 'INNER'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

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
        $rules->add($rules->existsIn(['hdcategory_id'], 'Hdcategories'));

        return $rules;
    }
}
