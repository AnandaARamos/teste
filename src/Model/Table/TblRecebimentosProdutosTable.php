<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblRecebimentosProdutos Model
 *
 * @property \App\Model\Table\TblRecebimentosTable|\Cake\ORM\Association\BelongsTo $TblRecebimentos
 * @property \App\Model\Table\TblProdutosTable|\Cake\ORM\Association\BelongsTo $TblProdutos
 *
 * @method \App\Model\Entity\TblRecebimentosProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\TblRecebimentosProduto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TblRecebimentosProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TblRecebimentosProduto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblRecebimentosProduto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblRecebimentosProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TblRecebimentosProduto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TblRecebimentosProduto findOrCreate($search, callable $callback = null, $options = [])
 */
class TblRecebimentosProdutosTable extends Table
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

        $this->setTable('tbl_recebimentos_produtos');
        $this->setDisplayField('recebimento_produto_id');
        $this->setPrimaryKey('recebimento_produto_id');

        $this->belongsTo('TblRecebimentos', [
            'foreignKey' => 'recebimento_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TblProdutos', [
            'foreignKey' => 'produto_id',
            'joinType' => 'INNER'
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
            ->integer('recebimento_produto_id')
            ->allowEmptyString('recebimento_produto_id', 'create');

        $validator
            ->integer('recebimento_produto_quantidade')
            ->requirePresence('recebimento_produto_quantidade', 'create')
            ->allowEmptyString('recebimento_produto_quantidade', false);

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
        $rules->add($rules->existsIn(['recebimento_id'], 'TblRecebimentos'));
        $rules->add($rules->existsIn(['produto_id'], 'TblProdutos'));

        return $rules;
    }
}
