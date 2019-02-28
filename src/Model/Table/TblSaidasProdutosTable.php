<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblSaidasProdutos Model
 *
 * @property \App\Model\Table\TblSaidasTable|\Cake\ORM\Association\BelongsTo $TblSaidas
 * @property \App\Model\Table\TblProdutosTable|\Cake\ORM\Association\BelongsTo $TblProdutos
 *
 * @method \App\Model\Entity\TblSaidasProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\TblSaidasProduto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TblSaidasProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TblSaidasProduto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblSaidasProduto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblSaidasProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TblSaidasProduto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TblSaidasProduto findOrCreate($search, callable $callback = null, $options = [])
 */
class TblSaidasProdutosTable extends Table
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

        $this->setTable('tbl_saidas_produtos');
        $this->setDisplayField('saida_produto_id');
        $this->setPrimaryKey('saida_produto_id');

        $this->belongsTo('TblSaidas', [
            'foreignKey' => 'saida_id',
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
            ->integer('saida_produto_id')
            ->allowEmptyString('saida_produto_id', 'create');

        $validator
            ->integer('saida_produto_quantidade')
            ->requirePresence('saida_produto_quantidade', 'create')
            ->allowEmptyString('saida_produto_quantidade', false);

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
        $rules->add($rules->existsIn(['saida_id'], 'TblSaidas'));
        $rules->add($rules->existsIn(['produto_id'], 'TblProdutos'));

        return $rules;
    }
}
