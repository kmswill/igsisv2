<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MovieCountries Model
 *
 * @property \Cake\ORM\Association\HasMany $Cinemas
 *
 * @method \App\Model\Entity\MovieCountry get($primaryKey, $options = [])
 * @method \App\Model\Entity\MovieCountry newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MovieCountry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MovieCountry|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MovieCountry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MovieCountry[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MovieCountry findOrCreate($search, callable $callback = null)
 */
class MovieCountriesTable extends Table
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

        $this->table('movie_countries');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Cinemas', [
            'foreignKey' => 'movie_country_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['name']));

        return $rules;
    }
}
