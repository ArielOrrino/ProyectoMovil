<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aporte $aporte
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Modulos') ?></li>
        <li><?= $this->Html->link(__('Lista de Aportes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="aportes form large-9 medium-8 columns content">
    <?= $this->Form->create($aporte) ?>
    <fieldset>
        <legend><?= __('Agregar Aporte') ?></legend>
        <?php
            date_default_timezone_set("America/Argentina/Buenos_Aires");
            $now = date('Y-m-d H:i:s',Time());
            echo $this->Form->control('monto', ['id' => 'monto']);
            $monto1 = (float)$this->Form->control('monto');
            echo $this->Form->control('proyectos_idproyectos');
            echo $this->Form->control('fecha_aporte', ['type' => 'hidden', 'value' => $now]);            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submitir')) ?>
<!--     <?php echo $this->Form->button('MercadoPago', ['type' => 'button', 'id' => 'mercado', 'onClick' => 'mp()']);?>-->
    <?php echo $this->Html->link(('MercadoPago'), ['action' => 'mp', $monto1],array('class' => 'button'));?>  

<!--     <input type="button" value="MercadoPago" onClick="javascipt:window.location.href='<?php echo $this->Html->url(array('action'=>'mp',$monto1)) ?>'" >
 -->
    <?= $this->Form->end() ?>
<!--    <a href="<?php echo $preference->init_point; ?>">Pay</a> -->
</div>
