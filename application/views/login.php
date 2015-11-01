<!DOCTYPE html>
<html>
    <head>
        <title>Inventario UCR</title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/mdl/material.css" >
        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/estilo_login.css" >
        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/estilo_principal.css" >
    </head>
    <div class="layout-transparent mdl-layout mdl-js-layout">
        <header class="mdl-layout__header mdl-layout__header--transparent">
            <div class="mdl-layout__header-row" id="head">
                <img src="<?php echo base_url();?>img/firma-ucr.png" class="firma_ucr" style="margin-top: -2px;">
            </div>
        </header>
        <div class="mdl-layout__header-row" id="head2">
        </div>
        <main class="mdl-layout__content">
        </main>
    </div>
    <body>
        <div id="deco"><img src="<?php echo base_url();?>img/deco.png" id="deco-img"></div>
        <div id="blue">
            <div id="panel">
            </div>
        </div>
        <div id="formulario">
            <form action="#">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="text" id="sample3" />
                    <label class="mdl-textfield__label" for="sample3">Usuario...</label>
                </div>
            </form>
            <!-- Numeric Textfield with Floating Label -->
            <form action="#">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4" />
                    <label class="mdl-textfield__label" for="sample4">Contraseña...</label>
                    <span class="mdl-textfield__error">Input is not a number!</span>
                </div>
            </form>

        </div>
        <script src="<?php echo base_url();?>css/mdl/material.js"></script>
    </body>
</html>
