<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Branchgroups Model
 *
 * @property \App\Model\Table\BranchesTable|\Cake\ORM\Association\HasMany $Branches
 *
 * @method \App\Model\Entity\Branchgroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\Branchgroup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Branchgroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Branchgroup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Branchgroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Branchgroup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Branchgroup findOrCreate($search, callable $callback = null, $options = [])
 */
class BranchgroupsTable extends Table
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

        $this->setTable('branchgroups');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Branches', [
            'foreignKey' => 'branchgroup_id'
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
}
