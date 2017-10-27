<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stockmoves Model
 *
 * @property \App\Model\Table\WarehousesTable|\Cake\ORM\Association\BelongsTo $Warehouses
 * @property \App\Model\Table\MovereasonsTable|\Cake\ORM\Association\BelongsTo $Movereasons
 * @property \App\Model\Table\ShippersTable|\Cake\ORM\Association\BelongsTo $Shippers
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property |\Cake\ORM\Association\BelongsTo $ParentStockmoves
 * @property |\Cake\ORM\Association\HasMany $ChildStockmoves
 * @property \App\Model\Table\StockmovesDetailsTable|\Cake\ORM\Association\HasMany $StockmovesDetails
 *
 * @method \App\Model\Entity\Stockmove get($primaryKey, $options = [])
 * @method \App\Model\Entity\Stockmove newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Stockmove[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Stockmove|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Stockmove patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Stockmove[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Stockmove findOrCreate($search, callable $callback = null, $options = [])
 */
class StockmovesTable extends Table
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

        $this->setTable('stockmoves');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Warehouses', [
            'foreignKey' => 'warehouse_id'
        ]);
        $this->belongsTo('Movereasons', [
            'foreignKey' => 'movereason_id'
        ]);
        $this->belongsTo('Shippers', [
            'foreignKey' => 'shipper_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('ParentStockmoves', [
            'className' => 'Stockmoves',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildStockmoves', [
            'className' => 'Stockmoves',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('StockmovesDetails', [
            'foreignKey' => 'stockmove_id'
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
            ->integer('warehouse_2')
            ->allowEmpty('warehouse_2');

        $validator
            ->integer('receiver')
            ->allowEmpty('receiver');

        $validator
            ->scalar('receiver_sign')
            ->allowEmpty('receiver_sign');

        $validator
            ->scalar('guide_number')
            ->allowEmpty('guide_number');

        $validator
            ->integer('packages')
            ->allowEmpty('packages');

        $validator
            ->scalar('notes')
            ->allowEmpty('notes');

        $validator
            ->requirePresence('confirmed', 'create')
            ->notEmpty('confirmed');

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
        $rules->add($rules->existsIn(['warehouse_id'], 'Warehouses'));
        $rules->add($rules->existsIn(['movereason_id'], 'Movereasons'));
        $rules->add($rules->existsIn(['shipper_id'], 'Shippers'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['parent_id'], 'ParentStockmoves'));

        return $rules;
    }
}
