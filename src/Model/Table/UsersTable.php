<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\PositionbranchesTable|\Cake\ORM\Association\BelongsTo $Positionbranches
 * @property \App\Model\Table\StatususersTable|\Cake\ORM\Association\BelongsTo $Statususers
 * @property \App\Model\Table\GroupsTable|\Cake\ORM\Association\BelongsTo $Groups
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\ArticlesTable|\Cake\ORM\Association\HasMany $Articles
 * @property \App\Model\Table\InternalnotesTable|\Cake\ORM\Association\HasMany $Internalnotes
 * @property \App\Model\Table\MovereasontemplatesTable|\Cake\ORM\Association\HasMany $Movereasontemplates
 * @property \App\Model\Table\PublicnotesTable|\Cake\ORM\Association\HasMany $Publicnotes
 * @property \App\Model\Table\StockmovesTable|\Cake\ORM\Association\HasMany $Stockmoves
 * @property \App\Model\Table\TicketlogsTable|\Cake\ORM\Association\HasMany $Ticketlogs
 * @property \App\Model\Table\TicketsTable|\Cake\ORM\Association\HasMany $Tickets
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Positionbranches', [
            'foreignKey' => 'positionbranch_id'
        ]);
        $this->belongsTo('Statususers', [
            'foreignKey' => 'statususer_id'
        ]);
        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id'
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id'
        ]);
        $this->hasMany('Articles', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Internalnotes', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Movereasontemplates', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Publicnotes', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Stockmoves', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Ticketlogs', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'user_id'
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
            ->scalar('username')            ->requirePresence('username', 'create')            ->notEmpty('username');
        $validator
            ->scalar('name')            ->allowEmpty('name');
        $validator
            ->scalar('last_name')            ->allowEmpty('last_name');
        $validator
            ->scalar('password')            ->allowEmpty('password');
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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['positionbranch_id'], 'Positionbranches'));
        $rules->add($rules->existsIn(['statususer_id'], 'Statususers'));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }
}
