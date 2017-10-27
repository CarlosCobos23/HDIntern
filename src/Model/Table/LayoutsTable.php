<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Layouts Model
 *
 * @property \App\Model\Table\BranchesTable|\Cake\ORM\Association\BelongsTo $Branches
 * @property \App\Model\Table\PositionsTable|\Cake\ORM\Association\BelongsTo $Positions
 * @property \App\Model\Table\LayoutcategoriesTable|\Cake\ORM\Association\HasMany $Layoutcategories
 *
 * @method \App\Model\Entity\Layout get($primaryKey, $options = [])
 * @method \App\Model\Entity\Layout newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Layout[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Layout|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Layout patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Layout[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Layout findOrCreate($search, callable $callback = null, $options = [])
 */
class LayoutsTable extends Table
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

        $this->setTable('layouts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Branches', [
            'foreignKey' => 'branch_id'
        ]);
        $this->belongsTo('Positions', [
            'foreignKey' => 'position_id'
        ]);
        $this->hasMany('Layoutcategories', [
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
            ->integer('layout')
            ->allowEmpty('layout');

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
        $rules->add($rules->existsIn(['branch_id'], 'Branches'));
        $rules->add($rules->existsIn(['position_id'], 'Positions'));

        return $rules;
    }
}
