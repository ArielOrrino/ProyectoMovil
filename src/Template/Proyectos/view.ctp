<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proyecto $proyecto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proyecto'), ['action' => 'edit', $proyecto->idproyectos]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proyecto'), ['action' => 'delete', $proyecto->idproyectos], ['confirm' => __('Are you sure you want to delete # {0}?', $proyecto->idproyectos)]) ?> </li>
        <li><?= $this->Html->link(__('List Proyectos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proyecto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proyectos view large-9 medium-8 columns content">
    <h3><?= h($proyecto->idproyectos) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Proyecto') ?></th>
            <td><?= h($proyecto->nombre_proyecto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idproyectos') ?></th>
            <td><?= $this->Number->format($proyecto->idproyectos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monto Necesario') ?></th>
            <td><?= $this->Number->format($proyecto->monto_necesario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Votos') ?></th>
            <td><?= $this->Number->format($proyecto->cantidad_votos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Creacion') ?></th>
            <td><?= h($proyecto->fecha_creacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Finalizado') ?></th>
            <td><?= h($proyecto->fecha_finalizado) ?></td>
        </tr>
    </table>
</div>
