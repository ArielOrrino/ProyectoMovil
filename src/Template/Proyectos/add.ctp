<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proyecto $proyecto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Proyectos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="proyectos form large-9 medium-8 columns content">
    <?= $this->Form->create($proyecto) ?>
    <fieldset>
        <legend><?= __('Add Proyecto') ?></legend>
        <?php
            echo $this->Form->control('nombre_proyecto');
            echo $this->Form->control('monto_necesario');
            echo $this->Form->control('fecha_creacion', ['empty' => true]);
            echo $this->Form->control('fecha_finalizado', ['empty' => true]);
            echo $this->Form->control('cantidad_votos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
