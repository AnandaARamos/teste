<?php
namespace App\Controller;

use App\Controller\AppController;
use Rest\Controller\RestController;
use App\Model\Table\TblSaidasTable;
use App\Model\Table\TblSaidasProdutosTable;
use App\Model\Table\TblRecebimentosProdutosTable;
use App\Model\Table\TblRecebimentosTable;
use App\Model\Table\TblAjustesEstoqueTable;
use Cake\Collection\Collection;

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
    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 100,
        'fields' => [
            'produto_id', 'produto_quantidade_estoque', 'produto_descricao'
        ],
        'sortWhitelist' => [
            'produto_id', 'produto_quantidade_estoque', 'produto_descricao'
        ]
    ];

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
     *
     */
    public function saldoEstoque()
    {
        $this->autoRender = false;
        if ($this->request->is('get'))
        {
            $tblProdutos = $this->TblProdutos->find('all');

            $data = [];

            foreach ($tblProdutos as $produto)
            {
                $data[] = [
                    'codigo' => $produto->produto_id,
                    'descricao' => $produto->produto_descricao,
                    'saldo' => $produto->produto_quantidade_estoque
                ];
            }

            $saldo_estoque = [
                '200' => 'Operação bem sucedida',
                'produtos' => $data
            ];

            $resultJ = json_encode($saldo_estoque);
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
    }

    /**
     * @param $id
     * @return array|\Cake\Datasource\EntityInterface|null
     */
    public function rastreamentoProduto($id)
    {
        $this->autoRender = false;
        if ($this->request->is('get'))
        {
            if($id !== null)
            {
                $produto = $this->TblProdutos
                    ->find('all')
                    ->where(['produto_id' => $id])
                    ->first();

                if($produto !== null)
                {

                    $saidas = $this->TblSaidasProdutos
                        ->find('all')
                        ->where(['produto_id' => $id])
                        ->contain(['TblSaidas'])
                        ->select(['codigo_movimentacao' => 'TblSaidas.saida_id',
                            'data_hora_movimentacao' => 'TblSaidas.saida_datahora', 'quantidade_movimentada' => 'saida_produto_quantidade']);

                    $recebimentos = $this->TblRecebimentosProdutos
                        ->find('all')
                        ->where(['produto_id' => $id])
                        ->contain(['TblRecebimentos'])
                        ->select(['codigo_movimentacao' => 'TblRecebimentos.recebimento_id',
                            'data_hora_movimentacao' => 'TblRecebimentos.recebimento_datahora', 'quantidade_movimentada' => 'recebimento_produto_quantidade']);

                    $ajustes_entradas = $this->TblAjustesEstoque
                        ->find('all')
                        ->where(['produto_id' => $id, 'ajuste_tipo' => "E"])
                        ->select(['codigo_movimentacao' => 'ajuste_id',
                            'data_hora_movimentacao' => 'ajuste_datahora', 'quantidade_movimentada' => 'ajuste_quantidade']);

                    $ajustes_saidas = $this->TblAjustesEstoque
                        ->find('all')
                        ->where(['produto_id' => $id, 'ajuste_tipo' => "S"])
                        ->select(['codigo_movimentacao' => 'ajuste_id',
                            'data_hora_movimentacao' => 'ajuste_datahora', 'quantidade_movimentada' => 'ajuste_quantidade']);


                    $saidas = new Collection($saidas);
                    $recebimentos = new Collection($recebimentos);
                    $ajustes_entradas = new Collection($ajustes_entradas);
                    $ajustes_saidas = new Collection($ajustes_saidas);

                    $movimentacoes = (($saidas->append($recebimentos))->append($ajustes_entradas))->append($ajustes_saidas);
                    $movimentacoes = $movimentacoes->sortBy('data_hora_movimentacao');

                    $produto = [
                        'codigo' => $id,
                        'descricao' => $produto->produto_descricao,
                        'movimentacoes' => $movimentacoes->toList()
                    ];
                    $resultJ = json_encode($produto);
                    $this->response->type('json');
                    $this->response->body($resultJ);
                    return $this->response;
                } else {
                    $resultJ = json_encode('404: Produto não encontrado.');
                    $this->response->type('json');
                    $this->response->body($resultJ);
                    return $this->response;
                }
            } else {
                $resultJ = json_encode('400: Código Inválido.');
                $this->response->type('json');
                $this->response->body($resultJ);
                return $this->response;
            }
        } else {
            $resultJ = json_encode('405: Requisição Inválida.');
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
    }
}