<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Itemcodes Model
 *
 * @property \App\Model\Table\ItemsTable|\Cake\ORM\Association\BelongsTo $Items
 * @property \App\Model\Table\InvoicesTable|\Cake\ORM\Association\BelongsTo $Invoices
 * @property \App\Model\Table\StatusitemsTable|\Cake\ORM\Association\BelongsTo $Statusitems
 * @property \App\Model\Table\PositionbranchesTable|\Cake\ORM\Association\BelongsTo $Positionbranches
 * @property \App\Model\Table\StockmovesDetailsTable|\Cake\ORM\Association\HasMany $StockmovesDetails
 * @property \App\Model\Table\TicketsTable|\Cake\ORM\Association\HasMany $Tickets
 *
 * @method \App\Model\Entity\Itemcode get($primaryKey, $options = [])
 * @method \App\Model\Entity\Itemcode newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Itemcode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Itemcode|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Itemcode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Itemcode[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Itemcode findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItemcodesTable extends Table
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

        $this->setTable('itemcodes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Items', [
            'foreignKey' => 'item_id'
        ]);
        $this->belongsTo('Invoices', [
            'foreignKey' => 'invoice_id'
        ]);
        $this->belongsTo('Statusitems', [
            'foreignKey' => 'statusitem_id'
        ]);
        $this->belongsTo('Positionbranches', [
            'foreignKey' => 'positionbranch_id'
        ]);
        $this->hasMany('StockmovesDetails', [
            'foreignKey' => 'itemcode_id'
        ]);
        $this->hasMany('Tickets', [
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
            ->scalar('serial')
            ->allowEmpty('serial');

        $validator
            ->date('warranty')
            ->allowEmpty('warranty');

        $validator
            ->scalar('service_tag')
            ->allowEmpty('service_tag');

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
        $rules->add($rules->existsIn(['item_id'], 'Items'));
        $rules->add($rules->existsIn(['invoice_id'], 'Invoices'));
        $rules->add($rules->existsIn(['statusitem_id'], 'Statusitems'));
        $rules->add($rules->existsIn(['positionbranch_id'], 'Positionbranches'));

        return $rules;
    }
}
