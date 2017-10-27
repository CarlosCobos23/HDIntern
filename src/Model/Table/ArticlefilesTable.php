<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articlefiles Model
 *
 * @property \App\Model\Table\ArticlesTable|\Cake\ORM\Association\BelongsTo $Articles
 *
 * @method \App\Model\Entity\Articlefile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Articlefile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Articlefile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Articlefile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Articlefile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Articlefile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Articlefile findOrCreate($search, callable $callback = null, $options = [])
 */
class ArticlefilesTable extends Table
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

        $this->setTable('articlefiles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Articles', [
            'foreignKey' => 'article_id'
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
        $rules->add($rules->existsIn(['article_id'], 'Articles'));

        return $rules;
    }
}
