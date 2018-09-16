<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aporte $aporte
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aportes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="aportes form large-9 medium-8 columns content">
    <?= $this->Form->create($aporte) ?>
    <fieldset>
        <legend><?= __('Add Aporte') ?></legend>
        <?php
            echo $this->Form->control('monto');
            echo $this->Form->control('fecha_aporte');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
