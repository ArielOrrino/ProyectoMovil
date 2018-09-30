<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'Cooperativa alumnos UTN';?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="generator" content="Webnode 2">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="keywords" content="">
    <meta property="og:title" content="Cooperativa Alumnos Utn">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Cooperativa Alumnos Utn">
    <script type="text/javascript" src="https://d1di2lzuh97fh2.cloudfront.net/files/3f/3fw/3fwae8.js?ph=a0eca4f8da"></script>
    
    <title>Cooperativa alumnos UTN</title>
    <link href="https://d1di2lzuh97fh2.cloudfront.net/files/3r/3rx/3rxffv.css?ph=a0eca4f8da" rel="stylesheet">
     <?= $this->Html->meta('icon') ?> 

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->Html->script('funciones.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
    <body class="layout-03 wn-hp desktop">
    <div class="wnd-page c-orange">
        <div id="wrapper">
            <header id="header">
                <div class="section-wrapper cf">
                    <div class="section-wrapper-content cf">
                        <div class="section header fullscreen-all header-03 home s-media wnd-background-image">
                            <div class="section-bg">
                                <div class="section-bg-layer wnd-background-image  bgatt-scroll bgpos-center-center" style="background-image: url(&quot;https://cooperativa19.webnode.com/_files/200000001-5b0935c01e/FRLP%206.JPG?t=1&quot;);">
                                </div>
                                <div class="header-wrapper header-fixed wnd-fixed header-bg">
                                    <div class="nav-line section-inner">
                                       <div class="logo logo-default josefix wnd-logo-with-text wnd-iar-1-1" id="wnd_LogoBlock_589000">
                                             <div class="logo-content">        
                                               <div class="logo-image">
                                                 <div class="logo-image-cell">
                                       <img src="https://cooperativa19.webnode.com/_files/200000000-a34d6a441c/200/5fgI4pqs_400x400.jpg">
                                                 </div>
                                                </div>            
                                                 <div class="logo-text">
                    <span class="logo-text-cell"><b>Cooperativa de alumnos Utn</b>&nbsp;Facultad Regional La plata</span>
                                                 </div>        
                                             </div>
                                        </div>
                                        <nav id="menu" role="navigation">
                                            <div>
                                                <a href="#" class="close-menu" rel="nofollow">
                                                    <span>Close Menu</span>
                                                </a>
                                                <ul class="level-1">
                                                    <li class="wnd-active wnd-homepage">
                                                        <a href="/">
                                                            <span>Inicio</span>
                                                        </a>            
                                                    </li>
                                                    <li>
                                                        <?php if ($this->request->getSession()->read('Auth.User.tipo_usuario')=='A') : ?> 
                                                        <a href="../../usuarios">
                                                            <span>Usuarios</span>
                                                        </a>        
                                                        <?php endif; ?>    
                                                    </li>
                                                    <li>
                                                        <a href="../../proyectos">
                                                            <span>Proyectos</span>
                                                        </a>            
                                                    </li>
                                                    <li>
                                                        <a href="../../documentacion/">
                                                            <span>Documentacion</span>
                                                        </a>            
                                                    </li>
                                                    <li>
                                                        <a href="../../aportes">
                                                            <span>Aportes</span>
                                                        </a>            
                                                    </li>
                                                    <li>
                                                        <a href="../../buscador">
                                                            <span>Buscador</span>
                                                        </a>            
                                                    </li>
                                                    <?php 
                                                    if (($this->request->getSession()->read('Auth.User.id_usuarios'))=='') : ?> 
                                                       <li>
                                                        <a href="../Usuarios/Login">
                                                            <span>Login</span>
                                                        </a>            
                                                    </li>  
                                                    <?php else : ?>
                                                     <li>
                                                        <a href="../Usuarios/Logout">
                                                            <span>Logout</span>
                                                        </a>            
                                                    </li>                                                
                                                    <?php endif; ?>                                                   
                                                    <li>
                                                        <a href="/contacto/">
                                                            <span>Contacto</span>
                                                        </a>            
                                                    </li>                                                                
                                                </ul>                                               
                                            </div>
                                        </nav>  
                                        <div id="menu-mobile" class="">
                                             <a href="#" id="menu-submit"><span></span>Menú</a>
                                         </div>                                    
                                    </div>
                                </div>
                                <div class="section-inner section-claim">
                                    <div class="claim-content cf">
                                        <div class="header-claim cf">
                                            <h1>
                                                <div id="titulo" class="auto-font-size cf">
                                                    <span class="styled-inline-text claim-default allura">
                                                         <span>Cooperativa de Alumnos</span>
                                                    </span>
                                                </div>
                                                <div class="auto-font-size cf">
                                                    <span class="styled-inline-text claim-default josefix">
                                                        <span>
                                                            <b>UTN</b>&nbsp;Facultad Regional La Plata
                                                        </span>
                                                    </span>
                                                </div>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
