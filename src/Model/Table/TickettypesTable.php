<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tickettypes Model
 *
 * @property \App\Model\Table\TicketsTable|\Cake\ORM\Association\HasMany $Tickets
 *
 * @method \App\Model\Entity\Tickettype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tickettype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tickettype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tickettype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tickettype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tickettype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tickettype findOrCreate($search, callable $callback = null, $options = [])
 */class TickettypesTable extends Table
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

        $this->setTable('tickettypes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Tickets', [
            'foreignKey' => 'tickettype_id'
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
            ->integer('id')            ->allowEmpty('id', 'create');
        $validator
            ->scalar('name')            ->allowEmpty('name');
        $validator
            ->integer('rank')            ->requirePresence('rank', 'create')            ->notEmpty('rank');
        $validator
            ->scalar('color')            ->requirePresence('color', 'create')            ->notEmpty('color');
        return $validator;
    }
}
