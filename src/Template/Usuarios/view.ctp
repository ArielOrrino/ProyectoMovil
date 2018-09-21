<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Modulos') ?></li>
        <li><?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $usuario->id_usuarios]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Usuario'), ['action' => 'delete', $usuario->id_usuarios], ['confirm' => __('Esta seguro que desea eliminar el usuario # {0}?', $usuario->id_usuarios)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id_usuarios) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($usuario->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><input value= "<?= h($usuario->password) ?>" type ="password" id="myInput" maxlength="8" size="8" readonly>
            <input type="checkbox" onclick="myFunction()"></td>
                        <script> 
                            function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                   x.type = "text";
                                } else {
                                  x.type = "password";
                                }
                             }
                        </script> 
        </tr>
        <tr>
            <th scope="row"><?= __('Id Usuarios') ?></th>
            <td><?= $this->Number->format($usuario->id_usuarios) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Create Time') ?></th>
            <td><?= h($usuario->create_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Login') ?></th>
            <td><?= h($usuario->last_login) ?></td>
        </tr>
    </table>
</div>
