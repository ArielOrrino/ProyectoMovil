<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aporte $aporte
 */
   require_once ('mercadopago.php');
    
    $mp = new MP ("7261628270430202", "l4QDNZqgIrBcKa4fg9ZYvLdsh9PYb9Bf");

    $preference_data = array(
      "items" => array(
            array(
                "title" => "Donaciones",
                "quantity" => 1,
                "currency_id" => "ARS", 
                "unit_price" => 10.00
            )
        )
    );
    $preference = $mp->create_preference($preference_data);
    
    print_r ($preference);
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
            echo $this->Form->control('monto');
            echo $this->Form->control('proyectos_idproyectos');
            echo $this->Form->control('fecha_aporte', ['type' => 'hidden', 'value' => $now]);            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submitir')) ?>
    <?= $this->Form->end() ?>
    <a href="<?php echo $preference['response']['add']; ?>">Pay</a>
    <script type="text/javascript" src="https://www.mercadopago.com/org-img/jsapi/mptools/buttons/render.js"></script>
</div>
