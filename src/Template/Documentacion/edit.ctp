<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentacion $documentacion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $documentacion->iddocumentacion],
                ['confirm' => __('Are you sure you want to delete # {0}?', $documentacion->iddocumentacion)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Documentacion'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="documentacion form large-9 medium-8 columns content">
    <?= $this->Form->create($documentacion) ?>
    <fieldset>
        <legend><?= __('Edit Documentacion') ?></legend>
        <?php
            echo $this->Form->control('monto_factura');
            echo $this->Form->control('fecha_subida', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
