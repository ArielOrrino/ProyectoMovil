<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aporte $aporte
 */

  MercadoPago\SDK::setClientId("7261628270430202");
  MercadoPago\SDK::setClientSecret("l4QDNZqgIrBcKa4fg9ZYvLdsh9PYb9Bf");
?>

<?php
  # Create a preference object
  $preference = new MercadoPago\Preference();
  # Create an item object
  $item = new MercadoPago\Item();
  $item->id = "1234";
  $item->title = "Cooperativa Utn La Plata";
  $item->quantity = 1;
  $item->currency_id = "ARS";
  $item->unit_price = 100;
  # Create a payer object
  $payer = new MercadoPago\Payer();
  //$payer->email = "cary@yahoo.com";
  # Setting preference properties
  $preference->items = array($item);
  $preference->payer = $payer;
  # Save and posting preference
  $preference->save();

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
   <a href="<?php echo $preference->init_point; ?>">Pay</a>
</div>
