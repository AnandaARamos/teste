<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TblProduto[]|\Cake\Collection\CollectionInterface $tblProdutos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tbl Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tblProdutos index large-9 medium-8 columns content">
    <h3><?= __('Tbl Produtos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('produto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('produto_descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('produto_quantidade_estoque') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tblProdutos as $tblProduto): ?>
            <tr>
                <td><?= $this->Number->format($tblProduto->produto_id) ?></td>
                <td><?= h($tblProduto->produto_descricao) ?></td>
                <td><?= $this->Number->format($tblProduto->produto_quantidade_estoque) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tblProduto->produto_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tblProduto->produto_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tblProduto->produto_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblProduto->produto_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
