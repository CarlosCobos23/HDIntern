<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Branches Model
 *
 * @property \App\Model\Table\BranchgroupsTable|\Cake\ORM\Association\BelongsTo $Branchgroups
 * @property \App\Model\Table\LayoutsTable|\Cake\ORM\Association\HasMany $Layouts
 * @property \App\Model\Table\PositionbranchesTable|\Cake\ORM\Association\HasMany $Positionbranches
 * @property \App\Model\Table\WarehousesTable|\Cake\ORM\Association\HasMany $Warehouses
 *
 * @method \App\Model\Entity\Branch get($primaryKey, $options = [])
 * @method \App\Model\Entity\Branch newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Branch[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Branch|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Branch patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Branch[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Branch findOrCreate($search, callable $callback = null, $options = [])
 */
class BranchesTable extends Table
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

        $this->setTable('branches');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Branchgroups', [
            'foreignKey' => 'branchgroup_id'
        ]);
        $this->hasMany('Layouts', [
            'foreignKey' => 'branch_id'
        ]);
        $this->hasMany('Positionbranches', [
            'foreignKey' => 'branch_id'
        ]);
        $this->hasMany('Warehouses', [
            'foreignKey' => 'branch_id'
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
        $rules->add($rules->existsIn(['branchgroup_id'], 'Branchgroups'));

        return $rules;
    }
}
