<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentacion[]|\Cake\Collection\CollectionInterface $documentacion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Documentacion'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="documentacion index large-9 medium-8 columns content">
    <h3><?= __('Documentacion') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('iddocumentacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idproyectos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto_factura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_subida') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($documentacion as $documentacion): ?>
            <tr>
                <td><?= $this->Number->format($documentacion->iddocumentacion) ?></td>
                <td><?= $this->Number->format($documentacion->idproyectos) ?></td>
                <td><?= $this->Number->format($documentacion->monto_factura) ?></td>
                <td><?= h($documentacion->fecha_subida) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $documentacion->iddocumentacion]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $documentacion->iddocumentacion]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $documentacion->iddocumentacion], ['confirm' => __('Are you sure you want to delete # {0}?', $documentacion->iddocumentacion)]) ?>
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
