<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aporte[]|\Cake\Collection\CollectionInterface $aportes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Modulos') ?></li>
        <li><?= $this->Html->link(__('Nuevo Aporte'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aportes index large-9 medium-8 columns content">
    <h3><?= __('Aportes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idaportes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proyectos_idproyectos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_aporte') ?></th> 
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aportes as $aporte): ?>
            <tr>
                <td><?= $this->Number->format($aporte->idaportes) ?></td>
                <td><?= $this->Number->format($aporte->monto) ?></td>
                <td><?= $this->Number->format($aporte->proyectos_idproyectos) ?></td>
                <td><?= h($aporte->fecha_aporte) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $aporte->idaportes]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $aporte->idaportes]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $aporte->idaportes], ['confirm' => __('Esta seguro que desea eliminar el aporte # {0}?', $aporte->idaportes)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} en total')]) ?></p>
    </div>
</div>
