<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TblProduto $tblProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tbl Produto'), ['action' => 'edit', $tblProduto->produto_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tbl Produto'), ['action' => 'delete', $tblProduto->produto_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblProduto->produto_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tbl Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tbl Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tblProdutos view large-9 medium-8 columns content">
    <h3><?= h($tblProduto->produto_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Produto Descricao') ?></th>
            <td><?= h($tblProduto->produto_descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Produto Id') ?></th>
            <td><?= $this->Number->format($tblProduto->produto_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Produto Quantidade Estoque') ?></th>
            <td><?= $this->Number->format($tblProduto->produto_quantidade_estoque) ?></td>
        </tr>
    </table>
</div>
