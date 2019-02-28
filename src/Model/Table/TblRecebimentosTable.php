<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblRecebimentos Model
 *
 * @method \App\Model\Entity\TblRecebimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\TblRecebimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TblRecebimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TblRecebimento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblRecebimento|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblRecebimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TblRecebimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TblRecebimento findOrCreate($search, callable $callback = null, $options = [])
 */
class TblRecebimentosTable extends Table
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

        $this->setTable('tbl_recebimentos');
        $this->setDisplayField('recebimento_id');
        $this->setPrimaryKey('recebimento_id');
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
            ->integer('recebimento_id')
            ->allowEmptyString('recebimento_id', 'create');

        $validator
            ->dateTime('recebimento_datahora')
            ->requirePresence('recebimento_datahora', 'create')
            ->allowEmptyDateTime('recebimento_datahora', false);

        $validator
            ->integer('recebimento_numero_nota')
            ->requirePresence('recebimento_numero_nota', 'create')
            ->allowEmptyString('recebimento_numero_nota', false);

        return $validator;
    }
}
