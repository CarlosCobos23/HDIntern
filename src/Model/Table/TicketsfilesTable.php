<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ticketsfiles Model
 *
 * @property \App\Model\Table\TicketsTable|\Cake\ORM\Association\BelongsTo $Tickets
 *
 * @method \App\Model\Entity\Ticketsfile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ticketsfile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ticketsfile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ticketsfile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ticketsfile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ticketsfile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ticketsfile findOrCreate($search, callable $callback = null, $options = [])
 */
class TicketsfilesTable extends Table
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

        $this->setTable('ticketsfiles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tickets', [
            'foreignKey' => 'ticket_id'
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
        $rules->add($rules->existsIn(['ticket_id'], 'Tickets'));

        return $rules;
    }
}
