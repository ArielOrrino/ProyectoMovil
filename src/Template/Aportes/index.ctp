<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aporte[]|\Cake\Collection\CollectionInterface $aportes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aporte'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aportes index large-9 medium-8 columns content">
    <h3><?= __('Aportes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idaportes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_aporte') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aportes as $aporte): ?>
            <tr>
                <td><?= $this->Number->format($aporte->idaportes) ?></td>
                <td><?= $this->Number->format($aporte->monto) ?></td>
                <td><?= h($aporte->fecha_aporte) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aporte->idaportes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aporte->idaportes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aporte->idaportes], ['confirm' => __('Are you sure you want to delete # {0}?', $aporte->idaportes)]) ?>
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
