<html>
    <head>
        <!-- Material Design Lite -->

        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.indigo-pink.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/mdl/material.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/mdl/styles.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo_principal.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo_login.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo_inventario.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo_agregar_usuario.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo_eliminar_usuario.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo_modificar_usuario.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo_agregar_suministro.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo_solicitud_suministro.css">
        <!-- Material Design icon font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <!-- Always shows a header, even in smaller screens. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header ">
            <header class="mdl-layout__header barra-header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <a href="<?= base_url() ?>index.php/principal">
                        <img src="<?php echo base_url(); ?>img/firma-ucr.png" class="firma_ucr">
                    </a>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link" href="<?= base_url() ?>index.php/principal">Inicio</a>
                        <a class="mdl-navigation__link" href="<?= base_url() ?>index.php/agregar_suministro">Ingresar Suministros</a>
                        <a class="mdl-navigation__link" href="<?= base_url() ?>index.php/Solicitud_Suministro">Solicitar Suministro</a>
                        <a class="mdl-navigation__link" href="<?= base_url() ?>index.php/inventario">Inventario</a>
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <header class="demo-drawer-header mdl-color--blue-grey-500">
                    <img src="images/user.jpg" class="demo-avatar">
                    <div class="demo-avatar-dropdown">
                        <span class="mdl-color-text--white">hello@example.com</span>
                        <div class="mdl-layout-spacer"></div>
                        <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">arrow_drop_down</i>
                            <span class="visuallyhidden">Accounts</span>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                            <li class="mdl-menu__item">hello@example.com</li>
                            <a style="text-decoration: none;" href="<?= base_url() ?>" ><li  class="mdl-menu__item">Cerrar Sesión</li></a>
                            <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
                        </ul>
                    </div>
                </header>
                <span class="mdl-layout-title">Menú</span>
                <nav class="mdl-navigation">
                    <ul> 
                        <span class="sub-menu">Administrar Suministros</span>
                        <li class="lista-unstyle">
                            <a class="mdl-navigation__link" style="padding: 10px 20px;" href="<?= base_url() ?>index.php/agregar_suministro">Ingresar Suministros</a>
                        </li>
                        <li class="lista-unstyle">
                            <a class="mdl-navigation__link" style="padding: 10px 20px;" href="">Modificar Suministros</a>
                        </li>
                        <li class="lista-unstyle">
                            <a class="mdl-navigation__link" style="padding: 10px 20px;" href="">Eliminar Suministros</a>
                        </li>
                        <li class="lista-unstyle">
                            <a class="mdl-navigation__link" style="padding: 10px 20px;" href="">Consultar Suministros</a>
                        </li>
                    </ul>
                    <ul> 
                        <span class="sub-menu">Solicitud de Suministros</span>
                        <li class="lista-unstyle">
                            <a class="mdl-navigation__link" style="padding: 10px 20px;" href="<?= base_url() ?>index.php/Solicitud_Suministro">Solicitar Suministros</a>
                        </li>
                        <li class="lista-unstyle">
                            <a class="mdl-navigation__link" style="padding: 10px 20px;" href="">Consultar Solicitudes</a>
                        </li>
                    </ul>


                    <a class="mdl-navigation__link sub-menu" style="color: #F9EA64;" href="<?= base_url() ?>index.php/inventario">Inventario </a>

                    <ul> 
                        <span class="sub-menu">Administrar Usuarios</span>
                        <li class="lista-unstyle">
                            <a class="mdl-navigation__link" style="padding: 10px 20px;" href="<?= base_url() ?>index.php/AgregarUsuario">Nuevo Usuario</a>
                        </li>
                        <li class="lista-unstyle">
                            <a class="mdl-navigation__link" style="padding: 10px 20px;" href="<?= base_url() ?>index.php/Modificar_usuario">Modificar Usuario</a>
                        </li>
                        <li class="lista-unstyle">
                            <a class="mdl-navigation__link" style="padding: 10px 20px;" href="<?= base_url() ?>index.php/Eliminar_usuario">Eliminar Usuario</a>
                        </li>
                        <li class="lista-unstyle">
                            <a class="mdl-navigation__link" style="padding: 10px 20px;" href="">Consultar Usuario</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">