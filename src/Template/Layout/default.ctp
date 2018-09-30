<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Cooperativa alumnos UTN';?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
     <?= $this->Html->meta('icon') ?> 
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->script('funciones.js') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?> 
    <?= $this->fetch('script') ?>
    <!-- BOOTSTRAP -->
    <?= $this->Html->css('bootstrap.css') ?>   
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('bootstrap.bundle.js') ?>  
    <!-- BOOTSTRAP -->
</head>
<body>

 <!-- NVAR PRINCIPAL DEL SITIO -->

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
 <div class="container">
 <a class="navbar-brand js-scroll-trigger" href="#"><?= $this->fetch('title') ?></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../">Inicio</a></li>
     <?php if ($this->request->getSession()->read('Auth.User.tipo_usuario')=='A') : ?> 
     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../usuarios">Usuarios</a></li><?php endif; ?>
     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../aportes">Aportes</a></li>
     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../proyectos">Proyectos</a></li>
     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../documentacion">Documentacion</a></li>
     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../buscador">Buscador</a></li>  
     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../contacto">Contacto</a></li>      
     <?php if ($this->request->getSession()->read('Auth.User.id_usuarios')=='') : ?> 
     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../Usuarios/Login">Login</a></li>  
     <?php else : ?>
     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../Usuarios/Logout" class="logoutR">Usuario: <?php echo $this->request->getSession()->read('Auth.User.usuario')?>(Logout)</a></li>              
     <?php endif; ?>       
     </ul>
     </div>
    </div>
</nav>

<!-- TERMINA EL NVAR DEL SITIO -->

<br>
<br>
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
</div>
</div>

    
 <?= $this->fetch('jquery.js'); ?> <!-- Se invoca al Script --> 
 <?= $this->fetch('bootstrap.js'); ?> <!-- Se invoca al Script --> 
 
 <footer>
 </footer>
</body>
</html>
