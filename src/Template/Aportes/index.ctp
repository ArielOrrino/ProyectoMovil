<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aporte[]|\Cake\Collection\CollectionInterface $aportes
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
     <li class="nav-item nav-link"><?= $this->Html->link(__('Nuevo Aporte'), ['action' => 'add']) ?></li>
    </div>
  </div>
</nav>
<!-- NVAR RESPONSIVE -->


              <?php $totalD = 0;
                 $totalU = 0;
                 $total = 0;
               foreach ($aportes as $aporte): 
                if ($aporte->proyectos_idproyectos == 0) 
                {
                     $totalD = $totalD + $aporte->monto;
                     $total = $total + $aporte->monto;
                }else{
                    $totalU = $totalU + $aporte->monto;
                     $total = $total + $aporte->monto;
                }
            endforeach; ?>
<div align="center">
    <h3><?= __('Aportes') ?></h3>
    <span>Total para proximo proyecto: $</span><?php echo $totalD ?>  <span>  Total utilizado: $</span><?php echo $totalU ?>
    <span>Total Donado historico: $</span><?php echo $total ?>
    <br>
<br>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('#Control') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Proyecto destino') ?></th>
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
                    
               <?php if ($this->request->getSession()->read('Auth.User.tipo_usuario')=='A') : ?> 
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $aporte->idaportes]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $aporte->idaportes], ['confirm' => __('Esta seguro que desea eliminar el aporte # {0}?', $aporte->idaportes)]) ?>
                <?php endif; ?>
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
