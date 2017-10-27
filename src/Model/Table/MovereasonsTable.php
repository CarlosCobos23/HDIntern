<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movereasons Model
 *
 * @property \App\Model\Table\MovereasontemplatesTable|\Cake\ORM\Association\HasMany $Movereasontemplates
 * @property \App\Model\Table\StockmovesTable|\Cake\ORM\Association\HasMany $Stockmoves
 *
 * @method \App\Model\Entity\Movereason get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movereason newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Movereason[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movereason|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movereason patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movereason[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movereason findOrCreate($search, callable $callback = null, $options = [])
 */
class MovereasonsTable extends Table
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

        $this->setTable('movereasons');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Movereasontemplates', [
            'foreignKey' => 'movereason_id'
        ]);
        $this->hasMany('Stockmoves', [
            'foreignKey' => 'movereason_id'
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
            ->scalar('factor')
            ->allowEmpty('factor');

        return $validator;
    }
}
