<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StockmovesDetails Model
 *
 * @property \App\Model\Table\StockmovesTable|\Cake\ORM\Association\BelongsTo $Stockmoves
 * @property \App\Model\Table\ItemsTable|\Cake\ORM\Association\BelongsTo $Items
 * @property \App\Model\Table\ItemcodesTable|\Cake\ORM\Association\BelongsTo $Itemcodes
 *
 * @method \App\Model\Entity\StockmovesDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\StockmovesDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\StockmovesDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StockmovesDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StockmovesDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StockmovesDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\StockmovesDetail findOrCreate($search, callable $callback = null, $options = [])
 */
class StockmovesDetailsTable extends Table
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

        $this->setTable('stockmoves_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Stockmoves', [
            'foreignKey' => 'stockmove_id'
        ]);
        $this->belongsTo('Items', [
            'foreignKey' => 'item_id'
        ]);
        $this->belongsTo('Itemcodes', [
            'foreignKey' => 'itemcode_id'
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
            ->dateTime('deliverydate')
            ->requirePresence('deliverydate', 'create')
            ->notEmpty('deliverydate');

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
        $rules->add($rules->existsIn(['stockmove_id'], 'Stockmoves'));
        $rules->add($rules->existsIn(['item_id'], 'Items'));
        $rules->add($rules->existsIn(['itemcode_id'], 'Itemcodes'));

        return $rules;
    }
}
