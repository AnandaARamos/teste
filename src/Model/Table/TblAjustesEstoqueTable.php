<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblAjustesEstoque Model
 *
 * @property \App\Model\Table\TblProdutosTable|\Cake\ORM\Association\BelongsTo $TblProdutos
 *
 * @method \App\Model\Entity\TblAjustesEstoque get($primaryKey, $options = [])
 * @method \App\Model\Entity\TblAjustesEstoque newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TblAjustesEstoque[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TblAjustesEstoque|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblAjustesEstoque|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblAjustesEstoque patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TblAjustesEstoque[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TblAjustesEstoque findOrCreate($search, callable $callback = null, $options = [])
 */
class TblAjustesEstoqueTable extends Table
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

        $this->setTable('tbl_ajustes_estoque');
        $this->setDisplayField('ajuste_id');
        $this->setPrimaryKey('ajuste_id');

        $this->belongsTo('TblProdutos', [
            'foreignKey' => 'produto_id'
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
            ->integer('ajuste_id')
            ->allowEmptyString('ajuste_id', 'create');

        $validator
            ->scalar('ajuste_tipo')
            ->requirePresence('ajuste_tipo', 'create')
            ->allowEmptyString('ajuste_tipo', false);

        $validator
            ->dateTime('ajuste_datahora')
            ->requirePresence('ajuste_datahora', 'create')
            ->allowEmptyDateTime('ajuste_datahora', false);

        $validator
            ->scalar('ajuste_motivo')
            ->maxLength('ajuste_motivo', 500)
            ->requirePresence('ajuste_motivo', 'create')
            ->allowEmptyString('ajuste_motivo', false);

        $validator
            ->integer('ajuste_quantidade')
            ->allowEmptyString('ajuste_quantidade');

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
        $rules->add($rules->existsIn(['produto_id'], 'TblProdutos'));

        return $rules;
    }
}
