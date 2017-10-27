<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Positionbranches Model
 *
 * @property \App\Model\Table\BranchesTable|\Cake\ORM\Association\BelongsTo $Branches
 * @property \App\Model\Table\PositionsTable|\Cake\ORM\Association\BelongsTo $Positions
 * @property \App\Model\Table\ItemcodesTable|\Cake\ORM\Association\HasMany $Itemcodes
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Positionbranch get($primaryKey, $options = [])
 * @method \App\Model\Entity\Positionbranch newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Positionbranch[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Positionbranch|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Positionbranch patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Positionbranch[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Positionbranch findOrCreate($search, callable $callback = null, $options = [])
 */
class PositionbranchesTable extends Table
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

        $this->setTable('positionbranches');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Branches', [
            'foreignKey' => 'branch_id'
        ]);
        $this->belongsTo('Positions', [
            'foreignKey' => 'position_id'
        ]);
        $this->hasMany('Itemcodes', [
            'foreignKey' => 'positionbranch_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'positionbranch_id'
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
        $rules->add($rules->existsIn(['branch_id'], 'Branches'));
        $rules->add($rules->existsIn(['position_id'], 'Positions'));

        return $rules;
    }
}
