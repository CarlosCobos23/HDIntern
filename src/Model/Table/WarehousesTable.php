<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Warehouses Model
 *
 * @property \App\Model\Table\BranchesTable|\Cake\ORM\Association\BelongsTo $Branches
 * @property \App\Model\Table\StockmovesTable|\Cake\ORM\Association\HasMany $Stockmoves
 * @property \App\Model\Table\StocksTable|\Cake\ORM\Association\HasMany $Stocks
 *
 * @method \App\Model\Entity\Warehouse get($primaryKey, $options = [])
 * @method \App\Model\Entity\Warehouse newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Warehouse[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Warehouse|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Warehouse patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Warehouse[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Warehouse findOrCreate($search, callable $callback = null, $options = [])
 */
class WarehousesTable extends Table
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

        $this->setTable('warehouses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Branches', [
            'foreignKey' => 'branch_id'
        ]);
        $this->hasMany('Stockmoves', [
            'foreignKey' => 'warehouse_id'
        ]);
        $this->hasMany('Stocks', [
            'foreignKey' => 'warehouse_id'
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

        return $rules;
    }
}
