<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios index large-9 medium-8 columns content">
    <h3><?= __('Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_usuarios') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('create_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_login') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->id_usuarios) ?></td>
                <td><?= h($usuario->usuario) ?></td>
                <td><?= h($usuario->email) ?></td>
                <td><?= h($usuario->password) ?></td>
                <td><?= h($usuario->create_time) ?></td>
                <td><?= h($usuario->last_login) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id_usuarios]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id_usuarios]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id_usuarios], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id_usuarios)]) ?>
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
