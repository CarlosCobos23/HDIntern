<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statususers Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Statususer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Statususer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Statususer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Statususer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Statususer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Statususer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Statususer findOrCreate($search, callable $callback = null, $options = [])
 */
class StatususersTable extends Table
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

        $this->setTable('statususers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'statususer_id'
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
