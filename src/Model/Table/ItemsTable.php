<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 *
 * @property \App\Model\Table\ItemcategoriesTable|\Cake\ORM\Association\BelongsTo $Itemcategories
 * @property \App\Model\Table\CurrenciesTable|\Cake\ORM\Association\BelongsTo $Currencies
 * @property \App\Model\Table\BrandsTable|\Cake\ORM\Association\BelongsTo $Brands
 * @property \App\Model\Table\ItemcodesTable|\Cake\ORM\Association\HasMany $Itemcodes
 * @property \App\Model\Table\StockmovesDetailsTable|\Cake\ORM\Association\HasMany $StockmovesDetails
 * @property \App\Model\Table\StocksTable|\Cake\ORM\Association\HasMany $Stocks
 *
 * @method \App\Model\Entity\Item get($primaryKey, $options = [])
 * @method \App\Model\Entity\Item newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Item[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Item[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item findOrCreate($search, callable $callback = null, $options = [])
 */
class ItemsTable extends Table
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

        $this->setTable('items');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Itemcategories', [
            'foreignKey' => 'itemcategory_id'
        ]);
        $this->belongsTo('Currencies', [
            'foreignKey' => 'currency_id'
        ]);
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id'
        ]);
        $this->hasMany('Itemcodes', [
            'foreignKey' => 'item_id'
        ]);
        $this->hasMany('StockmovesDetails', [
            'foreignKey' => 'item_id'
        ]);
        $this->hasMany('Stocks', [
            'foreignKey' => 'item_id'
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

        $validator
            ->scalar('model')
            ->allowEmpty('model');

        $validator
            ->scalar('color')
            ->allowEmpty('color');

        $validator
            ->decimal('unit_cost')
            ->allowEmpty('unit_cost');

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
        $rules->add($rules->existsIn(['itemcategory_id'], 'Itemcategories'));
        $rules->add($rules->existsIn(['currency_id'], 'Currencies'));
        $rules->add($rules->existsIn(['brand_id'], 'Brands'));

        return $rules;
    }
}
