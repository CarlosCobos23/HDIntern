<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArticlesRoles Model
 *
 * @property \App\Model\Table\ArticlesTable|\Cake\ORM\Association\BelongsTo $Articles
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 *
 * @method \App\Model\Entity\ArticlesRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArticlesRole newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArticlesRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArticlesRole|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArticlesRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArticlesRole[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArticlesRole findOrCreate($search, callable $callback = null, $options = [])
 */
class ArticlesRolesTable extends Table
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

        $this->setTable('articles_roles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Articles', [
            'foreignKey' => 'article_id'
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id'
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
        $rules->add($rules->existsIn(['article_id'], 'Articles'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }
}
