<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TblProduto $tblProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tbl Produtos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tblProdutos form large-9 medium-8 columns content">
    <?= $this->Form->create($tblProduto) ?>
    <fieldset>
        <legend><?= __('Add Tbl Produto') ?></legend>
        <?php
            echo $this->Form->control('produto_descricao');
            echo $this->Form->control('produto_quantidade_estoque');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
