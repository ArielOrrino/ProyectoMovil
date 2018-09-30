<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proyecto[]|\Cake\Collection\CollectionInterface $proyectos
 */
?>
<br>
<br>
<!-- NVAR RESPONSIVE -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?= __('Modulos') ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     <?php if ($this->request->getSession()->read('Auth.User.tipo_usuario')=='A') : ?>     
     <li class="nav-item nav-link"><?= $this->Html->link(__('Nuevo Proyecto'), ['action' => 'add']) ?></li>
     <?php endif; ?>
     <li class="nav-item nav-link"><?= $this->Html->link(__('Votar Proyecto'), ['action' => 'votos']) ?></li>
    </div>
  </div>
</nav>
<!-- NVAR RESPONSIVE -->

<br>
    <center><h3><?= __('Proyectos') ?></h3></center>
    <div class="table-responsive-sm">
    <table class="table table-sm table-bordered" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nombre_proyecto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto_necesario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_creacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_finalizado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_votos') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proyectos as $proyecto): ?>
            <tr>
                <td><?= h($proyecto->nombre_proyecto) ?></td>
                <td><?= $this->Number->format($proyecto->monto_necesario) ?></td>
                <td><?= h($proyecto->feScha_creacion) ?></td>
                <td><?= h($proyecto->fecha_finalizado) ?></td>
                <td><?= $this->Number->format($proyecto->cantidad_votos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $proyecto->idproyectos]) ?>
                <?php if ($this->request->getSession()->read('Auth.User.tipo_usuario')=='A') : ?> 
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $proyecto->idproyectos]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $proyecto->idproyectos], ['confirm' => __('Esta seguro que desea eliminar el proyecto # {0}?', $proyecto->idproyectos)]) ?>
                <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    </div>
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

 