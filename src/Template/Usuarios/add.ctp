<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Add Usuario') ?></legend>
        <?php
       date_default_timezone_set("America/Argentina/Buenos_Aires");
        $now = date('Y-m-d H:i:s',Time());

            echo $this->Form->control('usuario');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('create_time', ['type' => 'hidden', 'value' => $now]);
            echo $this->Form->control('last_login', ['type' => 'hidden', 'value' => $now]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
