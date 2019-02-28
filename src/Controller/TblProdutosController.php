<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\TblSaidasTable;
use App\Model\Table\TblSaidasProdutosTable;
use App\Model\Table\TblRecebimentosProdutosTable;
use App\Model\Table\TblRecebimentosTable;
use App\Model\Table\TblAjustesEsoqueTable;

/**
 * Class TblProdutosController
 * @package App\Controller
 * @property \App\Model\Table\TblProdutosTable $TblProdutos
 * @property TblSaidasTable $TblSaidas
 * @property TblSaidasProdutosTable $TblSaidasProdutos
 * @property TblSaidasTable $TblRecebimentos
 * @property TblSaidasProdutosTable $TblRecebimentosProdutos
 * @property TblSaidasProdutosTable $TblAjustesEstoque
 */
class TblProdutosController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        /**
         * Carregando componentes
         */
        $this->loadModel('TblSaidas');
        $this->loadModel('TblRecebimentos');
        $this->loadModel('TblSaidasProdutos');
        $this->loadModel('TblRecebimentosProdutos');
        $this->loadModel('TblAjustesEstoque');
    }

    /**
     * @return array
     */
    public function saldo_estoque()
    {
        if ($this->request->is('get'))
        {
            $tblProdutos = $this->TblProdutos->find('all');

            $data = [];

            foreach ($tblProdutos as $produto) {
                $data = [
                    'codigo' => $produto->produto_id,
                    'descricao' => $produto->produto_descricao,
                    'saldo' => $produto->produto_quantidade_estoque
                ];
            }

            $saldo_estoque = [
                '200:' => 'Operação bem sucedida',
                'produtos' => $data
            ];

            return $saldo_estoque;
        } else {
            $this->Flash->error(__('405: Requisição Inválida.'));
        }
    }

    /**
     * @param $id
     * @return array|\Cake\Datasource\EntityInterface|null
     */
    public function rastreamento_produto($id)
    {
        if ($this->request->is('get'))
        {
            if($id !== null)
            {
                $produto = $this->TblProdutos
                    ->find('all')
                    ->where(['produto_id' => $id])
                    ->first();

                //$produto = $produto->toArray();

                if($produto !== null)
                {
                    $saidas = $this->TblSaidasProdutos
                        ->find('all')
                        ->contain(['TblSaidas'])
                        ->where(['produto_id' => $id]);

                    $entradas = $this->TblRecebimentosProdutos
                        ->find('all')
                        ->contain(['TblRecebimentos'])
                        ->where(['produto_id' => $id]);

                    $ajustes_saidas = $this->TblAjustesEstoque
                        ->find('all')
                        ->where(['produto_id' => $id, 'ajuste_tipo' => 'S']);

                    $ajustes_entradas = $this->TblAjustesEstoque
                        ->find('all')
                        ->where(['produto_id' => $id, 'ajuste_tipo' => 'E']);

                    $produto = [
                        'codigo' => $id,
                        'descricao' => $produto->produto_descricao,
                        'movimentacoes' => 'i'
                    ];
                    return $produto;
                } else {
                    $this->Flash->error(__('404: Produto não encontrado.'));
                }
            } else {
                $this->Flash->error(__('400: Código Inválido.'));
            }
        } else {
            $this->Flash->error(__('405: Requisição Inválida.'));
        }
    }
}
