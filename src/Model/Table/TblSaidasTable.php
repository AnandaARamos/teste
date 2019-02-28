<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblSaidas Model
 *
 * @property \Cake\ORM\Association\HasMany $TblSaidasProdutos
 *
 * @method \App\Model\Entity\TblSaida get($primaryKey, $options = [])
 * @method \App\Model\Entity\TblSaida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TblSaida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TblSaida|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblSaida|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblSaida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TblSaida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TblSaida findOrCreate($search, callable $callback = null, $options = [])
 */
class TblSaidasTable extends Table
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

        $this->setTable('tbl_saidas');
        $this->setDisplayField('saida_id');
        $this->setPrimaryKey('saida_id');

        $this->hasMany('TblSaidasProdutos', [
            'foreignKey' => 'saida_id'
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
            ->integer('saida_id')
            ->allowEmptyString('saida_id', 'create');

        $validator
            ->dateTime('saida_datahora')
            ->requirePresence('saida_datahora', 'create')
            ->allowEmptyDateTime('saida_datahora', false);

        $validator
            ->integer('saida_numero_nota')
            ->requirePresence('saida_numero_nota', 'create')
            ->allowEmptyString('saida_numero_nota', false);

        return $validator;
    }
}
