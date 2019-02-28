<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblProdutos Model
 *
 * @method \App\Model\Entity\TblProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\TblProduto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TblProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TblProduto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblProduto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TblProduto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TblProduto findOrCreate($search, callable $callback = null, $options = [])
 */
class TblProdutosTable extends Table
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

        $this->setTable('tbl_produtos');
        $this->setDisplayField('produto_id');
        $this->setPrimaryKey('produto_id');
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
            ->integer('produto_id')
            ->allowEmptyString('produto_id', 'create');

        $validator
            ->scalar('produto_descricao')
            ->maxLength('produto_descricao', 200)
            ->requirePresence('produto_descricao', 'create')
            ->allowEmptyString('produto_descricao', false);

        $validator
            ->integer('produto_quantidade_estoque')
            ->requirePresence('produto_quantidade_estoque', 'create')
            ->allowEmptyString('produto_quantidade_estoque', false);

        return $validator;
    }
}
